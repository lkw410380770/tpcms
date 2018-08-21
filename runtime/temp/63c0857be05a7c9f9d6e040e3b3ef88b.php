<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:86:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\goods_cate\add.html";i:1534575751;s:73:"D:\phpStudy\PHPTutorial\WWW\tpcms\application\admin\view\common\head.html";i:1534472536;s:73:"D:\phpStudy\PHPTutorial\WWW\tpcms\application\admin\view\common\left.html";i:1534574863;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>layout 后台大布局 - Layui</title>
    <link rel="stylesheet" href="/public/static/admin/layui/css/layui.css">
</head>

<body class="layui-layout-body">
    <div class="layui-layout layui-layout-admin">
        <div class="layui-header">
    <div class="layui-logo">layui 后台布局</div>
    <!-- 头部区域（可配合layui已有的水平导航） -->
    <ul class="layui-nav layui-layout-left">
        <li class="layui-nav-item"><a href="">控制台</a></li>
        <li class="layui-nav-item"><a href="">商品管理</a></li>
        <li class="layui-nav-item"><a href="">用户</a></li>
        <li class="layui-nav-item">
            <a href="javascript:;">其它系统</a>
            <dl class="layui-nav-child">
                <dd><a href="">邮件管理</a></dd>
                <dd><a href="">消息管理</a></dd>
                <dd><a href="">授权管理</a></dd>
            </dl>
        </li>
    </ul>
    <ul class="layui-nav layui-layout-right">
        <li class="layui-nav-item">
            <a href="javascript:;"><img src="http://t.cn/RCzsdCq" class="layui-nav-img"><?php echo \think\Session::get('uname'); ?></a>
            <dl class="layui-nav-child">
                <dd><a href="">基本资料</a></dd>
                <dd><a href="">安全设置</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item"><a href="<?php echo url('Admin/logout'); ?>">退了</a></li>
    </ul>
</div> <div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
        <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
        <ul class="layui-nav layui-nav-tree" lay-filter="test">
            <li class="layui-nav-item <?php if($con == 'Conf'): ?>layui-nav-itemed<?php endif; ?>">
                <a class="" href="javascript:;">系统配置</a>
                <dl class="layui-nav-child">
                    <dd><a href="<?php echo url('Conf/conflst'); ?>">系统基本参数</a></dd>
                    <dd><a href="<?php echo url('Conf/lst'); ?>">配置管理</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item <?php if($con == 'Cate'): ?>layui-nav-itemed<?php endif; ?>">
                <a href="javascript:;">网站管理</a>
                <dl class="layui-nav-child">
                    <dd><a href="<?php echo url('Cate/index'); ?>">栏目管理</a></dd>
                    <dd><a href="<?php echo url('Content/lst'); ?>">文章管理</a></dd>
                    <dd><a href="javascript:;">超链接</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item <?php if($con == 'Cate'): ?>layui-nav-itemed<?php endif; ?>">
                <a href="javascript:;">商品管理</a>
                <dl class="layui-nav-child">
                    <dd><a href="<?php echo url('GoodsCate/lst'); ?>">商品分类管理</a></dd>
                    <dd><a href="<?php echo url('Content/lst'); ?>">商品列表</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item <?php if($con == 'Model'): ?>layui-nav-itemed<?php endif; ?>">
                <a href="javascript:;">模型管理</a>
                <dl class="layui-nav-child">
                    <dd><a href="<?php echo url('Model/index'); ?>">模型列表</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item <?php if($con == 'Admin'): ?>layui-nav-itemed<?php endif; ?>">
                <a href="javascript:;">管理员</a>
                <dl class="layui-nav-child">
                    <dd><a href="<?php echo url('Admin/lst'); ?>">管理员列表</a></dd>
                    <dd><a href="<?php echo url('AuthRule/lst'); ?>">权限管理</a></dd>
                    <dd><a href="<?php echo url('AuthGroup/lst'); ?>">用户组管理</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">云市场</a></li>
            <li class="layui-nav-item"><a href="">发布商品</a></li>
        </ul>
    </div>
</div>
        <div class="layui-body">
            <!-- 内容主体区域 -->
            <div style="padding: 15px;">
                <form class="layui-form" action="" method="post">
                    <div class="layui-form-item">
                        <label class="layui-form-label">分类名称</label>
                        <div class="layui-input-block">
                            <input type="text" name="name" required lay-verify="required" placeholder="分类名称" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">上级分类</label>
                        <div class="layui-input-block">
                            <select name="pid" lay-verify="required">
                                <option value="0">顶级分类</option>
                                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $v['id']; ?>"><?php echo $v['name']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="layui-footer">
            <!-- 底部固定区域 -->
            © layui.com - 底部固定区域
        </div>
    </div>
    <script src="/public/static/admin/layui/layui.js"></script>
    <script>
    //JavaScript代码区域
    layui.use(['element','form'], function() {
        var element = layui.element;
        var form = layui.form;
    });
    </script>
</body>

</html>