<?php

namespace app\index\controller;

class Article extends Common
{
    public function index($aid)
    {
        $arts = db('article')->find($aid);
        $cates = db('cate')->find($arts['cate_id']);
        $artTmp = $cates['article_tmp'];
        $tempSrc = $this->confTemp . '/' . $artTmp;
        $this->assign([
            'art' => $arts,
        ]);
        return $this->fetch($tempSrc);
    }
}
