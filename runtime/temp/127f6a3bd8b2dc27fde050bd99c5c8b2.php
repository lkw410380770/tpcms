<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:30:"../template/default/index.html";i:1534495008;s:62:"D:\phpStudy\PHPTutorial\WWW\tpcms\template\default\header.html";i:1534562461;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>海鑫盛科技有限公司</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="baidu-site-verification" content="OyUb4RVdSe">
    <meta name="renderer" content="webkit">
    <link rel="stylesheet" href="<?php echo $skin; ?>/font/iconfont.css">
    <link rel="stylesheet" href="<?php echo $skin; ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo $skin; ?>/css/bootstrap.min.css">
    <link href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $skin; ?>/css/public.css">
    <link rel="stylesheet" href="<?php echo $skin; ?>/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo $skin; ?>/css/index.css">
    <script type="text/javascript" src="<?php echo $skin; ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $skin; ?>/js/timepeople.js"></script>
    <script src="<?php echo $skin; ?>/js/easying.js"></script>
    <script src="<?php echo $skin; ?>/js/apple.js"></script>
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
<!--banner-->
<section class="banner" id="banner">
    <div class="apple-banner">
        <img src="<?php echo $skin; ?>/images/trans.png" width="100%">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide1">
                </div>
                <div class="swiper-slide slide2">
                </div>
                <div class="swiper-slide slide3">
                </div>
                <div class="swiper-slide slide4">
                </div>
                <div class="swiper-slide slide5">
                </div>
            </div>
            <div class="swiper-button-prev"><span></span></div>
            <div class="swiper-button-next"><span></span></div>
            <ul class="swiper-pagination autoplay"></ul>
        </div>
        <div class="logo2"><img src="<?php echo $skin; ?>/images/logo2.png" width="100%"></div>
    </div>
</section>

<!--banner end-->
<!--我们的服务项目-->
<section class="server">
    <h2 class="public-title"><strong>我们的服务</strong><br><span>OUR SERVICE</span></h2>
    <div class="server-box">
        <div class="box-item">
            <div class="item-info">
                <div class="item-mask"></div>
                <span class="display-span"><i class="iconfont icon-guanwangfangwen"></i></span>
                <h4>网站建设<br/><span>WEBSITE BUILDING</span></h4>
                <ul>
                    <li>·品牌展示网站</li>
                    <li>·官方门户网站</li>
                    <li>·营销网站建设</li>
                    <li>·电商平台开发</li>
                    <li>·信息门户网站建设</li>
                    <li>·集团站群开发</li>
                </ul>
                <p>将根据你的企业形象与需求重新对网站进行设计制作，资深设计师将为你量身打造专属你企业的“高大上”，我们也建议客户参与我们的设计工作，体验亲手建站的乐趣。</p>
            </div>
            <div class="item-info">
                <span class="display-span"><i class="iconfont icon-h"></i></span>
                <h4>H5开发<br/><span>H5 DEVELOP</span></h4>
                <ul>
                    <li>·手机网站建设</li>
                    <li>·微官网建设</li>
                    <li>·微活动创意设计</li>
                    <li>·微信小程序</li>
                </ul>
                <p>在移动互联网建立手机网站,显得尤为重要,手机网站更多的是让客户多一种渠道找到您！</p>
            </div>
        </div>
        <div class="box-item">
            <div class="item-info">
                <span class="display-span"><i class="iconfont icon-icon-test8"></i></span>
                <h4>APP开发<br/><span>APP DEVELOP</span></h4>
                <ul>
                    <li>·满足个人企业需求</li>
                    <li>·方便简洁的操作</li>
                    <li>·UI界面简洁大方</li>
                    <li>·咨询转化率高</li>
                    <li>·提升营销效益</li>
                </ul>
                <p>我们拥有多年手机应用软件开发经验为客户提供优质的手机应用开发设计方案，专业的ios、Android、HTML5开发服务团队</p>
            </div>
            <div class="item-info">
                <span class="display-span"><i class="iconfont icon-ruanjian"></i></span>
                <h4>品牌设计<br/><span>BRAND DESIGN</span></h4>
                <ul>
                    <li>·VI形象</li>
                    <li>·标志设计</li>
                    <li>·平面广告</li>
                    <li>·包装设计</li>
                    <li>·品牌画册</li>
                    <li>·企业画册</li>
                </ul>
                <p>我们以国际创新意念，为客户创造深度价值，打造磁性的品牌新体验。</p>
            </div>
        </div>
        <div class="box-item">
            <div class="item-info">
                <span class="display-span"><i class="iconfont icon-weixin"></i></span>
                <h4>微信开发<br/><span>WECHAT MARKETING</span></h4>
                <ul>
                    <li>·微官网</li>
                    <li>·微会员</li>
                    <li>·电子优惠券</li>
                    <li>·微活动</li>
                    <li>·微商城</li>
                    <li>·分销系统</li>
                </ul>
                <p>通过微信公众平台将企业品牌展示给微信用户，减少宣传成本，建立企业与消费者、客户的一对一互动和沟通，将消费者接入企业CRM系统，进行促销、推广、宣传、售后等。</p>
            </div>
            <div class="item-info">
                <span class="display-span"><i class="iconfont icon-SEO"></i></span>
                <h4>SEO优化<br/><span>SEO OPTIMIZATION</span></h4>
                <ul>
                    <li>·内容运维</li>
                    <li>·数据迁移</li>
                    <li>·信息发布</li>
                    <li>·蜘蛛引导</li>
                    <li>·促进网站收录</li>
                    <li>·文章优化</li>
                </ul>
                <p>提升咨询量、订单量、成交量，更多客户快速找到您 爱上您，咨询转化率高 提升营销效益，促进销量 刺激业绩增长。</p>
            </div>
        </div>
    </div>
