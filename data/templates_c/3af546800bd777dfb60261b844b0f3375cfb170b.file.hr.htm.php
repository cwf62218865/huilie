<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-12-21 09:24:41
         compiled from "D:\phpStudy1\WWW\huilie\app\template\member\com\hr.htm" */ ?>
<?php /*%%SmartyHeaderCode:124335a3b0d5911df04-93721546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3af546800bd777dfb60261b844b0f3375cfb170b' => 
    array (
      0 => 'D:\\phpStudy1\\WWW\\huilie\\app\\template\\member\\com\\hr.htm',
      1 => 1513818375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124335a3b0d5911df04-93721546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'com_style' => 0,
    'current' => 0,
    'JobList' => 0,
    'one' => 0,
    'StateList' => 0,
    'now_url' => 0,
    'rows' => 0,
    'v' => 0,
    'pagenav' => 0,
    'jobnum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a3b0d592c7b83_42607506',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3b0d592c7b83_42607506')) {function content_5a3b0d592c7b83_42607506($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\phpStudy1\\WWW\\huilie\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\phpStudy1\\WWW\\huilie\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<style>
</style>
<div class="w1000">
  <div class="admin_mainbody"> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <link href="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/index_style.css" type=text/css rel=stylesheet>
    <div class=right_box>
      <div class=admincont_box>
     <div class="job_list_tit">
         <ul class="">
         <li <?php if ($_GET['c']=="hr") {?> class="job_list_tit_cur"<?php }?>><a href="index.php?c=hr"  title="应聘简历">应聘简历</a></li>
         <li <?php if ($_GET['c']=="down") {?> class="job_list_tit_cur"<?php }?>><a href="index.php?c=down"  title="您已下载的简历记录">已下载简历</a></li>
         <li <?php if ($_GET['c']=="talent_pool") {?> class="job_list_tit_cur"<?php }?>><a href="index.php?c=talent_pool"  title="加入人才库的简历">收藏简历</a></li>
         <li <?php if ($_GET['c']=="look_resume") {?> class="job_list_tit_cur"<?php }?>><a href="index.php?c=look_resume"  title="您浏览简历的记录">浏览简历</a></li>
         <li <?php if ($_GET['c']=="record") {?> class="job_list_tit_cur"<?php }?>><a href="index.php?c=record" title="网站为您推荐的简历">网站推荐简历</a></li>
         </ul>
         </div>
        <div class="com_body">
          <div class=admin_textbox_04>
          <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
          <div class="hr_tip_box">
           <div class="hr_subMetx"> <span class="hr_resumesearch_span fltL">人才类型：</span> 
           <a href="index.php?c=hr&jobid=<?php echo $_GET['jobid'];?>
&state=<?php echo $_GET['state'];?>
&keyword=<?php echo $_GET['keyword'];?>
" class="hr_subMetx_a <?php if ($_GET['resumetype']=='') {?>hr_subMetx_cur<?php }?>">不限</a>
           <a href="index.php?c=hr&jobid=<?php echo $_GET['jobid'];?>
&state=<?php echo $_GET['state'];?>
&resumetype=1&keyword=<?php echo $_GET['keyword'];?>
" class="hr_subMetx_a <?php if ($_GET['resumetype']=='1') {?>hr_subMetx_cur<?php }?>">普通人才</a>
          </div>
           
            <div class="hr_subMetx"> <span class="hr_resumesearch_span fltL">招聘职位：</span>
              <div class="text_seclet text_seclet_cur2 re">
                <input id="qypr" class="SpFormLBut text_seclet_w250" type="button" onclick="search_show('job_qypr');" <?php if ($_smarty_tpl->tpl_vars['current']->value['id']) {?>value="<?php echo $_smarty_tpl->tpl_vars['current']->value['name'];?>
"<?php } else { ?>value="全部职位"<?php }?>>
                <div id="job_qypr" class="cus-sel-opt-panel " style="display: none;">
                  <ul class="Search_Condition_box_list">
                    <li><a href="index.php?c=hr&state=<?php echo $_GET['state'];?>
&resumetype=<?php echo $_GET['resumetype'];?>
&keyword=<?php echo $_GET['keyword'];?>
">全部职位</a></li>
                    <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['JobList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
                    <li> <a href="index.php?c=hr&jobid=<?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['one']->value['type'];?>
&state=<?php echo $_GET['state'];?>
&resumetype=<?php echo $_GET['resumetype'];?>
&keyword=<?php echo $_GET['keyword'];?>
"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];
if ($_smarty_tpl->tpl_vars['one']->value['type']==2) {?>（猎）<?php }?></a> </li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
               <form action="index.php" method="get" >
                <span class="hr_resumesearch_span fltL">关 键 字：</span>
                <div class="hr_subMetx_se">
                  <input name="c" type="hidden" value="hr">
                  <input name="resumetype" type="hidden" value="<?php echo $_GET['resumetype'];?>
">
                   <input name="jobid" type="hidden" value="<?php echo $_GET['jobid'];?>
">
                    <input name="state" type="hidden" value="<?php echo $_GET['state'];?>
">
                  <input name="keyword" type="text" class="hr_resumesearch_text" placeholder="请输入姓名查找" value="<?php echo $_GET['keyword'];?>
">
                  <input type="submit"  class="hr_resumesearch_bth" value="搜索">
                </div>
              </form>
            </div>
            <div class="hr_subMetx"> <span class="hr_resumesearch_span fltL">简历状态：</span> <a href="index.php?c=hr&jobid=<?php echo $_GET['jobid'];?>
&resumetype=<?php echo $_GET['resumetype'];?>
&keyword=<?php echo $_GET['keyword'];?>
" class="hr_subMetx_a <?php if ($_GET['state']=='') {?>hr_subMetx_cur<?php }?>">不限</a> <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['StateList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?> <a <?php if ($_GET['state']==$_smarty_tpl->tpl_vars['one']->value['id']) {?>class="hr_subMetx_cur"<?php }?> href="index.php?c=hr&jobid=<?php echo $_GET['jobid'];?>
&state=<?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
&resumetype=<?php echo $_GET['resumetype'];?>
&keyword=<?php echo $_GET['keyword'];?>
"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</a> <?php } ?> </div>
       
          </div>
          <div class="clear"></div>
          <form action="<?php echo $_smarty_tpl->tpl_vars['now_url']->value;?>
&act=hrset" target="supportiframe" method="post" id='myform'>
            <div class="clear"></div>
            <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <div class="job_hr_list_box">
            <div class="job_hr_list_boxcheckbox">  
            <input type="checkbox" name="delid[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="job_hr_list_boxcheckbox_c">
            </div>           
           <div class="job_hr_resume_user">
           <div class="job_hr_resume_user_name">
           <a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>'`$v.eid`'),$_smarty_tpl);?>
"  target="_blank" class="com_Release_name" style="color:#333"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
&nbsp;
            <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']==1) {?>
              <span style="color: #666;font-size: 3;">(未查看)</span>
            <?php }?>
           </a>
         
           </div>
           <div class="">
           <span class="hr_s_t_p"><?php echo $_smarty_tpl->tpl_vars['v']->value['exp'];?>
经验 <span style="font-size:12px;color:#999; padding:0px 5px;">|</span> <?php echo $_smarty_tpl->tpl_vars['v']->value['edu'];?>
学历</span>
           <span  class="hr_s_t">申请的职位：<a <?php if ($_smarty_tpl->tpl_vars['v']->value['type']=='1') {?>href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>'`$v.job_id`'),$_smarty_tpl);?>
"<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type']=='2') {?>href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'jobcomshow','id'=>'`$v.job_id`'),$_smarty_tpl);?>
"<?php }?> target="_blank" class="uesr_name_a"><?php echo $_smarty_tpl->tpl_vars['v']->value['job_name'];?>
</a>
           </span>
           <span class="hr_s_t"> 申请的时间： <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['datetime'],'%Y-%m-%d');?>
   </span>
           </div>
             <div class="job_hr_resume_user_yx">  
             意向职位：<span class="" style="color:#f60; font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['v']->value['jobname'];?>
</span>
             </div>
           </div>
        
              <div class="clear"></div>
              <div class="job_hr_list_l">
             
              <div class="com_mem_hr_list_b_b"> <span class="com_mem_hr_list_bzt ">标记状态：</span> 
              <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']!=4&&$_smarty_tpl->tpl_vars['v']->value['userid_msg']==1&&$_smarty_tpl->tpl_vars['v']->value['is_browse']!='5') {?><span class="browsebj com_mem_hr_list_bj com_mem_hr_list_bj_cur" name='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
' browse='5'> 已邀请面试 </span>
				<?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']!=4) {?><span class="browsebj com_mem_hr_list_bj <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='5') {?>com_mem_hr_list_bj_cur<?php }?>" name='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
' browse='5'> 无法联系 </span> <?php }?> 
				<?php } else { ?> 
              <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']<2) {?> 
             
              <span class="browsebj com_mem_hr_list_bj  <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='1') {?>com_mem_hr_list_bj_cur com_mem_hr_list_red<?php }?>" name='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
' browse='1'> 未查看<i class="com_mem_hr_no_icon"></i> <em class="job_hr_new_resume"></em></span>
              <?php }?>
                
                <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']<3) {?> <span class="browsebj com_mem_hr_list_bj <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='2') {?>com_mem_hr_list_bj_cur<?php }?>" name='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
' browse='2'> 已查看</span><?php }?>
                
                <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']<4) {?><span class="browsebj com_mem_hr_list_bj <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='3') {?>com_mem_hr_list_bj_cur<?php }?>" name='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
' browse='3'> 等待通知 </span> <?php }?> 
                
                <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']<5) {?><span class="browsebj com_mem_hr_list_bj <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='4') {?>com_mem_hr_list_bj_cur<?php }?>" name='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
' browse='4'> 拒绝面试</span><?php }?>    
                
                <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']!=4) {?><span class="browsebj com_mem_hr_list_bj <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='5') {?>com_mem_hr_list_bj_cur<?php }?>" name='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
' browse='5'> 无法联系 </span> <?php }
}?>
                </div>
         
         <div class="job_hr_list_r">
           
              <span class="job_hr_job_cz_a"> <a href="javascript:void(0)" onclick="layer_del('确定要删除该条职位申请吗？', 'index.php?c=hr&act=hrset&delid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'); " class="uesr_name_a">删除</a> </span>
              <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']!=4) {?> 
				  <?php if ($_smarty_tpl->tpl_vars['v']->value['userid_msg']==1) {?>
					<?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']==5) {?>
					<i class="job_hr_job_cz_line">|</i><span class="job_hr_job_cz_a">无法联系</span>
					<?php } else { ?>
					<i class="job_hr_job_cz_line">|</i><span class="job_hr_job_cz_a">已邀请面试</span>
					<?php }?>
				  <?php } else { ?>
				   <span class="job_hr_job_cz_ms"> <a href="javascript:void(0);" uid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" username="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" jobid="<?php echo $_smarty_tpl->tpl_vars['v']->value['job_id'];?>
"   class="sq_resume uesr_name_a" jobtype='<?php echo $_smarty_tpl->tpl_vars['v']->value['type'];?>
'>邀请面试</a></span>
				   <i class="job_hr_job_cz_line">|</i> <span class="job_hr_job_cz_a"><a href="javascript:void(0)" name='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
' browse='4' class="browsebj uesr_name_a">拒绝面试</a> </span>
				  <?php }?>
              <?php } else { ?>
			  <i class="job_hr_job_cz_line">|</i><span class="job_hr_job_cz_a">已拒绝</span>
              <?php }?>
              </div>   </div>
                 </div>
            <?php } ?>
            <div class="com_Release_job_bot" style="margin-top:10px;"> <span class="com_Release_job_qx">
              <input id='checkAll'  type="checkbox" onclick='m_checkAll(this.form)' class="com_Release_job_qx_check">
              全选</span>
              <INPUT class="c_btn_02" type="button" name="subdel" value="批量删除" onclick="return really('delid[]');">
              <INPUT class='c_btn_02' type="button" name="subdel" value="批量阅读" onclick="return really_read('delid[]');" style="margin-left:10px;">
            </div>
            <?php } else { ?>
            <div class="msg_no"> 
			 <?php if ($_GET['keyword']!='') {?>
              <p>没有搜索到相关简历记录！</p>
              <?php } else { ?>
              <p> 亲爱的用户，目前您还没有收到申请贵公司职位的人才简历！</p>
              <a href="<?php echo smarty_function_url(array('m'=>'resume'),$_smarty_tpl);?>
" class="com_msg_no_bth com_submit">我要主动找人才</a> 
			 <?php }?> </div>
            <?php }?>
            <div class="diggg mt10 fltR"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
          </form>
          <div  class="clear"></div>
          <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
          
          <?php }?>
          <div  class="clear"></div>
          <div class="wxts_box wxts_box_mt30">
            <div class="wxts">温馨提示：</div>
            1. 共有（<span class="f60"><?php if ($_smarty_tpl->tpl_vars['jobnum']->value) {
echo $_smarty_tpl->tpl_vars['jobnum']->value;
} else { ?>0<?php }?></span>）份简历申请贵公司发布的职位 <br>
            2.对于求职者来说即使是被拒绝，也胜过毫无音讯的等待。<br>
            3.请邀约或者设置为不合适给求职者投递的简历，做一个回馈<br>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php echo '<script'; ?>
>
$(document).ready(function(){
	$(".browsebj").click(function(){
		var browse=$(this).attr('browse');
		var id=$(this).attr('name');
		$.post("index.php?c=hr&act=hrset",{id:id,browse:browse},function(data){
			location.reload();
		});
	});
});
<?php echo '</script'; ?>
> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/yqms.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
