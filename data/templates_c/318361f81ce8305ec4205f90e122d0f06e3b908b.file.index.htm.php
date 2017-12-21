<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-12-21 08:50:02
         compiled from "D:\phpStudy\WWW\huilie\app\template\member\lietou\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:23185a3b053a95e732-48521183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '318361f81ce8305ec4205f90e122d0f06e3b908b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\huilie\\app\\template\\member\\lietou\\index.htm',
      1 => 1513817289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23185a3b053a95e732-48521183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'company' => 0,
    'username' => 0,
    'member' => 0,
    'guweninfo' => 0,
    'atn' => 0,
    'report' => 0,
    'kfqq' => 0,
    'des_resume' => 0,
    'de_resume' => 0,
    'down_resume' => 0,
    'statis' => 0,
    'normal_job_num' => 0,
    'addjobnum' => 0,
    'shuaxuanjobs' => 0,
    'des_shuaxuanjobs' => 0,
    'jobs' => 0,
    'time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a3b053ab17db4_53279577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3b053ab17db4_53279577')) {function content_5a3b053ab17db4_53279577($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\phpStudy\\WWW\\huilie\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\phpStudy\\WWW\\huilie\\app\\include\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_sign')) include 'D:\\phpStudy\\WWW\\huilie\\app\\include\\libs\\plugins\\function.sign.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['ltstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
>
function Close(id){
	$("#"+id).hide();
	$("#bg").hide();
}
function Next(){
	$("#one_tip").hide();
	$("#two_tip").show();
}
function Close_yds() {
	 $("#shuaxin").hide();
	 $("#bg").hide();
}
function break_job(num){
	if(num=='0'){
		layer.confirm('每个正常职位将扣除<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_jobefresh'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
，确定要刷新？',function(){
			layer.load('执行中，请稍候...',0);
			$.post("<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?m=ajax&c=Refresh_job",{},function(data){
				layer.closeAll();
				if(data==1){
					layer.msg("职位刷新成功！",2,9,function(){location.reload();});
				}else{
					layer.msg(data,2,8);
				}
			})
		});
	}else{
		layer.load('执行中，请稍候...',0);
		$.post("<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?m=ajax&c=Refresh_job",{},function(data){
			layer.closeAll();
			if(data==1){
				layer.msg("职位刷新成功！",2,9,function(){location.reload();});
			}else{
				layer.msg(data,2,8);
			}
		})
	}
}
<?php echo '</script'; ?>
>
<div class="w1000">
<div style="position:relative; z-index:1005">
  <div class="Description_Layer">
    <div class="Tip_Information" id="one_tip" <?php if ($_smarty_tpl->tpl_vars['company']->value['hy']!='') {?>style="display:none"<?php }?>>
      <div class="Tip_Information_cont">
        <div class="re">
          <div class="Tip_Information_close" onclick="Close('one_tip');"></div>
        </div>
        <div class="Tip_Information_p">
          <p><?php if ($_smarty_tpl->tpl_vars['company']->value['name']) {?>
       <?php echo $_smarty_tpl->tpl_vars['company']->value['name'];
} else {
echo $_smarty_tpl->tpl_vars['username']->value;
}?>，您已成功注册猎头账号！
   </p>
   <p><span class="tip_wt">有问题可拨打客服电话：<em><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</em> </span><a class="tip_fk" href="<?php echo smarty_function_url(array('m'=>'advice'),$_smarty_tpl);?>
" target="_blank">点击这里在线反馈</a>
   </p>

        </div>
        <div class="Tip_Information_bot"><a class="tip_ws" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/?c=info" >完善猎头资料</a> </div>
      </div>
    </div>
    <div class="Recruitment_Layer" id="two_tip"  style="display:none">
      <div class="Tip_Information">
        <div>
          <div class="Tip_Information_gl"></div>
          <div class="Tip_Information_jt2"></div>
          <div class="Recruitment_fb"></div>
        </div>
        <div class="Tip_Information_cont">
          <div class="re">
            <div class="Tip_Information_close" onclick="Close('two_tip');"></div>
          </div>
          <div class="Tip_Information_p">明确招聘需求，细化招聘条件，精准锁定人才！ </div>
          <div class="Tip_Information_bot"><a href="javascript:Close('two_tip');" class="Tip-next">知道了</a> </div>
        </div>
      </div>
    </div>
  </div>    </div>

<!--  首页-->
<div class="com_m_index_left">
<div class="com_m_index_info">
<div class="com_m_index_logo">  <a href="index.php?c=uppic"><img src=".<?php echo $_smarty_tpl->tpl_vars['company']->value['logo'];?>
" width="185" height="75" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
','2')"/>
<i class="com_m_index_logo_xg"></i></a></div>
<div class="com_m_index_comname"><?php if ($_smarty_tpl->tpl_vars['company']->value['name']) {?>
       <?php echo $_smarty_tpl->tpl_vars['company']->value['name'];
} else { ?>
        <a href="index.php?c=info" style="color:#f60; text-decoration:underline">您还未完善猎头信息，点击完善！</a>
        <?php }?></div>
        <div class="clear"></div>
<div class="com_m_index_rz_box">
<?php if ($_smarty_tpl->tpl_vars['company']->value['email_status']=="1") {?>
	   <a title="邮件已验证" href="index.php?c=binding" class="com_m_index_rz_box_a">
       <div class="com_m_index_rz_p"><i class="rz_icon rz_yx2"></i>已验证</div></a>
		<?php } else { ?>
		<a title="邮件未验证" href="index.php?c=binding" class="com_m_index_rz_box_a">
         <div class="com_m_index_rz_p"><i class="rz_icon rz_yx"></i>未验证</div></a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['company']->value['moblie_status']=="1") {?>
		<a title="手机已验证" href="index.php?c=binding" class="com_m_index_rz_box_a">
        <div class="com_m_index_rz_p"><i class="rz_icon rz_sj2"></i>已验证</div></a>
		<?php } else { ?>
		<a title="手机未验证" href="index.php?c=binding" class="com_m_index_rz_box_a">
        <div class="com_m_index_rz_p"><i class="rz_icon rz_sj"></i>未验证</div></a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['company']->value['yyzz_status']=="1") {?>
		<a title="营业执照已验证" href="index.php?c=binding" id="biza" class="com_m_index_rz_box_a">
        <div class="com_m_index_rz_p"><i class="rz_icon rz_zz2"></i>已验证</div></a> <?php } else { ?>
		<a title="营业执照未验证" href="index.php?c=binding" id="biza" class="com_m_index_rz_box_a">
        <div class="com_m_index_rz_p"><i class="rz_icon rz_zz"></i>未验证</div></a> <?php }?>
</div>
<div class="clear"></div>
  <div class="com_m_index_logintime">上次登录时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['member']->value['login_date'],'%Y-%m-%d %H:%M');?>
 </div>
    <div class="com_m_index_eye"><span class="com_m_index_eye_s"><?php echo $_smarty_tpl->tpl_vars['company']->value['hits'];?>
 次浏览</span><span class="com_m_index_gz"><?php echo $_smarty_tpl->tpl_vars['company']->value['ant_num'];?>
 次关注</span> </div>
       <div class="clear"></div>
    <div class="com_index_bj_box">
  <div class="com_index_bj"><a href="index.php?c=info"><i class="com_index_bjicon com_index_bjiconbj"></i>编辑资料</a></div>
  <div class="com_index_bj"><a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>'`$uid`'),$_smarty_tpl);?>
