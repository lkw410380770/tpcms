<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\cate\index.html";i:1534775998;s:73:"D:\phpStudy\PHPTutorial\WWW\tpcms\application\admin\view\common\head.html";i:1534472536;s:73:"D:\phpStudy\PHPTutorial\WWW\tpcms\application\admin\view\common\left.html";i:1534769415;}*/ ?>
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
                    <dd><a href="<?php echo url('goodsBrand/lst'); ?>">品牌管理</a></dd>
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
                    <a href="<?php echo url('add'); ?>" class="layui-btn">添加栏目</a>
                </div>
                <table class="layui-table">
                    <colgroup>
                        <col width="150">
                        <col width="200">
                        <col>
                    </colgroup>
                    <thead>
                        <tr>
                            <th lay-data="{field:'id'}">ID</th>
                            <th>栏目名称</th>
                            <th>栏目模型</th>
                            <th>是否隐藏</th>
                            <th>缩略图</th>
                            <th>列表模板</th>
                            <th>封面模板</th>
                            <th>文章模板</th>
                            <th>文章数</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(is_array($arr) || $arr instanceof \think\Collection || $arr instanceof \think\Paginator): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><?php echo $vo['id']; ?></td>
                            <td><?php echo str_repeat('-',$vo['level']*3)?><?php echo $vo['cate_name']; ?></td>
                            <td><?php echo $vo['model_name']; ?></td>
                            <td>
                                <form class="layui-form" action="">
                                     <div class="layui-form-item">
                                        <div class="layui-input-block" style="margin-left:0;">
                                          <input type="checkbox" data-id="<?php echo $vo['id']; ?>" lay-filter="switchBtn" name="switch" lay-skin="switch" <?php if($vo['status'] == 1): ?>checked<?php endif; ?>>
                                        </div>
                                      </div>
                                </form>
                            </td>
                            <td>
                                <?php if($vo['img'] != ''): ?>
                                <img src="/public/<?php echo $vo['img']; ?>" alt="">
                                <?php else: ?>
                                暂无缩略图
                                <?php endif; ?>
                            </td>
                            <td><?php echo $vo['list_tmp']; ?></td>
                            <td><?php echo $vo['index_tmp']; ?></td>
                            <td><?php echo $vo['article_tmp']; ?></td>
                            <td>0</td>
                            <td>
                                <div class="layui-btn-group">
                                    <a class="layui-btn layui-btn-normal" href="<?php echo url('edit',['id'=>$vo['id']]); ?>">编辑</a>
                                    <a class="layui-btn" href="<?php echo url('add',['cateid'=>$vo['id']]); ?>">添加子栏目</a>
                                    <a class="layui-btn" href="<?php echo url('Content/lst',['id'=>$vo['id']]); ?>">文章列表</a>
                                    <a class="layui-btn layui-btn-danger btn-dele" data-href="<?php echo url('dele',['id'=>$vo['id']]); ?>">删除</a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
                <div class="layui-btn-group demoTable">
                  <button class="layui-btn" data-type="getCheckData">删除</button>
                </div>
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
    layui.use(['element','form','layer','jquery'], function() {
        var element = layui.element;
        var layer = layui.layer,
            form = layui.form,
            $ = layui.jquery;
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