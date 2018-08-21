-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?08 �?21 �?09:52
-- 服务器版本: 5.5.53
-- PHP 版本: 5.5.38

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `tpcms`
--

-- --------------------------------------------------------

--
-- 表的结构 `tpcms_ad`
--

CREATE TABLE IF NOT EXISTS `tpcms_ad` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `ad_name` varchar(60) NOT NULL,
  `ad_status` tinyint(1) NOT NULL DEFAULT '1',
  `type` tinyint(1) NOT NULL,
  `img_src` varchar(150) NOT NULL,
  `link` varchar(100) NOT NULL,
  `aid` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `aid` (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tpcms_admin`
--

CREATE TABLE IF NOT EXISTS `tpcms_admin` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `create_time` int(11) NOT NULL,
  `last_time` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `group_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '用户组id',
  PRIMARY KEY (`id`),
  KEY `gid` (`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `tpcms_admin`
--

INSERT INTO `tpcms_admin` (`id`, `uname`, `password`, `create_time`, `last_time`, `status`, `group_id`) VALUES
(2, 'admin1', '21232f297a57a5a743894a0e4a801fc3', 1534411459, 1534819500, 1, 0),
(3, 'tcl123', '21232f297a57a5a743894a0e4a801fc3', 1534411483, 0, 0, 2),
(4, 'tasd123', '21232f297a57a5a743894a0e4a801fc3', 1534411495, 0, 0, 0),
(5, 'kpcgz', '2a328361022f874836be2b6bd6abacb4', 1534411512, 0, 1, 0),
(6, '管理员管理', '0192023a7bbd73250516f069df18b500', 1534469913, 0, 1, 1),
(7, 'add', '21232f297a57a5a743894a0e4a801fc3', 1534475067, 1534475234, 1, 2);

-- --------------------------------------------------------

--
-- 表的结构 `tpcms_adpos`
--

CREATE TABLE IF NOT EXISTS `tpcms_adpos` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `height` smallint(6) NOT NULL,
  `width` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='广告位' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tpcms_article`
--

CREATE TABLE IF NOT EXISTS `tpcms_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `keywords` varchar(150) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `author` varchar(60) NOT NULL,
  `source` varchar(150) NOT NULL,
  `litpic` varchar(150) NOT NULL,
  `attr` varchar(30) NOT NULL,
  `click` mediumint(9) NOT NULL,
  `content` longtext NOT NULL,
  `cate_id` mediumint(9) NOT NULL,
  `model_id` mediumint(9) NOT NULL,
  `sort` mediumint(9) NOT NULL DEFAULT '50',
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `tpcms_article`
--

INSERT INTO `tpcms_article` (`id`, `title`, `keywords`, `desc`, `author`, `source`, `litpic`, `attr`, `click`, `content`, `cate_id`, `model_id`, `sort`, `time`) VALUES
(9, '师傅告诉对方是的发个撒旦法', '发光时代发生的风格撒旦法', '', '阿斯蒂芬', '分公司', 'uploads/20180816\\71862432aa7c81732faf74b73bc70b81.jpg', 'on,on', 600, '<p>大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道</p>', 3, 3, 50, 0),
(10, '师傅告诉对方是的发个撒旦法', '发光时代发生的风格撒旦法', '', '阿斯蒂芬', '分公司', 'uploads/20180816\\71862432aa7c81732faf74b73bc70b81.jpg', 'on,on', 600, '<p>大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道大声道</p>', 3, 3, 50, 0),
(11, 'sdfg123456', 'sdfg', '呵呵呵', 'sdfg', 'sfgsdfg', '', '2,3', 4000, 'aaaaaaaaaaaaaaaaaaaaaaa', 3, 3, 50, 1534403581),
(12, 'sdfgsdfg', 'sdfgsdfgsdfgsdfg', '', 'sdfgsdfg', 'sdfgsdfg', '', '3', 90, 'sdfgsdfgsdfg', 3, 3, 50, 1534389539),
(15, 'sdfg', '', '', 'sdfg', 'sdfg', '', '1', 0, 'sdfgsdfg', 2, 3, 50, 1534494285),
(16, '七夕，与君共“枕”眠......期限，一辈子', 'asdfasdf', '', 'dfasdf', 'sdfasdf', '', '2', 50, '<p style="text-align: center;">每一段爱情都是从表白开始</p><p style="text-align: center;">七夕将至，鼓足勇气对爱的人好好告白</p><p style="text-align: center;">此后的每一天，就都变成了情人节</p><p style="text-align: center;"><span><span><span>陪伴，是最长情的告白</span></span></span></p><p style="text-align: center;"><span><span><span>睡的好，就不容易老</span></span></span></p><p style="text-align: center;">小乐想对大家最真挚的告白是：</p><p style="text-align: center;">从今天起，你和心爱的TA</p><p style="text-align: center;">都能拥有百分百的好睡眠</p><p style="text-align: center;">要想睡的好，首先选对床品很重要</p><p style="text-align: center;">尤其是对于枕头的挑选</p><p style="text-align: center;"><span><span><span>那究竟怎么才能知道枕头挑对了没？</span></span></span></p><p style="text-align: center;">贴心小编<span><span><span>在此奉上</span>30秒</span></span></p><p style="text-align: center;"><span><span><span>快速检测秘诀</span></span></span></p><p style="text-align: center;">(单身狗注意，请事先找好你的好基友)</p><p style="text-align: center;"><span><span>STEP1.&nbsp;</span></span><span>&nbsp;</span><span><span><span>平躺</span></span></span><span>&nbsp;</span><span><span><span>举起手</span></span></span></p><center><img alt="" id="0d7d135eb0a58cc9e91c16b38a28e9f0_img_6357" src="http://cb.pinpai1.com/upload/word/20180817/docimages/media/1534482114_image1.GIF?s=finecms" width="320" height="178"></center><p style="text-align: center;">你保持平躺状态，然后举起你惯常施力的手</p><p style="text-align: center;">这时你的小伙伴</p><p style="text-align: center;">需要站在你头部位置，抓住你举起的手</p><p style="text-align: center;"><span><span><span>注意！！！</span></span></span><span>&nbsp;</span>这里抓取手必须<span><span><span>呈</span>90°直角</span></span></p><p style="text-align: center;">然后...</p><p style="text-align: center;">激动人心的时刻要来啦</p><p style="text-align: center;"><span><span>▼</span></span></p><p style="text-align: center;"><span><span>STEP 2. 请使劲反抗吧！</span></span></p><p style="text-align: center;">请你的小伙伴使用身体倾斜力量压向你</p><p style="text-align: center;">这时你的手臂，必须使劲反抗他</p><center><img alt="" id="0d7d135eb0a58cc9e91c16b38a28e9f0_img_6358" src="http://cb.pinpai1.com/upload/word/20180817/docimages/media/1534482114_image2.GIF?s=finecms" width="320" height="178"></center><p style="text-align: center;">如果发现施不上力，或者很吃力...</p><p style="text-align: center;"><span><span><span>那么表示</span></span></span></p><p style="text-align: center;"><span><span><span>你的枕头没有给你很好的支撑</span></span></span></p><p style="text-align: center;">该赶紧更换啦!</p><p style="text-align: center;"><span><span>▼</span></span></p><p style="text-align: center;"><span><span><span>小测试做完了</span></span></span></p><p style="text-align: center;"><span><span><span>大家的枕头都选对了吗？</span></span></span></p><p style="text-align: center;"><span><span><span>正确支撑良好的枕头是这样的</span></span></span></p><p style="text-align: center;">▼</p><p style="text-align: center;"><span><span>LaSova尊爵抗菌记忆枕</span></span></p><center><img alt="" id="0d7d135eb0a58cc9e91c16b38a28e9f0_img_6359" src="http://cb.pinpai1.com/upload/word/20180817/docimages/media/1534482114_image3.jpeg?s=finecms" width="900" height="600"></center><p style="text-align: center;">在具有枕头反折助眠装置设计专利的同时</p><p style="text-align: center;"><span><span><span>枕芯也具有支撑性</span></span></span></p><p style="text-align: center;">1.MD1高密度聚氨酯慢回弹材质;吸收压力，缓解冲击力</p><p style="text-align: center;">2.枕芯长久使用不易变形</p><p style="text-align: center;">3.不因天冷气候而改变弹性的优异舒适性</p><p style="text-align: center;">4.一体成型制成，无拼接区块</p><p style="text-align: center;">5.人体工学的弯曲幅度以支撑用户的颈部</p><p style="text-align: center;">即日起至8月29日，<span><span><span>购</span>LaSova记忆枕全系列特价999元起</span></span><span>&nbsp;</span><span><span><span>，</span></span></span><span>&nbsp;</span><span><span><span>活动期间特价再享</span></span></span><span>&nbsp;</span><span><span>88折</span></span><span>&nbsp;</span><span><span><span>优惠</span></span></span><span><span><span>！</span></span></span></p><p style="text-align: center;">▼</p><center><img alt="" id="0d7d135eb0a58cc9e91c16b38a28e9f0_img_6360" src="http://cb.pinpai1.com/upload/word/20180817/docimages/media/1534482114_image4.jpeg?s=finecms" width="28" height="30"></center><p style="text-align: center;"><span><span><span>七夕单身狗如何过？</span></span></span></p><p style="text-align: center;"><span><span>HOLA为你准备了魔法十二星座攻略秘笈</span></span></p><p style="text-align: center;">现在HOLA公众号后台</p><p style="text-align: center;">输入你的星座(eg：狮子or天蝎)</p><p style="text-align: center;">即可得到十二星座专属卡,还能参与七夕大抽奖!</p>', 2, 3, 50, 1534494382),
(17, '德国BA保镖商城七夕有礼，8个最值得买的宝藏品牌承包半年收藏夹！', '', '', '', '', '', '2', 100, '<p style="text-align: start;">8月13-20日，德国BA保镖商城七夕狂欢，钜惠大促重磅来袭，全场满68欧免邮，奶粉除外。</p><center><img alt="云图片" id="0d7d135eb0a58cc9e91c16b38a28e9f0_img_6353" src="http://cb.pinpai1.com/ueditor/php/upload/image/20180817/1534481808462361.png?s=finecms" width="550" height="203"></center><p style="text-align: start;">向来就以海淘友好著称的德国BA保镖商城在此次七夕活动中，几乎出动了所有畅销品牌，开启了一场护肤、美妆、母婴、保健、洗护等大牌好物低价盛宴，如：莱伯妮、菲洛嘉、怡思丁75折;欧缇丽79折;娇兰、倩碧、娇韵诗、雅诗兰黛、兰蔻、Valmont法尔曼、Biotherm碧欧泉;长发公主、施巴、维蕾德8折;Lamer、ysl、纪梵希、香奈儿、dior、雅顿、资深堂、科颜氏;apm、施华洛世奇、潘多拉;杜拉蓝乔85折;“失恋回春精华”Martiderm88折;香氛专场低至66折;美德乐、HIPP奶粉、爱他美、babydream、Oralpadon、Ensbona马膏、双心、salus铁元特价等!极致折扣堪比黑五，用超低折扣满足中国消费者的购买欲!</p><p style="text-align: start;">另外，<span><span><span>德国</span>BA保镖商城</span></span><span>&nbsp;</span>还联合银联优计划送福利，结算时使用银联卡支付(62开头，一卡通、信用卡都支持)，<span><span><span>满</span>88减8欧</span></span><span>&nbsp;</span>(优惠码：<span><span>32F6ER</span></span><span>&nbsp;</span>)<span><span><span>，</span></span></span><span>&nbsp;</span>相当于折上9折!</p><p style="text-align: start;">下面，小编将重点推荐YSL、娇兰、施华洛世奇等8个心愿单品牌，趁七夕大促，一起来买买买吧~</p><p style="text-align: start;"><span><span><span>推荐品牌一：</span>YSL全线85折</span></span></p><p style="text-align: start;">ysl压根不用小编多说，暴风钱包收割机。</p><p style="text-align: start;"><span><span><span>推荐单品：</span></span></span></p><p style="text-align: start;"><span><span>ysl 圣罗兰 雾面哑光丝绒唇釉 色号8</span></span></p><p style="text-align: start;">18年新款哑光唇釉，8号真的是本命姨妈色啊!自然光下偏红，冷光下却是冷艳的紫调梅子色。上嘴顺滑，不会想象中的干，其实是偏水润感，很好涂匀。成膜之后展现雾面妆效，不会卡唇纹，持久度简直惊人(只要你不吃满嘴油基本不怎么掉)。</p><p style="text-align: start;">新款唇釉刷头设计就2个字，优秀。斜头小铲子刻画唇形能力不是一般的好，为这只疯狂打电话!</p><p style="text-align: start;"><span><span>YSL 圣罗兰黑鸦片白夜版女士香水 90ml</span></span></p><p style="text-align: start;">据说这是男生最喜欢女生喷的一款斩男香，好闻到上瘾，非常性感的味道，虽甜但不腻。和经典黑鸦片相比，新推出的白夜版少了一丝浓重，多了一丝大胆与甜美。突破性地以白咖啡为主调，并将明亮柔美的花果注入其中，温暖迷人，微妙又难以捉摸。</p><p style="text-align: start;">虽说尾香是以白麝香为主，但觉得也有一丝奶油梅子的舒适感。闪耀个性风格间，创造出一抹独有气息。瓶身的设计也质感十足，香水控和外貌控收藏必入。</p><p style="text-align: start;">用码【32F6ER】，8折后再减8欧，相当于73折哦!</p><p style="text-align: start;"><span><span>YSL 圣罗兰 迷魅纯漾圆管唇膏口红 色号46&nbsp;</span></span></p><p style="text-align: start;">虽然这是只老网红了，但是依然是小编这几年忠贞不渝的心头好!元气水红蜜桃色完全满足老夫的少女心，除了圆管特有的假润，其他一切都很完美，素颜也能涂。七夕就需要这样一直满满恋爱气息的扮嫩利器~!</p><p style="text-align: start;"><span><span><span>推荐品牌二：欧缇丽</span>79折</span></span></p><p style="text-align: start;">大葡萄的美肌秘密泥萌都很懂，昨天全线79折上线之后，大家都哼哧哼哧的往家搬哈哈哈~</p><p style="text-align: start;"><span><span><span>推荐单品：</span></span></span></p><p style="text-align: start;"><span><span><span>欧缇丽</span>&nbsp;<span>莹润保湿美白祛斑精华液</span>&nbsp;30ml</span></span></p><center><img alt="云图片" id="0d7d135eb0a58cc9e91c16b38a28e9f0_img_6354" src="http://cb.pinpai1.com/ueditor/php/upload/image/20180817/1534481808155563.png?s=finecms" width="512" height="512"></center><p style="text-align: start;">欧缇丽这款美白精华添加了炒鸡珍贵的革命性全新成份Viniferine，一吨白苏维葡萄蔓才能萃取出一斤Viniferine，而一瓶30ml的精华里就大手笔的添加了1000PPM，能重启肌肤年轻的原动力，并在肌肤底层形成防护网，阻止有害因子伤害肌肤，就像是激光一般，祛斑实力五颗星。</p><p style="text-align: start;">同时富含欧缇丽独家成分红酒酵母和葡萄籽多酚，为肌肤注入水分的泉源的同时强化肌肤储水效果，完美弥补了市面上美白产品致干皮的缺陷。并且这款精华完全植物成分，非常温和，所以你很难想象一款纯植物精华能够有这么惊艳的美白效果。平价小灯泡，用完不止白一个色号。</p><p style="text-align: start;"><span><span><span>欧缇丽</span>&nbsp;<span>葡萄活性精华爽肤水</span>&nbsp;<span>皇后水</span>&nbsp;100ml</span></span></p><p style="text-align: start;">(混)油皮一生推!皇后水是来自匈牙利皇后伊丽莎白的驻颜秘方，同时也是麦当娜的必备法宝。集保湿控油、消除细纹、收敛毛孔、真正提亮肤色于一身。消除脸部油光，缩小毛孔除了它还有谁!肌肤状态亚健康的时候用它，可以明显感觉到抬气色。同时也是风靡美妆圈的定妆神器，带妆用它，底妆更服帖，妆效更自然不拔干。</p><p style="text-align: start;"><span><span><span>推荐品牌三：</span>Weleda&nbsp;维蕾德8折</span></span></p><p style="text-align: start;">德国妈妈们几乎人手一瓶维蕾德，产品线real齐全。</p><p style="text-align: start;">推荐单品：</p><p style="text-align: start;"><span><span>Weleda 维蕾德产妇会阴按摩顺产油 50ml</span></span></p><p style="text-align: start;">这款按摩油是很多杂志都力推的Top身体油，好莱坞明星詹妮佛安妮斯顿、名模梨花都是他家的忠实顾客。准备顺产的麻麻都知道，除了在孕期积极锻炼，还可以通过会阴按摩来增加阴道弹性为宝宝创造一个良好的产道环境，这样既有利于宝宝的健康，同时也对妈妈的身体恢复有帮助。</p><p style="text-align: start;">Weleda这款纯天然的植物精华油可以有效松弛会阴组织，增强会阴肌肉的弹性和柔韧性，改善会阴部位纤维组织的供血情况。从孕34周开始定期使用，可以大大降低会用侧切手术的可能性或者把侧切幅度降到最低。是孕妈妈们最需要的孕期必备单品之一。</p><p style="text-align: start;"><span><span>Weleda 维蕾德 桦树叶柠檬精华液 200ml</span></span></p><p style="text-align: start;">被@薄荷酱小q 多次安利的维蕾德桦树汁，一个特别小众的排毒神器。由有机种植桦树所得树叶榨汁而成的Weleda有机桦树汁可促进机体代谢，能加速去水肿排出体内毒素。每晚30ml兑水服用，每天身体都相当通畅。最重要的是，它能减少各种出油，包括皮肤和头发，有小姐姐反馈喝了它皮肤出油状况真的改善很多，头皮太油导致的脱发也可以试试它!它通过解肝毒、调理净化肠胃等达到清痘排毒效果，混油痘肌必入。</p><p style="text-align: start;"><span><span>Weleda 维蕾德 提高免疫力小颗粒 10g</span></span></p><p style="text-align: start;">换季大人小孩一旦感冒，伴随而来的是发烧、头疼、喉咙痛、四肢酸痛、咳嗽不止。这款颗粒可以有效的缓解宝宝不适症状，不会对人体有副作用。随着不适感的好转，可以减少用量，使用不超过2个星期。用于预防感冒，提高身体免疫力，增强体质。还可以缓解感冒产生的打喷嚏，流眼泪，流鼻涕等不适症状。</p><p style="text-align: start;"><span><span><span>推荐品牌四：</span>Swarovski 施华洛世奇85折</span></span></p><p style="text-align: start;">饰品一姐，施华洛世奇限时85折</p><p style="text-align: start;"><span><span><span>推荐单品：</span></span></span></p><p style="text-align: start;"><span><span><span>施华洛世奇</span>Glowing Moon星星月亮项链</span></span></p><p style="text-align: start;">鬼怪同款星月双链真的敲好看!3种戴法，可以两条一起带，有层次感，很耐看又不失小情调。也可以分开戴，短的刚好到锁骨的位置，完全就是一条夏天带超好看的chocker。两条项链都分别有三个扣的位置，可以根据个人喜好调节长度，不到一千买回三条项链超值得!</p><center><img alt="云图片" id="0d7d135eb0a58cc9e91c16b38a28e9f0_img_6355" src="http://cb.pinpai1.com/ueditor/php/upload/image/20180817/1534481808577082.png?s=finecms" width="513" height="469"></center><p style="text-align: start;">今天85折后用码【32F6ER】还能再减8欧，刚刚瞄到后台仅剩一条了，手慢无!</p><p style="text-align: start;"><span><span>Swarovski 施华洛世奇 跃动水晶项链 蓝色</span></span></p><p style="text-align: start;">施华洛世奇的跃动水晶系列可以说是刷爆了朋友圈，以创新的「跃动水晶」概念为设计灵感﹔密镶仿水晶的立体饰框内，镶有一颗悬浮似的圆形仿水晶，带在脖子上，水晶会随着你的每一次心动或者走动而不停跳动，一闪一闪的，相当抢眼球!</p><p style="text-align: start;">长度是38cm锁骨链的位置，很秀气灵巧。喜欢这个系列又害怕撞款，小编建议选择蓝钻，搭配的银色简直不要清新了哦，特别适合夏天。</p><p style="text-align: start;">用银联码【32F6ER】，85折后再减8欧。</p><p style="text-align: start;"><span><span><span>施华洛世奇</span>Duo Evil Eye恶魔之眼手镯</span></span></p><p style="text-align: start;">这款恶魔之眼手镯是和米兰达可儿的合作款，小编认为是施华洛世奇家比较值得一买的经典之作。恶魔之眼造型是土耳其的护身符，寓意为你阻挡邪恶，守护主人和他的爱人，赶走坏运气。</p><center><img alt="云图片" id="0d7d135eb0a58cc9e91c16b38a28e9f0_img_6356" src="http://cb.pinpai1.com/ueditor/php/upload/image/20180817/1534481808555945.png?s=finecms" width="509" height="398"></center><p style="text-align: start;">蓝色的眼睛像海一样深邃，天空一样纯净的守护着你，给你带来好运。眼睛设计太惊艳太别致，全球疯抢断货。可以自己调校尺寸的扣搭，不会怕太大或太小。</p><p style="text-align: start;"><span><span><span>推荐品牌五：</span>Guerlain 娇兰</span></span></p><p style="text-align: start;"><span><span><span>推荐单品：</span></span></span></p><p style="text-align: start;"><span><span>Guerlain 娇兰臻彩宝石唇膏/口红 #28&nbsp;</span></span></p><p style="text-align: start;">娇兰这个牌子可以说是相当低调了，既是LV集团旗下的“官二代”，还是法国皇室御用品牌，却一直默默以产品品质取胜。自从范爷推荐过这一系列，娇兰的宝石唇膏都火出天际啦!</p><p style="text-align: start;">28号就是冰冰同款正宫娘娘红，质地滋润、顺滑好涂，显色度很高，唇膏中还添加了敲贵的红宝石粉，光泽度敲棒。宝石包装颜值也是逆天了，自带小镜子，出门补妆方便又有逼格，试问哪个小仙女会拒绝这样的七夕礼物呢??</p><p style="text-align: start;"><span><span>Guerlain 娇兰御廷兰花卓能焕活丰润面霜 50ml</span></span></p><p style="text-align: start;">看了《时尚芭莎》吗，这可是天后王菲也在用的贵妇级抗衰老面霜啊!飞碟玻璃罐上经典的兰花浮雕和logo，看起来就很贵!虽然贵，但是跟效果比起来，who tm care啊!质地像奶酪，非常滋润，干皮亲妈。延展性很好，一点点就可以解决全脸和脖子，用起来不会太心疼。上脸不会说吸收很快，千万别介意，因为跟第二天起来堪比婴儿肌的嫩滑相比，就能理解这样的设定了!细纹、松弛、熬夜修仙脸都可以交给它解决，综合性能杠杠的。有宝宝说它堪比医美，甚至完胜黑绷带。</p><p style="text-align: start;"><span><span><span>推荐品牌六：</span>Martiderm</span></span></p><p style="text-align: start;">传说中的“失恋回春精华”，西班牙安瓶鼻祖。无论你是哪种肌肤，Martiderm都有合适你的产品线!</p><p style="text-align: start;"><span><span><span>推荐单品：</span></span></span></p><p style="text-align: start;"><span><span>Martiderm 臻活驻颜安瓶精华 30支x2ml</span></span></p><p style="text-align: start;">这个在护肤圈突然就占据半壁江山的安瓶，来自西班牙药妆品牌Martiderm。这款江湖人称十全大补一夜回春精华，涵盖了Martiderm其他所有安瓶的功能，成份华丽，就连维C浓度都是双倍的!熬夜暗沉发黄、修复屏障、美白抗氧化都行!</p><p style="text-align: start;">乳液质地，上脸吸收迅速，而且见效炒鸡快，肌肤问题越多它越有办法。用法也比较特别，用前先摇匀，洁面后将精华滴在手心轻轻按压脸部，不要涂抹哦!一瓶开封后24小时要用完，不然氧化成黄色就没用了。因为太滋补了所以不建议每天使用，一周移到两次或者熬夜急救就好啦。</p><p style="text-align: start;"><span><span>Martiderm 平衡活肌抗氧化安瓶精华 30支x2ml</span></span></p><p style="text-align: start;">第一次用就表示惊为天瓶!油痘皮必入手的当家之王!质地非常清爽，嗖嗖嗖就吸收进皮肤了，吸收后皮肤哑光，完全不黏腻，也一点不会刺激(实在害怕可以用护肤油打底)。</p><p style="text-align: start;">晚上用完第二天一整天皮肤都很细腻光滑，保湿力杠杠的，赶脚寄几QQ弹弹呢。浮油状况大大的改善，就连毛孔都整齐了些，简直是油皮亲妈!就算生理期皮肤也炒鸡稳定，它发挥了巨大的作用!油痘皮考虑性价比的话，建议首选这款!</p><p style="text-align: start;"><span><span><span>推荐品牌七：</span>La Prairie 莱珀妮75折</span></span></p><p style="text-align: start;">LP品牌方限价了，最后一次75折务必珍惜，毕竟莱伯妮差0.1折都少了好多银子呢。</p><p style="text-align: start;"><span><span><span>推荐单品：</span></span></span></p><p style="text-align: start;"><span><span>La Prairie 莱珀妮 琼贵鱼子精华保湿面霜 50ml</span></span></p><p style="text-align: start;">用一次就舍弃不了的顶级贵妇级面霜之一!乳黄色的质地，仔细看还透着bling，是细腻的铂金感，emmm看着就很贵。好推开，不油腻，内含LP特有的鱼子精华、活细胞精华、海藻蛋白以及一众植物萃取精华，这一切的目的都是为了激发胶原蛋白再生，并且深层修护净化肌肤，拯救熬夜脸。</p><p style="text-align: start;">抹完之后肌肤立马神奇的像小baby一样柔软细腻，紧肤效果没话说，只用一点就可以让全脸拥有足够的营养，努力赚钱的目的大概就是为了买这样贵仙仙的护肤品吧?</p><p style="text-align: start;"><span><span>La Prairie 莱珀妮 黄金反重力精华 40ml</span></span></p><p style="text-align: start;">进阶版的反重力精华，被称为“瓶装迷你拉皮术”，配方中含有高级肽和黄金微粒，搭配卓越的抗老技术，对紧致面部轮廓和淡化细纹效果明显，用过之后肤色变得均匀又透亮，还有淡化色斑和老年斑的作用，可以说贵得有理有据。</p><p style="text-align: start;"><span><span>La Prairie 莱珀妮补水保湿紧肤面膜 50ml</span></span></p><p style="text-align: start;">作为LP加入门级系列，价格相对友好，但同样能让你享受到贵妇级护肤的享受，你值得拥有。特点是补水效果非常快，内含浓缩的胶原蛋白精华，敷5分钟即可让皮肤喝饱水，更厉害的是不像一般面膜这样只是浮于表面的补水，而是从肌肤底层做功课，深度补水，帮皮肤牢牢锁住水分。眼看着干燥的秋天差不多要来了，补水工作要提上日程哦!</p><p style="text-align: start;"><span><span><span>推荐品牌八：</span>Doppelherz 双心</span></span></p><p style="text-align: start;"><span><span><span>推荐单品：</span></span></span></p><p style="text-align: start;"><span><span>Doppelherz 胶原蛋白美容口服液 30X25 ml</span></span></p><p style="text-align: start;">我们都知道，女人的脸蛋儿最依赖的就是胶原蛋白，这是年轻的秘诀。过了25岁，胶原蛋白流失速度越来越快，毛孔粗大、肤色暗沉等问题也随之而来。当我们下血本败了一桌子护肤品时，千万不要忘了内调，坚定不移的选择双心胶原蛋白，除了对德国保健品的信任，还有它一点不弄虚作假的含量：每只含2.5g胶原蛋白肽，这点非常重要，因为单位数值小，更容易被吸收。酸酸甜甜的，早上空腹或每晚睡前自怼一只，气色会明显变好，毛孔粗大、皮肤粗糙都肉眼可见的改善啊~</p><p style="text-align: start;"><span><span>Doppelherz 双心大蒜精胶囊480粒</span></span></p><p style="text-align: start;">以德国人刚正不阿的尿性，双心大蒜精能火到现在并且口碑销量通通飘红就能够看出这款保健品的良心。都知道大蒜对身体好，降三高、提高免疫力。但是整天吃大蒜怎么受得了，这款大蒜精一颗胶囊相当于10颗大蒜，吃后没有异味。同时还添加了榭寄生、山楂精油提取物，改善肠胃、增强体质。特别适合三高人群、常熬夜人群、免疫力差容易感冒的人群。家中常备一瓶，全家人都可以分享，健康当然是要一起拥有。</p><p style="text-align: start;">作为首家直邮中国的德国百货零售电商之一，德国BA保镖商城自上线中文官网后，便一直致力于为更多中文消费者提供本土化服务。不仅有中文页面和中文客服服务，还支持银联、支付宝、微信这样的本土化的支付工具，更重要的一点是德国BA保镖商城奶粉辅食、欧洲保健品、护肤美妆用品、家居日用品、美食等种类齐全，非常受中国用户喜欢的Aptamil爱他美、HIPP、Doppelherz双心、理肤泉、德国世家、香奈儿等数十个大牌7万多种商品可直邮中国，全程可物流追踪，价格与欧洲同步，非常的方便又省钱，让消费者很轻松地就能享受到英淘的乐趣。不管是初涉海淘还是对于资深海淘党来说，德国BA保镖商城都是便利不过的英淘友好直邮门户。</p>', 2, 3, 50, 1534494539),
(18, '《镇魂街》来了！《少年三国志》首次联动今日揭晓', '', '《镇魂街》来了！《少年三国志》首次联动今日揭晓', '', '', '', '', 60, '<p style="text-align: start;">现象级手游《少年三国志》与热血国漫大作《镇魂街》的联动今日正式揭晓，官方IP联动专题站曝光了超燃混剪动画、限时剧情副本、绝版限定变装、许辰《镇魂街》漫画番外篇等诸多内容。同时，联动版本“圣将镇魂”将于8月24日正式登场，并会在美术、UI等方面进行革新，融入《镇魂街》元素，给予玩家全新的感官体验!</p><center><img alt="" id="0d7d135eb0a58cc9e91c16b38a28e9f0_img_6347" src="http://www.cnfina.com/uploadfile/2018/0817/20180817112711870.png?s=finecms" width="554" height="303"></center><p style="text-align: center;">《少年三国志》X《镇魂街》IP联动今日开启</p><p style="text-align: start;"><strong><span>助力</span></strong><strong><span>活动</span></strong><strong><span><span>成功 &nbsp;</span><span>全服</span></span></strong><strong><span>发</span></strong><strong><span>豪礼</span></strong></p><center><img alt="" id="0d7d135eb0a58cc9e91c16b38a28e9f0_img_6348" src="http://www.cnfina.com/uploadfile/2018/0817/20180817112718698.png?s=finecms" width="351" height="565"></center><p style="text-align: center;">人气助力活动达成</p><p style="text-align: start;">《少年三国志》首次联动的消息一经曝光，便得到了玩家的广泛关注。在为期四天的助力活动之中，超过50万玩家参与了人气集结，最终解锁了暗金宠碎片、特级神兵魂石等逾16000元宝的全服礼包，服务器开服七日以上的玩家皆可在游戏的领奖中心查收奖励。</p><p style="text-align: start;"><strong><span>联动</span></strong><strong><span>混剪动画</span></strong><span>&nbsp;</span><strong><span>&nbsp;<span>激燃</span></span></strong><strong><span>战三国</span></strong></p><center><img alt="" id="0d7d135eb0a58cc9e91c16b38a28e9f0_img_6349" src="http://www.cnfina.com/uploadfile/2018/0817/20180817112728690.png?s=finecms" width="554" height="333"></center><p style="text-align: center;">超燃混剪动画镜头</p><p style="text-align: start;">除了礼包奖励外，在《少年三国志》X《镇魂街》IP联动专题页上，还曝光了一段超燃的动画混剪视频。该视频在《镇魂街》中的经典片段中穿插入了少年英雄人物群像，再配以《少年三国志》三周年主题曲《共谋江山》，使得整个视频更加激燃。</p><p style="text-align: start;"><strong><span>限时</span></strong><strong><span>副本</span></strong><strong><span><span>开启&nbsp;</span><span>&nbsp;</span><span>拯救</span></span></strong><strong><span>曹氏兄弟</span></strong></p><center><img alt="" id="0d7d135eb0a58cc9e91c16b38a28e9f0_img_6350" src="http://www.cnfina.com/uploadfile/2018/0817/20180817112736727.png?s=finecms" width="554" height="344"></center><p style="text-align: center;">玩家可在专题页上浏览联动副本剧情</p><p style="text-align: start;">此外，《少年三国志》X《镇魂街》限时联动副本将于8月24日正式开启，该活动副本以镇魂街联动剧情故事为背景，玩家在选择关卡后即进入到剧情副本之中。玩家要通过与NPC对话、完成关卡任务、击败关卡BOSS等形式，帮助曹焱兵和曹玄亮回到“镇魂街”世界。玩家可在通关过程中获得镇魂币，可用于兑换丰富的养成资源和道具。</p><p style="text-align: start;"><strong><span>绝版</span></strong><strong><span>限定变装</span></strong><strong><span><span>曝光</span>&nbsp;&nbsp;<span>参与免费赢取</span></span></strong></p><center><img alt="" id="0d7d135eb0a58cc9e91c16b38a28e9f0_img_6351" src="http://www.cnfina.com/uploadfile/2018/0817/20180817112744181.png?s=finecms" width="554" height="360"></center><p style="text-align: center;">《镇魂街》人气角色限定变装</p><p style="text-align: start;">同时，《少年三国志》IP联动的绝版限定变装也在该专题页中首次曝光。本次联动变装一共推出了“曹焱兵”、“曹玄亮”、“典韦”、“于禁”、“许褚”五位人气角色的限定变装。玩家只需要通过参与游戏内分享拼图活动、剧情副本、铸神像活动等方式即可免费赢取。</p><center><img alt="" id="0d7d135eb0a58cc9e91c16b38a28e9f0_img_6352" src="http://www.cnfina.com/uploadfile/2018/0817/20180817112750611.png?s=finecms" width="351" height="495"></center><p style="text-align: center;">联动漫画即将登场</p><p style="text-align: start;">除了以上活动和内容外，许辰老师执笔的《镇魂街》联动番外、B站知名UP凉风制作的联动趣味视频等内容也将陆续曝光。更多内容，请关注官方的后续资讯。</p>', 2, 3, 50, 1534494732),
(19, '苏宁金融818有保障：七夕为你组CP 购延保送电影票', '', '', '', '', '', '', 0, '<p style="text-align: start;">在苏宁818发烧购物节持续火爆半个月后，目前即将进入“最燃点”，8月17日徐庄苏宁易购广场将隆重开业，苏宁头号买家发烧夜也将拉开帷幕，苏宁易购线上商城也是钜惠不断。家电类产品作为818发烧购物节的主打产品，在推出巨大优惠力度的同时，又有苏宁金融提供的延保服务保驾护航，8月17日当天线上购家电买延保即有机会获得电影票一张。</p><center><img id="0d7d135eb0a58cc9e91c16b38a28e9f0_img_6322" src="http://www.wm927.com/uploadfile/ueditor/image/20180817/1534473695665607.png" title="1534473695665607.png" alt="1.png"></center><p style="text-align: start;">8月17日是中国传统的七夕佳节，苏宁易购线上商城“家电燃爆，火力全开”，除了推出限时裸价，每满1000减100等优惠外，当天消费者线上购买家电，同时选购延保服务(全保修产品)满100元即可获得电影票一张，活动结束后无产生退货，电影电子票将在一周后发放至购买者的手机中。</p><p style="text-align: start;">消费者购买了苏宁延保后，只要家电产品在延保服务期内，出了问题一通电话即可预约师傅免费上门检测、维修;当机器维修不好或超过维修次数，还可享受换机服务，方便快捷而又有保障。</p><p style="text-align: start;">从2008年以来，苏宁延保服务已经走过十年历程，服务日益精细化、创新化，从手机意外保障类延保、手机盗抢险到空调压缩机10年质保、即坏即换、液晶电视屏幕置换保障等系列产品，满足了消费者不同时期的需求，体现了消费品质服务的大升级，更体现了智慧零售的全新到来。</p><p style="text-align: start;">未来，苏宁金融将围绕智慧零售大开发的核心，开展智慧金融、品质金融、普惠金融三大行动，全面提升苏宁延保等产品服务水平，不断优化消费者金融体验，推动智慧零售更快发展。</p>', 2, 3, 50, 1534494761),
(20, 'hahahaha', '', '', '', '', '', '', 0, 'asdfasdf', 2, 3, 50, 1534494907);

-- --------------------------------------------------------

--
-- 表的结构 `tpcms_auth_group`
--

CREATE TABLE IF NOT EXISTS `tpcms_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `rules` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `tpcms_auth_group`
--

INSERT INTO `tpcms_auth_group` (`id`, `title`, `status`, `rules`) VALUES
(1, '超级管理员', 1, '1,3,5,7,8,9,10,25,26'),
(2, '栏目管理员', 1, '11,12,13,14,15,16,17,18,19,20,21,22,23,24');

-- --------------------------------------------------------

--
-- 表的结构 `tpcms_auth_group_access`
--

CREATE TABLE IF NOT EXISTS `tpcms_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  KEY `uid` (`uid`,`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tpcms_auth_group_access`
--

INSERT INTO `tpcms_auth_group_access` (`uid`, `group_id`) VALUES
(7, 2);

-- --------------------------------------------------------

--
-- 表的结构 `tpcms_auth_rule`
--

CREATE TABLE IF NOT EXISTS `tpcms_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `title` varchar(20) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL,
  `condition` varchar(100) NOT NULL,
  `pid` mediumint(9) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `tpcms_auth_rule`
--

INSERT INTO `tpcms_auth_rule` (`id`, `name`, `title`, `type`, `status`, `condition`, `pid`) VALUES
(11, 'admin/Conf', '系统配置', 1, 1, '', 0),
(12, 'admin/Conf/conflst', '系统基本参数', 1, 1, '', 11),
(13, 'admin/Conf/lst', '配置管理', 1, 1, '', 11),
(14, 'admin/Admin', '网站管理', 1, 1, '', 0),
(15, 'admin/Cate/index', '栏目管理', 1, 1, '', 14),
(16, 'admin/Model', '模型管理', 1, 1, '', 0),
(17, 'admin/Model/add', '模型添加', 1, 1, '', 16),
(18, 'admin/Model/dele', '模型删除', 1, 1, '', 16),
(19, 'admin/Admin', '管理员', 1, 1, '', 0),
(20, 'admin/Admin/lst', '管理员列表', 1, 1, '', 19),
(21, 'admin/Index', '主页', 1, 1, '', 0),
(22, 'admin/Index/index', '主页页面', 1, 1, '', 21),
(23, 'admin/AuthRule', '权限', 1, 1, '', 0),
(24, 'admin/AuthRule/lst', '权限列表', 1, 1, '', 23),
(25, 'admin/AuthRule/add', '权限添加', 1, 1, '', 23),
(26, 'admin/AuthRule/dele', '权限删除', 1, 1, '', 23);

-- --------------------------------------------------------

--
-- 表的结构 `tpcms_cate`
--

CREATE TABLE IF NOT EXISTS `tpcms_cate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(30) NOT NULL,
  `title` varchar(150) NOT NULL,
  `keywords` varchar(150) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `img` varchar(150) NOT NULL,
  `cate_attr` tinyint(1) NOT NULL DEFAULT '1',
  `list_tmp` varchar(60) NOT NULL,
  `index_tmp` varchar(60) NOT NULL,
  `article_tmp` varchar(60) NOT NULL,
  `sort` smallint(6) NOT NULL,
  `model_id` mediumint(8) unsigned NOT NULL DEFAULT '1',
  `pid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `tpcms_cate`
--

INSERT INTO `tpcms_cate` (`id`, `cate_name`, `title`, `keywords`, `desc`, `content`, `status`, `img`, `cate_attr`, `list_tmp`, `index_tmp`, `article_tmp`, `sort`, `model_id`, `pid`) VALUES
(1, '解决方案', '公司动态', '公司动态关键词', '公司动态描述', '<p>公司动态描述公司动态描述公司动态描述公司动态描述公司动态描述公司动态描述公司动态描述公司动态描述公司动态描述公司动态描述公司动态描述公司动态描述公司动态描述公司动态描述公司动态描述公司动态描述公司动态描述公司动态描述公司动态描述公司动态描述公司动态描述公司动态描述公司动态描述公司动态描述公司动态描述公司动态描述</p>', 1, 'uploads/20180814\\f1277c6de8486e0f77ddf798812d0e8b.jpg', 1, 'solution.html', 'index_news.html', 'article_news.html', 49, 1, 0),
(2, '新闻资讯', 'sadf', 'dfgdf', 'dfgdf', 'sdfgdsfgsdfgsdfgsdfg', 1, '', 1, 'list.html', 'list.html', 'article.html', 50, 3, 0),
(3, '网站建设', '', '', '', '', 1, '', 1, 'website.html', 'index_tmp.html', 'article_tmp.html', 51, 3, 0),
(4, 'APP开发', '', '', '', '', 1, '', 1, 'app.html', 'index_tmp.html', 'article_tmp.html', 50, 4, 0),
(6, '微信开发', '', '', '', '', 1, '', 1, 'wechat.html', 'index_tmp.html', 'article_tmp.html', 50, 6, 0),
(8, 'app案例', '', '', '', '', 1, '', 1, 'list_tmp.html', 'index_tmp.html', 'article_tmp.html', 50, 1, 3),
(9, '案例', '', '', '', '', 1, '', 1, 'case.html', 'index_tmp.html', 'article_tmp.html', 50, 2, 0);

-- --------------------------------------------------------

--
-- 表的结构 `tpcms_conf`
--

CREATE TABLE IF NOT EXISTS `tpcms_conf` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '配置项id',
  `cname` varchar(60) NOT NULL COMMENT '配置中文名称',
  `ename` varchar(60) NOT NULL COMMENT '配置英文名称',
  `value` text NOT NULL COMMENT '默认值',
  `values` varchar(255) NOT NULL COMMENT '可选值',
  `dt_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1、输入框2、单选3、复选4、下拉菜单5、文本域6、附件',
  `cf_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1、基本2、联系方式3、SEO设置',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='站点配置' AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `tpcms_conf`
--

INSERT INTO `tpcms_conf` (`id`, `cname`, `ename`, `value`, `values`, `dt_type`, `cf_type`) VALUES
(1, '站点名称', 'webname', '我的网站', '你的网站', 1, 1),
(3, '站点根网址', 'weburl', 'localhost', '', 1, 1),
(2, '网站名称', 'webname', '我的网站', '', 1, 1),
(4, '图片/文件上传默认路径', 'uploadFile', 'uploads', '', 1, 1),
(5, '模板默认风格', 'template_style', 'default', '', 1, 1),
(6, '网站版权信息', 'banquan', '黔ICP000000号', '', 1, 1),
(7, '站点默认关键字', 'keywords', '网站建设 APP开发 网站优化', '', 1, 3),
(8, '站点描述', 'description', '哈哈哈哈看了就会立刻', '', 2, 3),
(9, '网站备案号', 'beianhao', '', '', 1, 1),
(11, '系统邮箱', 'email', '410380770@qq.com', '', 1, 1),
(12, '图片是否有水印', 'img_switch', '是', '是,否', 3, 1),
(13, '缓存', 'cache', '关闭', '开启,关闭', 3, 1),
(14, '手机', 'sj', '18684177241', '', 1, 2),
(15, '座机', 'zj', '0851-8888888', '', 1, 2),
(16, 'QQ号', 'qq', '410380770', '', 1, 2),
(17, '公司地址', 'address', '贵阳花果园', '', 1, 2),
(18, '网站logo', 'logo', 'uploads/20180814\\e36e2dfb98b13cbe266b2592e501fc1f.jpg', '', 6, 1);

-- --------------------------------------------------------

--
-- 表的结构 `tpcms_goods`
--

CREATE TABLE IF NOT EXISTS `tpcms_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_name` varchar(60) NOT NULL,
  `goods_sn` char(16) NOT NULL COMMENT '商品编号',
  `original` varchar(100) NOT NULL COMMENT '原图',
  `sm_thumb` varchar(100) NOT NULL COMMENT '小缩略图',
  `mid_thimb` varchar(100) NOT NULL COMMENT '中缩略图',
  `max_thumb` varchar(100) NOT NULL COMMENT '大缩略图',
  `market_price` decimal(10,2) NOT NULL COMMENT '市场价',
  `shop_price` decimal(10,2) NOT NULL COMMENT '本店价',
  `onsale` tinyint(1) NOT NULL DEFAULT '1',
  `cate_id` mediumint(9) NOT NULL,
  `brand_id` mediumint(9) NOT NULL,
  `type_id` mediumint(9) NOT NULL,
  `goods_desc` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cate_id` (`cate_id`,`brand_id`,`type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tpcms_goods_attr`
--

CREATE TABLE IF NOT EXISTS `tpcms_goods_attr` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `attr_name` varchar(30) NOT NULL COMMENT '属性名称',
  `attr_type` enum('唯一','单选') NOT NULL COMMENT '属性类型',
  `attr_values` text NOT NULL,
  `tid` mediumint(9) NOT NULL COMMENT '属于哪个商品类型',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='商品属性表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tpcms_goods_brand`
--

CREATE TABLE IF NOT EXISTS `tpcms_goods_brand` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `tpcms_goods_brand`
--

INSERT INTO `tpcms_goods_brand` (`id`, `name`, `logo`, `url`) VALUES
(2, '阿斯蒂芬546456', '', '4654456456'),
(4, '的风格和让微软', '', '额我热温热'),
(5, '股份合计', '', '法国海军'),
(7, '环境规划', '', '会尽快改好就'),
(9, '的风格和f''g''h', '', '发更好的风格和的风格'),
(10, 'sdfgdf', '', 'sdfgsdfg'),
(11, 'asdsdf', '', 'adsfasdf'),
(12, 'asdf', '', 'fgdsfgsdfg'),
(13, 'fdgsdf', '', 'dsfgsdfg'),
(14, 'jghj', '', 'gfhjfghj'),
(15, 'dfghdfgh', '', 'dfghdfgh'),
(16, 'sadf', '', 'fghdfgh'),
(17, '戴尔', '', 'http:www.baidu.com'),
(18, 'cess', '', 'sdfasdf'),
(19, 'ujkhjk', 'uploads/20180821\\9395ce4319737b251b7b4e7eac28027d.jpg', 'ghjkghjk'),
(20, 'asdfasdf', 'uploads/20180821\\ada437b52be22cdf8919f6b07bb6c2a6.jpg', 'fsdfasdf');

-- --------------------------------------------------------

--
-- 表的结构 `tpcms_goods_cate`
--

CREATE TABLE IF NOT EXISTS `tpcms_goods_cate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL COMMENT '分类名称',
  `pid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='商品分类' AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `tpcms_goods_cate`
--

INSERT INTO `tpcms_goods_cate` (`id`, `name`, `pid`) VALUES
(1, '家用电器', 0),
(2, '电脑/办公', 0),
(3, '户外', 0),
(4, '鞋包', 0),
(5, '手机/数码', 0),
(6, '食品/酒类', 0),
(7, '手机', 5),
(8, '老人机', 5),
(9, '相机', 5),
(10, '单反', 5),
(11, '电视', 1),
(12, '空调', 1),
(13, '洗衣机', 1),
(14, '整机', 2),
(15, '电脑配件', 2),
(16, '游戏设备', 2),
(17, '办公设备', 2);

-- --------------------------------------------------------

--
-- 表的结构 `tpcms_goods_product`
--

CREATE TABLE IF NOT EXISTS `tpcms_goods_product` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) NOT NULL,
  `goods_num` int(11) NOT NULL COMMENT '库存量',
  `goods_attr` varchar(150) NOT NULL COMMENT '商品属性',
  PRIMARY KEY (`id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='库存表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tpcms_goods_type`
--

CREATE TABLE IF NOT EXISTS `tpcms_goods_type` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='商品类型表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tpcms_house`
--

CREATE TABLE IF NOT EXISTS `tpcms_house` (
  `aid` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tpcms_images`
--

CREATE TABLE IF NOT EXISTS `tpcms_images` (
  `aid` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tpcms_member`
--

CREATE TABLE IF NOT EXISTS `tpcms_member` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `check_email` tinyint(1) NOT NULL DEFAULT '0',
  `email_str` varchar(32) NOT NULL,
  `sex` tinyint(1) NOT NULL DEFAULT '0',
  `regtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tpcms_member_level`
--

CREATE TABLE IF NOT EXISTS `tpcms_member_level` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `level` varchar(30) NOT NULL,
  `point_min` int(11) NOT NULL,
  `point_max` int(11) NOT NULL,
  `rate` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tpcms_member_price`
--

CREATE TABLE IF NOT EXISTS `tpcms_member_price` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `price` decimal(10,2) NOT NULL,
  `level_id` mediumint(9) NOT NULL,
  `goods_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `level_id` (`level_id`,`goods_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tpcms_model`
--

CREATE TABLE IF NOT EXISTS `tpcms_model` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `model_name` varchar(60) NOT NULL,
  `table_name` varchar(60) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `tpcms_model`
--

INSERT INTO `tpcms_model` (`id`, `model_name`, `table_name`, `status`) VALUES
(1, '文章模型', 'article', 0),
(2, '商品模型', 'shop', 1),
(3, '商品模型', 'shop', 1),
(4, '电影模型', 'movies', 1),
(5, '房屋出租', 'house', 1),
(6, '图片集', 'images', 1);

-- --------------------------------------------------------

--
-- 表的结构 `tpcms_model_fields`
--

CREATE TABLE IF NOT EXISTS `tpcms_model_fields` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `field_cname` varchar(60) NOT NULL,
  `field_ename` varchar(60) NOT NULL,
  `mid` int(11) NOT NULL COMMENT '模型id',
  `field_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '字段类型',
  `field_value` varchar(150) NOT NULL COMMENT '默认值',
  PRIMARY KEY (`id`),
  KEY `mid` (`mid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `tpcms_model_fields`
--

INSERT INTO `tpcms_model_fields` (`id`, `field_cname`, `field_ename`, `mid`, `field_type`, `field_value`) VALUES
(3, '演员', 'actor', 4, 1, ''),
(21, '商品颜色', 'color', 3, 1, ''),
(8, '简介', 'desc', 4, 2, ''),
(10, '时间', 'time', 4, 1, ''),
(11, '上映时间', 'go_time', 4, 1, ''),
(12, '哈哈哈', 'haha', 4, 1, ''),
(13, '的所发生的', 'sdfsdf', 4, 1, ''),
(14, '第三方', 'sdf', 4, 1, ''),
(15, '我的字段', 'myfield', 4, 1, ''),
(16, '阿斯蒂芬', 'asdf', 4, 1, ''),
(17, '防守打法', 'dfgsdfg', 4, 1, ''),
(18, '迪克迪克', 'dkdk', 1, 1, ''),
(19, '阿西八', 'axiba', 4, 1, ''),
(20, '杀杀杀', 'sss', 4, 1, ''),
(22, '价格', 'jiage', 3, 7, ''),
(23, '型号', 'xinghao', 3, 5, '6+64,8+128,8+256,4+64'),
(24, '上市时间', 'gotime', 3, 2, ''),
(25, '是否包邮', 'baoyou', 3, 3, '是,否'),
(26, '服务', 'server', 3, 4, '售后,1年保修,三包,7天无理由退换货');

-- --------------------------------------------------------

--
-- 表的结构 `tpcms_movies`
--

CREATE TABLE IF NOT EXISTS `tpcms_movies` (
  `aid` int(10) unsigned NOT NULL,
  `actor` varchar(150) NOT NULL DEFAULT '',
  `jianjie` varchar(600) NOT NULL DEFAULT '',
  `time` varchar(150) NOT NULL DEFAULT '',
  `go_time` varchar(150) NOT NULL DEFAULT '',
  `haha` varchar(150) NOT NULL DEFAULT '',
  `sdfsdf` varchar(150) NOT NULL DEFAULT '',
  `sdf` varchar(150) NOT NULL DEFAULT '',
  `myfield` varchar(150) NOT NULL DEFAULT '',
  `asdf` varchar(150) NOT NULL DEFAULT '',
  `dfgsdfg` varchar(150) NOT NULL DEFAULT '',
  `axiba` varchar(150) NOT NULL DEFAULT '',
  `sss` varchar(150) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tpcms_shop`
--

CREATE TABLE IF NOT EXISTS `tpcms_shop` (
  `aid` int(10) unsigned NOT NULL,
  `color` varchar(150) NOT NULL DEFAULT '',
  `jiage` float NOT NULL DEFAULT '0',
  `xinghao` varchar(600) NOT NULL DEFAULT '',
  `gotime` varchar(600) NOT NULL DEFAULT '',
  `baoyou` varchar(150) NOT NULL DEFAULT '',
  `server` varchar(150) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tpcms_shop`
--

INSERT INTO `tpcms_shop` (`aid`, `color`, `jiage`, `xinghao`, `gotime`, `baoyou`, `server`) VALUES
(0, '任务', 0, '8+256', '而而而而而', '是', '1年保修,三包'),
(9, '黑色', 180, '8+256', '2018-07-06', '是', '售后,1年保修,三包,7天无理由退换货'),
(10, '黑色', 180, '8+256', '2018-07-06', '是', '售后,1年保修,三包,7天无理由退换货'),
(11, '白色', 80060, '8+128', 'sdfgsdfgsdfg', '否', '1年保修'),
(12, 'sdfgsdfg', 80, '4+64', 'sdfgsdfgsdfg', '否', '1年保修,三包'),
(0, 'sdfg', 0, '4+64', 'sdfgsdfg', '是', '售后'),
(0, 'asdfa', 0, '6+64', 'asdfasdfasdf', '是', '售后,1年保修'),
(0, '', 0, '8+128', '', '', ''),
(0, '', 0, '', '', '', ''),
(0, '', 0, '', '', '', ''),
(0, '', 0, '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
