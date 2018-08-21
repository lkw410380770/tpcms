<?php
/**
 * Created by PhpStorm.
 * User: lkw
 * Date: 2018/8/20
 * Time: 21:53
 */
namespace app\admin\model;
use think\Model;
class GoodsBrand extends Model
{
    public function getBrands()
    {
        $data = $this->paginate();
        return $data;
    }
}