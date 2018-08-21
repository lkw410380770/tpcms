<?php

namespace app\index\controller;

class Cate extends Common
{
    public function index($cid)
    {
        $cates = db('cate')->find($cid);
        $cateTmp = $cates['list_tmp'];
        $tempSrc = $this->confTemp . '/' . $cateTmp;

        //调用文章
        $artRes = db('article')->where(['cate_id' => $cid])->select();
        $this->assign([
            'artRes' => $artRes,
        ]);
        return $this->fetch($tempSrc);
    }
}
