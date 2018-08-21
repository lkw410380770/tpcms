<?php

namespace app\admin\controller;
class GoodsBrand extends Common
{
    private $obj;

    public function _initialize()
    {
        parent::_initialize();
        $this->obj = model('GoodsBrand');
    }

    public function index()
    {
        return view();
    }

    public function lst()
    {
        $data = $this->obj->getBrands();
        return $this->fetch('', [
            'brandsArr' => $data
        ]);
    }

    public function add()
    {
        return view();
    }

    public function save()
    {
        if (request()->isPost()) {
            $arr = input('post.');
            $res = $this->obj->allowField(true)->save($arr);
            $res ? $this->success('操作成功') : $this->error('操作失败');
        }
    }

    public function edit($id)
    {
        $data = $this->obj->get($id);
        if (request()->isPost()) {
            $arr = input('post.');
            $res = $this->obj->allowField(true)->save($arr, ['id' => $id]);
            $res ? $this->success('操作成功') : $this->error('操作失败');
        }
        return $this->fetch('', [
            'data' => $data
        ]);
    }

    public function upImg()
    {
        $deleImgUrl = input('imgurl');
        $file = request()->file('image');
        $a = model('UploadImg')->uploadImg($deleImgUrl, $file);
        return $a;
    }

    public function dele($id)
    {
        $res = $this->obj->destroy(['id' => $id]);
        if ($res) {
            return json(['status' => 1, 'msg' => '删除成功']);
        } else {
            return json(['status' => 2, 'msg' => '删除失败']);
        }
    }
}
