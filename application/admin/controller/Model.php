<?php

namespace app\admin\controller;

use think\Db;

class Model extends Common
{

    public function index()
    {
        $data = db('model')->select();
        $this->assign('data', $data);
        return view();
    }

    public function add()
    {

        if (request()->isPost()) {
            $data = input('post.');
            $validate = validate('model');
            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }
            $resu = db('model')->insert($data);
            if ($resu) {
                $tabName = config('database.prefix') . $data['table_name'];
                $sql = "create table {$tabName} (aid int unsigned not null) engine=MYISAM default charset=utf8";
                $exc = Db::execute($sql);
                !$exc ? $this->success('添加成功', 'Model/index') : $this->error('添加失败');
            }
        }
        return view();
    }

    public function edit($id)
    {
        if (request()->isPost()) {
            $arr = input('post.');
            $validate = validate('model');
            if (!$validate->check($arr)) {
                $this->error($validate->getError());
            }
            $in = db('model')->update($arr);
            $in ? $this->success('修改成功', 'Model/index') : $this->error('修改失败');
        }
        $data = db('model')->where('id', $id)->find();
        $this->assign('data', $data);
        return view();
    }

    public function ajaxUpdateStatus()
    {
        $status = input('post.status');
        $id = input('post.id');
        if ($status) {
            $resu = db('model')->where('id', $id)->update(['status' => '1']);
            if ($resu) {
                return json(['code' => 1, 'msg' => '修改成功']);
            } else {
                return json(['code' => 0, 'msg' => '修改失败']);
            }
        } else {
            $resu = db('model')->where('id', $id)->update(['status' => '0']);
            if ($resu) {
                return json(['code' => 1, 'msg' => '修改成功']);
            } else {
                return json(['code' => 0, 'msg' => '修改失败']);
            }
        }
    }

    public function dele($id)
    {
        $reu = db('model')->where('id', $id)->delete();
        if ($reu) {
            return json(['status' => 1, 'msg' => '删除成功']);
        } else {
            return json(['status' => 2, 'msg' => '删除失败']);
        }
    }

}
