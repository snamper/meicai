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
        //--></script><script type="text/javascript" src="../Public/ueditor/editor_config.js"></script><script type="text/javascript" src="../Public/ueditor/editor_all.js"></script></head><body><div class="main"><div class="box_tit"><h2>数据备份</h2></div><div class="list"><form id="form1" action="<?php echo U('Databack/back');?>" method="post"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tbody><tr class="nbg"><th colspan="3">备份设置</th></tr><tr><td>备份类型 :</td><td><input type="radio" name="filetype" value="0" checked="true" />全部备份（备份数据库所有表）<input type="radio" name="filetype" value="1" />自定义备份（根据自行选择备份数据表）</td><td><input type="submit" name="filesubmit" class="btn7" value="开始备份" /></td></tr></tbody></table><table width="100%" border="0" cellspacing="0" cellpadding="0" id="checkList" style="display: none;"><tbody><tr class="nbg"><th><input type="checkbox" id="check" onclick="CheckAll('checkList')"></th><th>表名</th><th>类型</th><th>编码</th><th>记录数</th><th>使用空间</th></tr><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><input type="checkbox" name="tab[]" value="<?php echo ($vo["Name"]); ?>"></td><td><?php echo ($vo["Name"]); ?></td><td><?php echo ($vo["Engine"]); ?></td><td><?php echo ($vo["Collation"]); ?></td><td><?php echo ($vo["Rows"]); ?></td><td><?php echo ($vo["Data_length"]); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody></table></form><div class="th" style="clear: both;"></div></div></div><script type="text/javascript">$(document).ready(function(){
    $("input[name='filetype']").click(function(){
        var vl= $("input[name='filetype']:checked").val(); 
        if(vl==1){
            $('#checkList').show();
        }else{
            $('#checkList').hide();
        }
    });
});
</script></body></html>