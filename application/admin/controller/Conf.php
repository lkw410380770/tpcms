<?php
namespace app\admin\controller;


class Conf extends Common
{
    public function index()
    {
        return view();
    }

    public function conflst()
    {
    	$data = db('conf')->select();
    	$this->assign('confRes',$data);
    	if(request()->isPost()){
    		$arr = input('post.');
    		foreach ($arr as $key => $value) {
    			if(is_array($value)){
    				$value = implode(',', $value);
    			}
    			$isUpdate = db('conf')->where('ename',$key)->update(['value'=>$value]);
    		}
    		// 附件类型处理
    		$this->success('修改配置成功','conflst');
    		return;
    	}
        return view();
    }

    public function lst()
    {
    	$data = db('conf')->paginate(7);
        $this->assign('data',$data);
        return $this->fetch('lst');
    }

    public function add()
    {
    	if(request()->isPost()){
    		$data = input('post.');
    		$validate = validate('conf');
    		if(!$validate->scene('add')->check($data)){
    			$this->error($validate->getError());
    		}
	    	$in = db('conf')->insert($data);
	    	$in ? $this->success('添加成功','Conf/lst') : $this->error('添加失败');
    	}
        return view();
    }

    public function edit(){
    	$id = input('id');
    	$data = db('conf')->where('id',$id)->find();
    	$this->assign('data',$data);
    	if(request()->isPost()){
    		$data = input('post.');
    		$validate = validate('conf');
   			if(!$validate->scene('edit')->check($data)){
   				$this->error($validate->getError());
   			}
    		$resu = db('conf')->update($data);
    		$resu ? $this->success('更新成功','Conf/lst') : $this->error('更新失败');
    	}
        return $this->fetch('edit');
    }

    public function dele($id){
    	$reu = db('conf')->where('id',$id)->delete();
    	if($reu){
    		return json(['status'=>1,'msg'=>'删除成功']);
    	}else{
    		return json(['status'=>2,'msg'=>'删除失败']);
    	}
    }

    public function ajaxUploadImg(){
    	$uploadDir = db('conf')->field('value')->where('ename','uploadFile')->find();	
    	$file = request()->file('image');
    	// 移动到框架应用根目录/public/uploads/ 目录下
    	$info = $file->move(ROOT_PATH . 'public' . DS . $uploadDir['value']);
    	if($info){
	        // 成功上传后 获取上传信
	        $dirfile = $info->getSaveName();
	        return json(['path'=>$uploadDir['value'].'/'.$dirfile,'code'=>1]);
	    }else{
	        // 上传失败获取错误信息
	        return json(['error'=>$file->getError(),'code'=>0]);
	    }
    }
}
