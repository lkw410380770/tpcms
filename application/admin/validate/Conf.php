<?php 
namespace app\admin\validate;
use think\validate;

class Conf extends validate
{
	protected $rule = [
		'cname'=>'require|max:60|unique:conf',
		'ename'=>'require|unique:conf|alphaDash|unique:conf',
		'dt_type'=>'require|number',
		'cf_type'=>'require|number',
	];

	protected $message = [
		'cname.require'=>'中文名称不得为空',
		'cname.unique'=>'中文名称不得重复',
		'cname.max'=>'中文名称过长',
		'ename.require'=>'英文名称不得为空',
		'ename.unique'=>'英文名称不得重复',
		'ename.alphaDash'=>'英文名称必须是字母数字下划线组和',
		'dt_type.require'=>'类型必须为必填',
		'dt_type.number'=>'类型必须为数字',
		'cf_type.require'=>'类型必须为必填',
		'cf_type.number'=>'类型必须为数字',
	];

	protected $scene = [
		'add'=>['cname','ename','dt_type','cf_type'],
		'edit'=>['cname','ename','dt_type','cf_type']
	];
}

 ?>