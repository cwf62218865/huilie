<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-12-20 16:41:49
         compiled from "D:\phpStudy\WWW\huilie\\app\template\member\com\footer.htm" */ ?>
<?php /*%%SmartyHeaderCode:38125a3a224dbfd476-08408450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f7d6c1cd52097a6aba179702a64892ad14d439f' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\huilie\\\\app\\template\\member\\com\\footer.htm',
      1 => 1501490221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38125a3a224dbfd476-08408450',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a3a224dc10cf8_71490528',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3a224dc10cf8_71490528')) {function content_5a3a224dc10cf8_71490528($_smarty_tpl) {?><div class="clear"></div>
<div class=footer>
<div class=w900>
<div class=footernav>
      <div class="footer_bot_p"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webcopyright'];
echo $_smarty_tpl->tpl_vars['config']->value['sy_webrecord'];?>
 </div>
      <div class="footer_bot_p">µÿ÷∑:<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webadd'];?>
  µÁª∞(Tel):<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
  EMAIL:<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webemail'];?>
</div>
	  <div class="footer_bot_p">Powered By <a target="_blank" href="http://www.phpyun.com">PHPYun.</a></div>
</div>
</div>
</div> 
<div class="clear"></div>
<div id="bg" <?php if ($_smarty_tpl->tpl_vars['company']->value['hy']==''&&($_GET['c']=="index"||$_GET['c']=='')) {?>style="display:block"<?php }?>></div> 
<div id="uclogin" style="display:none"></div>
<div class="clear"></div>
</body>
</html><?php }} ?>
