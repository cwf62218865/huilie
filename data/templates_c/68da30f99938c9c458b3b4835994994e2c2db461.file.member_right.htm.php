<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-12-21 09:14:47
         compiled from "D:\phpStudy1\WWW\huilie\app\template\member\com\member_right.htm" */ ?>
<?php /*%%SmartyHeaderCode:127125a3b0b072eae00-84502195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68da30f99938c9c458b3b4835994994e2c2db461' => 
    array (
      0 => 'D:\\phpStudy1\\WWW\\huilie\\app\\template\\member\\com\\member_right.htm',
      1 => 1513818375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127125a3b0b072eae00-84502195',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'com' => 0,
    'statis' => 0,
    'config' => 0,
    'rows' => 0,
    'v' => 0,
    'times' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a3b0b074a4481_78677926',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3b0b074a4481_78677926')) {function content_5a3b0b074a4481_78677926($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\phpStudy1\\WWW\\huilie\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\phpStudy1\\WWW\\huilie\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
<div class="admin_mainbody">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class=right_box>
  <div id="grow_freedom" class="grow_mod_wrap my_freedom" style="padding:0px;border:none;">
    <div class=admincont_box style="padding:0px;">
    <iframe id="fdingdan"  name="fdingdan" onload="returnmessage('fdingdan');" style="display:none"></iframe>
      <div class="com_tit"><span class="com_tit_span">会员服务</span></div>
      <div class="serve_zz fl">      
           <div class="serve_zz_top fl">
                <div class="serve_zz_top_ft fl" style="width:249px;">
                     <p class="serve_zz_top_ft_tit"><a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>'`$uid`'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['com']->value['name'];?>
</a></p>
                     <p class="serve_zz_top_ft_m">我的套餐：<em class="serve_zz_top_r"><?php echo $_smarty_tpl->tpl_vars['statis']->value['rating_name'];?>
</em><a class="serve_zz_top_mx" href="index.php?c=paylogtc">套餐明细</a></p>
                     <p class="serve_zz_top_ft_tm">服务到期：<em class="serve_zz_top_tm_c"><?php if ($_smarty_tpl->tpl_vars['statis']->value['rating']!='0') {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_stime'],'%Y-%m-%d');?>
至<?php if ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']==0) {?>永久<?php } else {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_etime'],'%Y-%m-%d');
}
} else { ?>已到期<?php }?></em></p>
                </div>
                <div class="serve_zz_top_rt fl" style="height:90px;">
                      <p class="serve_zz_top_rt_top" style="padding-bottom:5px;">&nbsp;</p>
                      <div class="serve_zz_top_rt_u">
                      <ul>
                         <li><dl><dt class="serve_zz_top_u_zw"></dt><dd>剩余职位数: <i class="serve_zz_top_rt_r"><?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']!='2') {
echo $_smarty_tpl->tpl_vars['statis']->value['job_num'];
} else { ?>不限<?php }?></i></dd></dl></li>
                         <li><dl><dt class="serve_zz_top_u_jl"></dt><dd>剩余简历数: <i class="serve_zz_top_rt_r"><?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']!='2') {
echo $_smarty_tpl->tpl_vars['statis']->value['down_resume'];
} else { ?>不限<?php }?></i></dd></dl></li>
                       
                         <li><dl><dt class="serve_zz_top_u_sy"></dt><dd>剩余邀请数: <i class="serve_zz_top_rt_r"><?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']!='2') {
echo $_smarty_tpl->tpl_vars['statis']->value['invite_resume'];
} else { ?>不限<?php }?></i></dd></dl></li>
                     </ul>
                     </div>
                </div>
           </div>
		<div class="report_uaer_list fl">
            <ul>
           
                <?php if ($_smarty_tpl->tpl_vars['config']->value['com_vip_type']==2) {?>
			    <li class="report_uaer_list_cur"><a href="index.php?c=right" >套餐会员</a></li>
                <?php }?>
                 
                <?php if ($_smarty_tpl->tpl_vars['config']->value['com_vip_type']==1) {?>
			    <li class="report_uaer_list_cur"><a href="index.php?c=right&act=time" >时间会员</a></li> 
                <?php }?>
                
                <?php if ($_smarty_tpl->tpl_vars['config']->value['com_vip_type']==0) {?>
			    <li class="report_uaer_list_cur"><a href="index.php?c=right" >套餐会员</a></li>               
			    <li><a href="index.php?c=right&act=time" >时间会员</a></li> 
                <?php }?>
               
                <li><a href="index.php?c=right&act=added" >增值包</a></li> 
            </ul>
		</div>
         <?php if ($_smarty_tpl->tpl_vars['config']->value['com_vip_type']==2) {?>
           <!--	套餐模式	-->
           <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		   <?php if ($_smarty_tpl->tpl_vars['v']->value['service_time']>0) {?>
           <div class="com_grade_box fl">
               <ul>
                  <li>
                  <div class="com_grade_rline"></div>
                      <div class="com_grade_tit"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</div>
                    
               <div class="com_grade_money">
               <span class="com_grade_money_n">
	               <?php if ($_smarty_tpl->tpl_vars['v']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['v']->value['time_end']>time()) {?>
	             		  ￥<?php echo $_smarty_tpl->tpl_vars['v']->value['yh_price'];?>

	               <?php } else { ?>
	             		  ￥<?php echo $_smarty_tpl->tpl_vars['v']->value['service_price'];?>

	               <?php }?>
               </span>
                   <?php if ($_smarty_tpl->tpl_vars['v']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['v']->value['time_end']>time()) {?>
                  		<i class="serve_zz_h_nmb_tcjg">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['service_price'];?>
</i>
                   <?php }?>/
                   <span>
                   		<?php if ($_smarty_tpl->tpl_vars['v']->value['service_time']>0) {
echo $_smarty_tpl->tpl_vars['v']->value['service_time'];?>
天<?php } else { ?>永久<?php }?>
                   </span>
               </div>
                    	
                         
                     
                     <div class="com_grade_list"><i class="com_grade_list_icon"></i><span class="com_grade_list_name">发布职位数</span> <span class="com_grade_list_n"><?php echo $_smarty_tpl->tpl_vars['v']->value['job_num'];?>
</span></div>
                    <div class="com_grade_list"><i class="com_grade_list_icon"></i><span class="com_grade_list_name">刷新职位数</span> <span class="com_grade_list_n"><?php echo $_smarty_tpl->tpl_vars['v']->value['breakjob_num'];?>
</span>
                      </div>
                    <div class="com_grade_list"><i class="com_grade_list_icon"></i><span class="com_grade_list_name">下载简历数</span> <span class="com_grade_list_n"><?php echo $_smarty_tpl->tpl_vars['v']->value['resume'];?>
</span>
                      </div>
                     <div class="com_grade_list"><i class="com_grade_list_icon"></i><span class="com_grade_list_name">邀请面试数</span>
                           <span class="com_grade_list_n"><?php echo $_smarty_tpl->tpl_vars['v']->value['interview'];?>
</span>
                      </div>
                       <div class="com_grade_list"><i class="com_grade_list_icon"></i><span class="com_grade_list_name">发布兼职数</span>
                           <span class="com_grade_list_n"><?php echo $_smarty_tpl->tpl_vars['v']->value['part_num'];?>
</span>
                      </div>
                      <div class="com_grade_list"><i class="com_grade_list_icon"></i><span class="com_grade_list_name">刷新兼职数</span>
                           <span class="com_grade_list_n"><?php echo $_smarty_tpl->tpl_vars['v']->value['breakpart_num'];?>
</span>
                      </div>
                    
                       

                      <div class="com_grade_list"><i class="com_grade_list_icon"></i><span class="com_grade_list_name">套餐说明</span>
                        <span class="com_grade_smbox fr"><div class="com_grade_smbox_cont" style="display:none;" id="rating<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['explains'];?>
</div><i class="com_grade_smicon" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"></i><i class="com_grade_smicon_san" style="display:none;" id="ratingtu<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"></i></span>
                           
                      </div>
                      <div class="serve_zz_but">
						<form name="alipayment" target="fdingdan" action="index.php?c=pay&act=dingdan" method="post" id='myform<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
' >
       						 <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" name="comvip" />
							 <a href="javascript:buyvip('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="added_list_gm">立即购买</a>
     					</form>
					  </div>
                  </li>           
               </ul>
          </div>
		  <?php }?>
		  <?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
		  没有套餐会员
          <?php } ?>
           <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['config']->value['com_vip_type']==0) {?>
           <!--	套餐模式	-->
           <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		   <?php if ($_smarty_tpl->tpl_vars['v']->value['service_time']>0) {?>
           <div class="com_grade_box fl">
               <ul>
                  <li>
                  <div class="com_grade_rline"></div>
                      <div class="com_grade_tit"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</div>
                    
               <div class="com_grade_money">
               <span class="com_grade_money_n">
	               <?php if ($_smarty_tpl->tpl_vars['v']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['v']->value['time_end']>time()) {?>
	             		  ￥<?php echo $_smarty_tpl->tpl_vars['v']->value['yh_price'];?>

	               <?php } else { ?>
	             		  ￥<?php echo $_smarty_tpl->tpl_vars['v']->value['service_price'];?>

	               <?php }?>
               </span>
                   <?php if ($_smarty_tpl->tpl_vars['v']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['v']->value['time_end']>time()) {?>
                  		<i class="serve_zz_h_nmb_tcjg">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['service_price'];?>
</i>
                   <?php }?>/
                   <span>
                   		<?php if ($_smarty_tpl->tpl_vars['v']->value['service_time']>0) {
echo $_smarty_tpl->tpl_vars['v']->value['service_time'];?>
天<?php } else { ?>永久<?php }?>
                   </span>
               </div>
                    	
                         
                     
                     <div class="com_grade_list"><i class="com_grade_list_icon"></i><span class="com_grade_list_name">发布职位数</span> <span class="com_grade_list_n"><?php echo $_smarty_tpl->tpl_vars['v']->value['job_num'];?>
</span></div>
                    <div class="com_grade_list"><i class="com_grade_list_icon"></i><span class="com_grade_list_name">刷新职位数</span> <span class="com_grade_list_n"><?php echo $_smarty_tpl->tpl_vars['v']->value['breakjob_num'];?>
</span>
                      </div>
                    <div class="com_grade_list"><i class="com_grade_list_icon"></i><span class="com_grade_list_name">下载简历数</span> <span class="com_grade_list_n"><?php echo $_smarty_tpl->tpl_vars['v']->value['resume'];?>
</span>
                      </div>
                     <div class="com_grade_list"><i class="com_grade_list_icon"></i><span class="com_grade_list_name">邀请面试数</span>
                           <span class="com_grade_list_n"><?php echo $_smarty_tpl->tpl_vars['v']->value['interview'];?>
</span>
                      </div>
                       <div class="com_grade_list"><i class="com_grade_list_icon"></i><span class="com_grade_list_name">发布兼职数</span>
                           <span class="com_grade_list_n"><?php echo $_smarty_tpl->tpl_vars['v']->value['part_num'];?>
</span>
                      </div>
                      <div class="com_grade_list"><i class="com_grade_list_icon"></i><span class="com_grade_list_name">刷新兼职数</span>
                           <span class="com_grade_list_n"><?php echo $_smarty_tpl->tpl_vars['v']->value['breakpart_num'];?>
</span>
                      </div>
             
                      
       
                        <div class="com_grade_list"><i class="com_grade_list_icon"></i><span class="com_grade_list_name">套餐说明</span>
                         <span class="com_grade_smbox fr"><div class="com_grade_smbox_cont" style="display:none;" id="rating<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['explains'];?>
</div><i class="com_grade_smicon" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"></i><i class="com_grade_smicon_san" style="display:none;" id="ratingtu<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"></i></span>
                           
                      </div>

                      <div class="serve_zz_but">
						<form name="alipayment" target="fdingdan" action="index.php?c=pay&act=dingdan" method="post" id='myform<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
' >
       						 <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" name="comvip" />
							 <a href="javascript:buyvip('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="added_list_gm">立即购买</a>
     					</form>
					  </div>
                  </li>           
               </ul>
          </div>
		  <?php }?>
		  <?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
		  没有套餐会员
          <?php } ?>
           <?php }?>
             <?php if ($_smarty_tpl->tpl_vars['config']->value['com_vip_type']==1) {?>
        <!--	时间模式	-->
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['times']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
           <div class="serve_zz_h fl">
               <ul>
                  <li>
                      <div class="serve_zz_h_top fl"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</div>
					  <div class="serve_zz_h_nmb fl"><?php if ($_smarty_tpl->tpl_vars['v']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['v']->value['time_end']>time()) {?>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['yh_price'];
} else { ?>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['service_price'];
}?>
                      <?php if ($_smarty_tpl->tpl_vars['v']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['v']->value['time_end']>time()) {?><i class="serve_zz_h_nmb_tcjg">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['service_price'];?>
</i><?php }?>
                      	<span class="serve_zz_h_nmb_y">/<?php if ($_smarty_tpl->tpl_vars['v']->value['service_time']>0) {
echo $_smarty_tpl->tpl_vars['v']->value['service_time'];?>
天<?php } else { ?>永久<?php }?></span>
                      </div>
                        
                      <div class="serve_zz_h_j fl">
                      <div class="serve_zz_h_jb fl">
                      <i class="com_grade_list_icon"></i>
                           <span class="serve_zz_h_jb_ft fl">发布职位数</span>
                           <span class="serve_zz_h_jb_rt fr">不限</span>
                      </div>
                      <div class="serve_zz_h_jb fl">  <i class="com_grade_list_icon"></i>
                           <span class="serve_zz_h_jb_ft fl">刷新职位数</span>
                           <span class="serve_zz_h_jb_rt fr">不限</span>
                      </div>
                      <div class="serve_zz_h_jb fl">  <i class="com_grade_list_icon"></i>
                           <span class="serve_zz_h_jb_ft fl">下载简历数</span>
                           <span class="serve_zz_h_jb_rt fr">不限</span>
                      </div>
                      <div class="serve_zz_h_jb fl">  <i class="com_grade_list_icon"></i>
                           <span class="serve_zz_h_jb_ft fl">邀请面试数</span>
                           <span class="serve_zz_h_jb_rt fr">不限</span>
                      </div>
                      <div class="serve_zz_h_jb fl">  <i class="com_grade_list_icon"></i>
                           <span class="serve_zz_h_jb_ft fl">发布兼职数</span>
                           <span class="serve_zz_h_jb_rt fr">不限</span>
                      </div>
                      <div class="serve_zz_h_jb fl">  <i class="com_grade_list_icon"></i>
                           <span class="serve_zz_h_jb_ft fl">刷新兼职数</span>
                           <span class="serve_zz_h_jb_rt fr">不限</span>
                      </div>
                      <?php if ($_smarty_tpl->tpl_vars['v']->value['explains']) {?>
					  <div class="serve_zz_h_jb fl"><i class="com_grade_list_icon"></i>
                           <span class="serve_zz_h_jb_ft fl">套餐说明</span>
                           <span class="com_grade_smbox fr"><div class="com_grade_smbox_cont" style="display:none;" id="rating<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['explains'];?>
</div><i class="com_grade_smicon" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"></i><i class="com_grade_smicon_san" style="display:none;" id="ratingtu<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"></i></span>
                      </div>
					   <?php }?>
                     
                      <div class="serve_zz_but fl">
						<form name="alipayment" target="fdingdan" action="index.php?c=pay&act=dingdan" method="post" id='myform<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
' >
       						 <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" name="comvip" />
							 <a href="javascript:buyvip('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="added_list_gm">立即购买</a>
     					</form>
					  </div>
                      </div>
                  </li>           
               </ul>
          </div>
		  <?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
		  <div class="msg_no"><p>亲爱的用户，目前没有时间会员服务</p></div>
          <?php } ?>
          <?php }?>
     </div>
</div>
</div>
</div>
</div>
</div>
<?php echo '<script'; ?>
>
function buyvip(id){
	setTimeout(function(){$('#myform'+id).submit();},0);
}
$(document).ready(function() {
	$(".com_grade_smicon").hover(function() {
        var pid=$(this).attr("pid");
		$("#rating"+pid).show();
		$("#ratingtu"+pid).show();
    },function(){
		var pid=$(this).attr("pid");
		$("#rating"+pid).hide();
		$("#ratingtu"+pid).hide();
	});
    
});
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
