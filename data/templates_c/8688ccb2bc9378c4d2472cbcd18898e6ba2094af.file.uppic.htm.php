<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-12-21 08:54:12
         compiled from "D:\phpStudy\WWW\huilie\app\template\member\lietou\uppic.htm" */ ?>
<?php /*%%SmartyHeaderCode:168675a3b0634b30dc6-74695568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8688ccb2bc9378c4d2472cbcd18898e6ba2094af' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\huilie\\app\\template\\member\\lietou\\uppic.htm',
      1 => 1513817289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168675a3b0634b30dc6-74695568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'user_style' => 0,
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a3b0634ba2241_84645621',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3b0634ba2241_84645621')) {function content_5a3b0634ba2241_84645621($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['ltstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/imgareaselect/imgareaselect.css" type="text/css"/>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/imgareaselect/jquery.imgareaselect.js"><?php echo '</script'; ?>
>  
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/imgareaselect/ajaxfileupload.js"><?php echo '</script'; ?>
>  
<div class="w1000">
  <div class="admin_mainbody"> 
  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class=right_box>
    <div class="admincont_box" style="_height:500px;">
      <div class="com_tit"><span class="com_tit_span">企业LOGO</span> </div>
      <div class="com_body">

  <div class="resume_box_list">
          <div class="search_con  search_con_w100 fl" style="margin-top:10px;" >
          <div class="resume_Prompt" style="margin-top:0px;">提示：有时因页面缓存问题，上传后照片不能及时更新请击刷新页面即可 </div>
			
          <div class="clear"></div>
          <div class="oppic_img_cont">  
			<div class="uppic_sc_box">
          <div class="uploader_sc_gs">  支持jpg,jpeg,png文件格式，最大不要超过2M</div>
          <div class="uploader_sc" >
		    <a class="link-upload" href="javascript:;"><img  src="<?php echo $_smarty_tpl->tpl_vars['user_style']->value;?>
/images/upload.gif" width="85" height="28"></a>
            <input id="image" class="input-file" type="file" name="image" onchange="ajaxfile();">

           </div> 
            </div>
            
            <div class="oppic_img_big">
              <div class="oppic_img_big_img" style="width:185px;height:75px;"><img src="<?php echo $_smarty_tpl->tpl_vars['company']->value['logo'];?>
" width='185' height='75' onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);"/></div>
              <div class="oppic_img_big_p" style="width:185px;">标准LOGO尺寸 185×75</div>
            </div>
          
     
          </div>
          <div class="clear"></div>  
          <div class="uppic_flash" style="display:none;" id='uppic_flash'> 
			<div class="uppic_big_zx">
				<img src="" style="float: left; margin-right: 10px;" id="thumbnail" />
               </div>
               <div style="width:200px; float:left"> 
                <div id="preview1" class="uppic_previ1">
					<img id="preview1_img" src="" style="position: relative;"/>
				</div>
            </div>       
			<div class="uppic_pb">
			<form name="form1" id="form1">
				<input name="sizeit" id="sizeit" type="submit" value="保存LOGO"  class="uppic_pb_bth"/>	
			</form>
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
function ajaxfile() {
	if($("#image").val() != '') {
		layer.load('图片上传中，请稍候....', 0);
		$.ajaxFileUpload({
			url: 'index.php?c=uppic&act=ajaxfileupload',
			secureuri: false, 
			fileElementId: 'image', 
			dataType: 'json', 
			success: function (data, status){  
				layer.closeAll();
				if (data.s_thumb) {
					layer.msg(data.s_thumb, 2, 8);
				} else {
					hideLoading(data.url);
				}
		   }
		})
	}
}
var size1={
	width:185,
	height:75
}
$('#preview1').width(size1.width);
$('#preview1').height(size1.height);
function hideLoading(pic) {
	$("#thumbnail").attr({ 'src': pic });
	$("#preview1_img").attr({ 'src': pic }); 
	$('#uppic_flash').show();
	var ias = $('#thumbnail')
	.imgAreaSelect({
		aspectRatio: '185:75', 
		onSelectChange: lis, 
		onInit: function () {
			var _opt = ias.getOptions();
			render($('#preview1_img'), $("#thumbnail")[0], {
				height: _opt.y2 - _opt.y1,
				width: _opt.x2 - _opt.x1,
				x1: _opt.x1,
				x2: _opt.x2,
				y1: _opt.y1,
				y2: _opt.y2
			}, size1);
		},
		instance: true,
		keys: true,
		x1: 37, 
		y1: 15,
		x2: size1.width,
		y2: size1.height
	});
}
function lis(img, sel) {
	render($('#preview1 img'), img, sel, size1); 
}
function render(target, img, sel, size) {
	var scale = size.width / sel.width;
	target.css({
		width: Math.round(scale * $(img).width()),
		height: Math.round(scale * $(img).height())
	});
	target.css({
		marginLeft: '-' + Math.round(scale * sel.x1) + 'px',
		marginTop: '-' + Math.round(scale * sel.y1) + 'px'
	});
	target.data('scale', scale);
	target.data('width', sel.width);
	target.data('height', sel.height);
	target.data('x', sel.x1);
	target.data('y', sel.y1);
}
$(function () {
	$('#form1').submit(function (e) {
		e.preventDefault();
		e.stopPropagation();
		var preview1 = $('#preview1 img'); 
		$.post("index.php?c=uppic&act=savethumb", {
			sizeit: true,
			count: 1,
			/*图1*/
			width1: preview1.data('width'),
			height1: preview1.data('height'),
			x1: preview1.data('x'),
			y1: preview1.data('y'),
			img1: $('#preview1_img').attr('src'),
			scale1: preview1.data('scale') 
		}, function (res) {
			var _n = parseInt(res);
			if (_n == 2) {
				layer.msg('LOGO设置失败！', 2, 8,function(){location.reload();}); 
				
			} else {
				layer.msg('LOGO设置成功！', 2, 9,function(){location.reload();}); 
			}
		});
	});
});
<?php echo '</script'; ?>
> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
