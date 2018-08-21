<?php 
namespace app\admin\validate;
use think\validate;

class ModelFields extends validate
{
	protected $rule = [
		'mid'=>'require|number',
		'field_cname'=>'require|unique:modelFields',
		'field_ename'=>'require|unique:modelFields|alphaDash',
		'field_type'=>'require|number',
	];

	protected $message = [
		'mid.require'=>'所属模型不能为空',
		'mid.number'=>'所属模型id必须为数字',
		'field_cname.require'=>'字段中文名称不能为空',
		'field_cname.unique'=>'字段中文名称不能重复',
		'field_ename.unique'=>'字段英文名称不得重复',
		'field_ename.require'=>'字段英文名称不得为空',
		'field_ename.alphaDash'=>'字段英文名称必须是字母数字下划线组和',
		'field_type.require'=>'字段类型不能为空',
		'field_type.number'=>'字段类型必须为数字',
	];

	protected $scene = [
		'add'=>['cname','ename','dt_type','cf_type'],
		'edit'=>['cname','ename','dt_type','cf_type']
	];
}

 ?>