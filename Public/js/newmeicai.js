//消费记录
function zhankaia(){
	var shezhi = event.srcElement;
	shezhi.parentNode.style.display = "none";
	var shezhia = document.getElementById("shezhia");
	var shouqia = document.getElementById("shouqia");
	shezhia.style.display="none";
	shouqia.style.display = "block";
}
function shouqia() {
	var shezhi = event.srcElement;
	shezhi.parentNode.style.display = "none";
	var shezhia = document.getElementById("shezhia");
	var shouqia = document.getElementById("shouqia");
	shouqia.style.display="none";
	shezhia.style.display = "block";
}
//密码修改
function zhankaib(){
	var shezhi = event.srcElement;
	shezhi.parentNode.style.display = "none";
	var shezhib = document.getElementById("shezhib");
	var shouqib = document.getElementById("shouqib");
	shezhib.style.display="none";
	shouqib.style.display = "block";
}
function shouqib() {
	var shezhi = event.srcElement;
	shezhi.parentNode.style.display = "none";
	var shezhib = document.getElementById("shezhib");
	var shouqib = document.getElementById("shouqib");
	shouqib.style.display="none";
	shezhib.style.display = "block";
}
//绑定手机
function zhankaic(){
	var shezhi = event.srcElement;
	shezhi.parentNode.style.display = "none";
	var shezhib = document.getElementById("shezhib");
	var shouqic = document.getElementById("shouqic");
	shezhib.style.display="none";
	shouqic.style.display = "block";
}
function shouqic() {
	var shezhi = event.srcElement;
	shezhi.parentNode.style.display = "none";
	var shezhib = document.getElementById("shezhib");
	var shouqic = document.getElementById("shouqic");
	shouqic.style.display="none";
	shezhib.style.display = "block";
}
//密码安全度：获取展开后的当前密码，含数字或字母为低，含数字和字母为中，其他为高
function mimaSafe(){
	var curmimaValue = document.getElementById("curmima").value;
	var safechengse = document.getElementsByName("safechengse");
	var safebaise = document.getElementsByName("safebaise");
	var myRegExp1 =/^[0-9]+$/;
	var myRegExp2 =/^[A-Za-z]+$/;
	var myRegExp3 =/^[A-Za-z0-9]+$/;
	if(myRegExp1.test(curmimaValue) || myRegExp2.test(curmimaValue)){
		safechengse[0].style.width="22px";
		safechengse[1].style.width="22px";
		safebaise[0].style.width="52px";
		safebaise[1].style.width="52px";
	}else if(myRegExp3.test(curmimaValue)){
		safechengse[0].style.width="52px";
		safechengse[1].style.width="52px";
		safebaise[0].style.width="22px";
		safebaise[1].style.width="22px";
	}else{
		safechengse[0].style.width="77px";
		safechengse[1].style.width="77px";
		safebaise[0].style.width="0px";
		safebaise[1].style.width="0px";
	}
}
//认证管理
function zhankaid(){
	var shezhi = event.srcElement;
	shezhi.parentNode.style.display = "none";
	var shezhic = document.getElementById("shezhic");
	var shouqid = document.getElementById("shouqid");
	shezhic.style.display="none";
	shouqid.style.display = "block";
}
function shouqid() {
	var shezhi = event.srcElement;
	shezhi.parentNode.style.display = "none";
	var shezhic = document.getElementById("shezhic");
	var shouqid = document.getElementById("shouqid");
	shouqid.style.display="none";
	shezhic.style.display = "block";
}

