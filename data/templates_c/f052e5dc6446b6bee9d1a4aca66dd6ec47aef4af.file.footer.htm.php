<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-12-21 09:31:08
         compiled from "D:\phpStudy\WWW\huilie\\app\template\member\user\footer.htm" */ ?>
<?php /*%%SmartyHeaderCode:211045a3b0edc970127-55350154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f052e5dc6446b6bee9d1a4aca66dd6ec47aef4af' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\huilie\\\\app\\template\\member\\user\\footer.htm',
      1 => 1513818318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211045a3b0edc970127-55350154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'com_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a3b0edc99b0a8_93044816',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3b0edc99b0a8_93044816')) {function content_5a3b0edc99b0a8_93044816($_smarty_tpl) {?>
<!--简历置顶-->
<?php echo '<script'; ?>
>
function cktopspan(day,price){
	var disval=$('input[name="dis"]:checked ').val();
	if(disval&&day!=disval){
		$("input[name=dis][value="+disval+"]").attr("checked",false);
	}
	$("input[name=dis][value="+day+"]").attr("checked",true);
	var needs=day*price;
	$("#price").html(needs);
}
function buyResumeTop(pay_type){
	
	$('#pay_type').val(pay_type);
 	var resumeid = $('#eid').val();
 	var days = $("input[name='dis']:checked").val();
  	var index = layer.load('执行中，请稍候...',0);
  	
  	$.ajax({
  		async: false, //设置ajax同步  
        type: 'POST',  
        global:false,
        url: "index.php?c=resume&act=resumeOrder",  
        data: {resumeid:resumeid,days:days},  
        success: function(data){  
        	var data=eval('('+data+')'); 
        	if(data.error==1){
     			layer.msg(data.msg, 2,8);
     		}else if(data.error==0){
     			$('#order_zd_id').val(data.orderid);
    			$('#orderid').val(data.id);
    			//提交表单
    			layer.close(index);
    			$('#payform_zd').submit();
    		}
        }  
  	});
}

function wtResume(pay_type){
	
	$('#pay_type').val(pay_type);
 	var resumeid = $('#wteid').val();
   	var index = layer.load('执行中，请稍候...',0);
  	
  	$.ajax({
  		async: false, //设置ajax同步  
        type: 'POST',  
        global:false,
        url: "index.php?c=resume&act=resumeOrder",  
        data: {wteid:resumeid},  
        success: function(data){  
        	var data=eval('('+data+')'); 
        	if(data.error==1){
     			layer.msg(data.msg, 2,8);
     		}else if(data.error==0){
     			$('#order_wt_id').val(data.orderid);
    			$('#orderid').val(data.id);
    			//提交表单
    			layer.close(index);
    			$('#payform_wt').submit();
    		}
        }  
  	});
}

function wxorderstatus(orderid) { 
	$.post('index.php?c=payment&act=wxpaystatus',{orderid:orderid},function(data){
		if(data==1){
			window.location.href='';
		}
	});
}

function pay_forms(){
	var pay_type=$("#pay_type").val();
	if(pay_type==''){
		layer.msg('请选择支付方式！', 2,8);
	}else if(pay_type == 'wxpay'){ 
		var orderId = $("#orderid").val();
		$.post('index.php?c=payment&act=wxurl',{orderId:orderId},function(data){
			$('.wx_payment_ewm').html(data);
			$.layer({
				type : 1,
				title :'微信扫码支付', 
				closeBtn : [0 , true],
				border : [10 , 0.3 , '#000', true],
				area : ['290px','380px'],
				page : {dom :"#wxpayTx"}
			});
			setInterval("wxorderstatus("+orderId+")", 3000); 
		})
		return false;  
	} else{
		$.layer({
			type : 1,
			title :'提示',
			closeBtn : [0 , true],
			border : [10 , 0.3 , '#000', true],
			area : ['450px','280px'],
			page : {dom :"#payshow"}
		});
	}
}

function rePay(){
	var orderId = $("#orderid").val();
	location.href="index.php?c=payment&id="+orderId;
}
<?php echo '</script'; ?>
>
<div id="resumetop" style="display:none;">
    <div class="admin_Operating_sh" style="padding:10px; ">
   		<div class="stick_msg">置顶简历：<i id="resumename"></i></div>
      	<div class="stick_msg">置顶结束时间：<span id='topdate'></span></div>
       	<div class="stick_tm">
              <div class="stick_tm_ft">置顶时长：</div>
              <ul class="stick_tm_box">
                   <lable for="dis1">
                          <li>
                              <input type="radio" class="stick_tm_box_radio" value="1" name="dis" checked="checked" onclick="cktop('1','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')"/>
                              <span class="stick_tm_box_time" onclick="cktopspan('1','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')">1天</span>
                          </li>
                   </lable>
                   <lable for="dis3">
                          <li>
                              <input type="radio" class="stick_tm_box_radio" value="3" name="dis" onclick="cktop('3','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')"/>
                              <span class="stick_tm_box_time" onclick="cktopspan('3','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')">3天</span>
                          </li>
                   </lable>
                   <lable for="dis7">
                          <li>
                              <input type="radio" class="stick_tm_box_radio" value="7" name="dis" onclick="cktop('7','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')"/>
                              <span class="stick_tm_box_time" onclick="cktopspan('7','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')">7天</span>
                          </li>
                   </lable>
                   <lable for="dis15">
                          <li>
                              <input type="radio" class="stick_tm_box_radio" value="15" name="dis" onclick="cktop('15','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')"/>
                              <span class="stick_tm_box_time" onclick="cktopspan('15','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')">15天</span>
                          </li>
                   </lable>
                   <lable for="dis30">
                          <li >
                              <input type="radio" class="stick_tm_box_radio" value="30" name="dis" onclick="cktop('30','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')"/>
                              <span class="stick_tm_box_time" onclick="cktopspan('30','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')">30天</span>
                          </li>
                   </lable>
              </ul>
              <input type="hidden" id="eid" name="eid" value="">
              <input type="hidden" name="myxs" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
">
         </div>

         <div class="stick_rage">
              <span>应付金额：<em id="price"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
</em>元</span> <br/>

          </div>
      	<form name="alipayment"  id="payform_zd" action="../api/alipay/alipayto.php" method="post" target="_blank" onsubmit="return pay_forms();">
		
        
        <div class="job_recom_listbth">
		
			<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
			<div class="job_redpack_list_name">支付方式：</div>
		 	<div class="job_redpack_pay">
				<a href="javascript:;" onclick="buyResumeTop('alipay');"><div class="job_redpack_pay_bor job_redpack_pay_bor_pd"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/ap_pay.png"></div>支付宝支付</a>
			</div>
			<?php } else { ?>
			<div class="con_banner_no" style="width:300px;margin-top:10px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
			<?php }?>
			
			<input type="hidden" value="" id="pay_type" name="pay_type"/>
			<input type="hidden" name="dingdan" id="order_zd_id" value=""/>
			<input type="hidden" value="简历置顶金额"  name="subject"/>
			<input type="hidden" name="pay_bank" value="directPay">
		</div>
		<div class="job_recom_listtel">客服电话：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</div>
	</form>
      </div>
</div>
<input type="hidden" name="orderid" id="orderid" value=""/>
<!--  微信tck-->
<div id="wxpayTx"  style="display:none;">
  <div class="wx_payment">
  <div class="wx_payment_cont"><div class="wx_payment_ewm">正在加载微信二维码,请稍候....</div> </div><div class="wx_payment_h2">二维码有效时长2小时，请尽快支付</div>
  <div class="wx_payment_tip">
  <div class="wx_payment_tip_left"><i class="wx_payment_tip_line1"></i><i class="wx_payment_tip_line2"></i><i class="wx_payment_tip_line3"></i></div> 
  <div class="wx_payment_tip_right">请使用微信扫一扫<br>扫描二维码支付</div>
  </div>
  </div>
</div>  
<!--支付弹出框-->
<div id="payshow" style="width:450px; position:absolute;left:0px;top:0px; background:#fff; display:none;">
<div class="payment_tip">请在新打开的支付页面上完成付款，付款完成前请不要关闭此窗口。<br>如您在支付过程中遇到问题，请联系客服：<span class="payment_tip_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</span></div>
<div class="payment_bottom"><a href="index.php?c=paylog" class="payment_bottombutt">已完成付款</a><a href="javascript:;" onclick="rePay();" class="payment_bottom_bth2">重新支付</a></div>
</div>
<!--简历置顶end-->
<div class="clear"></div>
<div class=foot>
<div class="copyright"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webcopyright'];
echo $_smarty_tpl->tpl_vars['config']->value['sy_webrecord'];?>
  
<div class="">地址:<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webadd'];?>
  电话(Tel):<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
  EMAIL:<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webemail'];?>
</div>
<!--<div>Powered by <a target="_blank" href="http://www.phpyun.com">PHPYun.</a></div>-->
</div>
     
</div>
<div id="uclogin" style="display:none"></div>
<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
 <?php }} ?>
