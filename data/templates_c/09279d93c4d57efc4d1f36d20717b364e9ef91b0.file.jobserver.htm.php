<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-12-21 09:24:32
         compiled from "D:\phpStudy1\WWW\huilie\\app\template\member\com\jobserver.htm" */ ?>
<?php /*%%SmartyHeaderCode:11265a3b0d50515907-62387133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09279d93c4d57efc4d1f36d20717b364e9ef91b0' => 
    array (
      0 => 'D:\\phpStudy1\\WWW\\huilie\\\\app\\template\\member\\com\\jobserver.htm',
      1 => 1513818375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11265a3b0d50515907-62387133',
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
  'unifunc' => 'content_5a3b0d5055fc88_80561544',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3b0d5055fc88_80561544')) {function content_5a3b0d5055fc88_80561544($_smarty_tpl) {?><?php echo '<script'; ?>
>
function jingjia(id,xsdate) //置顶服务
{
	$("#wnameid").val(id);
	var height="300px";
	if(xsdate!='0'){
		$("#xsdiv").show();
		$('#xstime').html('<font color="red">'+xsdate+'</font>');
		height='400px';
	}
	$.layer({
		type : 1,
		title : '职位置顶',
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['500px',height],
        page : {dom : '#wname'}
	});
}
function rec(id,rectime) //职位推荐
{
	$("#recjobid").val(id);
	var height="300px";
	if(rectime!='0'){
		$("#recdiv").show();
		$('#rectime').html('<font color="red">'+rectime+'</font>');
		height='400px';
	}
	$.layer({
		type : 1,
		title : '推荐职位',
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['480px',height],
		page : {dom : '#recom'}
	});
}
function urgent(id,urgenttime) //紧急招聘
{
	if(id==''){
		var id = $("#jobid").val();
	}
	$("#urgentid").val(id);
	var height="300px";
	if(urgenttime&&urgenttime!=0){
	    $("#udiv").show();
		$('#utime').html('<font color="red">'+urgenttime+'</font>');
		height='400px';
	}
	$.layer({
		type : 1,
		title : '紧急招聘',
		move:false,
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['480px',height],
		page : {dom : '#urgent'}
	});
}
function autojobs(name,id,date) //自动刷新
{
	if(id==''){
		var id = $("#jobid").val();
	}
    var height="300px";
	if(id){
		var chk_value=id;
		var i=1;
	}else{
		var chk_value =[];
		var i=0;
		$('input[name="'+name+'"]:checked').each(function(){
			chk_value.push($(this).val());
			i++;
		}); 
	} 
	if(i>0){ 
		$("input[name='synalljob']").attr('checked',false);
		$("#jobautoids").val(chk_value);
		$("#jobautobuysdate").hide();
		$(".synalljob").hide();
		if(date){
			$("#rdiv").show();
		    $('#rtime').html('<font color="red">'+date+'</font>');
			height='400px';
		}
		if(id){
			$(".synalljob").show();
		}
		$.layer({
			type : 1,
			move:false,
			title : '预约自动刷新', 
			border : [10 , 0.3 , '#000', true],
			area : ['480px',height],
			page : {dom : '#jobautobuys'}
		})
	}else{
		layer.msg("请选择要自动刷新的职位！",2,8);return false;
	}
}
function showneed()
{
	var cdays=$("input[name=xsdays]:checked").val();
	var cxsdays=$("#cxsdays").val();
	if(cdays){
		var xs=$("#myxs").val();
		var need=xs*cdays;
		$("#xsneed").html(need);
		var all=$("#xsall").html();
		if (all<need){
			$("#xspay").show();
		}
	}
	if(cxsdays){
		var xs=$("#myxs").val();
		var need=xs*cxsdays;
		$("#xsneed").html(need);
		var all=$("#xsall").html();
		if (all<need){
			$("#xspay").show();
		}
	}
}

$(document).ready(function(){ 
	$(".job_tck_list").click(function(){
		var cron = $(this).attr('data-cron');
		var name = $(this).attr('data-name');
		$("#autotype").val(cron);
		$(".job_box_in").html(name);
		$(".job_tck_box_pot").hide();
	});
	$(".job_box_in").click(function(e){
		$(".job_tck_box_pot").toggle();
	});
	$(document).bind("click",function(e){
		if(e.target.className != 'job_box_in'){
			$(".job_tck_box_pot").hide();
		}
	}); 
	$("input[name='xsdays']").click(function(){
		var days=$(this).val();
		var xs=$("#myxs").val();
		var need=xs*days;
		$("#xsneed").html(need);
		var all=$("#xsall").html();
		if (all<need){
			$("#xspay").show();
		}else{
			$("#xspay").hide();
		}
	});
	$("input[name='recdays']").click(function(){
		var days=$(this).val();
		var rec=$("#myrec").val();
		var need=rec*days;
		$("#recneed").html(need);
		var all=$("#recall").html();
		if (all<need){
			$("#recpay").show();
		}else{
	       $("#recpay").hide();
	    }
	});
	$("input[name='udays']").click(function(){
		var days=$(this).val();
		var u=$("#myu").val();
		var need=u*days;
		$("#uneed").html(need);
		var all=$("#uall").html();
		if (all<need){
			$("#upay").show();
		}else{
			$("#upay").hide();
		}
	});
	$("input[name='rdays']").click(function(){
		var days=$(this).val();
		var r=$("#myr").val();
		var need=r*days;
		$("#rneed").html(need);
		var all=$("#rall").html();
		if (all<need){
			$("#rpay").show();
		}else{
	        $("#rpay").hide();
	    }
	});
	
}); 
function checkXs(){
	var xs=$("#myxs").val();
	var cdays=$("#cxsdays").val();
	if(cdays==''){
		cdays=0;
	}
	var need=xs*cdays;
	$("#xsneed").html(need);
	var all=$("#xsall").html();
	if (all<need){
		$("#xspay").show();
	}else{
	    $("#xspay").hide();
	}
}
function checkRec(){
	var rec=$("#myrec").val();
	var cdays=$("#crecdays").val();
	var need=rec*cdays;
	$("#recneed").html(need);
	var all=$("#recall").html();
	if (all<need){
		$("#recpay").show();
	}else{
	    $("#recpay").hide();
	}
}
function checkU(){
	var u=$("#myu").val();
	var cdays=$("#cudays").val();
	var need=u*cdays;
	$("#uneed").html(need);
	var all=$("#uall").html();
	if (all<need){
		$("#upay").show();
	}else{
	    $("#upay").hide();
	}
}
function checkUp(){
	var r=$("#myr").val();
	var cdays=$("#crdays").val();
	var need=r*cdays;
	$("#rneed").html(need);
	var all=$("#rall").html();
	if (all<need){
		$("#rpay").show();
	}else{
	    $("#rpay").hide();
	}
}
function dayclean(){
    $(".job_recom_time_zdy").val('');
}
function radioclean(obj){
    $("input[name='recdays']").attr("checked",false);
	$("input[name='xsdays']").attr("checked",false);
	$("input[name='udays']").attr("checked",false);
	$("input[name='rdays']").attr("checked",false);
	if(obj==''){
	    $(".job_recom_list_jobtime_s").html('0');
	}
}
function Numbers(e)
{
var keynum
var keychar
var numcheck

if(window.event) // IE
	{
	keynum = e.keyCode
	}
else if(e.which) // Netscape/Firefox/Opera
	{
	keynum = e.which
	}
	if(parseInt(keynum)!=8){
	    keychar = String.fromCharCode(keynum)
		numcheck = /\d/
		return numcheck.test(keychar)
	}
}

function buyAutoJobOrder(pay_type){
 	$('#pay_type').val(pay_type);
 	var jobautoids = $('#jobautoids').val();
 	var rdays = $("input[name='rdays']:checked").val();
 	var crdays = $('#crdays').val();
 	var index = layer.load('执行中，请稍候...',0);
 	
 	$.ajax({
  		async: false, //设置ajax同步  
        type: 'POST',  
        global:false,
        url: "index.php?c=job&act=buyJob",  
        data: {jobautoids:jobautoids,rdays:rdays,crdays:crdays},  
        success: function(data){  
        	var data=eval('('+data+')'); 
        	if(data.error==1){
     			layer.msg(data.msg, 2,8);
     		}else if(data.error==0){
     			$('#order_auto_id').val(data.orderid);
    			$('#orderid').val(data.id);
    			//提交表单
    			layer.close(index);
    			$('#payform_auto').submit();
    		}
        }  
  	});
}

function zdJobOrder(pay_type){
 	$('#pay_type').val(pay_type);
 	var jobid = $('#wnameid').val();
 	var xsdays = $("input[name='xsdays']:checked").val();
 	var cxsdays = $('#cxsdays').val();
 	var index = layer.load('执行中，请稍候...',0);

 	$.ajax({
  		async: false, 
        type: 'POST',  
        global:false,
        url: "index.php?c=job&act=buyJob",  
        data: {zdjobid:jobid,xsdays:xsdays,cxsdays:cxsdays},  
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

function recJobOrder(pay_type){
 	$('#pay_type').val(pay_type);
 	var jobid = $('#recjobid').val();
 	var recdays = $("input[name='recdays']:checked").val();
 	var crecdays = $('#crecdays').val();
 	var index = layer.load('执行中，请稍候...',0);

 	$.ajax({
  		async: false, 
        type: 'POST',  
        global:false,
        url: "index.php?c=job&act=buyJob",  
        data: {recjobid:jobid,recdays:recdays,crecdays:crecdays},  
        success: function(data){  
        	var data=eval('('+data+')'); 
        	if(data.error==1){
     			layer.msg(data.msg, 2,8);
     		}else if(data.error==0){
     			$('#order_rec_id').val(data.orderid);
    			$('#orderid').val(data.id);
    			//提交表单
    			layer.close(index);
    			$('#payform_rec').submit();
    		}
        }  
  	});
  	
}

function urgentJobOrder(pay_type){
 	$('#pay_type').val(pay_type);
 	var jobid = $('#urgentid').val();
 	var udays = $("input[name='udays']:checked").val();
 	var cudays = $('#cudays').val();
 	var index = layer.load('执行中，请稍候...',0);

 	$.ajax({
  		async: false, 
        type: 'POST',  
        global:false,
        url: "index.php?c=job&act=buyJob",  
        data: {ujobid:jobid,udays:udays,cudays:cudays},  
        success: function(data){  
        	var data=eval('('+data+')'); 
        	if(data.error==1){
     			layer.msg(data.msg, 2,8);
     		}else if(data.error==0){
     			$('#order_urgent_id').val(data.orderid);
    			$('#orderid').val(data.id);
    			//提交表单
    			layer.close(index);
    			$('#payform_urgent').submit();
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

<!--自动刷新弹出框-->
<div class="job_tck_box" id="jobautobuys" style="display:none;">
<div class="job_recom_box">
		<div class="job_recom_list">
			<span class="job_recom_s job_recom_s_mt">自动刷新：</span>
			<div class="job_recom_list_jobtime">
			<label><span class="job_recom_time"><input type="radio" name="rdays" value="1" onclick="dayclean()" checked="checked">1天</span></label> 
			<label><span class="job_recom_time"><input type="radio" name="rdays" value="3" onclick="dayclean()">3天</span> </label> 
			<label><span class="job_recom_time"><input type="radio" name="rdays" value="7" onclick="dayclean()">7天</span> </label> 
			<label><span class="job_recom_time"><input type="radio" name="rdays" value="15" onclick="dayclean()">15天</span></label>  
			<label><span class="job_recom_time"><input type="radio" name="rdays" value="30" onclick="dayclean()">30天</span></label>  
			<input type="text" value="" class="job_recom_time_zdy" id="crdays" name="crdays" onclick="radioclean(this.value)" onkeyup="checkUp();" onkeypress="return Numbers(event)" placeholder="自定义"><span class="job_recom_time_zdy_t">天</span>
			<input type="hidden" name="jobautoids" id="jobautoids"/>
			<input type="hidden" id="myr" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['job_auto'];?>
"/>
			</div>
 		</div>
		<div class="job_recom_list">
			<span class="job_recom_s">所需金额：</span>
			<div class="job_recom_list_jobtime"><div class="job_recom_list_jobtime_money"><span id="rneed" class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['job_auto'];?>
</span>元</div></div>
		</div>
		<div class="job_recom_list" id="rdiv" style="display:none">
			<span class="job_recom_s">到期时间：</span>
			<div class="job_recom_list_jobtime"><span id="rtime" class="job_recom_list_tip_s"></span></div>
		</div>
		
	<form name="alipayment"  id="payform_auto" action="../api/alipay/alipayto.php" method="post" target="_blank" onsubmit="return pay_forms();">
		<div class="job_redpack_list">
			
			<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
			<div class="job_redpack_list_name">支付方式：</div>
		 	<div class="job_redpack_pay">
				<a href="javascript:;" onclick="buyAutoJobOrder('alipay');"><div class="job_redpack_pay_bor job_redpack_pay_bor_pd"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/ap_pay.png"></div>支付宝支付</a>
			</div>
			<?php } else { ?>
			<div class="con_banner_no" style="width:300px;margin-top:10px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
			<?php }?>
			
			<input type="hidden" value="" id="pay_type" name="pay_type"/>
			<input type="hidden" name="dingdan" id="order_auto_id" value=""/>
			<input type="hidden" value="自动刷新金额"  name="subject"/>
			<input type="hidden" name="pay_bank" value="directPay">
		</div>
 	</form>
</div>
</div>
<!--竞价-置顶弹出框-->
<div id="wname"  style="display:none; ">
	<div class="job_recom_box">
		<div class="job_recom_box_js">  
			<div class="job_recom_list">
				<span class="job_recom_s job_recom_s_mt">置顶时长：</span>
				<div class="job_recom_list_jobtime">
				<label><span class="job_recom_time"><input type="radio" name="xsdays" value="1" onclick="dayclean()" checked="checked"/>1天</span></label> 
				<label><span class="job_recom_time"><input type="radio" name="xsdays" value="3" onclick="dayclean()"/>3天</span> </label> 
				<label><span class="job_recom_time"><input type="radio" name="xsdays" value="7" onclick="dayclean()"/>7天</span> </label> 
				<label><span class="job_recom_time"><input type="radio" name="xsdays" value="15" onclick="dayclean()"/>15天</span></label>  
				<label><span class="job_recom_time"><input type="radio" name="xsdays" value="30" onclick="dayclean()"/>30天</span></label>  
				<input type="text" value="" class="job_recom_time_zdy" id="cxsdays" name="cxsdays" onclick="radioclean(this.value)" onkeyup="checkXs();" onkeypress="return Numbers(event)" placeholder="自定义"/><span class="job_recom_time_zdy_t">天</span>
				<input type="hidden" name="wnameid" id="wnameid" value=""/>
				<input type="hidden" id="myxs" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job_top'];?>
"/>
				</div>
			</div>
			<div class="job_recom_list">
				<span class="job_recom_s">所需金额：</span>
				<div class="job_recom_list_jobtime"><div class="job_recom_list_jobtime_money"><span id="xsneed" class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job_top'];?>
</span> 元</div></div>
			</div>
			<div class="job_recom_list" id="xsdiv" style="display:none">
				<span class="job_recom_s">到期时间：</span>
				<div class="job_recom_list_jobtime"><span id="xstime" class="job_recom_list_tip_s"></span></div>
			</div>
			<form name="alipayment"  id="payform_zd" action="../api/alipay/alipayto.php" method="post" target="_blank" onsubmit="return pay_forms();">
				<div class="job_redpack_list">
					
					
					<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
	 				<div class="job_redpack_list_name">支付方式：</div>
				 	<div class="job_redpack_pay">
						<a href="javascript:;" onclick="zdJobOrder('alipay');"><div class="job_redpack_pay_bor job_redpack_pay_bor_pd"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/ap_pay.png"></div>支付宝支付</a>
					</div>
					<?php } else { ?>
					<div class="con_banner_no" style="width:300px;margin-top:10px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
					<?php }?>
					
					
					<input type="hidden" value="" id="pay_type" name="pay_type"/>
					<input type="hidden" name="dingdan" id="order_zd_id" value=""/>
					<input type="hidden" value="置顶服务金额"  name="subject"/>
					<input type="hidden" name="pay_bank" value="directPay">
				</div>
 			</form>
		</div>
	</div>
</div>

<!--推荐职位弹出框-->
<div id="recom"  style="display:none; width:480px; ">
	<div class="job_recom_box">
			<div class="job_recom_list">
			<span class="job_recom_s job_recom_s_mt">推荐时长：</span>
			<div class="job_recom_list_jobtime">
			<label><span class="job_recom_time"><input type="radio" name="recdays" value="1" onclick="dayclean()" checked="checked">1天</span></label> 
			<label><span class="job_recom_time"><input type="radio" name="recdays" value="3" onclick="dayclean()">3天</span> </label> 
			<label><span class="job_recom_time"><input type="radio" name="recdays" value="7" onclick="dayclean()">7天</span> </label> 
			<label><span class="job_recom_time"><input type="radio" name="recdays" value="15" onclick="dayclean()">15天</span></label>  
			<label><span class="job_recom_time"><input type="radio" name="recdays" value="30" onclick="dayclean()">30天</span></label>  
			<input type="text" value="" class="job_recom_time_zdy" id="crecdays" name="crecdays" onclick="radioclean(this.value)" onkeyup="checkRec();" onkeypress="return Numbers(event)" placeholder="自定义"/><span class="job_recom_time_zdy_t">天</span>
			<input type="hidden" name="recjobid" id="recjobid" value=""/>
			<input type="hidden" id="myrec" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['com_recjob'];?>
"/>
			</div>
			</div>
			<div class="job_recom_list">
			<span class="job_recom_s">所需金额：</span>
			<div class="job_recom_list_jobtime"><div class="job_recom_list_jobtime_money"><span id="recneed" class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['com_recjob'];?>
</span> 元</div></div>
			</div>
			<div class="job_recom_list" id="recdiv" style="display:none">
			<span class="job_recom_s">到期时间：</span>
			<div class="job_recom_list_jobtime"><span id="rectime" class="job_recom_list_tip_s"></span></div>
			</div>
			<form name="alipayment"  id="payform_rec" action="../api/alipay/alipayto.php" method="post" target="_blank" onsubmit="return pay_forms();">
				<div class="job_redpack_list">
				
				
					<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
					<div class="job_redpack_list_name">支付方式：</div>
				 	<div class="job_redpack_pay">
						<a href="javascript:;" onclick="recJobOrder('alipay');"><div class="job_redpack_pay_bor job_redpack_pay_bor_pd"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/ap_pay.png"></div>支付宝支付</a>
					</div>
					<?php } else { ?>
					<div class="con_banner_no" style="width:300px;margin-top:10px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
					<?php }?>
					
					
					<input type="hidden" value="" id="pay_type" name="pay_type"/>
					<input type="hidden" name="dingdan" id="order_rec_id" value=""/>
					<input type="hidden" value="职位推荐金额"  name="subject"/>
					<input type="hidden" name="pay_bank" value="directPay">
				</div>
 			</form>
	</div>
</div>
 
<!--紧急招聘弹出框-->
<div id="urgent"  style="display:none; ">
	<div class="job_recom_box">
		<div class="job_recom_list"><span class="job_recom_s job_recom_s_mt">紧急天数：</span>
			<div class="job_recom_list_jobtime">
				<label><span class="job_recom_time"><input type="radio" name="udays" value="1" onclick="dayclean()" checked="checked">1天</span></label> 
				<label><span class="job_recom_time"><input type="radio" name="udays" value="3" onclick="dayclean()">3天</span> </label> 
				<label><span class="job_recom_time"><input type="radio" name="udays" value="7" onclick="dayclean()">7天</span> </label> 
				<label><span class="job_recom_time"><input type="radio" name="udays" value="15" onclick="dayclean()">15天</span></label>  
				<label><span class="job_recom_time"><input type="radio" name="udays" value="30" onclick="dayclean()">30天</span></label>  
				<input type="text" value="" class="job_recom_time_zdy" id="cudays" name="cudays" onclick="radioclean(this.value)" onkeyup="checkU();" onkeypress="return Numbers(event)" placeholder="自定义"><span class="job_recom_time_zdy_t">天</span>
				<input type="hidden" name="urgentid" id="urgentid" value=""/>
				<input type="hidden" id="myu" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['com_urgent'];?>
"/>
			</div>
		</div>
		<div class="job_recom_list">
			<span class="job_recom_s">所需金额：</span>
			<div class="job_recom_list_jobtime"><div class="job_recom_list_jobtime_money"><span id="uneed" class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['com_urgent'];?>
</span>元</div></div>
		</div>
		<div class="job_recom_list" id="udiv" style="display:none">
			<span class="job_recom_s">到期时间：</span>
			<div class="job_recom_list_jobtime"><span id="utime" class="job_recom_list_tip_s"></span></div>
		</div>
		<form name="alipayment"  id="payform_urgent" action="../api/alipay/alipayto.php" method="post" target="_blank" onsubmit="return pay_forms();">
			<div class="job_redpack_list">
			
				<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
				<div class="job_redpack_list_name">支付方式：</div>
			 	<div class="job_redpack_pay">
					<a href="javascript:;" onclick="urgentJobOrder('alipay');"><div class="job_redpack_pay_bor job_redpack_pay_bor_pd"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/ap_pay.png"></div>支付宝支付</a>
				</div>
				<?php } else { ?>
				<div class="con_banner_no" style="width:300px;margin-top:10px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
				<?php }?>
				
				<input type="hidden" value="" id="pay_type" name="pay_type"/>
				<input type="hidden" name="dingdan" id="order_urgent_id" value=""/>
				<input type="hidden" value="紧急招聘金额"  name="subject"/>
				<input type="hidden" name="pay_bank" value="directPay">
			</div>
 		</form>
	</div>
</div>


<input type="hidden" name="orderid" id="orderid" value=""/>
  
 <div id="wxpayTx"  style="display:none;">
  <div class="wx_payment">
  <div class="wx_payment_cont"><div class="wx_payment_ewm">正在加载微信二维码,请稍候....</div> </div><div class="wx_payment_h2">二维码有效时长为2小时，请尽快支付</div>
  <div class="wx_payment_tip">
  <div class="wx_payment_tip_left"><i class="wx_payment_tip_line1"></i><i class="wx_payment_tip_line2"></i><i class="wx_payment_tip_line3"></i></div> 
  <div class="wx_payment_tip_right">请使用微信扫一扫<br>扫描二维码支付</div>
  </div>
  </div>
</div>  
 <div id="payshow" style="width:450px; position:absolute;left:0px;top:0px; background:#fff; display:none;">
<div class="payment_tip">请在新打开的支付页面上完成付款，付款完成前请不要关闭此窗口。<br>如您在支付过程中遇到问题，请联系客服：<span class="payment_tip_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</span></div>
<div class="payment_bottom"><a href="index.php?c=paylog" class="payment_bottombutt">已完成付款</a><a href="javascript:;" onclick="rePay();" class="payment_bottom_bth2">重新支付</a></div>
</div>
<?php }} ?>
