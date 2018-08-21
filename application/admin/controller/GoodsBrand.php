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
        return $this->fetch('',[
            'brandsArr'=>$data
        ]);
    }
    public function add()
    {
        if(request()->isPost())
        {
            $data = input('post.');
            $res = $this->obj->save($data);
            $res ? $this->success('添加成功','',100):$this->error('添加失败');
            return;
        }
        return view();
    }
    public function upImg()
    {
        $deleImgUrl = input('imgurl');
        $file = request()->file('image');
        $a = model('UploadImg')->uploadImg($deleImgUrl,$file);
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
