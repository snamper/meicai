<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title></title><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel='stylesheet' type="text/css" href="../Public/css/style.css" /><script type="text/javascript" src="../Public/js/jquery-1.7.1.min.js"></script><script type="text/javascript" src="../Public/js/common.js"></script><script type="text/javascript" src="../Public/js/jquery-yufu5.js"></script><script type="text/javascript">            $(function(){
                if($.browser.msie&&$.browser.version=="6.0"&&$("html")[0].scrollHeight>$("html").height())
                    $("html").css("overflowY","scroll");
            });
        </script><script language="JavaScript"><!--
        //指定当前组模块URL地址 
        var URL = '__URL__';
        var APP	 = '__APP__';
        var SELF='__SELF__';
        var PUBLIC='__PUBLIC__';
        var Public = '../Public/';
        //--></script><script type="text/javascript" src="../Public/ueditor/editor_config.js"></script><script type="text/javascript" src="../Public/ueditor/editor_all.js"></script></head><body><div class="main"><div class="box_tit"><h2>系统设置</h2></div><div class="form_list"><div style="background: #FFFCED;border: 1px solid #FFBE7A; padding: 10px;"><strong>1. </strong>当您的附件访问地址，发生修改的时候，可以使用本功能对内容中附件地址的批量修改。<br />            &nbsp;&nbsp;&nbsp;&nbsp;如：您是在本地搭建的网站，而后上传到服务器，发现附件的访问地址还是本地的地址:<br />            &nbsp;&nbsp;&nbsp;&nbsp;或您需要更换网站域名，发现附件的访问地址还是原来域名的地址:<br />            &nbsp;&nbsp;&nbsp;&nbsp;那么需要将http://localhost/Uploads/替换为 http://域名/Uploads/<br />            &nbsp;&nbsp;&nbsp;&nbsp;或http://原域名/Uploads/ 替换为 http://新域名/Uploads/<br />            &nbsp;&nbsp;&nbsp;&nbsp;或http://localhost/二级目录/Uploads/ 替换为 http://域名/Uploads/<br />            &nbsp;&nbsp;&nbsp;&nbsp;或http://localhost/二级目录1/Uploads/ 替换为 http://域名/二级目录2/Uploads/<br />            &nbsp;&nbsp;&nbsp;&nbsp;或/二级目录/Uploads/ 替换为 /Uploads/<br />            &nbsp;&nbsp;&nbsp;&nbsp;或/二级目录1/Uploads/ 替换为 /二级目录2/Uploads/<br /><strong>2. </strong>本功能不要滥用，只在有需要的时候使用，否则会有数据混乱的风险。<br /><strong>3. </strong> 请在使用本功能之前做好数据备份，否则使用后无法恢复。<br /></div><form method='post' id="form1" name="form1" action="<?php echo U('Annex/index');?>"  enctype="multipart/form-data"><div class="form_list_top"><dl><dt style="width:125px;"> 原附件访问地址：</dt><dd><input type="text" class="ipt6" name="old_Annex"></dd></dl><dl><dt style="width:125px;"> 新附件访问地址：</dt><dd><input type="text" class="ipt6" name="new_Annex"></dd></dl></div><div class="form_b"><input type="submit" class="submit btn7" id="submit" value="提 交"></div></form></div></div></body></html>