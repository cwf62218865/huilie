<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-12-21 09:08:09
         compiled from "D:\phpStudy\WWW\huilie\app\template\admin\admin_web_config.htm" */ ?>
<?php /*%%SmartyHeaderCode:46845a3b0979b6a4d4-23269157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd3038a463d63e380b048bf38183d0dfd4a90576' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\huilie\\app\\template\\admin\\admin_web_config.htm',
      1 => 1513817286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46845a3b0979b6a4d4-23269157',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a3b0979cc9dd2_82221683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3b0979cc9dd2_82221683')) {function content_5a3b0979cc9dd2_82221683($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />  
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="../js/jquery-1.8.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/layer/layer.min.js" language="javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="js/admin_public.js" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['mapurl'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../js/map.js"><?php echo '</script'; ?>
>
<link href="images/blue.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="js/icheck.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
	$(document).ready(function(){
	  $('input').iCheck({
		checkboxClass: 'icheckbox_flat-blue',
		radioClass: 'iradio_flat-blue'
	  });
	  	$(".kind").find("label").click(function(){
			var kindvalue=$(".kind").find(".checked").find("input").val();
			if(kindvalue==1){
				$(".character").show();
				$(".geetest").hide();
			}else{
				$(".character").hide();
				$(".geetest").show();
			}
	   });
	   $(".kind").find("ins").click(function(){
			var kindvalue=$(".kind").find(".checked").find("input").val();
			if(kindvalue==1){
				$(".character").show();
				$(".geetest").hide();
			}else{
				$(".character").hide();
				$(".geetest").show();
			}
	   });
	});
<?php echo '</script'; ?>
>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp" style="position:relative;">
<div class="infoboxp_top_bg"></div>
<div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute; z-index:10000"></div>
<div class="main_tag" >
<div class="admin_h1_bg"> 
<span class="infoboxp_top_span infoboxp_top_wz">网站配置</span>
<ul>
	<li class="on">基本设置</li>
    <li>安全设置</li>
    <li>验证码设置</li>
    <li>网站LOGO</li>
    <li>地图设置</li>
    <li>缓存设置</li>
</ul>
</div>
<div class="tag_box">
<div> 
<table width="100%" class="table_form">
<tr class="admin_table_trbg">
   <th width="160" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
   <td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>
</tr>
<tr>
<th width="160">网站名称：</th>
<td>
<input class="input-text" type="text" name="sy_webname" id="sy_webname" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
" size="60" maxlength="255"/>
<span class="admin_web_tip">如：hr135人才网</span></td>
</tr>
<tr class="admin_table_trbg">
		<th width="160">网址地址：</th>
		<td><input class="input-text" type="text" name="sy_weburl" id="sy_weburl" value="<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_old_weburl']) {
echo $_smarty_tpl->tpl_vars['config']->value['sy_old_weburl'];
} else {
echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];
}?>" size="60" maxlength="255"/>
        <span class="admin_web_tip">如：http://www.hr135.com</span></td>
	</tr>
    <tr>
    	<th width="160">网站开启：</th>
		<td  >
        <div class="iradio_flat_height">
          <input type="radio" name="sy_web_online" value="1" id="RadioGroup1_12" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_web_online']=="1") {?>checked<?php }?>/>
          <span class="iradio_flat_left"><label for="RadioGroup1_12">开启</label>&nbsp;</span>
          <input type="radio" name="sy_web_online" value="2" id="RadioGroup1_13" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_web_online']=="2") {?>checked<?php }?>/>
          <span class="iradio_flat_left"><label for="RadioGroup1_13">关闭</label></span>
          </div>
        </td>
    </tr>

    <tr class="admin_table_trbg">
		<th width="160">后台列表页显示条数：</th>
		<td><input class="input-text" type="text" name="sy_listnum" id="sy_listnum" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_listnum'];?>
" size="10" maxlength="255" /> 条</td>
        
	</tr>
    <tr>
    	<th width="160">网站关闭原因：</th>
		<td>
          <textarea name="sy_webclose" id="sy_webclose" rows="3" cols="50" class="web_text_textarea"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webclose'];?>
</textarea>
        </td>
      
    </tr>  
  <tr class="admin_table_trbg">
		<th width="160">网站关键词：</th>
		<td class="y-bg"><textarea name="sy_webkeyword" id="sy_webkeyword" rows="3" cols="50" class="web_text_textarea"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webkeyword'];?>
</textarea>
        <span class="admin_web_tip">提示：网站关键词作为公共部分详细设置请到系统-》SEO设置单独设置</span></td>
     
	</tr>
	<tr>
		<th width="160">网站描述：</th>
		<td class="y-bg"><textarea name="sy_webmeta" id="sy_webmeta" rows="3" cols="50" class="web_text_textarea"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webmeta'];?>
</textarea><span class="admin_web_tip">提示：网站描述作为公共部分，详细设置请到系统-》SEO管理设置</span></td>
     
	</tr>
	<tr class="admin_table_trbg">
		<th width="160">网站版权信息：</th>
        <td><textarea name="sy_webcopyright" id="sy_webcopyright" rows="3" cols="80" class="web_text_textarea"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webcopyright'];?>
</textarea></td>
       
	</tr>
	<tr>
		<th width="160">站长EMAIL：</th>
		<td><input class="input-text" type="text" name="sy_webemail" id="sy_webemail" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webemail'];?>
" size="40" maxlength="255" /></td>
      
	</tr>
	<tr class="admin_table_trbg">
		<th width="160">站长手机：</th>
		<td><input class="input-text" type="text" name="sy_webmoblie" id="sy_webmoblie" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webmoblie'];?>
" size="40" maxlength="255" /></td>
       
	</tr>
	<tr class="admin_table_trbg">
		<th width="160">站长传真：</th>
		<td><input class="input-text" type="text" name="sy_webtel" id="sy_webtel" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webtel'];?>
" size="40" maxlength="255"/> <span class="admin_web_tip">如：021-61190281</span></td>
      
	</tr>
	<tr>
		<th width="160">备案号：</th>
		<td><input class="input-text tips_class" type="text" name="sy_webrecord" id="sy_webrecord" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webrecord'];?>
" size="40" maxlength="255" /></td>
       
	</tr>
	<tr>
		<th width="160">客服电话：</th>
		<td><input class="input-text" type="text" name="sy_freewebtel" id="sy_freewebtel" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
" size="40" maxlength="255"/><span class="admin_web_tip">如：400-8888-888</span></td>
      
	</tr>
	<tr class="admin_table_trbg">
		<th width="160">客服QQ：</th>
		<td><input class="input-text" type="text" name="sy_qq" id="sy_qq" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_qq'];?>
" size="40" maxlength="255"/> <span class="admin_web_tip">多个则用半角逗号隔开！</span></td>
       
	</tr>
	<tr>
		<th width="160">公司地址：</th>
		<td><input class="input_text_w290" type="text" name="sy_webadd" id="sy_webadd" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webadd'];?>
" size="80" maxlength="255"/><span class="admin_web_tip">如：上海徐汇区零陵路爱和大厦14A座</span></td>
      
	</tr>
		<tr class="admin_table_trbg">
		<th width="160">统计代码：</th>
        <td><textarea name="sy_webtongji" id="sy_webtongji" rows="3" cols="80" class="web_text_textarea"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webtongji'];?>
</textarea></td>
     
	</tr>
<tr>
		<td colspan="3" align="center"><input class="admin_submit4" id="config" type="button" name="config" value="提交">&nbsp;&nbsp;<input class="admin_submit4" type="reset" value="重置"/></td>
	</tr>
</table>  
</div>
<div class="hiddendiv"> 
    <table width="100%" class="table_form">
      <tr class="admin_table_trbg">
          <th width="160" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
          <td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>
        
    </tr>
	<tr>
		<th width="160">系统安全码：</th>
		<td><input class="input-text" type="text" name="sy_safekey" id="sy_safekey" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_safekey'];?>
" size="40" maxlength="255"/>
        <span class="admin_web_tip">系统加密串，请自定义修改，如：986jhgyutw.*x</span></td>
      
	</tr>
	<tr class="admin_table_trbg">
    	<th width="160">CSRF防御：</th>
		<td  >
         <div class="iradio_flat_height">  
         <input type="radio" name="sy_iscsrf" value="1" id="sy_iscsrf" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_iscsrf']=="1") {?>checked<?php }?>>
          <span class="iradio_flat_left"><label for="RadioGroup1_12">开启</label>&nbsp;</span>
          <input type="radio" name="sy_iscsrf" value="2" id="sy_iscsrf" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_iscsrf']=="2") {?>checked<?php }?>>
          <span class="iradio_flat_left"><label for="RadioGroup1_13">关闭</label></span>
          </div>
        </td>
     
    </tr>
    <tr>
    	<th width="160">后台修改模板：</th>
		<td  >
        <div class="iradio_flat_height">   
        	<input type="radio" name="sy_istemplate" value="1" id="sy_istemplate" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_istemplate']=="1") {?>checked<?php }?>>
          <span class="iradio_flat_left"><label for="RadioGroup1_12">开启</label>&nbsp;</span>
          <input type="radio" name="sy_istemplate" value="2" id="sy_istemplate" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_istemplate']=="2") {?>checked<?php }?>>
          <span class="iradio_flat_left"><label for="RadioGroup1_13">关闭</label></span>
          </div>
        </td>
       
    </tr>
    
        <tr class="admin_table_trbg">
            <th width="160">过滤关键词：</th>
            <td><textarea name="sy_fkeyword" id="sy_fkeyword" rows="3" cols="50" class="web_text_textarea"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_fkeyword'];?>
</textarea>
           <span class="admin_web_tip">如：台湾,台独</span></td>
         
        </tr>
        <tr>
            <th width="160">替换过滤关键词：</th>
            <td><textarea name="sy_fkeyword_all" id="sy_fkeyword_all" rows="3" cols="50" class="web_text_textarea"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_fkeyword_all'];?>
</textarea>
            <span class="admin_web_tip">将敏感关键词替换</span></td>
          
        </tr>
        <tr class="admin_table_trbg">
		<th>禁止IP访问：</th>
			<td><textarea id="sy_bannedip" name="sy_bannedip" cols="100" rows="2" class="web_text_textarea"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_bannedip'];?>
</textarea>
             <span class="admin_web_tip">例：127.0.0.1|192.168.1.1</span>
            </td>
          
		</tr>
        <tr>
            <th width="160">禁止IP访问提示：</th>
            <td><textarea name="sy_bannedip_alert" id="sy_bannedip_alert" rows="3" cols="50" class="web_text_textarea"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_bannedip_alert'];?>
</textarea>
            <span class="admin_web_tip">禁止访问提示</span></td>
            
        </tr>
        <tr class="admin_table_trbg">
            <td colspan="3" align="center">
            <input class="admin_submit4" id="otherconfig" type="button" name="otherconfig" value="提交" />&nbsp;&nbsp;
            <input class="admin_submit4" type="reset" value="重置" /></td>            
        </tr>
    </table> 
	 
</div>
<div class="hiddendiv"> 
    <table width="100%" class="table_form">
     <tr class="admin_table_trbg">
       <th width="160" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
          <td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>
    
    </tr>
	<tr>
		<th width="160">开启系统验证码：</th>
		<td>
         <div class="iradio_flat_height">
         <input type="checkbox" name="code_web" value="注册会员" id="checkboxgroup1_0" <?php if (strstr($_smarty_tpl->tpl_vars['config']->value['code_web'],'注册会员')) {?>checked<?php }?>>
        <span class="iradio_flat_left"><label for="checkboxgroup1_0">注册会员</label>&nbsp;&nbsp;</span>
        <input type="checkbox" name="code_web" value="前台登录" id="checkboxgroup1_1" <?php if (strstr($_smarty_tpl->tpl_vars['config']->value['code_web'],'前台登录')) {?>checked<?php }?>>
        <span class="iradio_flat_left"><label for="checkboxgroup1_1">前台登录</label>&nbsp;&nbsp;</span>
        <input type="checkbox" name="code_web" value="店铺招聘" id="checkboxgroup1_2" <?php if (strstr($_smarty_tpl->tpl_vars['config']->value['code_web'],'店铺招聘')) {?>checked<?php }?>>
        <span class="iradio_flat_left"><label for="checkboxgroup1_2">店铺招聘</label>&nbsp;&nbsp;</span>
        <input type="checkbox" name="code_web" value="后台登录" id="checkboxgroup1_3" <?php if (strstr($_smarty_tpl->tpl_vars['config']->value['code_web'],'后台登录')) {?>checked<?php }?>>
        <span class="iradio_flat_left"><label for="checkboxgroup1_3">后台登录</label>&nbsp;&nbsp;</span>
        <input type="checkbox" name="code_web" value="职场提问" id="checkboxgroup1_4" <?php if (strstr($_smarty_tpl->tpl_vars['config']->value['code_web'],'职场提问')) {?>checked<?php }?>>
        <span class="iradio_flat_left"><label for="checkboxgroup1_4">职场提问</label></span>
        </div>
          </td>
       
	</tr>
	<tr class="admin_table_trbg">
		<th width="160">验证码类型：</th>
		<td>
		   <div class="iradio_flat_height kind">  
            <input type="radio" name="code_kind" value="1" id="RadioGroup5_0" <?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']=="1") {?>checked<?php }?>>
		    <span class="iradio_flat_left"><label for="RadioGroup5_0">文字验证码</label>&nbsp;&nbsp;</span>
            <input type="radio" name="code_kind" value="3" id="RadioGroup5_2" <?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']=="3") {?>checked<?php }?>>
		    <span class="iradio_flat_left"><label for="RadioGroup5_2">极验智能验证码</label></span>
            </div>
		  </td>
       
 
	</tr>
      <tr class="admin_table_trbg character" <?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']!="1") {?>style="display:none;"<?php }?>>
		<th width="160">文字验证码生成类型：</th>
		<td>
		   <div class="iradio_flat_height">  
            <input type="radio" name="code_type" value="1" id="RadioGroup3_0" <?php if ($_smarty_tpl->tpl_vars['config']->value['code_type']=="1") {?>checked<?php }?>>
		    <span class="iradio_flat_left"><label for="RadioGroup3_0">数字</label>&nbsp;&nbsp;</span>
		    <input type="radio" name="code_type" value="2" id="RadioGroup3_1" <?php if ($_smarty_tpl->tpl_vars['config']->value['code_type']=="2") {?>checked<?php }?>>
		    <span class="iradio_flat_left"><label for="RadioGroup3_1">英文</label>&nbsp;&nbsp;</span>
            <input type="radio" name="code_type" value="3" id="RadioGroup3_2" <?php if ($_smarty_tpl->tpl_vars['config']->value['code_type']=="3") {?>checked<?php }?>>
		    <span class="iradio_flat_left"><label for="RadioGroup3_2">英文+数字</label></span>
            </div>
		  </td>
       
 
	</tr>
    <tr class="admin_table_trbg character" <?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']!="1") {?>style="display:none;"<?php }?>>
		<th width="160">选择验证码文件类型：</th>
		<td>
        	 <div class="iradio_flat_height">
             <input type="radio" name="code_filetype" value="jpg" id="RadioGroup4_0" <?php if ($_smarty_tpl->tpl_vars['config']->value['code_filetype']=="jpg") {?>checked<?php }?>>
		    <span class="iradio_flat_left"><label for="RadioGroup4_0">JPG</label>&nbsp;&nbsp;</span>
		    <input type="radio" name="code_filetype" value="png" id="RadioGroup4_2" <?php if ($_smarty_tpl->tpl_vars['config']->value['code_filetype']=="png") {?>checked<?php }?>>
		    <span class="iradio_flat_left"><label for="RadioGroup4_2">PNG</label>&nbsp;&nbsp;</span>
            <input type="radio" name="code_filetype" value="gif" id="RadioGroup4_3" <?php if ($_smarty_tpl->tpl_vars['config']->value['code_filetype']=="gif") {?>checked<?php }?>>
		    <span class="iradio_flat_left"><label for="RadioGroup4_3">GIF</label></span>
            </div>
            </td>
        
	</tr>
  <tr class="admin_table_trbg character" <?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']!="1") {?>style="display:none;"<?php }?>>
		<th width="160">验证码图片大小：</th>
		<td>宽：<input class="input-text" type="text" name="code_width" id="code_width" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['code_width'];?>
" size="10" maxlength="255"/>px&nbsp;&nbsp;
        高：<input class="input-text" type="text" name="code_height" id="code_height" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['code_height'];?>
" size="10" maxlength="255"/>px
        </td>
    
	</tr>
    <tr class="admin_table_trbg character" <?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']!="1") {?>style="display:none;"<?php }?>>
		<th width="160">验证码字符数：</th>
		<td><input class="input-text" type="text" name="code_strlength" id="code_strlength" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['code_strlength'];?>
" size="10" maxlength="1" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/><span class="admin_web_tip">提示：字符数不要大于4</span></td>
       
	</tr>
	<tr class="admin_table_trbg geetest" <?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']!="3") {?>style="display:none;"<?php }?>>
		<th width="160">极验ID：</th>
		<td><input class="input-text" type="text" name="sy_geetestid" id="sy_geetestid" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_geetestid'];?>
" size="10"/><span class="admin_web_tip">申请地址：<a href='http://www.geetest.com/' target='_blank'>http://www.geetest.com/</a></span></td>
       
	</tr>
	<tr class="admin_table_trbg geetest" <?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']!="3") {?>style="display:none;"<?php }?>>
		<th width="160">极验KEY：</th>
		<td><input class="input-text" type="text" name="sy_geetestkey" id="sy_geetestkey" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_geetestkey'];?>
" size="16"/><span class="admin_web_tip">申请地址：<a href='http://www.geetest.com/' target='_blank'>http://www.geetest.com/</a></span></td>
       
	</tr>
	
        <tr class="admin_table_trbg">
            <td colspan="3" align="center">
            <input class="admin_submit4" id="codeconfig" type="button" name="codeconfig" value="提交" />&nbsp;&nbsp;
            <input class="admin_submit4" type="reset" value="重置" /></td>
        </tr>
    </table>  
</div>
<div class="hiddendiv">
	<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
    <form action="index.php?m=config&c=save_logo" method="post" enctype= "multipart/form-data" target="supportiframe">
    <table width="100%" class="table_form">
     <tr class="admin_table_trbg">
          <th width="160" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
          <td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>
        
    </tr>
    
        <tr>
		<th width="160">整站LOGO：<br/>300px X 45px</th>
		<td><input  type="file" size="45" name="logo"  class="input-text input_text_bg">
        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_logo']!='') {?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_logo'];?>
"  style="max-width:300px;_width:300px">
        <?php }?>
            </td>
       
		</tr>
      
         <tr class="admin_table_trbg">
		<th width="160">个人会员中心LOGO：<br/>300px X 45px</th>
		<td><input  type="file" size="45" name="member_logo"  class="input-text input_text_bg">
                <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_member_logo']!='') {?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_logo'];?>
" style="max-width:300px;_width:300px">
        <?php }?>
          </td>
       
		</tr>
         <tr>	
		<th width="160">企业会员中心LOGO：<br/>300px X 45px</th>
		<td><input  type="file" size="45" name="unit_logo"  class="input-text input_text_bg">
            <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_unit_logo']!='') {?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_logo'];?>
" style="max-width:300px;_width:300px">
        <?php }?>
          </td>
		</tr>
	
        
        <tr>	
		<th width="160">手机LOGO：<br/>300px X 45px</th>
		<td><input  type="file" size="45" name="wap_logo"  class="input-text input_text_bg">
            <?php if ($_smarty_tpl->tpl_vars['config']->value['wap_logo']=='') {?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wap_logo'];?>
" style="max-width:300px;_width:300px">
        <?php }?>
          </td>
		</tr>
        
        <tr class="admin_table_trbg">	
		<th width="160">WAP二维码：</th>
		<td><input  type="file" size="45" name="sy_wap_qcode"  class="input-text input_text_bg">
        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_wap_qcode']!='') {?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wap_qcode'];?>
" style="max-width:100px;;_width:100px">
        <?php }?>
          </td>
		</tr>

		
        <tr class="admin_table_trbg">
            <td colspan="3" align="center">
            <input class="admin_submit4"  type="submit" name="waterconfig" value="提交" />&nbsp;&nbsp;
            <input class="admin_submit4" type="reset" value="重置" /></td>
        </tr>
    </table> 
	<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
    </form>
</div>

<div class="hiddendiv"> 
    <table width="100%" class="table_form">
     <tr class="admin_table_trbg">
     <th  bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
          <td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>
        
    </tr>
    <tr>
		<th>IP跳转到当前城市：</th>
		<td>
         <div class="iradio_flat_height">
            <input type="radio" name="map_tocity" value="1" id="map_0" <?php if ($_smarty_tpl->tpl_vars['config']->value['map_tocity']=="1") {?>checked<?php }?>>
		    <span class="iradio_flat_left"><label for="map_0">跳转</label>&nbsp;&nbsp;</span>
		    <input type="radio" name="map_tocity" value="2" id="map_1" <?php if ($_smarty_tpl->tpl_vars['config']->value['map_tocity']=="2") {?>checked<?php }?>>
		    <span class="iradio_flat_left"><label for="map_1">保持默认坐标</label></span>
          </div>
        </td>

	</tr>
    <tr class="admin_table_trbg">
		<th>百度地图KEY：</th>
		<td><input class="input-text  " type="text" name="map_key" id="map_key" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['map_key'];?>
" size="45" maxlength="255"/>
        <span class="admin_web_tip"><a href="http://lbsyun.baidu.com/apiconsole/key?application=key" target="_blank">申请地址</a> 地图版本：1.5</span>
        </td>

	</tr>
        <tr>
			<th>默认坐标：</th>
			<td>X：<input class="input-text" type="text" name="map_x" id="map_x" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['map_x'];?>
" size="20" maxlength="255"/>&nbsp;&nbsp;Y：<input class="input-text" type="text" name="map_y" id="map_y" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['map_y'];?>
" size="20" maxlength="255"/> 
        <a href="javascript:;" id="getclick">点击获取坐标</a>
        </td>
      
    <tr id="getmapxy" style="display:none;" class="admin_table_trbg">
			<th>获取坐标：</th>
			<td style=" position:relative; z-index:0px"><div id="map_container" style="width:100%;height:300px; position:relative; z-index:1"></div></td>
            <td width="160"></td>
        </tr>
        <tr class="admin_table_trbg">
            <td colspan="3" align="center">
            <input class="admin_submit4" id="mapconfig" type="button" name="mapconfig" value="提交" />&nbsp;&nbsp;
            <input class="admin_submit4" type="reset" value="重置" /></td>
        </tr>
    </table>  
</div>

<div class="hiddendiv"> 
    <table width="100%" class="table_form">
     <tr class="admin_table_trbg">
          <th width="160" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
          <td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>

    </tr>
        <tr>
		<th width="160">Memcache缓存：</th>
		<td>
		     <div class="iradio_flat_height">
             <input type="radio" name="ismemcache" value="1" id="RadioGroup3_0" <?php if ($_smarty_tpl->tpl_vars['config']->value['ismemcache']=="1") {?>checked<?php }?>>
		    <span class="iradio_flat_left"><label for="RadioGroup3_0">开启</label>&nbsp;&nbsp;</span>
		    <input type="radio" name="ismemcache" value="2" id="RadioGroup3_1" <?php if ($_smarty_tpl->tpl_vars['config']->value['ismemcache']=="2") {?>checked<?php }?>>
		    <span class="iradio_flat_left"><label for="RadioGroup3_1">关闭</label>&nbsp;&nbsp;</span>
             <span class="admin_web_tip">注：服务器上未安装Memcache,请不要打开。</span>
            </div>
		  </td>
        
		</tr>

        <tr class="admin_table_trbg">
        <th width="160">Memcache服务器：</th>
		<td>
		    <input class="input-text" type="text" name="memcachehost" id="memcachehost3" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['memcachehost'];?>
" size="20" maxlength="255"/>
             <span class="admin_web_tip">服务器IP，本机127.0.0.1</span>
		  </td>
        
		</tr>
        <tr>
        <th width="160">Memcache端口：</th>
		<td>
		    <input class="input-text" type="text" name="memcacheport" id="memcacheport3" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['memcacheport'];?>
" size="20" maxlength="255"/>
           <span class="admin_web_tip">默认11211</span>
		  </td>
         
		</tr>
        <tr class="admin_table_trbg">
        <th width="160">Memcache缓存时间：</th>
		<td>
		    <input class="input-text" type="text" name="memcachetime" id="memcachetime" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['memcachetime'];?>
" size="20" maxlength="255"/>
           <span class="admin_web_tip">秒为单位,一般为3600秒</span>
		  </td>
        
		</tr>  
        <tr>
		<th width="160">页面缓存：</th>
		<td>
		   <div class="iradio_flat_height">  
           <input type="radio" class="tips_class" name="webcache" value="1" id="RadioGroup5_0" <?php if ($_smarty_tpl->tpl_vars['config']->value['webcache']=="1") {?>checked<?php }?>>
		    <span class="iradio_flat_left"><label for="RadioGroup5_0">开启</label>&nbsp;&nbsp;</span>
		    <input type="radio" name="webcache" value="2" id="RadioGroup5_1" <?php if ($_smarty_tpl->tpl_vars['config']->value['webcache']=="2") {?>checked<?php }?>>
		    <span class="iradio_flat_left"><label for="RadioGroup5_1">关闭</label>&nbsp;&nbsp;</span>
		    <a href="?m=config&amp;c=settplcache" style="color:blue; display:inline-block; line-height:25px; text-decoration:underline">设置模板缓存</a>
            </div>
		</td>
         
		</tr>   
        <tr class="admin_table_trbg">
        <th width="160">页面缓存时间：</th>
		<td>
		    <input class="input-text" type="text" name="webcachetime" id="webcachetime" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['webcachetime'];?>
" size="20" maxlength="255"/>
            <span class="admin_web_tip">秒为单位,一般为3600秒</span>
		  </td>
        
		</tr>    
        <tr>
		<th width="160">smarty缓存：</th>
		<td>
         <div class="iradio_flat_height">
		    <input type="radio" name="issmartycache" value="1" id="RadioGroup4_0" <?php if ($_smarty_tpl->tpl_vars['config']->value['issmartycache']=="1") {?>checked<?php }?>>
		    <span class="iradio_flat_left"><label for="RadioGroup4_0">开启</label>&nbsp;&nbsp;</span>
		    <input type="radio" name="issmartycache" value="2" id="RadioGroup4_1" <?php if ($_smarty_tpl->tpl_vars['config']->value['issmartycache']=="2") {?>checked<?php }?>>
		    <span class="iradio_flat_left"><label for="RadioGroup4_1">关闭</label>&nbsp;&nbsp;</span>
            </div>
		  </td>
        
		</tr>
        <tr style="display:none;">
        <th width="160">smarty缓存时间：</th>
		<td>
		    <input class="input-text" type="text" name="smartycachetime" id="smartycachetime" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['smartycachetime'];?>
" size="20" maxlength="255"/><span class="admin_web_tip">秒为单位,一般为3600秒</span>
		  </td>
         
		</tr>        
        <tr class="admin_table_trbg">
            <td colspan="3" align="center">
            <input class="admin_submit4" id="cacheconfig" type="button" name="mapconfig" value="提交" />&nbsp;&nbsp;
            <input class="admin_submit4" type="reset" value="重置" /></td>
        </tr>
    </table>  
</div>

</div>
</div>
<?php echo '<script'; ?>
> 
if (window["context"] == undefined) {
    if (!window.location.origin) {
        window.location.origin = window.location.protocol + "//" + window.location.hostname + (window.location.port ? ':' + window.location.port: '');
    }
    window["context"] = location.origin+"/V6.0";
}
var weburl=window.location.origin;
var $switchtag = $("div.main_tag ul li");
$switchtag.click(function(){
	$(this).addClass("on").siblings().removeClass("on");
	var index = $switchtag.index(this);
	$("div.tag_box > div").eq(index).show().siblings().hide();
});
$(".tips_class").hover(function(){ 
	var msg_id=$(this).attr('id'); 
	var msg=$('#'+msg_id+' + font').html();
	if($.trim(msg)!=''){
		layer.tips(msg, this, {
		guide: 1, 
		style: ['background-color:#5EA7DC; color:#fff;top:-7px', '#5EA7DC']
		}); 
		$(".xubox_layer").addClass("xubox_tips_border");
	} 
},function(){
	var msg_id=$(this).attr('id');
	var msg=$('#'+msg_id+' + font').html();
	if($.trim(msg)!=''){
		layer.closeTips();
	} 
});
getmapnoshowcont('map_container',"<?php if ($_smarty_tpl->tpl_vars['config']->value['map_x']) {
echo $_smarty_tpl->tpl_vars['config']->value['map_x'];
} else { ?>116.404<?php }?>","<?php if ($_smarty_tpl->tpl_vars['config']->value['map_y']) {
echo $_smarty_tpl->tpl_vars['config']->value['map_y'];
} else { ?>39.915<?php }?>","map_x","map_y");
//地图默认缩放级别
var map=new BMap.Map("map_container");
setLocation('map_container',"<?php if ($_smarty_tpl->tpl_vars['config']->value['map_x']) {
echo $_smarty_tpl->tpl_vars['config']->value['map_x'];
} else { ?>116.404<?php }?>","<?php if ($_smarty_tpl->tpl_vars['config']->value['map_y']) {
echo $_smarty_tpl->tpl_vars['config']->value['map_y'];
} else { ?>39.915<?php }?>","map_x","map_y");
function setLocation(id,x,y,xid,yid){
			var data=get_map_config();
			var config=eval('('+data+')');
			var rating,map_control_type,map_control_anchor;
			if(!x && !y){x=config.map_x;y=config.map_y;}
			var point = new BMap.Point(x,y);
			var marker = new BMap.Marker(point);
			var opts = {type:BMAP_NAVIGATION_CONTROL_LARGE}
			map.enableScrollWheelZoom(true);
			map.addControl(new BMap.NavigationControl(opts));
			map.centerAndZoom(point, 13);
			map.addOverlay(marker);
			map.addEventListener("click",function(e){
			   var info = new BMap.InfoWindow('', {width: 260});
				var projection = this.getMapType().getProjection();
				var lngLat = e.point;
				document.getElementById(xid).value=lngLat.lng;
				document.getElementById(yid).value=lngLat.lat;
				map.clearOverlays();
				var point = new BMap.Point(lngLat.lng,lngLat.lat);
				var marker = new BMap.Marker(point);
				map.addOverlay(marker);
			});
		}
$(function(){  
	$("#getclick").click(function(){
		$('#getmapxy').toggle();
		var bodycont=$('#getmapxy').css("display");
		if(bodycont=="none"){
			$(this).html("点击获取坐标");
		}else{
			$(this).html("关闭获取坐标");
		}
	})
	$("#cacheconfig").click(function(){
		loadlayer();
		$.post("index.php?m=config&c=save",{
			config : $("#cacheconfig").val(),
			ismemcache : $("input[name=ismemcache]:checked").val(),
			issmartycache : $("input[name=issmartycache]:checked").val(),
			memcachehost : $("input[name=memcachehost]").val(),
			memcacheport : $("input[name=memcacheport]").val(),
			memcachetime : $("input[name=memcachetime]").val(),
			smartycachetime : $("input[name=smartycachetime]").val(),
			webcache : $("input[name=webcache]:checked").val(),
			pytoken : $("#pytoken").val(),
			webcachetime : $("input[name=webcachetime]").val()
		},function(data,textStatus){ 
			config_msg(data); 
		});
	});
	$("#mapconfig").click(function(){
		loadlayer();
		$.post("index.php?m=config&c=save",{
			config : $("#mapconfig").val(),
			map_tocity : $("input[name=map_tocity]:checked").val(),
			map_key : $("#map_key").val(),
			pytoken : $("#pytoken").val(),
			map_x : $("#map_x").val(),
			map_y : $("#map_y").val()
		},function(data,textStatus){ 
			config_msg(data); 
		});
	});
	$("#otherconfig").click(function(){
		loadlayer();
		$.post("index.php?m=config&c=save",{
			config : $("#otherconfig").val(),
			sy_safekey : $("#sy_safekey").val(),
			sy_istemplate : $("input[name=sy_istemplate]:checked").val(),
			sy_iscsrf : $("input[name=sy_iscsrf]:checked").val(),
			sy_bannedip : $("#sy_bannedip").val(),
			sy_fkeyword_all : $("#sy_fkeyword_all").val(),
			sy_bannedip_alert : $("#sy_bannedip_alert").val(),
			pytoken : $("#pytoken").val(),
			sy_fkeyword : $("#sy_fkeyword").val()
		},function(data,textStatus){ 
			config_msg(data); 
		});
	});
	$("#codeconfig").click(function(){
		if($("#code_strlength").val()>4){
			layer.msg("验证码字符数不要大于4！",2,8);return false;
		}
		loadlayer();
		var codewebarr="";
		$("input[name=code_web]:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出 
			if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
		});
		$.post("index.php?m=config&c=save",{
			config : $("#codeconfig").val(),
			code_web : codewebarr,
			code_kind : $("input[name=code_kind]:checked").val(),
			code_type : $("input[name=code_type]:checked").val(),
			code_filetype : $("input[name=code_filetype]:checked").val(),
			code_width : $("#code_width").val(),
			code_height : $("#code_height").val(),
			sy_geetestid : $("#sy_geetestid").val(),
			sy_geetestkey : $("#sy_geetestkey").val(),
			sy_geetestmid : $("#sy_geetestmid").val(),
			sy_geetestmkey : $("#sy_geetestmkey").val(),
			pytoken : $("#pytoken").val(),
			code_strlength:$("#code_strlength").val()
		},function(data,textStatus){
			config_msg(data); 
		});
	}); 
	$("#config").click(function(){ 
		loadlayer();
		$.post("index.php?m=config&c=save",{
			config : $("#config").val(),
			sy_webname : $("#sy_webname").val(),
			sy_weburl : $("#sy_weburl").val(),
			sy_webkeyword : $("#sy_webkeyword").val(),
			sy_webmeta : $("#sy_webmeta").val(),
			sy_webcopyright : $("#sy_webcopyright").val(),
			sy_webtongji : $("#sy_webtongji").val(),
			sy_webemail : $("#sy_webemail").val(),
			sy_webmoblie : $("#sy_webmoblie").val(),
			sy_webrecord : $("#sy_webrecord").val(),
			sy_webtel : $("#sy_webtel").val(),
			sy_qq : $("#sy_qq").val(),
			sy_freewebtel : $("#sy_freewebtel").val(),
			sy_listnum : $("#sy_listnum").val(), 
			sy_webadd : $("#sy_webadd").val(),
			sy_rand : $("#sy_rand").val(),
			sy_city_online: $("input[name=sy_city_online]:checked").val(),
			sy_webclose: $("#sy_webclose").val(),  
			sy_wapdomain: $("#sy_wapdomain").val(),
			sy_qqkey: $("#sy_qqkey").val(),
			sy_sinakey: $("#sy_sinakey").val(), 
			sy_web_online: $("input[name=sy_web_online]:checked").val(),
			pytoken : $("#pytoken").val()
		},function(data,textStatus){ 
			config_msg(data); 
		});
	});
});
<?php echo '</script'; ?>
>
</div>
</body>
</html><?php }} ?>
