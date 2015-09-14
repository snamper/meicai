<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="stylesheet" href="./Public/css/newmeicai.css" type="text/css" charset="gb2312" />
    <script type="text/javascript" src="./Public/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="./Public/js/jquery-1.8.3.js"></script>
    <script type="text/javascript" src="./Public/js/validate.js"></script>
    <script type="text/javascript" src="./Public/layer/layer.min.js"></script>
    <script type="text/javascript" src="./Public/js/newmeicai.js"></script>
</head>
<body class="bg">
<div class="top_login">
    <a href="/"><div class="login_logo">美才网</div><a>
        <div class="login_site">51MEICAI.COM</div>
        <div class="login_desc">中国颜值最高的求职招聘平台</div>
</div>
<div class="midbox_login">
    <div class="qiuzhi_qiye">
        <div class="qiuzhi qiuzhi_bai"><a id="qiuzhi">求职</a></div>
        <div class="qiye qiye_bai"><a id="qiye">企业</a></div>
    </div>
    <form method="post" action="<?php echo U('Member/checkLogin');?>" id="test" class="login">
        <input type="text" name="type" id="type" value=""/>
        <input type="text" name="email" placeholder="&nbsp;&nbsp;手机号/邮箱" class="loginkuang zhanghao" />
        <input type="text" name="password" placeholder="&nbsp;&nbsp;密码" class="loginkuang" />
        <div class="login_but">
        <!--登录成功跳转首页否则提示账号或者密码错误-->
        <!--<input type="submit" value="立即登录"/>-->
        <input type="submit" id="meicai_log" value="立即登录" style="margin-left:2px;margin-top:20px;"/>
    </div>
    </form>
 
    <a href="#" class="wangjimima">忘记密码？</a>
    <div class="reg_but" style="margin-left:43px;">
        <a href="<?php echo U('Member/register');?>">注册美才网账户</a>
    </div>
</div>

<div class="copyright_a">
    Copyright © 2015 <a href="index.html">www.51meicai.com</a> 版权所有 鄂ICP备14003297号-1
</div>
 <script type="text/javascript">
      $('#qiuzhi').click(function(){
             $('#type').val(0);
      });
     $('#qiye').click(function(){
            $('#type').val(1);
     });
   $(document).keydown(function(event){ 
      if(event.keyCode==13){ 
          $("#meicai_log").submit();
      } 
    });

          var form = $('#test');
        var actionUrl = form.attr('action');

        //表单验证开始
        form.validate({
            //是否在获取焦点时验证
            onfocusout : false,
            //是否在敲击键盘时验证
            onkeyup : false,
            //当鼠标点击时验证
            onclick : false,
            //验证错误
            showErrors : function(errorMap, errorArr) {
                //errorMap {'name':'错误信息'}
                //errorArr [{'message':'错误信息',element:({})}]
                try {
                    layer.alert(errorArr[0].message, 3);
                } catch (err) {
                }
            },
            //验证规则
            rules : {
                "type":{required:1},
                "email":{required:1},"password":{required:1}
            },
            //验证未通过提示消息
            messages : {
                "type":{required:"请选择注册用户类型!"},
                "email":{required:"请输入邮箱或手机号！"},
                "password":{required:"请输入密码"}
            },
            //给未通过验证的元素加效果,闪烁等
            highlight : false,
            //是否在获取焦点时验证
            onfocusout : false,
            //验证通过，提交表单
            submitHandler : function(forms) {
                $.ajax({
                    type : 'post',
                    url : actionUrl,
                    data :form.serialize(),
                    dataType : "json",
                    success : function(d) {
                        if(d['status'] == 0){
                            layer.alert('用户名或者密码错误!');
                        }else if(d['status'] == 3){
                            layer.alert('登录错误，请重试!');
                        }else{
                            if(d['type'] == 0){
                                window.location.href = '<?php echo U('Person/personResume');?>';
                            }else{
                                window.location.href = '<?php echo U('Company/enterpriseInfoA');?>'
                            }
                        }
                    }
                });
            }
        });
 </script>
</body>
</html>