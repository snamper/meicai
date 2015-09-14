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
        //--></script><script type="text/javascript" src="../Public/ueditor/editor_config.js"></script><script type="text/javascript" src="../Public/ueditor/editor_all.js"></script></head><body><div class="main"><div class="box_tit"><h2>菜单列表</h2></div><div class="operate"><div class="fLeft"><input type="button" onclick="add()" class="submit btn5" value="添加菜单"></div><div class="fLeft"><input type="button" onclick="foreverdel()" class="submit btn5" value="删除选中"></div><div class="fLeft"><form method="post" action="<?php echo U('Node/index');?>"><input type="text" name="name" title="名称查询" class="iptt6"><input type="submit" class="submit btn5" value="查询"></form></div></div><div class="list"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tbody><tr class="nbg"><th><input type="checkbox" id="check"></th><th>编号</th><th>菜单名称</th><th>排序</th><th>操作</th></tr><?php echo ($tree); ?></tbody></table><div class="th" style="clear: both;"></div></div></div></body></html>