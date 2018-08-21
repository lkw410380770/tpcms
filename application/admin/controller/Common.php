<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class Common extends Controller
{
    public function _initialize()
    {
        if (!session('uname')) {
            $this->error('请先登录', 'Login/index');
        }

        $request = Request::instance();
        $con = $request->controller();
        $module = $request->module();
        $actionstr = $request->action();
        $this->assign(['con' => $con, 'act' => $actionstr]);
        $name = $module . '/' . $con . '/' . $actionstr;
        $auth = new \auth\Auth();
        // if (!$auth->check($name, session('uid'))) {
        //     $this->error('没有权限');
        // }
    }

}
