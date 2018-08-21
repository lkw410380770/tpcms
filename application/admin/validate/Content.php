<?php

namespace app\admin\validate;

use think\validate;

class Content extends validate
{
    protected $rule = [
        'model_id' => 'require|number',
        'cate_id' => 'require|number',
        'title' => 'require|unique:article',
    ];

    protected $message = [
        'model_id.require' => '模型错误',
        'model_id.number' => '模型错误',
        'cate_id.require' => '栏目错误',
        'cate_id.number' => '栏目错误',
        'title.require' => '标题不能为空',
    ];

    protected $scene = [
        'add' => ['cname', 'ename', 'dt_type', 'cf_type'],
        'edit' => ['cname', 'ename', 'dt_type', 'cf_type'],
    ];
}
