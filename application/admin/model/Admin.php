<?php

namespace app\admin\model;

use think\Model;

class Admin extends Model
{
    public function login($data)
    {
        $uname = $data['uname'];
        $admins = Admin::get(['uname' => $uname]);
        if ($admins) {
            $pass = md5($data['password']);
            $_password = $admins['password'];
            if ($_password == $pass) {
                session('uname', $uname);
                session('uid', $admins['id']);
                $alterTime = Admin::where('id', $admins['id'])->update(['last_time' => time()]);
                return 1;
            } else {
                return 2; //密码错
            }
        } else {
            return 3; //不存在
        }
    }
}
