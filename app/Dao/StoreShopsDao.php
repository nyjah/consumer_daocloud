<?php


namespace App\Dao;


use App\Model\StoreShop;

class StoreShopsDao
{
    static function getShopByPk($shop_id): array
    {
        return StoreShop::findFromCache($shop_id)->toArray();
    }
}