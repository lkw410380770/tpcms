<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\content\add.html";i:1534494890;s:73:"D:\phpStudy\PHPTutorial\WWW\tpcms\application\admin\view\common\head.html";i:1534472536;s:73:"D:\phpStudy\PHPTutorial\WWW\tpcms\application\admin\view\common\left.html";i:1534467966;}*/ ?>
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
                    <input type="hidden" name="model_id" value="<?php echo $modelId; ?>">
                    <input type="hidden" name="cate_id" value="<?php echo $cateid; ?>">
                    <div class="layui-form-item">
                        <label class="layui-form-label">所属栏目</label>
                        <div class="layui-input-block">
                            <select name="cate_id" lay-verify="required" disabled>
                                <?php if(is_array($cateRes) || $cateRes instanceof \think\Collection || $cateRes instanceof \think\Paginator): $i = 0; $__LIST__ = $cateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $v['id']; ?>" <?php if($v['id'] == $cateid): ?>selected<?php endif; ?>><?php echo str_repeat('-',$v['level']*3);?><?php echo $v['cate_name']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">标题</label>
                        <div class="layui-input-block">
                            <input type="text" required name="title" lay-verify="required" value="" placeholder="标题" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                      <div class="layui-form-item">
                        <label class="layui-form-label">属性</label>
                        <div class="layui-input-block">
                          <input type="checkbox" name="attr[1]" value="1" title="图片">
                          <input type="checkbox" name="attr[2]" value="2" title="推荐">
                          <input type="checkbox" name="attr[3]" value="3" title="头条">
                          <input type="checkbox" name="attr[4]" value="4" title="加粗">
                        </div>
                      </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">关键词</label>
                        <div class="layui-input-block">
                            <input type="text" name="keywords" value="" placeholder="关键词" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">描述</label>
                        <div class="layui-input-block">
                            <textarea name="" cols="200" name="desc" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">作者</label>
                        <div class="layui-input-block">
                            <input type="text" name="author" value="" placeholder="作者" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">来源</label>
                        <div class="layui-input-block">
                            <input type="text" name="source" value="" placeholder="来源" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">
                            栏目缩略图
                        </label>
                        <div class="layui-input-block">
                            <div class="layui-upload">
                                <input type="hidden" value="" name="litpic" class="logo">
                                <button type="button" class="layui-btn" id="test1">选择图片</button>
                                <button type="button" class="layui-btn" id="uploadLogo">上传图片</button>
                                <div class="layui-upload-list">
                                    <img class="layui-upload-img" width="180" src="" id="demo1">
                                    <p id="demoText"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 自定义字段 -->
                    <?php foreach($diyFields as $k=>$v):switch($v['field_type']): case "1": ?>
                                <div class="layui-form-item">
                                    <label class="layui-form-label"><?php echo $v['field_cname']; ?></label>
                                    <div class="layui-input-block">
                                       <input type="text" name="<?php echo $v['field_ename']; ?>" value="" placeholder="<?php echo $v['field_cname']; ?>" autocomplete="off" class="layui-input">
                                    </div>
                                </div>
                            <?php break; case "2": ?>
                                <div class="layui-form-item">
                                    <label class="layui-form-label"><?php echo $v['field_cname']; ?></label>
                                    <div class="layui-input-block">
                                       <textarea name="<?php echo $v['field_ename']; ?>" cols="200" rows="10"></textarea>
                                    </div>
                                </div>
                            <?php break; case "3": if(!empty($v['field_value'])): $values = explode(',',$v['field_value']);?>
                                <div class="layui-form-item">
                                    <label class="layui-form-label"><?php echo $v['field_cname']; ?></label>
                                    <div class="layui-input-block">
                                        <?php if(is_array($values) || $values instanceof \think\Collection || $values instanceof \think\Paginator): $i = 0; $__LIST__ = $values;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
                                        <input type="radio" name="<?php echo $v['field_ename']; ?>" value="<?php echo $v1; ?>" title="<?php echo $v1; ?>">
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                                <?php endif;break; case "4": if(!empty($v['field_value'])): $values = explode(',',$v['field_value']);?>
                                <div class="layui-form-item">
                                    <label class="layui-form-label"><?php echo $v['field_cname']; ?></label>
                                    <div class="layui-input-block">
                                        <?php if(is_array($values) || $values instanceof \think\Collection || $values instanceof \think\Paginator): $i = 0; $__LIST__ = $values;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
                                          <input type="checkbox" value="<?php echo $v1; ?>" name="<?php echo $v['field_ename']; ?>[]" title="<?php echo $v1; ?>">
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                                <?php endif;break; case "5": if(!empty($v['field_value'])): $values = explode(',',$v['field_value']);?>
                                <div class="layui-form-item">
                                    <label class="layui-form-label"><?php echo $v['field_cname']; ?></label>
                                    <div class="layui-input-block">
                                        <select name="<?php echo $v['field_ename']; ?>">

                                            <option value="">请选择</option>
                                            <?php if(is_array($values) || $values instanceof \think\Collection || $values instanceof \think\Paginator): $i = 0; $__LIST__ = $values;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $v1; ?>"><?php echo $v1; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                </div>
                                <?php endif;break; default: ?>
                                <div class="layui-form-item">
                                    <label class="layui-form-label"><?php echo $v['field_cname']; ?></label>
                                    <div class="layui-input-block">
                                        <input type="text" name="<?php echo $v['field_ename']; ?>" value="" placeholder="<?php echo $v['field_cname']; ?>" autocomplete="off" class="layui-input">
                                    </div>
                                </div>
                        <?php endswitch; endforeach;?>
                    <!-- 自定义字段 结束-->
                    <div class="layui-form-item">
                        <label class="layui-form-label">
                            内容
                        </label>
                        <div class="layui-input-block">
                            <textarea id="demo" name="content" style="display: none;"></textarea>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">点击</label>
                        <div class="layui-input-block">
                            <input type="text" name="click" value="" placeholder="点击" autocomplete="off" class="layui-input">
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
    layui.use(['element', 'form', 'layer', 'jquery','upload','layedit'], function() {
        var element = layui.element;
        var form = layui.form;
        var layer = layui.layer;
        var $ = layui.jquery;
        var upload = layui.upload;
        var layedit = layui.layedit;
         layedit.build('demo'); //建立编辑器
        var uploadInst = upload.render({
            elem: '#test1'
            ,url: '<?php echo url('ajaxUploadImg'); ?>'
            ,auto:false
            ,accept: 'file'
            ,multiple: true
            ,field:'image'
            ,bindAction:'#uploadLogo'
            ,data: {
              imgurl: function(){
                return $('.logo').val();
              }
            }
            ,choose: function(obj){
              //预读本地文件示例，不支持ie8
              obj.preview(function(index, file, result){
                $('#demo1').attr('src', result); //图片链接（base64）
              });
            }
            ,done: function(res){
              //如果上传失败
              if(res.code == 0){
                return layer.msg(res.msg);
              }else if(res.code == 1){
                 console.log(res);
                 $('.logo').val(res.path);
                 return layer.msg(res.msg);
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