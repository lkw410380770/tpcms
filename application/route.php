<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// think\Route::rule('demo/:name/[:age]', 'Index/Index/demo', 'GET', ['ext' => 'html'], ['name' => '\w+', 'age' => '\w+']);
// think\Route::rule('demo2', 'Index/Index/demo2');
// think\Route::get('demo2', 'http://www.baidu.com');
return [
    // '__pattern__' => [
    //     'name' => '\w+',
    // ],
    // '[hello]' => [
    //     ':id' => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
    //     ':name' => ['index/hello', ['method' => 'post']],
    // ],
    'demo2' => 'index/Index/demo2',
    'demo/:name' => ['index/Index/demo', ['method' => 'get'], ['name' => '\w+']],
];
