<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-12-20 16:31:53
         compiled from "D:\phpStudy\WWW\phpyun\\app\template\member\com\footer.htm" */ ?>
<?php /*%%SmartyHeaderCode:19535a3a1ff974a278-35884644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f68b6451cbbe155631e0ffd5140654610ac72863' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phpyun\\\\app\\template\\member\\com\\footer.htm',
      1 => 1501490221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19535a3a1ff974a278-35884644',
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
  'unifunc' => 'content_5a3a1ff9759c78_50121037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3a1ff9759c78_50121037')) {function content_5a3a1ff9759c78_50121037($_smarty_tpl) {?><div class="clear"></div>
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
