<?php

namespace app\admin\controller;

class AuthGroup extends Common
{
    public function index()
    {
        return view();
    }

    public function lst()
    {
        $data = db('authGroup')->select();
        $this->assign('data', $data);
        return view();
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $resu = db('authGroup')->insert($data);
            $resu ? $this->success('添加成功', 'AuthGroup/lst', 2) : $this->error('添加失败');
        }
        return view();
    }

    public function power()
    {
        $authRules = db('authRule')->where(['pid' => 0])->select();
        foreach ($authRules as $k => $v) {
            $authRules[$k]['children'] = db('authRule')->where('pid', $v['id'])->select();
            foreach ($authRules[$k]['children'] as $k1 => $v1) {
                $authRules[$k]['children'][$k1]['children'] = db('authRule')->where('pid', $v['id'])->select();
            }
        }
        $id = input('id');
        $authGroups = db('authGroup')->where('id', $id)->find();
        if (request()->isPost()) {
            $data = input('post.');
            $data['rules'] = implode(',', $data['rules']);
            $resu = db('authGroup')->update($data);
            $resu ? $this->success('分配权限成功', 'AuthGroup/lst', 2) : $this->error('分配权限失败');
        }
        $rules = explode(',', $authGroups['rules']);
        $this->assign('authGroups', $authGroups);
        $this->assign('ruleData', $authRules);
        $this->assign('rules', $rules);
        return view();

    }

    public function edit()
    {
        return view();
    }

    public function dele($id)
    {
        $reu = db('authGroup')->where('id', $id)->delete();
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
            $resu = db('authGroup')->where('id', $id)->update(['status' => '1']);
            if ($resu) {
                return json(['code' => 1, 'msg' => '修改成功']);
            } else {
                return json(['code' => 0, 'msg' => '修改失败']);
            }
        } else {
            $resu = db('authGroup')->where('id', $id)->update(['status' => '0']);
            if ($resu) {
                return json(['code' => 1, 'msg' => '修改成功']);
            } else {
                return json(['code' => 0, 'msg' => '修改失败']);
            }
        }
    }
}
