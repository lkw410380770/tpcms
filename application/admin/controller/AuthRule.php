<?php

namespace app\admin\controller;

class AuthRule extends Common
{
    public function index()
    {
        return view();
    }

    public function lst()
    {
        $arr = db('authRule')->select();
        $data = model('authRule')->ruletree($arr);
        $this->assign('data', $data);
        return view();
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $resu = db('authRule')->insertGetId($data);
            $superRule = db('authGroup')->where('id', 1)->find();
            if ($resu) {
                if (!empty($superRule['rules'])) {
                    $superRule['rules'] = explode(',', $superRule['rules']);
                    if (!in_array($resu, $superRule['rules'])) {
                        array_push($superRule['rules'], $resu);
                        $superRule['rules'] = implode(',', $superRule['rules']);
                        $res = db('authGroup')->update($superRule);
                    }
                }
            }

            $resu ? $this->success('添加成功', 'AuthRule/lst', 2) : $this->error('添加失败');
        }
        $arr = db('authRule')->select();
        $tree = model('authRule')->ruletree($arr);
        $this->assign('data', $tree);
        return view();
    }

    public function edit()
    {
        return view();
    }

    public function dele($id)
    {
        $reu = db('authRule')->where('id', $id)->delete();
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
            $resu = db('authRule')->where('id', $id)->update(['status' => '1']);
            if ($resu) {
                return json(['code' => 1, 'msg' => '修改成功']);
            } else {
                return json(['code' => 0, 'msg' => '修改失败']);
            }
        } else {
            $resu = db('authRule')->where('id', $id)->update(['status' => '0']);
            if ($resu) {
                return json(['code' => 1, 'msg' => '修改成功']);
            } else {
                return json(['code' => 0, 'msg' => '修改失败']);
            }
        }
    }
}
