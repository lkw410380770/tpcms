<?php
namespace app\index\controller;

class Index extends Common
{

    public function demo($name)
    {
        echo '哈哈哈哈' . $name . 'asfasdf';
    }

    public function demo2()
    {
        echo '我是demo3';
    }

    public function index()
    {
        $tempSrc = $this->confTemp . '/index.html';
        return $this->fetch($tempSrc);
    }
}
