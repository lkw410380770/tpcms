<?php

namespace app\admin\controller;

class Cate extends Common
{
    public function index()
    {
        $_cateRes = db('cate')->alias('a')->field('a.*,b.model_name')->join('tpcms_model b', 'a.model_id = b.id')->order('sort desc')->select();
        $data = model('cate')->catetree($_cateRes);
        $this->assign('arr', $data);
        return view();
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $in = db('cate')->insert($data);
            $in ? $this->success('添加栏目成功', 'Cate/index') : $this->error('添加栏目失败');
            return;
        }
        $_cateRes = db('cate')->alias('a')->field('a.*,b.model_name')->join('tpcms_model b', 'a.model_id = b.id')->order('sort desc')->select();
        $modelArr = db('model')->where('status', 1)->field('id,model_name')->select();
        $cateid = input('cateid');
        $cateArr = model('cate')->catetree($_cateRes);
        $this->assign([
            'modelArr' => $modelArr,
            'cateArr' => $cateArr,
            'cateid' => $cateid,
        ]);
        return view();
    }

    public function edit($id)
    {
        if (request()->isPost()) {
            $data = input('post.');
            $up = db('cate')->update($data);
            $up ? $this->success('更新成功', 'Cate/index') : $this->error('更新失败');
            return;
        }
        $modelArr = db('model')->field('id,model_name')->select();
        $arr = db('cate')->where('id', $id)->find();
        $_cateRes = db('cate')->alias('a')->field('a.*,b.model_name')->join('tpcms_model b', 'a.model_id = b.id')->order('sort desc')->select();
        $cateArr = model('cate')->catetree($_cateRes);
        $this->assign('arr', $arr);
        $this->assign('cateArr', $cateArr);
        $this->assign('modelArr', $modelArr);
        return view();
    }

    public function ajaxUploadImg()
    {
        $uploadDir = db('conf')->field('value')->where('ename', 'uploadFile')->find();
        $file = request()->file('image');
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->move(ROOT_PATH . 'public' . DS . $uploadDir['value']);
        if ($info) {
            // 成功上传后 获取上传信
            $dirfile = $info->getSaveName();
            return json(['path' => $uploadDir['value'] . '/' . $dirfile, 'code' => 1]);
        } else {
            // 上传失败获取错误信息
            return json(['error' => $file->getError(), 'code' => 0]);
        }
    }

    public function dele($id)
    {
        $reu = db('cate')->where('id', $id)->delete();
        if ($reu) {
            return json(['status' => 1, 'msg' => '删除成功']);
        } else {
            return json(['status' => 2, 'msg' => '删除失败']);
        }
    }

    public function ajaxUpdateStatus()
    {
        $status = input('post.status');
        $id = input('post.id');
        if ($status) {
            $resu = db('cate')->where('id', $id)->update(['status' => '1']);
            if ($resu) {
                return json(['code' => 1, 'msg' => '修改成功']);
            } else {
                return json(['code' => 0, 'msg' => '修改失败']);
            }
        } else {
            $resu = db('cate')->where('id', $id)->update(['status' => '0']);
            if ($resu) {
                return json(['code' => 1, 'msg' => '修改成功']);
            } else {
                return json(['code' => 0, 'msg' => '修改失败']);
            }
        }
    }
}