" target="_blank"> <i class="com_index_bjicon com_index_bjiconyl"></i>预览主页</a></div>
  <div class="com_index_bj com_index_bjend"><a href="index.php?c=comtpl"><i class="com_index_bjicon com_index_bjiconsz"></i>模板设置</a></div>

    </div>
</div>
<div class="com_index_sign"><?php echo smarty_function_sign(array(),$_smarty_tpl);?>
</div>



<?php if ($_smarty_tpl->tpl_vars['guweninfo']->value['id']) {?>
<div class="com_index_kf">
<div class="com_m_index_h1"><span class="com_m_index_h1_s">招聘顾问</span></div>
<div class="com_index_kf_box">
<div class="com_index_kf_box_user">
<div class="com_index_kf_box_user_photo"><img src="<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['logo'];?>
" style="width:64px;height:64px"></div>
<div class="com_index_kf_box_username"><?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['username'];?>
</div>
<div class="">
<?php if ($_smarty_tpl->tpl_vars['guweninfo']->value['qq']) {?>
<a target="_blank" href="tencent://message/?uin=<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['qq'];?>
&Site=<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
&Menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=1:<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['qq'];?>
:12" alt="点击这里给我发消息"></a>
<?php }?></div>
</div>
<div class="com_index_kf_p">电话：<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['mobile'];?>
</div>
<div class="com_index_kf_p">微信：<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['weixin'];?>
</div>
<div class="com_index_kf_p">Q Q：<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['qq'];?>
</div>
<div class="com_index_kf_p">
	<?php if ($_smarty_tpl->tpl_vars['atn']->value['uid']) {?>
	<a href="javascript:void(0)" class="com_index_kf_dz">已点赞</a>
	<?php } else { ?>
	<a href="javascript:void(0)" onclick="zan('<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['id'];?>
');" class="com_index_kf_dz">点赞</a>
	<?php }?>
    <?php if (is_array($_smarty_tpl->tpl_vars['report']->value)&&!$_smarty_tpl->tpl_vars['report']->value['result']) {?>
    <a href="index.php?c=report&act=show"  class="com_index_kf_ts">已投诉</a>
    <?php } else { ?>
	<a href="javascript:void(0)" onclick="reportgw('<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['id'];?>
','投诉顾问');"  class="com_index_kf_ts">投诉</a>
    <?php }?></div>
</div>
</div>

<?php } else { ?>
<div class="com_index_kf">
<div class="com_m_index_h1"><span class="com_m_index_h1_s">招聘顾问</span></div>
<div class="com_index_kf_box">
<div class="com_index_kf_box_user">
<div class="com_index_kf_box_user_photo"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_guwen'];?>
" style="width:64px;height:64px"></div>
<div class="com_index_kf_box_username">网站客服</div>
<div class="">
<?php if ($_smarty_tpl->tpl_vars['kfqq']->value) {?>
<a target="_blank" href="tencent://message/?uin=<?php echo $_smarty_tpl->tpl_vars['kfqq']->value;?>
&Site=<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
&Menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=1:<?php echo $_smarty_tpl->tpl_vars['kfqq']->value;?>
:12" alt="点击这里给我发消息"></a>
<?php }?>
</div>
</div>
<div class="com_index_kf_p">电话：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</div>
<div class="com_index_kf_p">手机：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webmoblie'];?>
</div>
<div class="com_index_kf_p">Q  Q：<?php echo $_smarty_tpl->tpl_vars['kfqq']->value;?>
</div>
<?php if ($_smarty_tpl->tpl_vars['config']->value['wx_name']) {?><div class="com_index_kf_p">微信公众号：<?php echo $_smarty_tpl->tpl_vars['config']->value['wx_name'];?>
</div><?php }?>
</div>
</div>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode']!='') {?>
<div class="left_index_wx">
<div class="left_index_wx_img"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
" width="140" height="140"></div>
<div class="left_index_wx_p1">手机挑人才!</div>
<div class="left_index_wx_p">微信扫一扫,招聘更简单</div>
</div>
<?php }?>


