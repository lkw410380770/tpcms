<?php

namespace app\index\controller;

use think\Controller;

class Common extends Controller
{
    public $confTemp;
    public function _initialize()
    {
        $tmpFloader = $this->getTemp();
        $this->confTemp = config('template.view_path') . $tmpFloader;
        $temp_src = config('view_replace_str.temp') . $tmpFloader;
        $cateRes = $this->getCate();
        $this->assign([
            'skin' => $temp_src,
            'cateRes' => $cateRes,
        ]);

    }
    public function getTemp()
    {
        $confTemp = db('conf')->field('value')->where(['ename' => 'template_style'])->find();
        return $confTemp['value'];
    }

    public function getCate()
    {
        $cateRes = db('cate')->where(['status' => 1])->select();
        $request = request();
        $url = $request->domain() . $request->baseFile() . '/' . $request->module();
        foreach ($cateRes as $key => $value) {
            if ($value['cate_attr'] == 1) {
                $cateRes[$key]['url'] = $url . '/Cate/index/cid/' . $value['id'];
            } else if ($value['cate_attr'] == 2) {
                $cateRes[$key]['url'] = $url . '/Page/index/cid/' . $value['id'];
            }
        }
        $data = $this->resort($cateRes);
        return $data;
    }
    public function resort($items, $pid = 0)
    {
        static $arr = [];
        static $arrIndex = [];
        foreach ($items as $key => $value) {
            $arrIndex[$value['id']] = $value;
        }

        foreach ($arrIndex as $item) {
            //判断是否有数组的索引==
            if (isset($arrIndex[$item['pid']])) { //查找数组里面是否有该分类  如 isset($items[0])  isset($items[1])
                $arrIndex[$item['pid']]['childs'][] = &$arrIndex[$item['id']]; //上面的内容变化,$tree里面的值就变化
            } else {
                $arr[] = &$arrIndex[$item['id']]; //把他的地址给了$tree
            }
        }
        return $arr;
    }
}
