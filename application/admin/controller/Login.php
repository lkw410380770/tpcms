<?php

namespace app\admin\controller;

use think\Controller;

class Login extends Controller
{
    public function index()
    {
        if (session('uname') && session('uid')) {
            $this->error('已经登录成功');
        }
        if (request()->isPost()) {
            $data = input('post.');
            if (!captcha_check($data['code'])) {
                $this->error('验证码错误');
            }
            $loginStatus = model('Admin')->login($data);
            if ($loginStatus == 1) {
                $this->success('登陆成功', 'Index/index');
            } else {
                $this->error('用户名或者密码错误');
            }
            return;
        }
        return view();
    }
}
