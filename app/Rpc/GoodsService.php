<?php

namespace App\Rpc;
use Hyperf\RpcServer\Annotation\RpcService;
/**
 * Class GoodsService
 * @RpcService(name="alimini_providor", protocol="jsonrpc-http", server="GoodsService",publishTo="consul")
 */

class GoodsService implements GoodsServiceInterface {
	public function add(int $a, $b):int {

		return $a+$b;
	}
}
