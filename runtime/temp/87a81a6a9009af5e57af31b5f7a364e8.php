<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:86:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\goods_cate\lst.html";i:1534655837;s:73:"D:\phpStudy\PHPTutorial\WWW\tpcms\application\admin\view\common\head.html";i:1534472536;s:73:"D:\phpStudy\PHPTutorial\WWW\tpcms\application\admin\view\common\left.html";i:1534574863;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>layout 后台大布局 - Layui</title>
    <link rel="stylesheet" href="/public/static/admin/layui/css/layui.css">
    <link rel="stylesheet" href="/public/static/admin/css/<publi></publi>c.css">
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
                <div class="layui-btn-group">
                    <a href="<?php echo url('add'); ?>" class="layui-btn">添加分类</a>
                </div>
                <table class="layui-table">
                    <colgroup>
                        <col width="150">
                        <col width="200">
                        <col>
                    </colgroup>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>分类名称</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><?php echo $v['id']; ?></td>
                            <td><?php echo $v['name']; ?></td>
                            <td>
                                <div class="layui-btn-group">
                                    <a class="layui-btn layui-btn-normal" href="<?php echo url('edit',['id'=>$v['id']]); ?>">编辑</a>
                                    <a class="layui-btn layui-btn-danger btn-dele" data-href="<?php echo url('dele',['id'=>$v['id']]); ?>">删除</a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
                <?php echo $page; ?>
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
    layui.use(['element','layer','form','jquery'], function() {
        var element = layui.element;
        var layer = layui.layer;
        var form = layui.form;
        var $ = layui.jquery;
        form.on('switch(switchBtn)', function(data){
            var idnum = data.elem.getAttribute('data-id');
            if(data.elem.checked){
               $.ajax({
                type:'post',
                url:'<?php echo url('ajaxUpdateStatus'); ?>',
                dataType:'json',
                data:{
                    status:1,
                    id:idnum
                },
                success:function(res){
                    if(res.code == 1){
                        return layer.msg('修改成功');
                    }else{
                         return layer.msg('修改失败');
                    }
                    
                },
                error:function(){
                    return layer.msg('修改失败');
                }
               })
            }else{
                $.ajax({
                type:'post',
                url:'<?php echo url('ajaxUpdateStatus'); ?>',
                dataType:'json',
                data:{
                    status:0,
                    id:idnum
                },
                success:function(res){
                    if(res.code == 1){
                        return layer.msg('修改成功');
                    }else{
                         return layer.msg('修改失败');
                    }
                    
                },
                error:function(){
                    return layer.msg('修改失败');
                }
               })
            }
        
        });
        $('.btn-dele').on('click',function(){
            var urlstr = $(this).attr('data-href');
            var self = $(this);
            layer.confirm('确定要删除吗?', {icon: 3, title:'提示'}, function(index){
                $.ajax({
                    url:urlstr,
                    type:'get',
                    dataType:'json',
                    success:function(data){
                        if(data.status == 1){
                            layer.msg('删除成功');
                            self.parents('tr').remove();
                        }
                    },
                    error:function(){

                    }
                })
              // layer.close(index);
            });
        })
    });
    </script>
</body>

</html>