<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-12-21 09:32:25
         compiled from "D:\phpStudy\WWW\huilie\app\template\member\user\msg.htm" */ ?>
<?php /*%%SmartyHeaderCode:132855a3b0f2986f0a8-82726864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b90771ec55c1c93a74c2c92a99c86b011f493139' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\huilie\\app\\template\\member\\user\\msg.htm',
      1 => 1513817289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132855a3b0f2986f0a8-82726864',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msgnum' => 0,
    'rows' => 0,
    'log' => 0,
    'pagenav' => 0,
    'realmsgname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a3b0f29955826_75790806',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3b0f29955826_75790806')) {function content_5a3b0f29955826_75790806($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\phpStudy\\WWW\\huilie\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\phpStudy\\WWW\\huilie\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="yun_user_member_w1100"> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <div class="mian_right fltR mt20">
  
   <div class="member_right_index_h1 fltL"> <span class="member_right_h1_span fltL">�ҵ�ְλ</span> <i class="member_right_h1_icon user_bg"></i></div>
      <div id="gms_showclew"></div>
     
        <div id="" class="resume_box_list" > 
          <div class="job_list_tit"> <ul class="">
	<li <?php if ($_GET['c']=='msg') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=msg">����֪ͨ</a><?php if ($_smarty_tpl->tpl_vars['msgnum']->value) {?><i class="left_sidebar_leftmune_icon"><?php echo $_smarty_tpl->tpl_vars['msgnum']->value;?>
</i><?php }?></li>
      <li <?php if ($_GET['c']=='job') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=job">�����ְλ</a></li>
      <li <?php if ($_GET['c']=='favorite') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=favorite">ְλ�ղ�</a></li>
      <li <?php if ($_GET['c']=='look_job') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=look_job">�����ְλ </a></li>

	</ul> <i class="member_right_h1_icon user_bg"></i></div>
        
        
        <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
          <div class="List_Ope List_Title "> 
          
          <span class="List_Title_span List_Title_w360 pd15">����ְλ</span> 
          <span class="List_Title_span List_Title_w80">����ʱ��</span> 
            <span class="List_Title_span msg_zt_czw310">����״̬����</span>
          <span class="List_Title_span List_Title_w90">����</span> 
          </div>
          <?php }?>
          <?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->_loop = true;
?>
          <div class="List_Ope msg_joblist"> 
		  <div class="List_Title_span List_Title_w360 pd15"> 
		  <?php if ($_smarty_tpl->tpl_vars['log']->value['type']==0) {?> 
			<a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>'`$log.jobid`'),$_smarty_tpl);?>
" target="_blank" class="List_Title_span_com"><?php echo $_smarty_tpl->tpl_vars['log']->value['jobname'];?>
</a> 
		  <?php }?>
          <div class="msg_com_mt5"><a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>'`$log.fid`'),$_smarty_tpl);?>
" target="_blank" class="cor3"><?php echo $_smarty_tpl->tpl_vars['log']->value['fname'];?>
</a> </div> </div> 
		  <div class="List_Title_span List_Title_w80"><span class="msg_zt_s"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['log']->value['datetime'],'%Y-%m-%d');?>
</span></div> 
          <div class="List_Title_span msg_zt_czw310">
         	
           <?php if ($_smarty_tpl->tpl_vars['log']->value['is_browse']=="1") {?> 
			<span class="sg_zt_czw_zt"><font color="#f60">��δ�ظ�</font> </span>
		
			<?php } elseif ($_smarty_tpl->tpl_vars['log']->value['is_browse']=="2") {?> 
			
			<span class="sg_zt_czw_zt"><font color="#666">�Ѳ鿴</font> </span>
			
			<?php } elseif ($_smarty_tpl->tpl_vars['log']->value['is_browse']=="3") {?> 
			
			<span class="msg_zt_s"><font color="#008000">��ͬ������</font>  </span>
            
			
			<?php } elseif ($_smarty_tpl->tpl_vars['log']->value['is_browse']=="4") {?> 
			<span class="msg_zt_s"><font color="#FF00000">�Ѿܾ�����</font> </span>
			
			<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['log']->value['is_browse']!="3"&&$_smarty_tpl->tpl_vars['log']->value['is_browse']!="4") {?> 
            <span class="sg_zt_czw_zt_box">
			 <a href="javascript:void(0);" onclick="layer_del('��ȷ��Ҫ���θù�˾��ɾ�������룿','index.php?c=msg&act=shield&id=<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
');" class="msg_zt_cz">������ҵ</a>
			
			<a href="javascript:void(0);" onclick="layer_del('ȷ��Ҫ�ܾ��������룿', 'index.php?c=msg&act=inviteset&id=<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
&browse=4')" class="msg_zt_cz">�ܾ�����</a>
		
			<a href="javascript:void(0);" onclick="layer_del('ȷ��Ҫͬ���������룿', 'index.php?c=msg&act=inviteset&id=<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
&browse=3')" class="msg_zt_cz">ͬ������</a> 
			</span>
		  <?php }?>
            </div>
            
		  <div class="List_Title_span List_Title_w90"> 
    <span class="msg_zt_s"> <a href="javascript:getcont('<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
');"class="cblue">�鿴</a> <span class="u_new_resume_bot_line">|</span>
		  <a href="javascript:void(0);" onclick="layer_del('��ȷ��Ҫɾ����', 'index.php?c=msg&act=del&id=<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
'); " class="cblue">ɾ��</a> </span>
		  </div>

         
          </div>
          <?php }
if (!$_smarty_tpl->tpl_vars['log']->_loop) {
?>
          <div class="msg_no">
            <p>�װ����û���Ŀǰ����δ�յ�����֪ͨ��</p>
            <p>��Ҫ��ø�������Ի��ᣬ����Ͷ�ݼ��������������</p>
            <a href="<?php echo smarty_function_url(array('m'=>'job'),$_smarty_tpl);?>
" target="_blank" class="msg_no_sq uesr_submit">����Ͷ�ݼ���>></a> </div>
          <?php } ?> </div>
        <div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
      </div>
    </div>
<div id="getcont" style="width:100%; display:none;">
 <div class="aud_face">
   <div class="audition_list"><span class="audition_list_span"></span></div>
   <div  style="padding:10px;">
   <div class="invitation_user">�𾴵� <span class="invitation_user_name"><?php echo $_smarty_tpl->tpl_vars['realmsgname']->value;?>
</span> ����!</div>

 <div class="invitation_cont">
 &nbsp;&nbsp;&nbsp;&nbsp;����������Դ���ĳ���ɸѡ,������Ϊ�������߱� <i class="invitation_cont_job"  id="jobname"></i> ��λ����ְ�ʸ������ʽ���������ҹ�˾�μ����ԡ�
 
</div>
<div class="invitation_cont_tip">����������£�</div>
<div class="invitation_cont_p"><span class="invitation_cont_pn">������ʱ�䡿</span><em class="audition_list_e" id="intertime"></em>&nbsp;</div>
<div class="invitation_cont_p"><span class="invitation_cont_pn">�����Ե�ַ��</span><em class="audition_list_e" id="address"></em>&nbsp;</div>
<div class="invitation_cont_p"><span class="invitation_cont_pn">����ϵ��ʽ��</span><em class="audition_list_e" id="linkman"></em> ( TEL��<em class="invitation_cont_tel" id="linktel"></em> )</div>
<div class="invitation_cont_p"><span class="invitation_cont_pn">�����Ա�ע��</span><em class="" id="content"></em>&nbsp;</div>
</div>
<div class="invitation_cont_jy">
<div class="invitation_cont_d">�ش�����&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
<div class="invitation_cont_d"><em class="" id="comname"></em>&nbsp;&nbsp;&nbsp;&nbsp;</div>
<div class="invitation_cont_d"><em class="" id="datetime"></em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
</div>
</div>
</div>
<?php echo '<script'; ?>
>
    function getcont(id) {
        $.post("index.php?c=msg&act=ajax", { id: id }, function (data) {
            var data = eval('(' + data + ')');
            $("#comname").html(data.comname);
            $("#jobname").html(data.jobname);
            $("#linkman").html(data.linkman);
            $("#linktel").html(data.linktel);
            $("#intertime").html(data.intertime);
            $("#address").html(data.address);
            if(data.content){
				$("#content").html(data.content);
			}else{
				$("#content").html('&nbsp');
			}
            $("#datetime").html(data.datetime);
            $.layer({
                type: 1,
                title: '�������뺯',
                shade: [0],
                closeBtn: [0, true],
                border: [10, 0.3, '#000', true],
                area: ['600px', 'auto'],
                page: { dom: "#getcont" }
            });
        })
    }
<?php echo '</script'; ?>
> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
