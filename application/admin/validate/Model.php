<?php 
namespace app\admin\validate;
use think\validate;

class Model extends validate
{
	protected $rule = [
		'model_name'=>'require|unique:model',
		'table_name'=>'require|unique:model|alphaDash',
	];

	protected $message = [
		'model_name.require'=>'模型名称不能为空',
		'model_name.unique'=>'模型名称不能重复',
		'table_name.require'=>'附加表名称不能为空',
		'table_name.unique'=>'附加表名称不能重复',
		'table_name.alphaDash'=>'附加表名称必须是字母数字下划线组和',
	];

}

 ?>