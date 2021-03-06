<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\login\index.html";i:1534575095;}*/ ?>
<!DOCTYPE html>
<html style="width: 100%;height: 100%">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>layout 后台大布局 - Layui</title>
    <link rel="stylesheet" href="/public/static/admin/layui/css/layui.css">
    <style>
        .login-box{
            width: 400px;
            height: 350px;
            background: rgba(255,255,255,.6);
            position: absolute;
            left: 50%;
            margin-left: -200px;
            top: 50%;
            padding: 20px;
            margin-top: -175px;
        }
        .layui-input-block{
            margin-top: 50px;
        }
        h3{
            text-align: center;
            font-size: 30px;
        }
    </style>
</head>

<body class="layui-layout-body" style="background: url(/public/static/admin/images/bgLogo.jpg) no-repeat center center;width: 100%;height: 100%;">
    <div class="login-box">
        <h3>登录</h3>
        <form action="" method="post">
            <div class="layui-form-item">
                <label class="layui-form-label">输入框</label>
                <div class="layui-input-block">
                    <input type="text" name="uname" required lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">密码框</label>
                <div class="layui-input-inline">
                    <input type="password" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid layui-word-aux">辅助文字</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">验证码</label>
                <div class="layui-input-inline">
                    <input type="password" name="code" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
                </div>
                <img onclick="this.src='<?php echo captcha_src(); ?>'+'?'+Math.random();" src="<?php echo captcha_src(); ?>" width="90" height="38" alt="">
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                </div>
            </div>
        </form>
    </div>
    <script src="/public/static/admin/layui/layui.js"></script>
    <script>
    //JavaScript代码区域
    layui.use(['element', 'form', 'layer'], function() {
        var element = layui.element;
        var form = layui.form;
        var layer = layui.layer;
    });
    </script>
</body>

</html>