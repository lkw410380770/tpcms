<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\cate\edit.html";i:1534467966;s:73:"D:\phpStudy\PHPTutorial\WWW\tpcms\application\admin\view\common\head.html";i:1534472536;s:73:"D:\phpStudy\PHPTutorial\WWW\tpcms\application\admin\view\common\left.html";i:1534467966;}*/ ?>
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
</div> 
        <div class="layui-side layui-bg-black">
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
                <form class="layui-form" action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $arr['id']; ?>" name="id">
                    <h3>常规选项</h3>
                    <div class="layui-form-item">
                        <label class="layui-form-label">内容模型</label>
                        <div class="layui-input-block">
                            <select name="model_id" lay-verify="required">
                                <?php if(is_array($modelArr) || $modelArr instanceof \think\Collection || $modelArr instanceof \think\Paginator): $i = 0; $__LIST__ = $modelArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $v['id']; ?>" <?php if($v['id'] == $arr['model_id']): ?>selected<?php endif; ?>><?php echo $v['model_name']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">栏目名称</label>
                        <div class="layui-input-block">
                            <input type="text" name="cate_name" value="<?php echo $arr['cate_name']; ?>" required lay-verify="required" placeholder="栏目名称" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">上级栏目</label>
                        <div class="layui-input-block">
                            <select name="pid" lay-verify="required">
                                <option value="0">顶级栏目</option>
                                <?php if(is_array($cateArr) || $cateArr instanceof \think\Collection || $cateArr instanceof \think\Paginator): $i = 0; $__LIST__ = $cateArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo['id']; ?>" <?php if($vo['id'] == $arr['pid']): ?>selected<?php endif; ?>><?php echo str_repeat('-',$vo['level']*3);?><?php echo $vo['cate_name']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">是否隐藏</label>
                        <div class="layui-input-block">
                            <input type="checkbox" value="<?php echo $arr['status']; ?>" <?php if($arr['status'] == 1): ?>checked<?php endif; ?> lay-filter="switchBtn" lay-text="ON|OFF" name="status" lay-skin="switch">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">
                            栏目缩略图
                        </label>
                        <div class="layui-input-block">
                            <div class="layui-upload">
                                <input type="hidden" value="<?php echo $arr['img']; ?>" name="img" class="logo">
                                <button type="button" class="layui-btn" id="test1">选择图片</button>
                                <button type="button" class="layui-btn" id="uploadLogo">上传图片</button>
                                <div class="layui-upload-list">
                                    <img class="layui-upload-img" src="/public/<?php echo $arr['img']; ?>" width="180" src="" id="demo1">
                                    <p id="demoText"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">排序</label>
                        <div class="layui-input-block">
                            <input type="text" name="sort" value="50" value="<?php echo $arr['sort']; ?>" required lay-verify="required" placeholder="排序" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">栏目属性</label>
                        <div class="layui-input-block">
                            <input type="radio" name="cate_attr" value="1" title="列表栏目" <?php if($arr['cate_attr'] == 1): ?>checked<?php endif; ?>>
                            <input type="radio" name="cate_attr" value="2" title="封面栏目" <?php if($arr['cate_attr'] == 2): ?>checked<?php endif; ?>>
                            <input type="radio" name="cate_attr" value="3" title="外部链接" <?php if($arr['cate_attr'] == 3): ?>checked<?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">列表页模板</label>
                        <div class="layui-input-block">
                            <input type="text" name="list_tmp" value="<?php echo $arr['list_tmp']; ?>" required lay-verify="required" placeholder="栏目名称" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">封面模板</label>
                        <div class="layui-input-block">
                            <input type="text" name="index_tmp" value="<?php echo $arr['index_tmp']; ?>" required lay-verify="required" placeholder="栏目名称" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">文章模板</label>
                        <div class="layui-input-block">
                            <input type="text" name="article_tmp" value="<?php echo $arr['article_tmp']; ?>" required lay-verify="required" placeholder="栏目名称" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <h3>高级选项</h3>
                    <div class="layui-form-item">
                        <label class="layui-form-label">标题</label>
                        <div class="layui-input-block">
                            <input type="text" name="title" value="<?php echo $arr['title']; ?>" placeholder="栏目名称" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">关键词</label>
                        <div class="layui-input-block">
                            <input type="text" name="keywords" value="<?php echo $arr['keywords']; ?>" placeholder="栏目名称" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item layui-form-text">
                        <label class="layui-form-label">描述</label>
                        <div class="layui-input-block">
                          <textarea name="desc" placeholder="请输入内容" class="layui-textarea"><?php echo $arr['desc']; ?></textarea>
                        </div>
                      </div>
                    <h3>栏目内容</h3>
                    <textarea id="demo" name="content" style="display: none;"><?php echo $arr['content']; ?></textarea>
                     <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
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
    layui.use(['element','form','layer','layedit','upload','jquery'], function() {
        var element = layui.element;
        var form = layui.form;
        var layer = layui.layer;
        var layedit = layui.layedit;
        var upload = layui.upload;
        var $ = layui.jquery;
        layedit.build('demo'); //建立编辑器
        form.on('switch(switchBtn)', function(data){
            if(data.elem.checked){
               data.elem.value = 1;
            }else{
                data.elem.value = 0;
            }
        
        });
        var uploadInst = upload.render({
            elem: '#test1'
            ,url: '<?php echo url('Cate/ajaxUploadImg'); ?>'
            ,auto:false
            ,accept: 'file'
            ,multiple: true
            ,field:'image'
            ,bindAction:'#uploadLogo'
            ,choose: function(obj){
              //预读本地文件示例，不支持ie8
              obj.preview(function(index, file, result){
                $('#demo1').attr('src', result); //图片链接（base64）
              });
            }
            ,done: function(res){
              //如果上传失败
              if(res.code == 0){
                return layer.msg('上传失败');
              }else if(res.code == 1){
                 console.log(res);
                 $('.logo').val(res.path);
                 return layer.msg('上传成功');
              }
              //上传成功
            }
            ,error: function(){
              //演示失败状态，并实现重传
              var demoText = $('#demoText');
              demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
              demoText.find('.demo-reload').on('click', function(){
                uploadInst.upload();
              });
            }
          });
    });
    </script>
</body>

</html>