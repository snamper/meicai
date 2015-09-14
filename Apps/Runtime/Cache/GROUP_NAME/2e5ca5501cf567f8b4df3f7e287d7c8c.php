<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo ($title); ?></title>
    <meta name="keywords" content="<?php echo ($keywords); ?>" />
    <meta name="description" content="<?php echo ($description); ?>" />
    <link rel="stylesheet" href="./Public/css/newmeicai.css" type="text/css" />
    <script type="text/javascript" src="./Public/js/jquery-1.8.3.js"></script>
    <script type="text/javascript" src="./Public/js/meicai_index.js"></script>
</head>
<body>
<div id="container">
    <div id="header">
        <div class="header_top">
            <div class="login_reg">
                <a href="<?php echo U('Member/login');?>">登录</a>
                <span>|</span>
                <a href="<?php echo U('Member/register');?>">注册</a>
            </div>
            <div class="logo">
                <a href="index.html"><img src="./Public/images/meicaixinlogo.png" class="indexlogo"/><span>美才网</span></a>
            </div>
            <ul class="head_ul">
                <li><a href="/">首页</a></li>
                <li><a href="<?php echo U('Meicai/index');?>">美才库</a></li>
                <li class="dianbo"><a href="#">点拨</a><img src="./Public/images/sirenzhiku.png" class="sirenzhiku indexsirenzhiku" /></li>
                <li><a href="#">签约导师</a></li>
            </ul>
        </div>
        <div id="banner">
            <img src="./Public/images/haibao.png" />
        </div>
    </div>
    <!--header end-->
<div id="main">
    <div class="remenfuwubox">
        <hr class="indexxian" />
        <p class="remen">热门服务</p>
    </div>
    <div class="index_mid">
        <img src="./Public/images/meicaiwangshulogo.png" class="mid_logo" />
        <div class="wenzibox">
            <ul class="items">
                <li>
                    <p class="wenzitop">招聘美女人才从校园开始</p>
                    <p class="wenzibot">塑造企业形象、塑造员工精神风貌</p>
                </li>
                <li>
                    <p class="wenzitop wenzibota">委托猎头</p>
                    <p class="wenzibot wenzibotb">您可以网购的猎头服务，专业、女性、人才</p>
                </li>
            </ul>
        </div>
        <div class="dingzhibox">
            <div class="dingzhixian"></div>
            <div class="dingzhirencai"><a href="meicaiSchGoddessA.html" id="dingzhi">定制人才</a></div>
            <!--当左边是名校跳转到名校女神，当左边是猎头跳到猎头-->
            <div class="dingzhixian"></div>
        </div>
    </div>
    <div class="jiantoubox">
        <!--在寻找名校女神与委托猎头两种服务之间切换-->
        <img src="./Public/images/zuojiantou.png" class="zuojiantoubox">
        <img src="./Public/images/youjiantou.png" class="youjiantoubox">
    </div>
    <div class="remenfuwubox">
        <hr class="indexxian" />
        <p class="remen">名师点拨</p>
    </div>
    <!--鼠标经过图片变暗，图片上面出现简介-->
    <div class="tupianbox">
        <a class="mingshi" href="#">
            <img src="./Public/images/mingshi1.png" class="firstImg"/>
            <div class="mingshijianjie"><p>这个人很出名1！</p></div>
        </a>
        <a class="mingshi" href="#">
            <img src="./Public/images/mingshi2.png" />
            <div class="mingshijianjie"><p>这个人很出名2！</p></div>
        </a>
        <a class="mingshi" href="#">
            <img src="./Public/images/mingshi3.png" />
            <div class="mingshijianjie"><p>这个人很出名3！</p></div>
        </a>
    </div>
    <div class="gengduomingshibox">
        <a href="#" >发现更多名师</a>
    </div>
    <div class="remenfuwubox">
        <hr class="indexxian" />
        <p class="remen">招聘流程</p>
    </div>
    <div class="buzhoubox"><img src="./Public/images/buzhou.png" /></div>
</div>
<!--main end-->
<div id="footer" class="footer_bg">
    <div class="footer_top">
        <div class="indexgsjianjie">
            <a href="meicaiInfo.html">公司简介</a>
        </div>
        <div class="wangzhi">
            <a href="#">51MEICAI.COM</a>
        </div>
        <div class="kefurexian">客服热线</div>
        <div class="dianhua">400-800-8050</div>
        <div class="shijian">服务时间：工作时间（8:10~17:00）</div>
        <div class="xinlangweibo">
            <a href="http://weibo.com/meicaibank"><img src="./Public/images/xinlangweibo.png" /></a>
        </div>
        <div class="weixin">
            <a href="http://weixin.sogou.com/gzh?openid=oIWsFty_Z1eO1wgj9ePFPULwdTGQ"><img src="./Public/images/weixin.png" /></a>
        </div>
        <div class="QQ">
            <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1785840857&site=qq&menu=yes"><img src="./Public/images/QQ.png"></a>
        </div>
    </div>
    <div class="copyright">
        <p>Copyright © 2015 <a href="index.html">www.51meicai.com</a> 版权所有 鄂ICP备14003297号-1</p>
    </div>
</div>
<!--footer end-->
</div>
</body>
</html>