//勾选展开
function checkzhifu()
{		
	var mycheck = event.srcElement;
		mycheck.parentNode.style.display="none";
		mycheck.checked=false;
	var zhifufangshiNode = document.getElementById("zhifufangshi");
	var zhifubaozhifuNode = document.getElementById("zhifubaozhifu");
	var yinhangkazhifuNode = document.getElementById("yinhangkazhifu");
	if(mycheck.id=="zhifubao"){
		zhifubaozhifuNode.className="boxeb";
		zhifubaozhifuNode.style.display="block";
		yinhangkazhifuNode.style.display="none";
	}
	if(mycheck.id=="yinhangka")
	{
		yinhangkazhifuNode.className="boxec";
		yinhangkazhifuNode.style.display="block";
		zhifubaozhifuNode.style.display="none";
	}
}


/*//点击后禁用按钮
function jinyongButton(){
	var currBt = event.srcElement;
	var currBtParent = currBt.parentNode;//获取事件源父节点
	var mianshiBt = currBtParent.getElementsByTagName("span")[0];
	var bukaolvBt = currBtParent.getElementsByTagName("span")[1];
	mianshiBt.style.backgroundColor="#C5C5C5";
	bukaolvBt.style.backgroundColor="#C5C5C5";
}*/
function bindButton(){//为2个按钮绑定事件
	$(".m_t_but span").click(function(){
		$(this).parent().children('span').css("backgroundColor","#C5C5C5");
		var index=$(this).parent().children('span').index($(this));
		if(index==0){
			$(this).parent().parent().find('.q_info_right').show();
		}
	});
}


//收藏
function shoucang(){
	var sc = event.srcElement.parentNode;
	var xing = sc.getElementsByTagName('img')[0];
	var xingurl = xing.src;//获取到图片的绝对路径
	//获取图片相对路径
	var xingurlduandian = xingurl.indexOf("images/");
	var xingxdurl = xingurl.substring(xingurlduandian,xingurl.length);	
	if(xingxdurl == "images/wujiaoxing.png"){
		xing.src = "images/wujiaoxing2.png";
	}
	//sc.location.href="enterpriseCollect.html";
}

//取消收藏
/*function quxiaoshoucang(){
	var quxiaobut = event.srcElement;
	var quxiaoContent = quxiaobut.parentNode.parentNode;
	quxiaoContent.style.display = "none";
}*/
//绑定取消收藏
function bindquxiaoshoucang(){
	$(".quxiaoshoucang a").click(function(){
		$(this).parent().parent().remove();
		checkall();
	});
}
//清点全部是否取消收藏
function checkall(){
var i=0;
	$(".quxiaoshoucang").each(function(){
		i++;
		return true;
	});
	if(i==0){
		$(".page_left").remove();
	}
}

//接受推荐
function jieshou(){
	var jieshoutuijian = document.getElementById("jieshoutj").parentNode;
	jieshoutuijian.style.backgroundColor = "#c5c5c5";
}

//猎头委托基金
function xinzi(){
	var str = $("#xinzixuanze").find("option:selected").val();
	$("#wtjijin").html(str).addClass("wtjj");
}



//登录
function login(){
	var qiuzhi = document.getElementById("qiuzhi");
	var qiye = document.getElementById("qiye");
	var curlogin = event.srcElement;
	if(curlogin.id=="qiuzhi")
	{
		qiye.parentNode.style.backgroundColor="#fff";
		qiuzhi.parentNode.style.backgroundColor="#1AD093";
	}
	if(curlogin.id=="qiye")
	{
		qiuzhi.parentNode.style.backgroundColor="#fff";
		qiye.parentNode.style.backgroundColor="#1AD093";
	}
}

//导师申请
$(document).ready(function(){
	$(".icon").toggle(
		function(){ 
		 	$(this).removeClass("daoshititlexl").addClass('daoshititlesl'); 
			$(this).parent().siblings(".dscontent").slideUp(500);
	},
		function(){
			$(this).removeClass("daoshititlesl").addClass('daoshititlexl'); 
			$(this).parent().siblings(".dscontent").slideDown(500);
	});
});

//标签添加
function label(){
	$(".htlabel").click(function(){
	var rownumber = $(this).html();//读取与之对应的div的值
	alert(rownumber);
	})
}


