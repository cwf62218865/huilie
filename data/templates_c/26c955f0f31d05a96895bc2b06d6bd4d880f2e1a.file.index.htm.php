<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-12-21 09:26:34
         compiled from "D:\phpStudy\WWW\huilie\app\template\default\special\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:313825a3b0dca7f5f10-32568008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26c955f0f31d05a96895bc2b06d6bd4d880f2e1a' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\huilie\\app\\template\\default\\special\\index.htm',
      1 => 1513817288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '313825a3b0dca7f5f10-32568008',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'style' => 0,
    'config' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a3b0dca857995_63550570',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3b0dca857995_63550570')) {function content_5a3b0dca857995_63550570($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\phpStudy\\WWW\\huilie\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\phpStudy\\WWW\\huilie\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php global $db,$db_config,$config;eval('$paramer=array("limit"=>"10","item"=>"\'row\'","nocache"=>"")
;');$row=array();
		$ParamerArr = GetSmarty($paramer,$_GET);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = "display='1' ";
		
		if($paramer['ctime']>0){
			$time=time()-$paramer['ctime']*86400;
			$where.=" and `ctime`>".$time;
		}
		if($paramer['delid']){
			$where.=" AND `id`<>'".$paramer['delid']."'";
		}
		
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}else{
			$limit=" LIMIT 20";
		}
		if($paramer[where]){
			$where = $paramer[where];
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"special",$where,$Purl,'','0',$_smarty_tpl);
		}
		if($paramer['order']){
			$order = " ORDER BY `".str_replace("'","",$paramer[order])."`";
		}else{
			$order = " ORDER BY sort ";
		}
		if($paramer['sort']){
			$sort = $paramer['sort'];
		}else{
			$sort = " DESC";
		}
		$where.=$order.$sort.$limit;
		$row=$db->select_all("special",$where);
		if(is_array($row)){
			foreach($row as $key=>$value){
				$row[$key]['url'] = Url("special",array("c"=>"show","id"=>$value[id]));
			}
		} ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/css.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/special/css/css.css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/news.css" type="text/css"/>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="clear"></div>
<div class="yun_content">
<div class="current_Location "> ����ǰ��λ�ã�<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
">��ҳ</a> &gt; ר����Ƹ </div>
<div class="speial_list_cont">
<div class="speial_list_cont_pd"><div class="speial_list_cont_h1"><span>��ɫר��</span></div></div>
<div class="speial_list_cont_w1000">

<div class="clear"></div>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
$row = $row; if (!is_array($row) && !is_object($row)) { settype($row, 'array');}
foreach ($row as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<div class="pic-txt">
<a href="<?php echo smarty_function_url(array('m'=>'special','c'=>'show','id'=>'`$row.id`'),$_smarty_tpl);?>
"   target="_blank">
<img width="530" height="155" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
"/> </a>
<div class="txt">
<div class="tit"><a href="<?php echo smarty_function_url(array('m'=>'special','c'=>'show','id'=>'`$row.id`'),$_smarty_tpl);?>
"   target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></div>
<div class="info">
<span class="date"><i class="ico-date"></i><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['etime'],'%Y-%m-%d');?>
</span>
<span class="entrance"><a href="<?php echo smarty_function_url(array('m'=>'special','c'=>'show','id'=>'`$row.id`'),$_smarty_tpl);?>
"   target="_blank">����ר��&gt;&gt;</a></span>
</div>
</div>
</div>
 <?php }
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
 <div class="clear"></div>
 <div class="special_notip">
<div class="special_notip_img"><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/search-no.gif"></div>
<div class="special_notip_p">��Ǹ����û��ר����Ƹ�������Ϣ</div>

</div>
 <?php } ?>



</div>
</div>
</div>

<!--β������-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layer/layer.min.js" language="javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/lazyload.min.js" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js" language="javascript"><?php echo '</script'; ?>
>
<!--[if IE 6]>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
DD_belatedPNG.fix('.png');
<?php echo '</script'; ?>
>
<![endif]--> 
  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
