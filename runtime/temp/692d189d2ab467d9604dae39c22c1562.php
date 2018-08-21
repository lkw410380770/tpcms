<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:41:"../template/default/member/regmember.html";i:1534563248;s:62:"D:\phpStudy\PHPTutorial\WWW\tpcms\template\default\header.html";i:1534562461;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="baidu-site-verification" content="OyUb4RVdSe">
    <meta name="renderer" content="webkit">
    <title>注册</title>
    <link rel="stylesheet" href="<?php echo $skin; ?>/font/iconfont.css">
    <link rel="stylesheet" href="<?php echo $skin; ?>/layui/css/layui.css">
    <link rel="stylesheet" href="<?php echo $skin; ?>/css/public.css">
    <link rel="stylesheet" href="<?php echo $skin; ?>/css/about.css">
</head>
<body>
<!--顶部导航-->
<header class="header">
    <nav class="top-nav">
        <a href="javascript:;"><img class="logo" src="<?php echo $skin; ?>/images/footer-logo.png" alt=""></a>
        <ul>
            <li class="active"><a href="index.html">首页 </a></li>
            <?php if(is_array($cateRes) || $cateRes instanceof \think\Collection || $cateRes instanceof \think\Paginator): $i = 0; $__LIST__ = $cateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
            <li><a href="<?php echo $v['url']; ?>"><?php echo $v['cate_name']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <li><a href="<?php echo url('Reg/add'); ?>">注册</a></li>
        </ul>
    </nav>

</header>
<!--顶部导航end-->

<!--顶部大图-->
<section class="top-img">
    <img src="<?php echo $skin; ?>/images/about.jpg" alt="">
</section>

<form class="layui-form" action="">
  <div class="layui-form-item">
    <label class="layui-form-label">用户名</label>
    <div class="layui-input-block">
      <input type="text" name="username" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">密码</label>
    <div class="layui-input-inline">
      <input type="password" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-form-mid layui-word-aux">字母数字下划线</div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">邮箱:</label>
    <div class="layui-input-block">
      <input type="text" name="email" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">单选框</label>
    <div class="layui-input-block">
      <input type="radio" name="sex" value="1" title="男">
      <input type="radio" name="sex" value="2" title="女" checked>
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-input-block">
      <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
    </div>
  </div>
</form>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h3>走进海鑫盛</h3>
                <ul>
                    <li><a href="javascript:;">关于我们</a></li>
                    <li><a href="javascript:;">APP推广</a></li>
                    <li><a href="javascript:;">网站建设</a></li>
                    <li><a href="javascript:;">SEO推广</a></li>
                    <li><a href="javascript:;">解决方案</a></li>
                    <li><a href="javascript:;">隐私政策与版权声明</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h3>联系我们</h3>
                <ul>
                    <li>地址：贵阳市南明区花果园</li>
                    <li>手机：18585853123</li>
                    <li>电话：0851-88574848</li>
                    <li>邮箱：<a href="javascript:;">924200@qq.com</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h3>友情链接</h3>
                <ul>
                    <li><a href="javascript:;">短信平台</a></li>
                    <li><a href="javascript:;">沈阳网站建设</a></li>
                    <li><a href="javascript:;">长沙seo</a></li>
                    <li><a href="javascript:;">贵阳网站建设</a></li>
                    <li><a href="javascript:;">软文</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h3>关注我们</h3>
                <img src="images/hxskj-erWeiMa.png" alt="">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="logo-footer"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="links-box">
                <ul>
                    <li><a href="javascript:;">贵阳APP开发公司</a></li>
                    <li><a href="javascript:;">手机软件开发</a></li>
                    <li><a href="javascript:;">APP软件开发</a></li>
                    <li><a href="javascript:;">APP公司</a></li>
                    <li><a href="javascript:;">APP开发公司</a></li>
                    <li><a href="javascript:;">IOS开发</a></li>
                    <li><a href="javascript:;">手机应用软件开发</a></li>
                    <li><a href="javascript:;">微信公众号开发</a></li>
                    <li><a href="javascript:;">小程序开发</a></li>
                    <li><a href="javascript:;">微信小程序开发</a></li>
                </ul>
                <div class="beian"><img src="images/备案图标.png" style="float:left;">
                    <p style="color:#939393;">贵公网安备 52010302000522号
                        <a href="javascript:;">贵州海鑫盛科技有限公司</a> &nbsp;&nbsp;黔ICP备15006187号</p></div>
            </div>
        </div>
    </div>
</footer>
<div class="fiexd-box">
    <ul>
        <li><a href="javascript:;"><i class="iconfont icon-shouji"></i><span>13765487954</span></a></li>
        <li><a href="http://wpa.qq.com/msgrd?v=3&uin=2894603415&site=在线联系&menu=yes" target="_blank"><i class="iconfont icon-qq"></i></a></li>
        <li class="go-back"><a href="javascript:;"><i class="iconfont icon-kongjiantouup"></i></a></li>
    </ul>
</div>
</body>
<script src="<?php echo $skin; ?>/js/jquery.js"></script>
<script src="<?php echo $skin; ?>/js/smooth.js"></script>
<script src="<?php echo $skin; ?>/js/public.js"></script>
<script src="<?php echo $skin; ?>/layui/layui.js"></script>
 
<script>
//Demo
layui.use('form', function(){
  var form = layui.form;
  
  //监听提交
  form.on('submit(formDemo)', function(data){
    layer.msg(JSON.stringify(data.field));
    return false;
  });
});
</script>
</html>