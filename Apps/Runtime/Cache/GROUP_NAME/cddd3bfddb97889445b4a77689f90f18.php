<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($title); ?></title>
<meta name="keywords" content="<?php echo ($keywords); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />
<link href="../Public/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../Public/js/jquery.form.js"></script>
</head>
<body>

<div id="container1">
    <div id="header">
    	<div class="logo"><a href="__APP__"><img src="../Public/images/logo.jpg" /></a></div>
    </div>
    <div class="memberbox">
        
        <div class="memberleft">
            <div class="member_nav">会员中心</div>
<ul>
    <li><a href="<?php echo U('Member/index');?>">个人主页</a></li>
    <li><a href="<?php echo U('Member/profile');?>">修改资料</a></li>
    <li><a href="<?php echo U('Member/password');?>">修改密码</a></li>
    <li><a href="<?php echo U('Member/order');?>">订单查询</a></li>
    <li><a href="<?php echo U('Member/logout');?>">退出</a></li>
</ul>
        </div>
        <div class="memberright">
           <div class="member_detail">个人主页</div>
           <table border="0" cellspacing="3" cellpadding="3">
                <tbody>
                    <tr>
                        <th style="text-align: right;">用户名：</th>
                        <td style="text-align: left;"><?php echo ($data["account"]); ?></td>
                    </tr>
                    <tr>
                        <th style="text-align: right;">昵称：</th>
                        <td style="text-align: left;"><?php echo ($data["nickname"]); ?></td>
                    </tr>
                    <tr>
                        <th style="text-align: right;">电子邮箱：</th>
                        <td style="text-align: left;"><?php echo ($data["email"]); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
 
    </div>
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