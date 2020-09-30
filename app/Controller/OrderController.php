<?php


namespace App\Controller;

use App\Dao\StoreShopsDao;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Annotation\Middleware;
use Hyperf\Utils\Context;
use App\Middleware\HeadMiddleware;

/**
 * @AutoController()
 * @Middleware(HeadMiddleware::class)
 */
class OrderController extends BaseController
{

    public function __get($name)
    {
        if ($name == 'store_id' || $name == 'authorization' || $name == 'client_type') {
            return Context::get($name);
        }
        return Context::get(__CLASS__ . '_' . $name);
    }

    public function __set($name, $value)
    {
        Context::get(__CLASS__ . '_' . $name, $value);
    }

    public function createOrder()
    {
        $uid = $this->request->input('uid');// 用户id
        $shop_id = $this->request->input('shop_id');// 门店id
        $openid = $this->request->input('openid', '');// openid
        $goodsList = json_decode($this->request->input('goodsList'), true);// [{"id":1,"num":2,"amount":10,"prom_id":1,"single_price":1}]single_price指微信单品券
        $address_id = $this->request->input('address_id', 0);// 地址id
        $order_type = $this->request->input('order_type');// 订单类型  1：配送；2：提货,3:扫码购
        $expect_send_time = $this->request->input('send_time', 0);// 配送时间
        $expect_send_day = $this->request->input('send_day', 0);//配送日期 0today 1tomorrow
        $note = $this->request->input('note', '');// 备注信息
        $user_card_codes = $this->request->input('wx_user_card_codes', '');// 微信卡券
        $discount = $this->request->input('discount', 0);// 微信优惠满减券金额
        $shipping_price = $this->request->input('shipping_price', 0);// 运费
        $supply_shipping_price = $this->request->input('supply_shipping_price', 0);// 优惠运费
        $orderNo = $this->request->input('order_no');// 订单号
        $deliveryNo = $this->request->input('delivery_no', 0);// 配送订单号
        $deliveryType = $this->request->input('delivery_type', 0);// 配送类型
        $deduct = $this->request->input('deduct', 0);// 颖宝抵扣
        $weight = $this->request->input('weight', 0);// 商品重量
        $plastic_price = $this->request->input('plastic_price', 0);// 购物袋金额
        $assemble_goods_id = $this->request->input('assemble_goods_id');// 拼团活动id
        $assemble_type = $this->request->input('assemble_type');// 拼团类型  1：拼团  2：参团
        $leader_assemble_id = $this->request->input('leader_assemble_id');// 团id
        $bee_id = $this->request->input('bee_id', 0);// 小蜜蜂id
        $full_reduction = !empty($this->request->input('full_reduction')) ? json_decode($this->request->input('full_reduction'), true) : [];// 满减金额（[{"prom_id":1,"reduce_money":5,"all_money":15}]）
        $presell_id = $this->request->input('presell_id', 0);// 预售活动id
        $pre_order_id = $this->request->input('pre_order_id', 0);// 预售订单id
        $marketing_id = $this->request->input('marketing_id', 0);
        $marketing_module = $this->request->input('marketing_module');
        $from_user_id = $this->request->input('from_user_id');
        $user_bargain_list = $this->request->input('user_bargain_list');

        $now = time();
        $shop = StoreShopsDao::getShopByPk($shop_id);
        if (empty($expect_send_time) && $expect_send_day == 2) {//todo 临时做处理，前端修改代码后直接删除
            $expect_send_time = $shop['send_times'];
        }

        $tmp = explode('-', $shop['business_hours']);
        $beginTs = strtotime(date("Y-m-d") . ' ' . $tmp[0]);
        $endTs = strtotime(date("Y-m-d") . ' ' . $tmp[1]);

        if ($shop['pay_module'] == 1) {
            if ($now < $beginTs || $now > $endTs) {
                return $this->response->fail(10000, '亲爱的小主店家已打烊咯,营业时间' . $shop['business_hours']);
            }
        } elseif ($shop['pay_module'] == 2) {
            return $this->response->fail(10000, '亲爱的小主店家已打烊咯,请择日下单');
        }

        if ($deliveryType == 0) {
            return $this->response->fail(10001, '该门店目前不支持此配送方式，请重新选择配送方式');
        }

        if (!empty($shop['weight_limit']) && $shop['weight_limit'] < $weight && $order_type == 1) {
            return $this->response->fail(40001, '亲爱的小主，每单重量最大' . $shop['weight_limit'] . 'g，还请重新选择商品下单哦');
        }

        if ($assemble_goods_id) {// 拼团订单送达配送日期
            $expect_send_day = $expect_send_time > date("H") ? 0 : 1;
        }

        $user_bargain_ids = json_decode($user_bargain_list, true) ?: [];

        if (!is_numeric($uid) || !$uid) {
            return $this->response->fail(40001, '请传入正确商品参数no1');
        }

        if (!is_array($goodsList) || count($goodsList) <= 0) {
            return $this->response->fail(40001, '请选择商品');
        }

        if (!is_numeric($shop_id) || !$shop_id) {
            return $this->response->fail(40001, '请传入正确商品参数no2');
        }

        if ($order_type == 1 && (!is_numeric($address_id) || !$address_id)) {
            return $this->response->fail(40001, '请传入正确商品参数no3');
        }

        if (!is_numeric($order_type) || !$order_type) {
            return $this->response->fail(40001, '请传入正确商品参数no4');
        }

        if ($order_type == 1 && (!is_numeric($expect_send_time) || !$expect_send_time)) {
            return $this->response->fail(40001, '请传入正确商品参数no5');
        }

        if ($order_type == 1 && !is_numeric($expect_send_day)) {
            return $this->response->fail(40001, '请传入正确商品参数no6');
        }

        if ($order_type == 1 && $deliveryType == 2 && !$orderNo) {
            return $this->response->fail(40001, '请传入正确商品参数no7');
        }

        if ($marketing_module != null && $marketing_id == 0) {
            return $this->response->fail(40001, '请传入正确商品参数no9');
        }

        if (!$orderNo) {
            $time = function () {
                $time = microtime(true);
                return explode('.', (string)$time)[1];
            };
            $orderNo = date('YmdHis') . $time();
        }

        $self_take = $shop['self_take'];
        $deliveryType = !empty($deliveryType) ? $deliveryType : 3;
        if (!in_array($deliveryType, explode(',', $self_take))) {
            return $this->response->fail(40002, '当前不支持该配送方式，请重新选择！');
        }
        $user = Cache::get('createOrder_'.$uid.$shop_id);
        if ($user) {
            return $this->response->fail(40002, '网络繁忙');
        }
        Cache::set('createOrder_'.$uid.$shop_id, 1, 5);

    }


}