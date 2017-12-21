<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-12-21 09:24:24
         compiled from "D:\phpStudy\WWW\huilie\app\template\default\once\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:88535a3b0d48539288-92909977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8ed6a5219c38df444e6da5b3f81c33f717d044b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\huilie\\app\\template\\default\\once\\index.htm',
      1 => 1513817288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88535a3b0d48539288-92909977',
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
    'num' => 0,
    'add_time' => 0,
    'getinfo' => 0,
    'key' => 0,
    'v' => 0,
    'oncekeyword' => 0,
    'keylist' => 0,
    'once' => 0,
    'uid' => 0,
    'pagenav' => 0,
    'total' => 0,
    'top_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a3b0d4860c186_61875748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3b0d4860c186_61875748')) {function content_5a3b0d4860c186_61875748($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\phpStudy\\WWW\\huilie\\app\\include\\libs\\plugins\\function.url.php';
?><?php $once=array();global $db,$db_config,$config;eval('$paramer=array("item"=>"\'once\'","ispage"=>"1","limit"=>"21","keyword"=>"\'auto.keyword\'","add_time"=>"\'auto.add_time\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = "`status`='1'  and `edate`>".time();
		if($config[did]){
			$where.=" AND `did`='".$config['did']."'";
		}
        if($paramer['add_time']>0){
			$time=time()-$paramer['add_time']*86400;
			$where.=" and `ctime`>".$time;
		}
		if($paramer[keyword]){
			$where.=" AND (`title` LIKE '%".$paramer[keyword]."%' or `companyname` LIKE '%".$paramer[keyword]."%')";
		}
		if($paramer['delid']){
			$where.=" AND `id`<>'".$paramer['delid']."'";
		}
		if($paramer[order]){
			$order = " ORDER BY `".str_replace("'","",$paramer[order])."`";
		}else{
			$order = " ORDER BY ctime ";
		}
		if($paramer[sort]){
			$sort = $paramer[sort];
		}else{
			$sort = " DESC";
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
			$limit = PageNav($paramer,$_GET,"once_job",$where,$Purl,'','0',$_smarty_tpl);
		}
		$where.=$order.$sort.$limit;
		$once=$db->select_all("once_job",$where);
		if(is_array($once)){
			foreach($once as $key=>$value){
				$time=time()-$value['ctime'];
				if($time>86400 && $time<604800){
					$once[$key]['ctime'] = ceil($time/86400)."天前";
				}elseif($time>3600 && $time<86400){
					$once[$key]['ctime'] = ceil($time/3600)."小时前";
				}elseif($time>60 && $time<3600){
					$once[$key]['ctime'] = ceil($time/60)."分钟前";
				}elseif($time<60){
					$once[$key]['ctime'] = "刚刚";
					$once[$key]['redtime'] =1;
				}else{
					$once[$key]['ctime'] = date("Y-m-d",$value['ctime']);
				}
			}
			if($paramer[keyword]!=""&&!empty($once)){
				addkeywords('1',$paramer[keyword]);
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
<link href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/microresume.css" rel="stylesheet" type="text/css" />
<style>
* {
	margin:0;
	padding:0;
}
body, div {
	margin:0;
	padding:0;
}
.content_firm {
	float:left;
	width:100%;
	margin: 0 auto;
	position: relative;
}
</style>
</head>
<body class="once_bg">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="clear"></div>
<div class="once_banner">
<div class="once_banner_cont">
 <div class="once_banner_cont_cur">您当前的位置：<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
">首页</a> > <a href="<?php echo smarty_function_url(array('m'=>'once'),$_smarty_tpl);?>
">店铺招聘</a></div>
  <div class="once_banner_cont_b"><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/once_bg.jpg" width="1200" height="204"/></div>
  <div class="once_tips_bg_b"></div>
   <div class="once_tips_bg">
          <div class="once_tips_h1">他们这样招工</div>
          <div class="once_tips_p">不用注册，快速发布招聘广告信息，
            你再也不用到处跑,这里也能贴招聘广告</div>
          <div class="once_tips_fab"> <a href='javascript:;' <?php if ($_smarty_tpl->tpl_vars['num']->value) {?>onclick="showfabu()"<?php } else { ?>onclick="layer.msg('每天最多可发布<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_once'];?>
份店铺招聘！',2,8)"<?php }?> class="recruit_user_public">发布店铺招聘</a> </div>
        </div>
        
  </div>
 </div>
<div class="yun_content">
<div class=""></div>
  <div class="clear"></div>
  <!--start-->
  <div class="recruit_micro">
    <div class="wrap">

      <div class="res_search">
      <div class="once_s_box">
        <div class="res_search_con ">
          <form action="<?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_oncedir']) {?>index.php<?php } else {
echo smarty_function_url(array('m'=>'once'),$_smarty_tpl);
}?>"   method="get" onsubmit="return search_keyword(this,'请输入店铺招聘的关键字');">
            <div class="res_time ">
              <div class="res_time_con"> <span id="add_times"><?php if ($_GET['add_time']) {
echo $_smarty_tpl->tpl_vars['add_time']->value[$_GET['add_time']];
} else { ?>不限<?php }?></span> <i></i> </div>
              <?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_tinydir']) {?>
              <input type="hidden" value="tiny" name="m" />
              <?php }?>
              <input type="hidden" name="add_time" id="add_time" value="<?php echo $_smarty_tpl->tpl_vars['getinfo']->value['val'];?>
" />
              <ul class="none" id="res_menu">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['add_time']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <li onclick="selectonce('<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
');"><a href="javascript:;"> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></li>
                <?php } ?>
              </ul>
            </div>
            <div class="res_key">
              <input id="key_word" class="res_key_txt" type="text" value="<?php if ($_GET['keyword']) {
echo $_GET['keyword'];
} else { ?>请输入店铺招聘的关键字<?php }?>"  name="keyword" onclick="if(this.value=='请输入店铺招聘的关键字'){this.value=''}" placeholder="请输入店铺招聘的关键字" onblur="if(this.value==''){this.value='请输入店铺招聘的关键字'}"/>
              <input type="submit"  value="搜索" id="search_button" class="res_key_btn yun_bg_color"/>
            </div>
          </form> 
          <?php if ($_smarty_tpl->tpl_vars['oncekeyword']->value) {?>
          <div class="res_hot"> 热门搜索：
            <?php  $_smarty_tpl->tpl_vars['keylist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keylist']->_loop = false;
global $config;eval('$paramer=array("limit"=>"12","type"=>"1","item"=>"\'keylist\'","nocache"=>"")
;');$list=array();
		if($paramer[recom]){
			$tuijian = 1;
		}
		if($paramer[type]){
			$type = $paramer[type];
		}
		if($paramer[limit]){
			$limit=$paramer[limit];
		}else{
			$limit=5;
		}
		include PLUS_PATH."/keyword.cache.php";
		if($paramer[iswap]){
			$wap = "/wap";
		}else{
			$index =1;
		}
		if(is_array($keyword)){
			if($paramer[iswap]){
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v[tuijian]!=1){
						continue;
					}
					if($type && $v[type]!=$type){
						continue;
					}

					$i++;
					if($v[type]=="1"){
						$v[url] = Url("wap",array("c"=>"once","keyword"=>$v['key_name']));
						$v[type_name]='店铺招聘';
					}elseif($v['type']=="13"){
						$v['url'] = Url("wap",array("c"=>"tiny","keyword"=>$v['key_name']));
						$v['type_name']='普工简历';
					}elseif($v[type]=="3"){
						$v[url] = Url("wap",array("c"=>"job","keyword"=>$v['key_name']));
						$v[type_name]='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("wap",array("c"=>"company","keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("wap",array("c"=>"resume","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color=\"".$v['color']."\">".$v['key_name']."</font>";
					}
					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}else{
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v['tuijian']!=1){
						continue;
					}
					if($type && $v['type']!=$type){
						continue;
					}
					$i++;
					if($v['type']=="1"){
						$v['url'] = Url("once",array("keyword"=>$v['key_name']));
						$v['type_name']='店铺招聘';
					}elseif($v['type']=="2"){
						$v['url'] = Url("part",array("keyword"=>$v['key_name']));
						$v['type_name']='兼职';
					}elseif($v['type']=="13"){
						$v['url'] = Url("tiny",array("keyword"=>$v['key_name']));
						$v['type_name']='普工简历';
					}elseif($v['type']=="3"){
						$v['url'] = Url("job",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("company",array("keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("resume",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}else if($v['type']=="12"){
						$v['url'] = Url("ask",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='问答';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color=\"".$v['color']."\">".$v['key_name']."</font>";
					}

					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}
		}$list = $list; if (!is_array($list) && !is_object($list)) { settype($list, 'array');}
foreach ($list as $_smarty_tpl->tpl_vars['keylist']->key => $_smarty_tpl->tpl_vars['keylist']->value) {
$_smarty_tpl->tpl_vars['keylist']->_loop = true;
?> <a href="<?php echo $_smarty_tpl->tpl_vars['keylist']->value['url'];?>
"> <?php echo $_smarty_tpl->tpl_vars['keylist']->value['key_name'];?>
</a> <?php } ?> </div>
          <?php } else { ?>
          <div class="res_hot">&nbsp;</div>
          <?php }?> </div>
      </div></div>
      <div class="recruit_micro_list">
        <div class="recruit_micro_list01" style="padding-top:0px;">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['once'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['once']->_loop = false;
$once = $once; if (!is_array($once) && !is_object($once)) { settype($once, 'array');}
foreach ($once as $_smarty_tpl->tpl_vars['once']->key => $_smarty_tpl->tpl_vars['once']->value) {
$_smarty_tpl->tpl_vars['once']->_loop = true;
?>
            <li>
              <div class="recruit_list_title">   <a href="<?php echo smarty_function_url(array('m'=>'once','c'=>'show','id'=>'`$once.id`'),$_smarty_tpl);?>
"><?php echo mb_substr($_smarty_tpl->tpl_vars['once']->value['title'],0,11,'gbk');?>
</a></div>
            
              <div class="recruit_list_detail">
			  <?php echo mb_substr($_smarty_tpl->tpl_vars['once']->value['require'],0,100,'gbk');?>
</div>
                <div class="recruit_list_gongzi">工资：<?php if ($_smarty_tpl->tpl_vars['once']->value['salary']) {?>￥<?php echo $_smarty_tpl->tpl_vars['once']->value['salary'];
} else { ?>面议<?php }?></div>
               <div class="recruit_list_city"></div>
              <div class="recruit_list_link"> 
              <?php if ($_smarty_tpl->tpl_vars['config']->value['user_wzp_link']==1&&$_smarty_tpl->tpl_vars['uid']->value<=0) {?>
                <div class="once_tel_p_login fl"><a href="javascript:void(0);" onclick="showlogin('');" style="color:#1c99ef">[登录]</a> 后才可以查看联系方式</div>
             <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['once']->value['phone']) {?>
                <div class="once_tel_p">联系电话：<?php echo $_smarty_tpl->tpl_vars['once']->value['phone'];?>
（<?php echo $_smarty_tpl->tpl_vars['once']->value['linkman'];?>
）</div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['once']->value['address']) {?><div class="once_tel_add">联系地址：<?php echo $_smarty_tpl->tpl_vars['once']->value['address'];?>
</div><?php } else { ?><div class="once_tel_add1"> </div><?php }?>
                <?php }?>
                <div class="once_fb_time">更新于                 
                <?php if ($_smarty_tpl->tpl_vars['once']->value['redtime']==1||$_smarty_tpl->tpl_vars['once']->value['ctime']<60) {?> <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['once']->value['ctime'];?>
</span> <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['once']->value['ctime'];?>

                <?php }?>
               </div>
                
              </div>
            </li>
            <?php } ?>
          </ul>
          <?php if ($_smarty_tpl->tpl_vars['pagenav']->value) {?>
          <div class="clear"></div>
          <div class="pages"> <?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['total']->value==0) {?>
        
          <div class="onceseachno">
            <div class="onceseachno_left"> <img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/search-no.gif"/></div>
            <div class="onceseachno_content"> <strong>很抱歉，没有找到满足条件的职位</strong><br/>
              <span> 建议您：<br/>
              1、适当减少已选择的条件<br/>
              2、适当删减或更改搜索关键字<br/>
              </span> <span> 热门关键字：<br/>
              <?php  $_smarty_tpl->tpl_vars['top_key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['top_key']->_loop = false;
global $config;eval('$paramer=array("limit"=>"6","recom"=>"1","type"=>"1","item"=>"\'top_key\'","nocache"=>"")
;');$list=array();
		if($paramer[recom]){
			$tuijian = 1;
		}
		if($paramer[type]){
			$type = $paramer[type];
		}
		if($paramer[limit]){
			$limit=$paramer[limit];
		}else{
			$limit=5;
		}
		include PLUS_PATH."/keyword.cache.php";
		if($paramer[iswap]){
			$wap = "/wap";
		}else{
			$index =1;
		}
		if(is_array($keyword)){
			if($paramer[iswap]){
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v[tuijian]!=1){
						continue;
					}
					if($type && $v[type]!=$type){
						continue;
					}

					$i++;
					if($v[type]=="1"){
						$v[url] = Url("wap",array("c"=>"once","keyword"=>$v['key_name']));
						$v[type_name]='店铺招聘';
					}elseif($v['type']=="13"){
						$v['url'] = Url("wap",array("c"=>"tiny","keyword"=>$v['key_name']));
						$v['type_name']='普工简历';
					}elseif($v[type]=="3"){
						$v[url] = Url("wap",array("c"=>"job","keyword"=>$v['key_name']));
						$v[type_name]='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("wap",array("c"=>"company","keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("wap",array("c"=>"resume","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color=\"".$v['color']."\">".$v['key_name']."</font>";
					}
					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}else{
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v['tuijian']!=1){
						continue;
					}
					if($type && $v['type']!=$type){
						continue;
					}
					$i++;
					if($v['type']=="1"){
						$v['url'] = Url("once",array("keyword"=>$v['key_name']));
						$v['type_name']='店铺招聘';
					}elseif($v['type']=="2"){
						$v['url'] = Url("part",array("keyword"=>$v['key_name']));
						$v['type_name']='兼职';
					}elseif($v['type']=="13"){
						$v['url'] = Url("tiny",array("keyword"=>$v['key_name']));
						$v['type_name']='普工简历';
					}elseif($v['type']=="3"){
						$v['url'] = Url("job",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("company",array("keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("resume",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}else if($v['type']=="12"){
						$v['url'] = Url("ask",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='问答';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color=\"".$v['color']."\">".$v['key_name']."</font>";
					}

					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}
		}$list = $list; if (!is_array($list) && !is_object($list)) { settype($list, 'array');}
foreach ($list as $_smarty_tpl->tpl_vars['top_key']->key => $_smarty_tpl->tpl_vars['top_key']->value) {
$_smarty_tpl->tpl_vars['top_key']->_loop = true;
?> <a href="<?php echo $_smarty_tpl->tpl_vars['top_key']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['top_key']->value['key_name'];?>
</a> <?php } ?> </span> </div>
          </div>
          <?php }?> </div>
        <div class="clear"></div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <!--end--> 
</div>
<!--弹出框 -->
<div class=" none" style="_position:absolute;" id="fabufast">
	<form action="<?php echo smarty_function_url(array('m'=>'once'),$_smarty_tpl);?>
" target="supportiframe" method="post"  onSubmit="return check_once_job()" enctype="multipart/form-data">
	<div class="once_tck_box">
		<div class="once_tck_box_bg">
			<div class="once_tck_box_tit"><span class="once_tck_box_tit_s"><i class="once_tck_box_tit_icon once_tck_box_tit_icon_job"></i>职位信息</span></div>
			<div class="once_tck_box_jobname">
				<div class="once_tck_box_name"><i class="once_tck_box_icon">*</i>我想招聘： </div>   
				<input  class="once_tck_box_text once_tck_box_textname " type="text" id="title" maxlength="15" name="title"/>
			</div> 
		  	<div class="once_tck_box_jobxz"> 
				<div class="once_tck_box_name">工 资： </div>   
		 		<input class="once_tck_box_text once_tck_box_textxz" type="text" id="salary" maxlength="15" name="salary"/>
		 	</div>   
		   	<div class="once_tck_box_jobtime"> 
				<div class="once_tck_box_name"><i class="once_tck_box_icon">*</i>招聘有效期：  </div>   
		 		<input class="once_tck_box_text once_tck_box_texttime" type="text" id="edate" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"  maxlength="3" name="edate"/>  <span class="">天</span>
		 	</div> 
		   	<div class="once_tck_box_job_simplew"> 
				<div class="once_tck_box_name"><i class="once_tck_box_icon">*</i>招聘要求：  </div>   
		 		<textarea rows='6' class="once_tck_box_job_simplew_textarea" id="require" onfocus="if(this.value=='请填写招聘的具体要求，如：性别，学历，年龄，工作经验，工资待遇等相关信息') this.value=''" onblur="this.value=this.value==''?'请填写招聘的具体要求，如：性别，学历，年龄，工作经验，工资待遇等相关信息':this.value" name="require">请填写招聘的具体要求，如：性别，学历，年龄，工作经验，工资待遇等相关信息</textarea>
		 	</div> 
		</div>
		<div class="once_tck_box_bg ">
		 	<div class="once_tck_box_tit"><span class="once_tck_box_tit_s"><i class="once_tck_box_tit_icon once_tck_box_tit_icon_info"></i>店铺信息</span></div>
		 	<div class="once_tck_box_jobname">
				<div class="once_tck_box_name"><i class="once_tck_box_icon">*</i>店铺名称： </div>   
		     	<input class="once_tck_box_text once_tck_box_textname" type="text" id="companyname" maxlength="15" name="companyname"/>
			</div> 
		 	<div class="once_tck_box_jobxz">
				<div class="once_tck_box_name"><i class="once_tck_box_icon">*</i>联系电话： </div>   
		     	<input class="once_tck_box_text once_tck_box_textxz" type="text" id="phone" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')" maxlength="13" name="phone"/>
			</div> 
		 	<div class="once_tck_box_jobtel">
				<div class="once_tck_box_name"><i class="once_tck_box_icon">*</i>联系人： </div>   
		  		<input class="once_tck_box_text once_tck_box_texttel" type="text" id="linkman" maxlength="15" name="linkman"/>
			</div> 
			<div class="once_tck_box_jobname">
				<div class="once_tck_box_name"><i class="once_tck_box_icon">*</i>店铺地址： </div>   
			    <input class="once_tck_box_text once_tck_box_textname" type="text" id="address" maxlength="15" name="address"/>
			</div> 
		 	<div class="once_tck_box_job_tel">
				<div class="once_tck_box_name"><i class="once_tck_box_icon"></i>店铺形象： </div>   
		     	<div class="once_tck_box_job_photo"> <input type="file" id="pic" name="pic" class="" style="*width:200px;*height:23px;"/></div>
			</div> 
		</div>
	 	<div class="once_tck_box_bg">
	 		<div class="once_tck_box_tit"><span class="once_tck_box_tit_s"><i class="once_tck_box_tit_icon once_tck_box_tit_icon_zh"></i>账户信息</span></div>
	 		<div class="once_tck_box_jobname">
				<div class="once_tck_box_name"><i class="once_tck_box_icon">*</i>设置密码：<span class="once_tck_box_tip">用于刷新/修改/删除信息！</span> </div>   
	     		<input class="once_tck_box_text once_tck_box_textname" type="password"  id="password" name="password" onkeyup="this.value=this.value.replace(/^ +| +$/g,'')"/>
			</div> 
			
	  	<?php if (strpos($_smarty_tpl->tpl_vars['config']->value['code_web'],"店铺招聘")!==false) {?>

	  		<div class="once_tck_box_jobname">

				<?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']==3) {?>	
				
					<!---geetest----->
		            <div class="once_tck_box_name"><i class="once_tck_box_icon">*</i>验证码： </div>   
		
		            <div class="once_verification">
						<div id="popup-captcha" data-id='botton' data-type='click'></div>
						<input type='hidden' id="popup-submit" />
					</div>
					
				<?php } else { ?>
					
					<div class="once_tck_box_name"><i class="once_tck_box_icon">*</i>验证码： </div>   
				  	<input id="authcode" class="once_tck_box_text once_tck_box_textyz" type="text" maxlength="4" name="authcode"/>
				  	<a class="fl"><img id="vcodeimgs" onclick="checkCode('vcodeimgs');" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" style="margin-left:10px;border:1px solid #eee"/></a>
				  	<input id="code_kind" type="hidden" value="1"/>
				<?php }?>
			
			</div>	
	             		 
		<?php } else { ?>
				
			<input id="authcode" type="hidden" value="12345" maxlength="4" name="authcode"/>
	    
	    <?php }?> 
	
		</div>
		<div class="once_tck_box_jobbth_box">
	 		<input type="hidden" id="id" name="id"/>
	      	<input id="botton" class="once_tck_box_jobbth" type="submit" value="发布" name="submit"/>
	   	</div> 
	</div>
	</form>
</div> 

<input id="sqjobresume" value='1' type="hidden"/> 
  
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
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/fast.js" language="javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/gt.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/pc.js" type="text/javascript"><?php echo '</script'; ?>
>
<style>
.once_tel_add1 {
    width: 330px;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    height: 25px;
    line-height: 25px;
    font-size: 12px;
    padding-left: 20px;
}
</style>
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
<?php echo '<script'; ?>
 type="text/javascript"> 
$(document).ready(function(){
	$(window).scroll(function(){
		var scroll_Top = $(window).scrollTop();
		var width=document.body.clientWidth;
		if(scroll_Top>520){
			if(window.XMLHttpRequest){
				var top=0;
				var right=(width-970)/2+"px";
			}else{
				var top=parseInt(scroll_Top)-(520);
				var right=0;
			}
			$(".Fast_left").attr("style","position:fixed;top:"+top+"px;_position:absolute;right:"+right+";");
		}else{
			$(".Fast_left").attr("style","");
		}
	});
});


$(function(){
	$(".res_time").hover(function(){
		$(this).addClass("res_time_det");
		$(this).find("#res_menu").show();
		
	},function(){
		$(this).removeClass("res_time_det");
		$(this).find("#res_menu").hide();		
	});
});
function selectonce(val,name){
	$("#add_time").val(val);	
	$('#add_times').html(name)
	$("#res_menu").hide();
}
<?php echo '</script'; ?>
>
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" class="none"></iframe>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/login.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
