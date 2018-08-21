<?php

namespace app\admin\model;

use think\Model;

class GoodsCate extends Model
{
    public function goodstree()
    {

        $cateRes = db('goodsCate')->paginate(10);
        // dump($cateRes);die();
        // $ar['data'] = $this->resort($cateRes);
        $ar['page'] = $cateRes->render();
        $data = $cateRes->toArray();
        $arr = $this->resort($data['data']);
        $ar['data'] = $arr;
        return $ar;
    }

    public function resort($data, $pid = 0, $level = 0)
    {
        static $arr = [];
        foreach ($data as $k => $v) {
            if ($v['pid'] == $pid) {
                $flg = str_repeat('└―', $level);
                $v['name'] = $flg . $v['name'];
                $arr[] = $v;
                $this->resort($data, $v['id'], $level + 1);
            }

        }
        return $data;
    }

}