</section>
<!--  我们的服务项目 end  -->

<!--  网站案例  -->
<section class="enterprise">
    <h2 class="public-title"><strong>网站案例</strong><br><span>SITE CASE</span></h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <a href="article2.html">
                    <div class="box">
                        <div class="pic" style="background-image: url(<?php echo $skin; ?>/images/tclgzhk.jpg)"></div>
                        <div class="box-content">
                            <div class="inner-content">
                                <h3 class="title">TCL集团</h3>
                                <span class="post">www.tclgzhk.com</span>
                            </div>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="article2.html">
                    <div class="box">
                        <div class="pic" style="background-image: url(<?php echo $skin; ?>/images/tclgzhk.jpg)"></div>
                        <div class="box-content">
                            <div class="inner-content">
                                <h3 class="title">TCL集团</h3>
                                <span class="post">www.tclgzhk.com</span>
                            </div>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="article2.html">
                    <div class="box">
                       <div class="pic" style="background-image: url(<?php echo $skin; ?>/images/tclgzhk.jpg)"></div>
                        <div class="box-content">
                            <div class="inner-content">
                                <h3 class="title">TCL集团</h3>
                                <span class="post">www.tclgzhk.com</span>
                            </div>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="article2.html">
                    <div class="box">
                        <div class="pic" style="background-image: url(<?php echo $skin; ?>/images/tclgzhk.jpg)"></div>
                        <div class="box-content">
                            <div class="inner-content">
                                <h3 class="title">TCL集团</h3>
                                <span class="post">www.tclgzhk.com</span>
                            </div>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="article2.html">
                    <div class="box">
                        <div class="pic" style="background-image: url(<?php echo $skin; ?>/images/tclgzhk.jpg)"></div>
                        <div class="box-content">
                            <div class="inner-content">
                                <h3 class="title">TCL集团</h3>
                                <span class="post">www.tclgzhk.com</span>
                            </div>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="article2.html">
                    <div class="box">
                        <div class="pic" style="background-image: url(<?php echo $skin; ?>/images/tclgzhk.jpg)"></div>
                        <div class="box-content">
                            <div class="inner-content">
                                <h3 class="title">TCL集团</h3>
                                <span class="post">www.tclgzhk.com</span>
                            </div>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="article2.html">
                    <div class="box">
                        <div class="pic" style="background-image: url(<?php echo $skin; ?>/images/tclgzhk.jpg)"></div>
                        <div class="box-content">
                            <div class="inner-content">
                                <h3 class="title">TCL集团</h3>
                                <span class="post">www.tclgzhk.com</span>
                            </div>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="article2.html">
                    <div class="box">
                       <div class="pic" style="background-image: url(<?php echo $skin; ?>/images/tclgzhk.jpg)"></div>
                        <div class="box-content">
                            <div class="inner-content">
                                <h3 class="title">TCL集团</h3>
                                <span class="post">www.tclgzhk.com</span>
                            </div>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="article2.html">
                    <div class="box">
                        <div class="pic" style="background-image: url(<?php echo $skin; ?>/images/tclgzhk.jpg)"></div>
                        <div class="box-content">
                            <div class="inner-content">
                                <h3 class="title">TCL集团</h3>
                                <span class="post">www.tclgzhk.com</span>
                            </div>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <a href="list2.html" class="more">查看更多</a>
