<?php
namespace app\admin\controller;

use think\Image;

class Content extends Common
{
    public function index()
    {
        return view();
    }

    public function lst()
    {
        $cateid = input('id');
        $arRes = db('article')
            ->alias('a')
            ->field('a.*,b.cate_name')
            ->join('tpcms_cate b', 'a.cate_id = b.id', 'left')
            ->where('a.cate_id', $cateid)
            ->paginate(10);
        $this->assign([
            'cateid' => $cateid,
            'arr' => $arRes,
        ]);
        return view();
    }

    public function add()
    {
        $cateid = input('cateid');
        $modelId = db('cate')->where('id', $cateid)->column('model_id');
        $diyFields = db('modelFields')->where('mid', $modelId[0])->select();
        $cateArr = db('cate')->field('id,cate_name,pid')->select();
        $cateTree = model('cate')->catetree($cateArr);

        if (request()->isPost()) {
            $fieldsArr = db('article')->getTableFields();
            $data = input('post.');
            $inserRes = model('Content')->addContent($data, $fieldsArr, $modelId[0]);
            if ($inserRes) {
                $this->success('添加成功', url('Content/lst', ['id' => $cateid]));
            } else {
                $this->error('添加失败');
            }
            dump($resu);die();
        }
        $this->assign([
            'cateRes' => $cateTree,
            'diyFields' => $diyFields,
            'cateid' => $cateid,
            'modelId' => $modelId[0],
        ]);
        return view();
    }

    public function edit()
    {
        $id = input('id');
        $mid = input('mid');
        $cateid = input('cate_id');
        $diyFields = db('modelFields')->where('mid', $mid)->select();
        $cateArr = db('cate')->field('id,cate_name,pid')->select();
        $cateTree = model('cate')->catetree($cateArr);
        $data = model('Content')->getDataa($id);
        if (request()->isPost()) {
            $fieldsArr = db('article')->getTableFields();
            $arr = input('post.');
            $resu = model('Content')->updateContent($arr, $fieldsArr, $id, $mid);
            $resu ? $this->success('修改成功', url('Content/lst', ['id' => $cateid])) : $this->error('修改失败');
        }
        $this->assign([
            'data' => $data,
            'cateRes' => $cateTree,
            'diyFields' => $diyFields,
            'cateid' => $cateid,
            'modelId' => $mid,
        ]);
        return view();
    }

    public function dele($id)
    {
        $tableName = db('article')
            ->alias('a')
            ->field('b.table_name')
            ->join('tpcms_model b', 'a.model_id=b.id', 'left')
            ->where('a.id', $id)
            ->find();
        $reu = db('article')->where('id', $id)->delete();
        $attchId = db($tableName['table_name'])->where('aid', $id)->delete();
        if ($attchId) {
            return json(['status' => 1, 'msg' => '删除成功']);
        } else {
            return json(['status' => 2, 'msg' => '删除失败']);
        }
    }
    public function ajaxUploadImg()
    {
        $deleImgUrl = input('imgurl');
        $imgPath = ROOT_PATH . '/public/' . $deleImgUrl;
        if (!empty($deleImgUrl)) {
            $un = unlink($imgPath);
        }
        $uploadDir = db('conf')->field('value')->where('ename', 'uploadFile')->find();
        $file = request()->file('image');
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->move(ROOT_PATH . 'public' . DS . $uploadDir['value']);
        if ($info) {
            // 成功上传后 获取上传信
            $imgName = $info->getFilename();
            $dirfile = $info->getSaveName();
            $isWater = db('conf')->where('ename', 'img_switch')->column('value');
            if ($isWater[0] == '是') {
                $imgurl = ROOT_PATH . 'public' . DS . $uploadDir['value'] . '/' . $dirfile;
                $image = \think\Image::open($imgurl);
                $image->water(UPLOADSIMG . 'water.png')->save($imgurl);
            }
            return json(['path' => $uploadDir['value'] . '/' . $dirfile, 'code' => 1, 'msg' => '上传成功']);
        } else {
            // 上传失败获取错误信息
            return json(['error' => $file->getError(), 'code' => 0]);
        }
    }
}