</div>
<div class="com_m_index_right">
    <?php if ($_smarty_tpl->tpl_vars['member']->value['status']!=1) {?>
   	<div class="com_index_wsh fltL">

   		<div class="com_index_wsh_box">
        <div class="com_index_wsh_box_p">您的帐号尚未通过审核。</div>
   		未审核的猎头用户无法查看人才简历的联系方式。<br/>
   		您可联系客服电话（<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
）让我们尽快审核。
 	</div>

   	</div>
    <?php }?>




<div class="com_m_index_data">
<ul>

<li>
<a href="index.php?c=hr" class="com_m_index_data_box">
<div class="com_m_index_data_iconbg com_m_index_data_iconbg1"><i class="com_m_index_data_icon"></i></div>
<div class="com_m_index_data_name">收到简历</div>
<div class="com_m_index_data_n"><?php echo $_smarty_tpl->tpl_vars['des_resume']->value;?>
</div>
<div class="com_m_index_data_bth">未查看 <span class="f60"><?php echo $_smarty_tpl->tpl_vars['de_resume']->value;?>
</span></div>
</a></li>
<li><a href="index.php?c=down"  class="com_m_index_data_box"><div class="com_m_index_data_iconbg com_m_index_data_iconbg2"><i class="com_m_index_data_icon"></i></div>
<div class="com_m_index_data_name">下载简历</div>
<div class="com_m_index_data_n"><?php echo $_smarty_tpl->tpl_vars['down_resume']->value;?>
</div>
<div class="com_m_index_data_bth">还可下载  <span class="f60"><?php if ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']>time()||$_smarty_tpl->tpl_vars['statis']->value['vip_etime']=="0") {
if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']==1) {
echo $_smarty_tpl->tpl_vars['statis']->value['down_resume'];
} else { ?>不限<?php }
} else { ?>0<?php }?></span></div>
</a></li>
<li class="com_m_index_data_end">
<div class="com_m_index_data_end_job">
<a href="index.php?c=job&w=1">
<div class="com_m_index_data_iconbg com_m_index_data_iconbg3"><i class="com_m_index_data_icon"></i></div>
<div class="com_m_index_data_name">职位管理</div>
<div class="com_m_index_data_n"><?php echo $_smarty_tpl->tpl_vars['normal_job_num']->value;?>
</div>
</a>
<div class="com_m_index_data_fbbth">
<a href="javascript:void(0);" onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
');return false;">发布职位</a></div>
</div>
</li>
</ul>
</div>




<?php echo '<script'; ?>
 type="text/javascript">
