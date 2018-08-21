<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:29:"../template/default/list.html";i:1534496663;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="baidu-site-verification" content="OyUb4RVdSe">
    <meta name="renderer" content="webkit">
    <title>列表</title>
    <link rel="stylesheet" href="<?php echo $skin; ?>font/iconfont.css">
    <link rel="stylesheet" href="<?php echo $skin; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $skin; ?>/css/public.css">
    <link rel="stylesheet" href="<?php echo $skin; ?>/css/list.css">
</head>
<body>
<!--顶部导航-->
<header class="header">
    <nav class="top-nav">
        <a href="javascript:;"><img class="logo" src="<?php echo $skin; ?>/images/footer-logo.png" alt=""></a>
        <ul>
            <li class="active"><a href="index.html">首页 </a></li>
            <li><a href="website.html">网站建设 </a></li>
            <li><a href="app.html">APP开发 </a></li>
            <li><a href="wechat.html">微信开发 </a></li>
            <li><a href="list2.html">案例 </a></li>
            <li><a href="solution.html">解决方案 </a></li>
            <li><a href="list.html">新闻资讯 </a></li>

        </ul>
    </nav>
</header>
<!--顶部导航end-->

<section class="top-img">
    <img src="<?php echo $skin; ?>/images/list-news-bg.jpg" alt="">
</section>

<div class="pos-address">
    <ol class="breadcrumb">
        <li><a href="#">主页</a></li>
        <li><a href="#">app资讯</a></li>
        <li class="active">app开发</li>
    </ol>
</div>

<section class="list">
    <div class="list-left">
        <ul>
            <?php if(is_array($artRes) || $artRes instanceof \think\Collection || $artRes instanceof \think\Paginator): $i = 0; $__LIST__ = $artRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
            <li>
                <a href="<?php echo url('Article/index',['aid'=>$v['id']]); ?>">
                    <div class="pic-wrap">
                        <div class="pic" style="background-image: url('<?php echo $skin; ?>/images/3.jpg')"></div>
                    </div>
                    <h2><?php echo $v['title']; ?></h2>
                    <p><?php echo $v['desc']; ?></p>
                    <span><?php echo date("Y-m-d",$v['time']); ?></span>
                </a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class="list-right">
        <div class="box-wrap">
            <h3>开发资讯</h3>
            <ul class="border-box-wrap">
                <li><a href="javascript:;">app资讯</a></li>
                <li><a href="javascript:;">网站资讯</a></li>
                <li><a href="javascript:;">微信资讯</a></li>
            </ul>
        </div>
        <div class="box-wrap">
            <h3>文章推荐</h3>
            <ol class="article-wrap">
                <li><a href="javascript:;">1、sdfasdfsdf</a></li>
                <li><a href="javascript:;">2、发射点发射点发</a></li>
                <li><a href="javascript:;">3、啊手动阀手动阀违法所得的发</a></li>
                <li><a href="javascript:;">4、啊手动阀手动阀违法所得的发</a></li>
                <li><a href="javascript:;">5、啊手动阀手动阀违法所得的发</a></li>
                <li><a href="javascript:;">6、啊手动阀手动阀违法所得的发</a></li>
            </ol>
        </div>
        <div class="box-wrap">
            <h3>热门文章</h3>
            <ol class="article-wrap">
                <li><a href="javascript:;">1、sdfasdfsdf</a></li>
                <li><a href="javascript:;">2、发射点发射点发</a></li>
                <li><a href="javascript:;">3、啊手动阀手动阀违法所得的发</a></li>
                <li><a href="javascript:;">4、啊手动阀手动阀违法所得的发</a></li>
                <li><a href="javascript:;">5、啊手动阀手动阀违法所得的发</a></li>
                <li><a href="javascript:;">6、啊手动阀手动阀违法所得的发</a></li>
            </ol>
        </div>
    </div>
    <div class="pase-box">
        <ul class="pagination">
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
        </ul>
    </div>
</section>
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
                <img src="<?php echo $skin; ?>/images/hxskj-erWeiMa.png" alt="">
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
                <div class="beian"> <img src="<?php echo $skin; ?>/images/备案图标.png" style="float:left;"><p style="color:#939393;">贵公网安备 52010302000522号
                    <a href="javascript:;">贵州海鑫盛科技有限公司</a> &nbsp;&nbsp;黔ICP备15006187号</p></div>
            </div>
        </div>
    </div>
</footer>
<div class="fiexd-box">
    <ul>
        <li><a href="javascript:;"><i class="iconfont icon-shouji"></i><span>13765487954</span></a></li>
        <li><a href="http://wpa.qq.com/msgrd?v=3&uin=2894603415&site=在线联系&menu=yes"><i class="iconfont icon-qq"></i></a></li>
        <li class="go-back"><a href="javascript:;"><i class="iconfont icon-kongjiantouup"></i></a></li>
    </ul>
</div>
</body>
<script src="<?php echo $skin; ?>/js/jquery.js"></script>
<script src="<?php echo $skin; ?>/js/smooth.js"></script>
<script src="<?php echo $skin; ?>/js/public.js"></script>
</html>