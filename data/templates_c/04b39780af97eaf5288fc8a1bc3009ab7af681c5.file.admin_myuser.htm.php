<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-12-21 09:08:05
         compiled from "D:\phpStudy\WWW\huilie\app\template\admin\admin_myuser.htm" */ ?>
<?php /*%%SmartyHeaderCode:297205a3b0975822754-75846649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04b39780af97eaf5288fc8a1bc3009ab7af681c5' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\huilie\\app\\template\\admin\\admin_myuser.htm',
      1 => 1513817286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297205a3b0975822754-75846649',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'adminuser' => 0,
    'user_group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a3b0975897a56_33511044',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3b0975897a56_33511044')) {function content_5a3b0975897a56_33511044($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\phpStudy\\WWW\\huilie\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="./images/reset.css" rel="stylesheet" type="text/css" />
<link href="./images/system.css" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layer/layer.min.js" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/admin_public.js" language="javascript"><?php echo '</script'; ?>
> 
<link href="./images/table_form.css" rel="stylesheet" type="text/css" />
<title></title>
</head>
<body class="body_ifm">
    <div class="infoboxp">
    <div class="infoboxp_top_bg"></div>
    <div class="infoboxp_top">
    <span class="infoboxp_top_span" style="float:left">我的帐户详情</span>
    </div>
<div class="common-form">
<div class="admin_table_border">
<table width="100%" class="table_form contentWrap" style="background:#fff;">
    <tr>
        <th width="150">用户名：</th>
        <td>   <div class="admin_td_h"><?php echo $_smarty_tpl->tpl_vars['adminuser']->value['username'];?>
 
        <a href="javascript:void(0)" onclick="layer_logout('index.php?m=index&c=logout');" class="admin_logout_bth">退出登录</a>
        <a href="index.php?m=admin_user&c=pass" class="admin_logout_bth">修改密码</a>
        </div></td>
    </tr>
    <tr class="admin_table_trbg">
        <th >真实姓名：</th>
        <td> <div class="admin_td_h"><?php echo $_smarty_tpl->tpl_vars['adminuser']->value['name'];?>
</div></td>
    </tr>
   	<tr >
        <th>权限：</th>
        <td> <div class="admin_td_h"><?php echo $_smarty_tpl->tpl_vars['user_group']->value['group_name'];?>
</div></td>
    </tr>
    <tr class="admin_table_trbg">
        <th >上一次登录时间：</th>
        <td> <div class="admin_td_h"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['adminuser']->value['lasttime'],'%Y-%m-%d %H:%M:%S');?>
</div></td>
    </tr>
 </table>
</div>
</div></div>
</body>
</html><?php }} ?>
