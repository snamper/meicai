<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <script type="text/javascript" src="./Public/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="./Public/js/jquery-1.8.3.js"></script>
    <script type="text/javascript" src="./Public/js/validate.js"></script>
    <script type="text/javascript" src="./Public/layer/layer.min.js"></script>
    <script type="text/javascript" src="./Public/js/newmeicai.js"></script>

    <link rel="stylesheet" href="./Public/css/newmeicai.css" type="text/css" charset="gb2312" />
</head>
<body class="bg">
<div class="top_login">
    <a href="index.html"><div class="login_logo">美才网</div><a>
        <div class="login_site">51MEICAI.COM</div>
</div>
<div class="topbox_register">
    <div class="yonghuregister">用户注册</div>
    <div class="backlogin">
        <span>已有账号，</span>
        <a href="<?php echo U('Member/login');?>">登录</a>/
        <a href="/">返回首页</a>
    </div>
</div>
<div class="midbox_login">
    <div class="qiuzhi_qiye qiuzhi_qiyea">
        <div class="qiuzhi qiuzhi_bai"><a id="qiuzhi">求职</a></div>
        <div class="qiye qiye_bai"><a id="qiye">企业</a></div>
    </div>
    <div class="regForm">
        <form method="post" action="<?php echo U('Member/checkAccount');?>" id="test">
            <input type="text" name="type" value="" id="type"/>
            <p class="regdata">
                <label for="email" class="register_label">邮箱</label>
                <input type="text" name="email" placeholder="&nbsp;&nbsp;请输入常用的邮箱" class="regform"/>
            </p>
            <p class="regdata">
                <label for="test" class="register_label">手机号码</label>
                <input type="text" name="phone" placeholder="&nbsp;&nbsp;请输入常用的手机号" class="regform regform_phone" />
            <div class="yanzhengma_register"><a href="#">获取验证码</a></div>
            </p>
            <p class="regdata">
                <label for="test"  class="register_label">短信验证码</label>
                <input type="text" name="" placeholder="&nbsp;&nbsp;请输入您收到的验证码" class="regform" />
            </p>
            <p class="regdata">
                <label for="test"  class="register_label">设置密码</label>
                <input type="text" name="password" id="password" placeholder="&nbsp;&nbsp;请设置您的账户登录密码" class="regform" />
            </p>
            <p class="regdata">
                <label for="test" class="register_label">确认密码</label>
                <input type="text"name="repassword" placeholder="&nbsp;&nbsp;请再次输入您的登录密码" class="regform" />
            </p>
            <div class="checkbox_register" style="margin-top:-10px;">
                <input type="checkbox" name="check" value="" style="margin-left:-207px;"/>
                <span class="text_register">我已经阅读并同意<a href="#">(用户协议)</a></span>
            </div>
            <div class="reg_but reg_chengbut">
                <input type="submit" value="注册美才网账户" id="meicai_reg"/>
            </div>
        </form>

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
          $("#meicai_reg").submit();
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
                "type":{required:1},"phone":{required:1},
                "email":{required:1,email:1},"password":{required:1,minlength:6,maxlength:20},
                "repassword":{required:1,minlength:6,maxlength:20,equalTo: "#password" },"check":{required:1}
            },
            //验证未通过提示消息
            messages : {
                "type":{required:"请选择注册用户类型!"},
                "phone":{required:"请填写电话号码!"},
                "email":{required:"请输入邮箱！",email:"邮箱格式不正确，请重新输入！"},
                "password":{required:"请输入密码",minlength:"密码最少输入6位！",maxlength:"密码最多输入20位！"},
                "repassword":{required:"请再次输入密码！",minlength:"密码最少输入6位！",maxlength:"密码最多输入20位！",equalTo: "两次输入密码不一致！" },
                "check":{required:"请同意注册协议！"}
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
                        // alert(d);
                         if(d['status'] == 1){
                             layer.alert('用户名已存在');
                         }else if(d['status'] == 3){
                            layer.alert('注册失败');
                         }else{
                            layer.msg('注册成功!',2,9);
                            window.location.href="<?php echo U('Member/login');?>";
                         }
                    }
                });
            }
        });
 </script>
</body>
</html>