function jobshuaxin(id){
	<?php if ($_smarty_tpl->tpl_vars['shuaxuanjobs']->value) {?>
	var i=<?php echo $_smarty_tpl->tpl_vars['des_shuaxuanjobs']->value;?>
;
			var num="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_jobefresh'];?>
";
			var breakmsg = '本次共刷新'+i+'个职位,需扣除'+i+'个刷新数量,或消耗'+(num*i)+'<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
！';
			layer.confirm(breakmsg,function(){
				$.post("<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?m=ajax&c=Position_job",{idk:i,ids:id},function(data){
					if(data==1){
						layer.msg("刷新成功！",2,9,function(){window.location.reload();});
					}else{
						layer.msg(data,2,8);
					}
				})
	});
	<?php } else { ?>
		layer.msg('您暂无发布的职位！', 2, 8);
	<?php }?>
}


<?php echo '</script'; ?>
>



</div></div>
</div>
 <!----end--->
  <!--刷新职位提示弹出框-->

<div id="shuaxin" style="display:none;">
<div class="sx_pd">
<div class="sx_top">
<dl>
   <dt></dt>
   <dd>
       <div>今天还没刷新，刷新职位将<em class="sx_bot_or">职位排名提前</em><br/>让人才更容易看到你，<em class="sx_bot_or">提高职位申请率！</em></div>
       <div class="sx_top_t">
            <em class="sx_top_t_tt">刷新前请确认以下信息准确完整：</em>
            <p>联系电话：<?php echo $_smarty_tpl->tpl_vars['company']->value['linktel'];?>
</p>
            <p>上次刷新时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['jobs']->value['lastupdate'],"%Y-%m-%d %H:%M:%S");?>
</p>
            <p>招聘职位：<?php echo $_smarty_tpl->tpl_vars['jobs']->value['name'];?>
 </p>
       </div>
    </dd>
</dl>
</div>
</div>
<div class="sx_bot">
     <a class="sx_bot_sx" href="javascript:void(0)" onclick="jobrefresh(<?php echo $_smarty_tpl->tpl_vars['jobs']->value['id'];?>
);">刷新</a>
     <a class="sx_bot_qx" href="javascript:layer.closeAll();">取消</a>
</div>

</div>
<!--提示弹出框 end-->
<!--投诉顾问弹出框-->
<div id="<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['id'];?>
" style="display:none;">
  <div class="Binding_pop_box" style="padding:10px;width:330px;height:200px; background:#fff;">
    <div class="Binding_pop_box_msg">您要投诉的顾问是：<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['username'];?>
</div>
    <div class="popjb_tip">为了能够给您提供高质量的服务，反馈具体情况，我们会第一时间给您答复！</div>

      <div class="">
     	 <textarea id="reason" name="reason" class="popjb_text"></textarea>
      </div>
      <div class="Binding_pop_sub" style="margin-top:15px;"> <span class="Binding_pop_box_list_left">&nbsp;</span>
        <input class="com_pop_bth_qd" onclick="reportSub('index.php?c=report')" type="button" value="确定">
		<input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['id'];?>
" id='eid' name='eid'>
        <input class="com_pop_bth_qx" type="button" value="取消" onclick="layer.closeAll();">
      </div>
  </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
<?php if ($_smarty_tpl->tpl_vars['company']->value['hy']!=''&&$_smarty_tpl->tpl_vars['jobs']->value['name']!=''&&$_smarty_tpl->tpl_vars['jobs']->value['lastupdate']<$_smarty_tpl->tpl_vars['time']->value&&$_COOKIE['jobrefresh']!='1') {?>
	$.layer({
		type : 1,
		title : '刷新职位',
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['500px','320px'],
		page : {dom :"#shuaxin"}
	});

<?php }?>

function reportgw(eid,title){
	$.layer({
		type : 1,
		title :title,
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['350px','auto'],
		page : {dom :"#"+eid}
	});
}
function reportSub(url){
	var reason=$("#reason").val();
	var eid=$("#eid").val();
	if(reason==''){
		layer.msg('请填写投诉内容！', 2, 8);return false;
	}
	$.post(url,{reason:reason,eid:eid},function(data){
		layer.closeAll();
		if(data=='0'){
			layer.msg('投诉失败！', 2, 8);
		}else if(data=='1'){
			layer.msg('投诉成功！', 2, 9,function(){window.location.reload();});
		}else if(data=='2'){
			layer.msg('已投诉成功，等待管理员回复！', 2, 8);
		}
	});
}
function zan(id){
	$.post("index.php?m=ajax&c=guwenZan",{id:id},function(data){
		if(data=='2'){
			layer.msg('请不要重复点赞！', 2, 8);
		}else if(data=='1'){
			layer.msg('点赞成功！',2,9,function(){window.location.reload();});
			//layer.msg("刷新成功！",2,9,function(){window.location.reload();});
		}
	});
}
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
