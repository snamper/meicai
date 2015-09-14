<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>019个人中心个人简历</title>
	<link rel="stylesheet" href="./Public/css/newmeicai.css" type="text/css" charset="gb2312" />
	<script type="text/javascript" src="./Public/js/jquery-1.8.3.js"></script>
	<script type="text/javascript" src="./Public/js/meicai_picmove.js"></script>
</head>
<body>
<div id="container">
	<div class="kefu_top">客服：400-800-8050</div>
	<div id="header" class="header_bg">
		<div class="header_top">
			<div class="logo">
				<a href="index.html"><img src="./Public/images/logo.png" /><span>美才网</span></a>
			</div>
			<ul class="head_ul">
				<li><a href="index.html">首页</a></li>
				<li><a href="meicaiku.html">美才库</a></li>
				<li class="dianbo"><a href="#">点拨</a><img src="./Public/images/sirenzhiku.png" class="sirenzhiku" /></li>
				<li><a href="mentorApply.html">签约导师</a></li>
			</ul>
			<div class="head_yonghu">			
				<div class="yonghu">
		            <a href="personResume.html">
		            	<img src="./Public/images/yonghutubiao.png"><span>15527502180</span>
		            </a>
				</div>
		    	<ul class="xiala">
		    		<li><img src="./Public/images/xiala.png" />
		    		    <ul id="xialamenu">
			            	<li><a href="personMyjob.html">我的工作</a></li>
			            	<li><a href="personSerOrder.html">服务订单</a></li>
			            	<li><a href="personAccount.html">账户设置</a></li>
			            	<li><a href="login.html">退出账号</a></li>
			            </ul>
		    		</li>
		    	</ul>
		    </div>			
		</div>
	</div>
	<!--header end-->
	<div id="main">
		<div class="nav">
			<ul id="nav">
				<li><a href="index.html">首页</a></li>
				<li><a href="meicaiku.html">美才库</a></li>
				<li><a href="#">助理</a></li>
				<li><a href="#">秘书</a></li>
				<li><a href="#">文员</a></li>
				<li><a href="#">市场</a></li>
				<li><a href="#">销售</a></li>
				<li><a href="#">礼仪</a></li>
				<li><a href="#">行政</a></li>
				<li><a href="#">前台</a></li>
				<li><a href="#">模特</a></li>
			</ul>
		</div>
		<div class="resume">
			<ul class="left_menu perleft">
				<li><img src="./Public/images/gerenzhongxinlogo.png"><a href="personResume.html">个人中心</a></li>
				<li class="current"><img src="./Public/images/tianxiejianlilogo.png"><a href="personResume.html">简历填写</a></li>
				<li><img src="./Public/images/wodegongzuologo.png"><a href="personMyjob.html">我的工作</a></li>
				<li><img src="./Public/images/gerenzhongxinfuwudingdan.png"><a href="personSerOrder.html">服务订单</a></li>
				<li><img src="./Public/images/zhanghushezhi.png"><a href="personAccount.html">账户设置</a></li>		
			</ul>
			<div class="resume_left">
				<div id="pic_move" class="personpic">
					<ul class="items">  
						<li><img src="./Public/images/008meicaidingdanchonggong_06.png" alt=""></li>
						<li><img src="./Public/images/xuyao2.png" alt=""></li>
						<li><img src="./Public/images/xuyao3.png" alt=""></li>
					</ul>
			    	<a class="left_sicon"><img src="./Public/images/lefthuadong.png"></a>
			        <a class="right_sicon"><img src="./Public/images/righthuadong.png"></a>
			        <div class="yuanbox yuanboxa" id="picshunxu">
				    	<a href="#"></a>
				        <a href="#"></a>
				        <a href="#"></a>
			        </div>
		        </div>
			    <div class="dianjishangchuan">
				 	<input type='button' class='btn' value='+点击上传头像' />
				    <input type="file" name="fileField" class="file" id="fileField" size="28" onchange="document.getElementById('textfield').value=this.value" />				    
			    </div>
			    <div class="resume_checkbox">
				    <p>
					    <span>无不良经历承诺</span>
					    <input type="checkbox" name="test" value="" />
				    </p>			    
				    <p>
					    <span>准时面试</span>
					    <input type="checkbox" name="test" value="" />
				    </p>
				    <p>
					    <span>简历真实</span>
					    <input type="checkbox" name="test" value="" />
				    </p>
				    <p>
					    <span>接受岗位调剂</span>
					    <input type="checkbox" name="test" value="" />
				    </p>
				    <p>
					    <span>在职</span>
					    <input type="checkbox" name="test" value="" />
				    </p>
				    <p>
					    <span>离职</span>
					    <input type="checkbox" name="test" value="" />
				    </p>
				    <p>
					    <span>在校</span>
					    <input type="checkbox" name="test" value="" />
				    </p>
				</div>			
			</div>
			<div class="resume_right">
				<h2 class="resume_til">自我推荐</h2>
				<p>
					<span>岗位类别</span>
					<select>
			  			<option>秘书</option>
			  			<option>管理</option>
			  			<option>研发</option>
			  			<option>专业技术</option>
			  			<option>工勤技能</option>
					</select>				
				</p>
				<p>
					<span>岗&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;位</span>
					<input type="text" placeholder="  例如：董事长助理" />
				</p>
				<p>
					<span>工作地点</span>
		        	<input type="text" placeholder="  省份" class="gongzuodidian" />
					<input type="text" placeholder="  地级市" class="gongzuodidian" />
		            <input type="text" placeholder="  市、县、区" class="gongzuodidian" />
				</p>	
				<p>
					<span>美&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;分</span>
					<span class="personyue">可用余额：<span>200</span>元</span>
					<a href="personAccountCharge.html" class="resuchongzhi">充值</a>
				</p>	
				<p>
					<span>颜值评分</span>
					<select>
			  			<option>10</option>
			  			<option>9</option>
			  			<option>8</option>
			  			<option>7</option>
			  			<option>6</option>
					</select>				
				</p>
				<h2 class="resume_til">基本信息</h2>	
				<p>
					<span>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</span>
					<input type="text" placeholder="  王雅思" />
				</p>
				<p>
					<span>籍&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;贯</span>
					<input type="text" placeholder="  山东青岛" />
				</p>
				<p>
					<span>身&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;高</span>
					<select>
			  			<option>155cm</option>
			  			<option>165cm</option>
			  			<option>175cm</option>
			  			<option>185cm</option>
					</select>				
				</p>
				<p>
					<span>出生日期</span>
					<select class="duan">
			  			<option>1992</option>
			  			<option>1993</option>
			  			<option>1994</option>
			  			<option>1995</option>
			  			<option>1996</option>
					</select>	
					<select class="duan">
			  			<option>12</option>
			  			<option>11</option>
			  			<option>10</option>
			  			<option>9</option>
			  			<option>8</option>
					</select>				
					<select class="duan">
			  			<option>30</option>
			  			<option>29</option>
			  			<option>28</option>
			  			<option>27</option>
			  			<option>26</option>
					</select>										
				</p>
				<p>
					<span>婚&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;姻</span>
					<select>
			  			<option>未婚</option>
			  			<option>已婚</option>
					</select>				
				</p>
				<p>
					<span>现居住地</span>
					<select class="duan">
			  			<option>省份</option>
			  			<option>湖北省</option>
			  			<option></option>
			  			<option></option>
			  			<option></option>
					</select>	
					<select class="duan">
			  			<option>地级市</option>
			  			<option>武汉市</option>
			  			<option>鄂州市</option>
			  			<option>仙桃市</option>
			  			<option>十堰市</option>
					</select>				
					<select class="duan">
			  			<option>市、县、区</option>
			  			<option>武昌区</option>
			  			<option>江夏区</option>
			  			<option>蔡甸区</option>
			  			<option>洪山区</option>
					</select>										
				</p>	
				<p>
					<span>联系方式</span>
					<input type="text"  />
				</p>
				<p>
					<span>邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱</span>
					<input type="text"  />
				</p>
				<h2 class="resume_til">教育经历</h2>	
				<a href="#" class="tianjia">添加</a>
				<p>
					<span>毕业院校</span>
					<input type="text" placeholder="  例如：武汉理工大学" />
				</p>
				<p>
					<span>专&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;业</span>
					<select>
			  			<option>助理</option>
			  			<option>秘书</option>
					</select>				
				</p>	
				<p>
					<span>在校时间</span>
					<select class="midlong">
			  			<option>2012-09</option>
			  			<option>2009-09</option>
			  			<option>2006-09</option>
			  			<option>2003-09</option>
			  			<option>2000-09</option>
					</select>
					<select class="midlong">
			  			<option>2015-06</option>
			  			<option>2012-06</option>
			  			<option>2009-06</option>
			  			<option>2006-06</option>
			  			<option>2003-06</option>
					</select>												
				</p>	
				<p>
					<span>证&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;书</span>
					<input type="text" />
				</p>
				<h2 class="resume_til">工作经历</h2>	
				<a href="#" class="tianjia">添加</a>
				<p>
					<span>工作时间</span>
					<select class="midlong">
			  			<option>2012-09</option>
			  			<option>2009-09</option>
			  			<option>2006-09</option>
			  			<option>2003-09</option>
			  			<option>2000-09</option>
					</select>
					<select class="midlong">
			  			<option>2015-06</option>
			  			<option>2012-06</option>
			  			<option>2009-06</option>
			  			<option>2006-06</option>
			  			<option>2003-06</option>
					</select>												
				</p>
				<p>
					<span>公司名称</span>
					<input type="text" placeholder="  例如：哈尔滨春天实业有限公司" />
				</p>
				<p>
					<span>岗&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;位</span>
					<input type="text" placeholder="  例如：质量测量员" />
				</p>
				<p>
					<span>岗位职责</span>
					<input type="text" placeholder="  例如：1、负责发动机日常工作" />
				</p>
				<div class="xiugaijianli">
					<div class="jianlishangchuan">
				    	<input type="file" name="fileField" class="file filee" id="fileField" size="28" onchange="document.getElementById('textfield').value=this.value" />
				 		<input type='button' class='btn btne' value='简历上传' />
				    </div>
				    <div class="jianlixiajia">
				    	<a href="#">简历下架</a>
				    </div>
				    <div class="jianlibaocun">
				    	<a href="#">简历保存</a>
				    </div>
				</div>															
			</div>			
		</div>
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