<?php

namespace app\index\controller;

class Page extends Common
{
    public function index($cid)
    {
        $cates = db('cate')->find($cid);
        $cateTmp = $cates['index_tmp'];
        $tempSrc = $this->confTemp . '/' . $cateTmp;
        return $this->fetch($tempSrc);
    }
}
