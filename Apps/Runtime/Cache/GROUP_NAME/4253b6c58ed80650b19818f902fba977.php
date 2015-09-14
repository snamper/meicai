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
    <div class="kefu_top">客服：400-800-8050</div>
    <div id="header" class="header_bg">
        <div class="header_top">
            <div class="login_reg login_regcontent">
                <a href="<?php echo U('Member/login');?>">登录</a>
                <span>|</span>
                <a href="<?php echo U('Member/register');?>">注册</a>
            </div>
            <div class="logo">
                <a href="index.html"><img src="./Public/images/logo.png" /><span>美才网</span></a>
            </div>
            <ul class="head_ul">
                <li><a href="/">首页</a></li>
                <li><a href="<?php echo U('Meicai/index');?>">美才库</a></li>
                <li class="dianbo"><a href="#">点拨</a><img src="./Public/images/sirenzhiku.png" class="sirenzhiku" /></li>
                <li><a href="#">签约导师</a></li>
            </ul>
        </div>
    </div>
    <!--header end-->
<div id="main">
    <ul class="out_liebiao">
        <li>全部岗位
            <img src="./Public/images/heisexiala.png">
            <ul class="in_items">
                <li><a href="#">销售</a></li>
                <li><a href="#">助理</a></li>
                <li><a href="#">前台</a></li>
                <li><a href="#">电话员</a></li>
            </ul>
        </li>
        <li>全部年龄
            <img src="./Public/images/heisexiala.png">
            <ul class="in_items">
                <li><a href="#">18~25</a></li>
                <li><a href="#">26~30</a></li>
                <li><a href="#">31~35</a></li>
                <li><a href="#">36~40</a></li>
            </ul>
        </li>
        <li>学校学历
            <img src="./Public/images/heisexiala.png">
            <ul class="in_items">
                <li><a href="#">武汉大学</a></li>
                <li><a href="#">华中农业大学</a></li>
                <li><a href="#">中南名族大学</a></li>
                <li><a href="#">华中师范大学</a></li>
            </ul>
        </li>
        <li>全部颜值
            <img src="./Public/images/heisexiala.png">
            <ul class="in_items">
                <li><a href="#">50~60分</a></li>
                <li><a href="#">60~70分</a></li>
                <li><a href="#">70~80分</a></li>
                <li><a href="#">80~90分</a></li>
                <li><a href="#">90~100分</a></li>
            </ul>
        </li>
        <li>全部特长
            <img src="./Public/images/heisexiala.png">
            <ul class="in_items">
                <li><a href="#">会唱歌</a></li>
                <li><a href="#">会喝酒</a></li>
                <li><a href="#">会开车</a></li>
                <li><a href="#">会跳舞</a></li>
                <li><a href="#">会画画</a></li>
            </ul>
        </li>
    </ul>

    <ul class="out_liebiao checklist">
        <li><input type="checkbox" />全部人才</li>
        <li><input type="checkbox" />无不良经历承诺</li>
        <li><input type="checkbox" />准时面试</li>
        <li><input type="checkbox" />简历真实</li>
        <li><input type="checkbox" />接受岗位调剂</li>
    </ul>

    <div class="xiaomeibox">
        <img src="./Public/images/xiaomei.png" class="xiaomei">小美为您找到<span>1891</span>份简历
        <ul class="paixu">
            <li><a href="#">默认排序</a></li>
            <li><a href="#">年龄<img src="./Public/images/xiangshang.png"></a></li>
            <li><a href="#">工作经历<img src="./Public/images/xiangshang.png"</a></li>
            <li><a href="#">上岗时间<img src="./Public/images/xiangshang.png"></a></li>
        </ul>
    </div>

    <div class="xinxibox">
        <div class="perinfobox">
            <a href="<?php echo U('Meicai/show');?>"><img src="./Public/images/rencai3.png"></a>
            <div class="rencaiinfo">
                <div class="baseinfo">
                    <span>王小姐</span>
                    <span>行政助理</span>
                    <span>工作3年</span>
                    <span>26岁</span>
                    <span>武汉</span>
                </div>
                <div class="labelbox labelboxku">
                    <div class="biaoqianbox">
				        	<span id="biaoqian">标签：<span>
					        <span>形象好</span>
					        <span>气质佳</span>
					        <span>会应酬</span>
					        <span>会开车</span>
                    </div>
                    <span>2010.06-2013.06</span>
                    <span>武汉大学</span>
                    <span>市场营销</span>
                </div>
            </div>
            <div class="jifen">￥99美分</div>
            <a href="enterpriseCollect.html" class="jiarushoucang">加入收藏</a>
            <div class="guyongta">
                <a href="meicaiOrder.html">雇用她</a>
            </div>
        </div>
        <div class="perinfobox">
            <a href="meicaikudetailsBefore.html"><img src="./Public/images/rencai5.png"></a>
            <div class="rencaiinfo">
                <div class="baseinfo">
                    <span>王小姐</span>
                    <span>行政助理</span>
                    <span>工作3年</span>
                    <span>26岁</span>
                    <span>武汉</span>
                </div>
                <div class="labelbox labelboxku">
                    <div class="biaoqianbox">
				        	<span id="biaoqian">标签：<span>
					        <span>形象好</span>
					        <span>气质佳</span>
					        <span>会应酬</span>
					        <span>会开车</span>
                    </div>
                    <span>2010.06-2013.06</span>
                    <span>武汉大学</span>
                    <span>市场营销</span>
                </div>
            </div>
            <div class="jifen">￥99美分</div>
            <a href="enterpriseCollect.html" class="jiarushoucang">加入收藏</a>
            <div class="guyongta">
                <a href="meicaiOrder.html">雇用她</a>
            </div>
        </div>
        <div class="perinfobox">
            <a href="meicaikudetailsBefore.html"><img src="./Public/images/rencai3.png"></a>
            <div class="rencaiinfo">
                <div class="baseinfo">
                    <span>王小姐</span>
                    <span>行政助理</span>
                    <span>工作3年</span>
                    <span>26岁</span>
                    <span>武汉</span>
                </div>
                <div class="labelbox labelboxku">
                    <div class="biaoqianbox">
				        	<span id="biaoqian">标签：<span>
					        <span>形象好</span>
					        <span>气质佳</span>
					        <span>会应酬</span>
					        <span>会开车</span>
                    </div>
                    <span>2010.06-2013.06</span>
                    <span>武汉大学</span>
                    <span>市场营销</span>
                </div>
            </div>
            <div class="jifen">￥99美分</div>
            <a href="enterpriseCollect.html" class="jiarushoucang">加入收藏</a>
            <div class="guyongta">
                <a href="meicaiOrder.html">雇用她</a>
            </div>
        </div>
    </div>
    <!--rencaiinfo end-->
    <ul class="page">
        <li class="wenzipage"><a href="#">首页</a></li>
        <li class="wenzipage"><a href="#">上一页</a></li>
        <li class="pagenum"><a href="#">1</a></li>
        <li class="pagenum"><a href="#">2</a></li>
        <li class="pagenum"><a href="#">3</a></li>
        <li class="pagenum"><a href="#">4</a></li>
        <li class="wenzipage"><a href="#">下一页</a></li>
        <li class="wenzipage"><a href="#">末页</a></li>
    </ul>
</div>
<!--main end-->
<div id="footer">
    <div class="copyright">
        <p>Copyright © 2015 <a href="index.html">www.51meicai.com</a> 版权所有 鄂ICP备14003297号-1</p>
    </div>
</div>
<!--footer end-->
</div>
</body>
</html>