</section>
<!--end-->
<!--我们的成绩-->
<section class="achievement">
    <div class="achievement-mask"></div>
    <div class="ach-content">
        <h2 class="public-title"><strong>我们的成绩</strong><br><span> WE HAVE ACHIEVED</span></h2>
        <p>2008年1月1日至2017年12月31日 我们的服务数据。</p>
        <ul id="dt">
            <li><b class="timer" data-to="18309" data-speed="2000"></b><br><span>累计受理项目</span></li>
            <li><b class="timer" data-to="98.8" data-speed="2000"></b>%<br><span>综合通过率</span></li>
            <li><b class="timer" data-to="3162" data-speed="2000"></b><br><span>累计电商项目</span></li>
            <li><b class="timer" data-to="100" data-speed="2000"></b>%<br><span>客户好评度</span></li>
        </ul>
    </div>
</section>
<!--我们的成绩 end-->

<!--app案例-->
<section class="app-case">
    <h2 class="public-title"><strong>APP案例</strong><br><span>APP CASE</span></h2>
    <div id="mask"></div>
    <div id="carousel">
        <a href="article2.html"><img src="<?php echo $skin; ?>/images/app1.jpg" alt="#"></a>
        <a href="article2.html"><img src="<?php echo $skin; ?>/images/app2.jpg" alt="#"></a>
        <a href="article2.html"><img src="<?php echo $skin; ?>/images/app3.png" alt="#"></a>
        <a href="article2.html"><img src="<?php echo $skin; ?>/images/app4.jpg" alt="#"></a>
        <a href="article2.html"><img src="<?php echo $skin; ?>/images/app5.jpg" alt="#"></a>
        <a href="article2.html"><img src="<?php echo $skin; ?>/images/app6.jpg" alt="#"></a>
        <a href="article2.html"><img src="<?php echo $skin; ?>/images/app7.jpg" alt="#"></a>
        <a href="article2.html"><img src="<?php echo $skin; ?>/images/app8.jpg" alt="#"></a>
        <a href="article2.html"><img src="<?php echo $skin; ?>/images/app9.jpg" alt="#"></a>
        <a href="article2.html"><img src="<?php echo $skin; ?>/images/app10.jpg" alt="#"></a>
        <a href="article2.html"> <img src="<?php echo $skin; ?>/images/app11.jpg" alt="#"></a>
    </div>
</section>
<!--app案例 end-->

<!--合作流程-->
<section class="cooperation">
    <div class="coop-mask"></div>
    <div class="coop-title">
        <span class="dis-block"></span>
        <h3>合作流程</h3>
        <p> 我们以提升客户品牌价值为核心业务，全程参与项目的网站策划、网站开发。<br/>以及后期项目运营并提出专业的建议和思路。</p>
    </div>
    <ul>
        <li>
            <i class="iconfont icon-consult"></i>
            <h4>来电咨询</h4>
            <p>客户来电咨询，说明需求。</p>
        </li>
        <li class="no-icon">
            <i class="iconfont icon-iconfontyoujiantou-copy color1"></i>
        </li>
        <li>
            <i class="iconfont icon-xuqiu"></i>
            <h4>需求提供</h4>
            <p>客户与设计、技术面对面交谈，提供需求与要求，我们提供建议，客户酌情选择。</p>
        </li>
        <li class="no-icon">
            <i class="iconfont icon-iconfontyoujiantou-copy color2"></i>
        </li>
        <li>
            <i class="iconfont icon-hetong"></i>
            <h4>合同签订</h4>
            <p>客户与我们签订合同,项目开始。</p>
        </li>
        <li class="no-icon">
            <i class="iconfont icon-iconfontyoujiantou-copy color3"></i>
        </li>
        <li>
            <i class="iconfont icon-guanwangfangwen"></i>
            <h4>网站建设</h4>
            <p>网站建设开始之前我们会把效果图发给客户确认，客户确认后开始程序编写。</p>
        </li>
        <li class="no-icon">
            <i class="iconfont icon-iconfontyoujiantou-copy color5"></i>
        </li>
        <li>
            <i class="iconfont icon-jiaofukehu"></i>
            <h4>交付客户</h4>
            <p>客户验收，提出建议修改。</p>
        </li>
        <li class="no-icon">
            <i class="iconfont icon-iconfontyoujiantou-copy"></i>
        </li>
        <li>
            <i class="iconfont icon-wancheng color4"></i>
            <h4>项目完成</h4>
            <p>项目完成，客户支付尾款。</p>
        </li>
    </ul>
</section>
<!--合作流程end-->

