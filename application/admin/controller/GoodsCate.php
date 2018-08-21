<?php

namespace app\admin\controller;

class GoodsCate extends Common
{
    public function lst()
    {
        $goodstree = model('goodsCate')->goodstree();
        $this->assign([
            'data' => $goodstree['data'],
            'page' => $goodstree['page'],
        ]);
        return $this->fetch();
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $res = db('goodsCate')->insert($data);
            $res ? $this->success('添加分类成功', 'goodsCate/lst', 1) : $this->error('添加分类失败');
            return;
        }
        $goodstree = model('goodsCate')->goodstree();
        $this->assign([
            'data' => $goodstree,
        ]);
        return view();
    }

    public function dele()
    {

    }
}
