<?php

namespace app\index\controller;

class Reg extends Common
{
    public function add()
    {
        $send = sendMail('410380770@qq.com', '哈哈哈', '呵呵呵呵呵');
        if ($send) {
            echo '成功';
        } else {
            echo '失败';
        }
        $tempSrc = $this->confTemp . '/' . 'member/regmember.html';
        return $this->fetch($tempSrc);
    }

}