<!--动态资讯-->
<section class="messqge">
    <div class="mes-title">
        <h3>NEWS<br/>新闻资讯</h3>
        <p>关注我们的资讯，了解最新互联网动态、全网营销知识.第一时间，最新动态 耐心聆听，负责任地为您解决运营中的技术问题.</p>
    </div>
    <div class="mes-list">
        <ul>
            <li class="list-item-title">
                <h4>热门资讯 <span><strong>HOT</strong> INFORMATION</span><a href="list.html">more+</a></h4>
            </li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助 <span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
        </ul>
        <ul>
            <li class="list-item-title">
                <h4>公司动态 <span>COMPANY NEWS</span> <a href="list.html">more+</a></h4>
            </li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助 <span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
        </ul>
        <ul>
            <li class="list-item-title">
                <h4>技术资讯 <span>TECHNICAL INFORMATION</span> <a href="list.html">more+</a></h4>
            </li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助 <span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
            <li><a href="article.html">专注工业软件开发华软恒信科技助<span>2018/07/14</span></a></li>
        </ul>
    </div>
</section>
<!--动态资讯 end-->


<!--为什么选择海鑫盛-->
<section class="choice">
    <div class="choice-top">
        <div class="line-2">
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <h3>为什么选择我们?</h3>
        <p class="lititle-en">Why Choose Us</p>
        <p>
            8年网站建设经验，提供全方位互联网服务。公司成立以来发展迅速，业务不断发展壮大，致力于互联网品牌建设与网络营销，专业领域包括网站建设，微信运营，网络营销，电子商务服务外包相关类别，我们拥有良好的社会声誉和对产品和专业技术的不断追求。</p>
        <p>
            我们一直结合社会发展，紧跟时代，不断地创新，与其他网站建设及系统开发公司不同，我们的整合解决方案结合了我们网络品牌建设经验和互联网整合营销的理念，并将策略和执行紧密结合，且不断评估并优化我们的方案，为客户提供一体化全方位的互联网品牌整合方案，以最专业的精神为您提供安全、经济、专业、省心的服务。
            我们将通过不懈努力成为客户在信息化领域值得信任、有价值的长期合作伙伴。</p>
    </div>
    <div class="clear"></div>
    <div class="choice-bottom">
        <div class="bottom-info">
            <div class="line-1"></div>
            <h6>专业、高效、责任</h6>
            <div class="info-list">
                <ul>
                    <li>
                        <i class="iconfont icon-zhuanye"></i>
                        <h5>专业网站建设公司</h5>
                    </li>
                    <li>
                        <i class="iconfont icon-zhuji"></i>
                        <h5>配备高配置主机，高速访问</h5>
                    </li>
                    <li>
                        <i class="iconfont icon-web-kekaofuwu"></i>
                        <h5>99.999%网站数据可靠性</h5>
                    </li>
                    <li>
                        <i class="iconfont icon-mianfei"></i>
                        <h5>免费提供快速ICP备案</h5>
                    </li>
                    <li>
                        <i class="iconfont icon-jiejuefangan"></i>
                        <h5>承诺24小时快速解决网站问题</h5>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--为什么选择海鑫盛end-->

<!--服务-->
<section class="team">
    <div class="contact-banner">
        <!--<canvas id="waves" class="waves"></canvas>-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 contact-banner-box">
                    <h2 class="h1">更多疑问 全面解答</h2>
                    <h4>资深美签专家在线为您解答所有疑惑</h4>
                    <a href="javascript:;" class="btn btn-outline-inverse btn-lg web-chat">免费咨询</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--服务 end-->
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
                <div class="beian"><img src="<?php echo $skin; ?>/images/备案图标.png" style="float:left;">
                    <p style="color:#939393;">贵公网安备 52010302000522号
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
<script src="<?php echo $skin; ?>/js/wow.min.js"></script>
<script src="<?php echo $skin; ?>/js/smooth.js"></script>
<script src="<?php echo $skin; ?>/js/swiper.min.js"></script>
<script src="<?php echo $skin; ?>/js/apple.js"></script>
<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script src="<?php echo $skin; ?>/js/carousel.js"></script>
<script type="text/javascript" src="<?php echo $skin; ?>/js/team-bg.js"></script>
<script type="text/javascript" src="<?php echo $skin; ?>/js/public.js"></script>
<script type="text/javascript" src="<?php echo $skin; ?>/js/index.js"></script>

<script>
    new WOW().init();
    $(".apple-banner .swiper-container").css({height: $(".apple-banner").height()})
    $(function () {
        $('#carousel').carousel({curDisplay: 0, autoPlay: true, interval: 3000});
    });
</script>
</html>