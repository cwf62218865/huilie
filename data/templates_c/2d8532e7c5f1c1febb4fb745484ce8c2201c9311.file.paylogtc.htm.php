<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-12-21 08:53:44
         compiled from "D:\phpStudy\WWW\huilie\app\template\member\lietou\paylogtc.htm" */ ?>
<?php /*%%SmartyHeaderCode:45095a3b0618a610c3-42812304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d8532e7c5f1c1febb4fb745484ce8c2201c9311' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\huilie\\app\\template\\member\\lietou\\paylogtc.htm',
      1 => 1513817289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45095a3b0618a610c3-42812304',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'statis' => 0,
    'config' => 0,
    'integral' => 0,
    'rating' => 0,
    'addjobnum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a3b0618bc4847_59484044',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3b0618bc4847_59484044')) {function content_5a3b0618bc4847_59484044($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\phpStudy\\WWW\\huilie\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['ltstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
  <div class="admin_mainbody"> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class=right_box>
      <div class=admincont_box>
        <div class="com_tit"><span class="com_tit_span">�ҵĻ�Ա</span></div>
        <div class="com_body">
          <div class="com_pay_balance">
            <div class="com_pay_balance_left">
              <div class="com_pay_balance_tit">�𾴵���ҵ�û�</div>
              <div class=""> ����ǰ�ǣ�<span class="f60"><?php echo $_smarty_tpl->tpl_vars['statis']->value['rating_name'];?>
</span>
              </div>
              
              <div class=""> ������Ϊ��<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating']!='0') {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_stime'],'%Y-%m-%d');?>
 - <?php if ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']==0) {?>����<?php } else {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_etime'],'%Y-%m-%d');
}
} else { ?>�ѵ���<?php }?></div>
              
            </div>
            <div class="com_pay_balance_right">
              <div class="com_pay_balance_right_jf"> ����<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
��<span class="f60"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
</span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</div>
              <div class="">������<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
��<span class="f60"><?php echo $_smarty_tpl->tpl_vars['integral']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 <a href="index.php?c=paylog&consume=ok" title="��ϸ"  class="com_pay_balance_a">��ϸ</a><a href="index.php?c=pay&type=integral" title="�˻���ֵ" class="com_pay_balance_a">��ֵ</a>  <a href="index.php?c=right" title="�鿴��Ȩ"  class="com_pay_balance_a">�鿴��Ȩ</a></div>
              <div class=""></div>
            </div>
          </div>
          <div class="com_pay_balance_box">
            <div class="com_pay_balance_data">
              <div class="com_pay_balance_data_q">
                <div class="com_pay_balance_data_n"><?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?>����<?php } else {
echo $_smarty_tpl->tpl_vars['statis']->value['job_num'];
}?></div>
                <div class="com_pay_balance_data_name">�ɷ���ְλ</div>
              </div>
              <div class="com_pay_balance_data_p mt10">�ײ�����<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?>��Ա��Ч���ڲ���<?php } elseif ($_smarty_tpl->tpl_vars['statis']->value['rating']=='0') {?> 0 <?php } else {
echo $_smarty_tpl->tpl_vars['rating']->value['job_num'];
}?></div>
              <div class="com_pay_balance_data_p">
              	<?php if ($_smarty_tpl->tpl_vars['rating']->value['job_num']-$_smarty_tpl->tpl_vars['statis']->value['job_num']>=0) {?>
              		�ѷ�����<?php echo $_smarty_tpl->tpl_vars['rating']->value['job_num']-$_smarty_tpl->tpl_vars['statis']->value['job_num'];?>

              	<?php } elseif ($_smarty_tpl->tpl_vars['rating']->value['job_num']-$_smarty_tpl->tpl_vars['statis']->value['job_num']<0) {?>
              		��ֵ����<?php echo $_smarty_tpl->tpl_vars['statis']->value['job_num']-$_smarty_tpl->tpl_vars['rating']->value['job_num'];?>

              	<?php }?>
              </div>
              
              <div class="com_pay_balance_data_bth">
              	<a href="javascript:void(0);" onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
');return false;" class="com_pay_balance_data_btha">����ְλ</a></div>
            </div>
            <div class="com_pay_balance_box">
              <div class="com_pay_balance_data com_pay_balance_data_xz">
                <div class="com_pay_balance_data_q">
                  <div class="com_pay_balance_data_n"><?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?>����<?php } else {
echo $_smarty_tpl->tpl_vars['statis']->value['down_resume'];?>
 <?php }?></div>
                  <div class="com_pay_balance_data_name">�����ؼ���</div>
                </div>
                <div class="com_pay_balance_data_p mt10">�ײ�����<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?>��Ա��Ч���ڲ���<?php } elseif ($_smarty_tpl->tpl_vars['statis']->value['rating']=='0') {?> 0 <?php } else {
echo $_smarty_tpl->tpl_vars['rating']->value['resume'];
}?></div>
                <div class="com_pay_balance_data_p">
                	<?php if ($_smarty_tpl->tpl_vars['rating']->value['resume']-$_smarty_tpl->tpl_vars['statis']->value['down_resume']>=0) {?>
                		�����أ�<?php echo $_smarty_tpl->tpl_vars['rating']->value['resume']-$_smarty_tpl->tpl_vars['statis']->value['down_resume'];?>

                	<?php } elseif ($_smarty_tpl->tpl_vars['rating']->value['resume']-$_smarty_tpl->tpl_vars['statis']->value['down_resume']<0) {?>
                		��ֵ����:<?php echo $_smarty_tpl->tpl_vars['statis']->value['down_resume']-$_smarty_tpl->tpl_vars['rating']->value['resume'];?>

                	<?php }?>
                </div>
                <div class="com_pay_balance_data_bth"><a  href="index.php?c=down" class="com_pay_balance_data_btha">�鿴</a></div>
              </div>
              <div class="com_pay_balance_box">
                <div class="com_pay_balance_data com_pay_balance_data_yq">
                  <div class="com_pay_balance_data_q">
                    <div class="com_pay_balance_data_n"><?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?>����<?php } else {
echo $_smarty_tpl->tpl_vars['statis']->value['invite_resume'];?>
 <?php }?></div>
                    <div class="com_pay_balance_data_name">����������</div>
                  </div>
                  <div class="com_pay_balance_data_p mt10">�ײ�����<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?>��Ա��Ч���ڲ���<?php } elseif ($_smarty_tpl->tpl_vars['statis']->value['rating']=='0') {?> 0 <?php } else {
echo $_smarty_tpl->tpl_vars['rating']->value['interview'];
}?></div>
                  <div class="com_pay_balance_data_p">
                  	<?php if ($_smarty_tpl->tpl_vars['rating']->value['interview']-$_smarty_tpl->tpl_vars['statis']->value['invite_resume']>=0) {?>
                  		�����룺<?php echo $_smarty_tpl->tpl_vars['rating']->value['interview']-$_smarty_tpl->tpl_vars['statis']->value['invite_resume'];?>

                  	<?php } elseif ($_smarty_tpl->tpl_vars['rating']->value['interview']-$_smarty_tpl->tpl_vars['statis']->value['invite_resume']<0) {?>
                  		��ֵ����<?php echo $_smarty_tpl->tpl_vars['statis']->value['invite_resume']-$_smarty_tpl->tpl_vars['rating']->value['interview'];?>

                  	<?php }?>
                  </div>
                  <div class="com_pay_balance_data_bth">
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['com_search']==1) {?><a href="index.php?c=resume" class="com_pay_balance_data_btha">���˲�</a><?php }?>
                    </div>
                </div>
                <div class="com_pay_balance_list">
                  <div class="com_pay_balance_list_h1">ˢ��ְλ</div>
                  <div class="com_pay_balance_list_zs">�ײ�����<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?>��Ա��Ч���ڲ���<?php } elseif ($_smarty_tpl->tpl_vars['statis']->value['rating']=='0') {?> 0 <?php } else {
echo $_smarty_tpl->tpl_vars['rating']->value['breakjob_num'];
}?></div>
                  <div class="com_pay_balance_list_p"><i class="com_body_pay_list_sl_iocn"></i><i class="com_body_pay_list_sl_iocn"></i>
                  <?php if ($_smarty_tpl->tpl_vars['rating']->value['breakjob_num']-$_smarty_tpl->tpl_vars['statis']->value['breakjob_num']>=0) {?>
                  	��ʹ�ã�<?php echo $_smarty_tpl->tpl_vars['rating']->value['breakjob_num']-$_smarty_tpl->tpl_vars['statis']->value['breakjob_num'];?>

                  <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value['breakjob_num']-$_smarty_tpl->tpl_vars['statis']->value['breakjob_num']<0) {?>
                  	��ֵ����<?php echo $_smarty_tpl->tpl_vars['statis']->value['breakjob_num']-$_smarty_tpl->tpl_vars['rating']->value['breakjob_num'];?>

                  <?php }?>
                  </div>
                  <div class="com_pay_balance_list_p"><i class="com_body_pay_list_sl_iocn com_body_pay_list_sl_iocn_sy"></i>ʣ�ࣺ<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?>��Ա��Ч���ڲ���<?php } else {
echo $_smarty_tpl->tpl_vars['statis']->value['breakjob_num'];
}?></div>
                </div>
                <div class="com_pay_balance_list">
                  <div class="com_pay_balance_list_h1">������ְְλ</div>
                  <div class="com_pay_balance_list_zs">�ײ�����<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?>��Ա��Ч���ڲ���<?php } elseif ($_smarty_tpl->tpl_vars['statis']->value['rating']=='0') {?> 0 <?php } else {
echo $_smarty_tpl->tpl_vars['rating']->value['part_num'];
}?></div>
                  <div class="com_pay_balance_list_p"><i class="com_body_pay_list_sl_iocn"></i>
                  	<?php if ($_smarty_tpl->tpl_vars['rating']->value['part_num']-$_smarty_tpl->tpl_vars['statis']->value['part_num']>=0) {?>
                  		��ʹ�ã�<?php echo $_smarty_tpl->tpl_vars['rating']->value['part_num']-$_smarty_tpl->tpl_vars['statis']->value['part_num'];?>

                  	<?php } elseif ($_smarty_tpl->tpl_vars['rating']->value['part_num']-$_smarty_tpl->tpl_vars['statis']->value['part_num']<0) {?>
                  		��ֵ����<?php echo $_smarty_tpl->tpl_vars['statis']->value['part_num']-$_smarty_tpl->tpl_vars['rating']->value['part_num'];?>

                  	<?php }?>
                  </div>
                  <div class="com_pay_balance_list_p"><i class="com_body_pay_list_sl_iocn com_body_pay_list_sl_iocn_sy"></i>ʣ�ࣺ<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?>��Ա��Ч���ڲ���<?php } else {
echo $_smarty_tpl->tpl_vars['statis']->value['part_num'];
}?></div>
                </div>

               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
>
function use_card(){
	$.layer({
		type : 1,
		title : 'ʹ�ó�ֵ����ֵ',
		closeBtn : [0 , true],  
		border : [10 , 0.3 , '#000', true],
		area : ['380px','250px'],
		page : {dom : '#use_card'}
	}); 
}
<?php echo '</script'; ?>
>
<div id="use_card"  style="display:none; width: 400px;">
  <div class="job_box_div" style="width:340px;">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php?c=com&act=card" target="supportiframe" method="post" id='myform'>
      <div class="job_box_inp" style="padding:10px 5px 5px 20px">
       <span class="fltL"> ���ţ�</span>
        <input name="card" class="com_info_text placeholder" type="text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
         </div>
      <div class="job_box_inp" style="padding:10px 5px 5px 20px">
       <span class="fltL"> ���룺</span>
        <input name="password" class="com_info_text placeholder" type="text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
         </div>
      <span class="job_box_botton" style="width:100%;"> 
      <a class="job_box_yes job_box_botton2" href="javascript:void(0);" onclick="setTimeout(function(){$('#myform').submit()},0);">ȷ��</a> </span>
    </form>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
