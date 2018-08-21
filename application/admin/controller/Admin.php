<?php

namespace app\admin\controller;

class Admin extends Common
{
    public function index()
    {
        return view();
    }

    public function lst()
    {
        $data = db('admin')->field('id,uname,status,last_time')->select();
        $this->assign('data', $data);
        return view();
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $data['password'] = md5($data['password']);
            $data['create_time'] = time();
            $resu = db('admin')->insertGetId($data);
            $groupAcess = db('authGroupAccess')->insert(['uid' => $resu, 'group_id' => $data['group_id']]);
            $resu ? $this->success('添加成功', 'Admin/lst', 2) : $this->error('添加失败');
        }
        $authGroup = db('authGroup')->select();
        $this->assign('authArr', $authGroup);
        return view();
    }

    public function edit($id)
    {
        if (request()->isPost()) {
            $data = input('post.');
            $r = db('admin')->update($data);
            if ($r !== false) {
                $this->success('修改成功', 'Admin/lst', 2);
            } else {
                $this->error('修改失败');
            }
            return;
        }
        $res = db('admin')->where('id', $id)->find();
        $this->assign('data', $res);
        return view();
    }

    public function dele($id)
    {
        $reu = db('admin')->where('id', $id)->delete();
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
            $resu = db('admin')->where('id', $id)->update(['status' => '1']);
            if ($resu) {
                return json(['code' => 1, 'msg' => '修改成功']);
            } else {
                return json(['code' => 0, 'msg' => '修改失败']);
            }
        } else {
            $resu = db('admin')->where('id', $id)->update(['status' => '0']);
            if ($resu) {
                return json(['code' => 1, 'msg' => '修改成功']);
            } else {
                return json(['code' => 0, 'msg' => '修改失败']);
            }
        }
    }

    public function logout()
    {
        session(null);
        $this->success('退出成功', 'Login/index');
    }
}
