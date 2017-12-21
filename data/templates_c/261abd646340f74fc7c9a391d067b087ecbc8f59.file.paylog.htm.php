<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-12-21 09:32:27
         compiled from "D:\phpStudy\WWW\huilie\app\template\member\user\paylog.htm" */ ?>
<?php /*%%SmartyHeaderCode:37705a3b0f2beafd29-38353086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '261abd646340f74fc7c9a391d067b087ecbc8f59' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\huilie\\app\\template\\member\\user\\paylog.htm',
      1 => 1513817289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37705a3b0f2beafd29-38353086',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'log' => 0,
    'config' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a3b0f2c009d25_84188571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3b0f2c009d25_84188571')) {function content_5a3b0f2c009d25_84188571($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="yun_user_member_w1100">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <div class="mian_right fltR mt20">
       <div class="member_right_index_h1 fltL"> <span class="member_right_h1_span fltL">财务明细</span> <i class="member_right_h1_icon user_bg"></i></div>
       <div>
            <div id="gms_showclew"></div>
            <div class="resume_box_list">
              <div class="job_list_tit"> 
              <ul class="">
	   <li><a href="index.php?c=paylist">充值记录</a></li>
      <li class="job_list_tit_cur"><a href="index.php?c=paylog">消费记录</a></li>
	</ul> 
    </div>
            <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
                <div class="List_Ope List_Title ">
                    <span class="List_Title_span List_Title_w290"><em class="List_Title_span_name">流水单号</em></span>
                    <span class="List_Title_span List_Title_w170">财务出入</span>
                    <span class="List_Title_span List_Title_w230">备注</span>
                    <span class="List_Title_span List_Title_w170 List_Title_span_ag" > 操作时间	 </span>
                   
                </div>
                <?php }?>
                <?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->_loop = true;
?>
               <?php $_smarty_tpl->tpl_vars["state"] = new Smarty_variable($_smarty_tpl->tpl_vars['log']->value['pay_state'], null, 0);?>
                <div class="List_Ope List_Ope_bor">
                    <span class="List_Title_span List_Title_w290"><?php echo $_smarty_tpl->tpl_vars['log']->value['order_id'];?>
</span>
                    <span class="List_Title_span List_Title_w170"><?php echo $_smarty_tpl->tpl_vars['log']->value['order_price'];
if ($_smarty_tpl->tpl_vars['log']->value['type']==2) {?>元<?php } else {
echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];
}?></span>
                    <span class="List_Title_span List_Title_w230"><?php echo $_smarty_tpl->tpl_vars['log']->value['pay_remark'];?>
&nbsp;</span>
                    <span class="List_Title_span List_Title_w170"> <?php echo $_smarty_tpl->tpl_vars['log']->value['pay_time'];?>
 </span>
                
                    
                
                    
                </div>
                
                <?php }
if (!$_smarty_tpl->tpl_vars['log']->_loop) {
?>
                <div class="msg_no">您还没有财务记录</div>
                <?php } ?>
                <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
               
                <?php }?>
                <div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
