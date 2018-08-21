<?php
/**
 * Created by PhpStorm.
 * User: lkw
 * Date: 2018/8/20
 * Time: 21:23
 */
namespace app\common\model;
use think\Model;
class UploadImg extends Model
{
    public function uploadImg($imgDir,$file)
    {
        $imgPath = ROOT_PATH . '/public/' . $imgDir;
        if (!empty($deleImgUrl)) {
            $un = unlink($imgPath);
        }
        $uploadDir =db('conf')->field('value')->getByEname('uploadFile');
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