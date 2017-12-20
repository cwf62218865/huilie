<?php
/*
* $Author ��PHPYUN�����Ŷ�
*
* ����: http://www.phpyun.com
*
* ��Ȩ���� 2009-2016 ��Ǩ�γ���Ϣ�������޹�˾������������Ȩ����
*
* ����������δ����Ȩǰ���£�����������ҵ��Ӫ�����ο����Լ��κ���ʽ���ٴη�����
 */
class admin_question_controller extends common
{
	function set_search(){
		$search_list[]=array("param"=>"is_recom","name"=>'�Ƿ��Ƽ�',"value"=>array("1"=>"���Ƽ�","2"=>"δ�Ƽ�"));
		$ad_time=array('1'=>'����','3'=>'�������','7'=>'�������','15'=>'�������','30'=>'���һ����');
		$search_list[]=array("param"=>"end","name"=>'����ʱ��',"value"=>$ad_time);
		$this->yunset("search_list",$search_list);
	}
	function index_action()
	{
		$this->set_search();
		$where=1;
		if($_GET['id'])
		{
			$where.=" and `id`='".$_GET['id']."'";
			$urlarr['id']=$_GET['id'];
		}
		if($_GET['end']){
			if($_GET['end']=='1'){
				$where.=" and `add_time` >= '".strtotime(date("Y-m-d 00:00:00"))."'";
			}else{
				$where.=" and `add_time` >= '".strtotime('-'.(int)$_GET['end'].'day')."'";
			}
			$urlarr['end']=$_GET['end'];
		}
		if(trim($_GET['keyword'])){
			if ($_GET['type']=='1'){
				$where.=" and `title` like '%".trim($_GET['keyword'])."%' ";
			}elseif ($_GET['type']=='2'){
				$queinfo=$this->obj->DB_select_all("member","`username` like '%".trim($_GET['keyword'])."%'","`uid`");
				if (is_array($queinfo)){
					foreach ($queinfo as $k=>$v){
						$queuids[]=$v['uid'];
					}
					$uids=@implode(",",$queuids);
				}
				$where.=" and `uid` in (".$uids.")";
			}
			$urlarr['keyword']=$_GET['keyword'];
			$urlarr['type']=$_GET['type'];
			$this->yunset("name",$_GET['name']);
		}
		if ($_GET['is_recom']=='2'){
			$where.=" and `is_recom`='0'";
		}elseif($_GET['is_recom']=='1'){
			$where.=" and `is_recom`='1'";
		} 
		if($_GET['order']){
			$where.=" order by ".$_GET['t']." ".$_GET['order'];
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}else{
			$where.=" order by id desc";
		}
		$urlarr['page']="{{page}}";
		$pageurl=Url($_GET['m'],$urlarr,'admin');
        $M=$this->MODEL();
		$PageInfo=$M->get_page("question",$where,$pageurl,$this->config['sy_listnum']);
        $this->yunset($PageInfo);
        $question=$PageInfo['rows'];
		$mid=$cid=array();
		foreach($question as $k=>$v){
			if(in_array($v['uid'],$mid)==false){
				$mid[]=$v['uid'];
			}
			if(in_array($v['cid'],$cid)==false){
				$cid[]=$v['cid'];
			}
		}
		$mids=@implode(',',$mid);
		$cids=@implode(',',$cid);
		$member=$M->DB_select_all("member","`uid` in(".$mids.")","`uid`,`username`");

		$q_class=$M->DB_select_all("q_class","`id` in(".$cids.")","`id`,`name`");
		foreach($question as $key=>$val){
			foreach($member as $mv){
				if($val['uid']==$mv['uid']){
					$question[$key]['username']=$mv['username'];
				}
			}
			foreach($q_class as $v){
				if($val['cid']==$v['id']){
					$question[$key]['classname']=$v['name'];
				}
			}
		}
        $this->yunset("get_type", $_GET);
		$this->yunset("question",$question);
		$this->yuntpl(array('admin/admin_question_list'));
	}
	function recommend_action(){
		$nid=$this->obj->DB_update_all("question","`".$_GET['type']."`='".$_GET['rec']."'","`id`='".$_GET['id']."'");
		echo $nid?1:0;die;
	}

	function add_action(){

		if($_GET['id']){
			$question_show=$this->obj->DB_select_once("question","id='".$_GET['id']."'");
			$this->yunset("question_show",$question_show);
		}
		$all_class = $this->obj->DB_select_all("q_class","1 order by sort","`id`,`name`,`pid`");
		foreach($all_class as $k=>$v){
			if($v['id']==$question_show['cid']){
				$pid=$v['pid'];
				$all_class[$k]['is_select']='1';

			}
			if($v['pid']=='0'){
				$p_class[]=$v;
			}
		}
		$this->yunset("class_list",$p_class);
		$this->yunset("pid",$pid);
		$s_class = $this->obj->DB_select_all("q_class","`pid`='".$pid."' order by sort","`id`,`name`,`pid`");
		$this->yunset("s_class",$s_class);
		$this->yuntpl(array('admin/admin_question_add'));
	}

	function get_class_action(){
		if($_POST['pid']){
			$q_class=$this->obj->DB_select_all("q_class","pid='".intval($_POST['pid'])."' order by `sort`","`id`,`name`,`pid`");
			if($q_class[0]){
				$html='';
				foreach($q_class as $v){
					$html.="<div class=\"yun_admin_select_box_list\"><a href=\"javascript:;\" onClick=\"select_new('cid','".$v['id']."','".$v['name']."')\">".$v['name']."</a></div>";
				}
				echo $html;
			}else{
				echo $html="<div class=\"yun_admin_select_box_list\">�÷������������࣡</div>";
			}

		}
	}

	function save_action(){
		if($_POST['update']){
			$value.="`title`='".$_POST['title']."',";
			$value.="`cid`='".$_POST['cid']."',";
			$value.="`visit`='".$_POST['visit']."',";
			$value.="`is_recom`='".$_POST['is_recom']."',";
			$content = str_replace("&amp;","&",html_entity_decode($_POST['content'],ENT_QUOTES,"GB2312"));
			$value.="`content`='".$content."'";
			$nbid=$this->obj->DB_update_all("question",$value,"`id`='".$_POST['id']."'");
			if($_POST['back_url']){
				$url="index.php?m=report&type=1";
			}else{
				$url="index.php?m=admin_question";
			}
			isset($nbid)?$this->ACT_layer_msg("�ʴ�(ID:".$_POST['id'].")���³ɹ���",9,$url,2,1):$this->ACT_layer_msg("����ʧ�ܣ�",8,$url);
		}
	}

	function del_action(){ 
		$this->check_token();
		if($_GET['del']){ 
	    	$del=$_GET['del'];
	    	if($del){
				$this->delquestion($del); 
	    		$this->layer_msg( "�ʴ�(ID:".pylode(',',$del).")ɾ���ɹ���",9,1,$_SERVER['HTTP_REFERER']);
	    	}else{
				$this->layer_msg( "��ѡ����Ҫɾ������Ϣ��",8,1,$_SERVER['HTTP_REFERER']);
	    	}
	    }
	    if(isset($_GET['id'])){
			$this->delquestion(array($_GET['id'])); 
			$this->layer_msg('�ʴ�(ID:'.$_GET['id'].')ɾ���ɹ���',9,0,$_SERVER['HTTP_REFERER']);
		}else{
			$this->layer_msg('�Ƿ�������',8,0,$_SERVER['HTTP_REFERER']);
		}
	}
	function delquestion($ids=array()){ 
		$rows=$this->obj->DB_select_all('answer',"`qid` in(".pylode(',',$ids).") group by uid","count(id) as num,uid");
		$ask=$this->obj->DB_select_all('question',"`id` in(".pylode(',',$ids).") group by uid","count(id) as num,uid");
		$uid=array();
		foreach($rows as $val){
			$num[$val['uid']]=$val['num'];
			$uid[]=$val['uid'];
		}
		
		foreach($ids as $v){
			$attention=$this->obj->DB_select_all("attention","FIND_IN_SET('".$v."',ids) and `type`='1'","`ids`,`id`");
			if(count($attention)){
				foreach($attention as $val){
					$ids=array();
					$arr=@explode(',',$val['ids']);
					foreach($arr as $v){
						if($v!=$v){
							$ids[]=$v;
						}
					} 
					if($ids[0]){
						$this->obj->DB_update_all('attention',"`ids`='".pylode(',',$ids)."'","`id`='".$val['id']."'");
					}else{
						$this->obj->DB_delete_all('attention',"`id`='".$val['id']."'");
					} 
				}
			}
		}
		
		$this->obj->DB_delete_all("answer","`qid` in(".pylode(',',$ids).")","");
		$this->obj->DB_delete_all("answer_review","`qid` in(".pylode(',',$ids).")","");
		$this->obj->DB_delete_all("question","`id` in(".pylode(',',$ids).")",""); 
	}
	function getanswer_action(){
		if($_GET['aid']){
			$where="`id`='".$_GET['aid']."'";
		}else{
			$where="`qid`='".$_GET['id']."'";
		}
		if($_GET['id']){
			$ques = $this->obj->DB_select_once("question","`id` = '".$_GET['id']."'");
			$this->yunset("ques",$ques);
		}
		$all_answer = $this->obj->DB_select_all("answer",$where." order by add_time desc");
		foreach($all_answer as $v){
			$a_uid[]=$v['uid'];
		}
		$a_ids=@implode(',',$a_uid);
		$a_member=$this->obj->DB_select_all("member","`uid` in(".$a_ids.")","`uid`,`username`");
		foreach($all_answer as $key=>$val){
			foreach($a_member as $v){
				if($val['uid']==$v['uid']){
					$all_answer[$key]['username']=$v['username'];
				}
			}
		}
		$this->yunset("qid",$_GET['id']);
		$this->yunset("all_answer",$all_answer);
		$this->yuntpl(array('admin/admin_answer_list'));
	}


	function addanswer_action(){
		if($_GET['id']){
			$answer=$this->obj->DB_select_alls("question","answer","b.`id`='".$_GET['id']."' and b.`qid`=a.`id`");
			$this->yunset("answer",$answer[0]);
		}
		if($_GET['qid']){
			$answer=$this->obj->DB_select_once("question","`id`='".$_GET['qid']."'","title,id as qid");
			$this->yunset("answer",$answer);
		}
		if($_GET['back_url']){
			$this->yunset("back_url",$_GET['back_url']);
		}
		$this->yuntpl(array('admin/admin_add_answer'));
	}

	function save_answer_action(){
		$url="index.php?m=admin_question&c=getanswer&id=".$_POST['qid'];
		if($_POST['update']){
			$value.="`oppose`='".$_POST['oppose']."',";
			$value.="`support`='".$_POST['support']."',";
			$content = str_replace("&amp;","&",html_entity_decode($_POST['content'],ENT_QUOTES,"GB2312"));
			$value.="`content`='".$content."'";
			$a_id=$this->obj->DB_update_all("answer",$value,"`id`='".$_POST['id']."'");
			$a_id?$this->ACT_layer_msg("�ش�(ID:".$_POST['id'].")���³ɹ���",9,$url,2,1):$this->ACT_layer_msg("����ʧ�ܣ�",8,$url);
		}
	}

	function delanswer_action(){

		$this->check_token();
		if($_GET['del']){
	    	$a_del=$_GET['del'];
	    	if($a_del){
	    		if(is_array($a_del)){
					$a_ids=@implode(',',$a_del);
					$this->obj->DB_delete_all("answer", "`id` in(".$a_ids.")","");
					$this->obj->DB_delete_all("answer_review","`aid` in(".$a_ids.")","");
			    }else{
					$a_ids=$a_del;
	    		 	$this->obj->DB_delete_all("answer","`id`='$a_del'");
					$this->obj->DB_delete_all("answer_review","`aid`='".$a_del."'","");
	    		}
	    		$this->obj->DB_update_all("question","`answer_num`=`answer_num`-".count($a_del),"`id`='".$_GET['qid']."'");
	    		$this->layer_msg( "�û��ش�(".$a_ids.")ɾ���ɹ���",9,1,$_SERVER['HTTP_REFERER']);
	    	}else{
				$this->layer_msg( "��ѡ����Ҫɾ������Ϣ��",8,1,$_SERVER['HTTP_REFERER']);
	    	}
	    }
	    if(isset($_GET["id"])){
			$this->obj->DB_delete_all("answer_review","`aid`='".$_GET['id']."'","");
			$result=$this->obj->DB_delete_all("answer", "`id`='".$_GET['id']."'");
			$this->obj->DB_update_all("question","`answer_num`=`answer_num`-1","`id`='".$_GET['qid']."'");
			isset($result)?$this->layer_msg('�û��ش�('.$_GET['qid'].')ɾ���ɹ���',9,0,$_SERVER['HTTP_REFERER']):$this->layer_msg('ɾ��ʧ�ܣ�',8,0,$_SERVER['HTTP_REFERER']);
		}else{
			$this->layer_msg('�Ƿ�������',3,0,$_SERVER['HTTP_REFERER']);
		}
	}

	function getcomment_action(){
		$where="1 ";
		if($_GET['aid']){
			$where.=" and `id`='".$_GET['aid']."'";
		}else{
			$where.=" and `aid`='".$_GET['id']."'";
		}
		$rows=$this->obj->DB_select_all("answer_review",$where." order by `id` desc","`content`,`id`,`add_time`,`qid`,`aid`,`uid`");
		if($rows&&is_array($rows)){
			$uids=array();
			foreach($rows as $v){
				if(in_array($v['uid'],$uids)==false){
					$uids[]=$v['uid'];
				}
			}
			$member=$this->obj->DB_select_all("member","`uid` in(".pylode(',',$uids).")","`uid`,`username`");
			foreach($rows as $k=>$v){
				foreach($member as $val){
					if($v['uid']==$val['uid']){
						$rows[$k]['username']=$val['username'];
					}
				}
			}
		} 
		if ($_GET['id']){
			$aid = $_GET['id'];
			$qid=$this->obj->DB_select_once("answer","`id`='".$aid."'","`qid`");
			$this->yunset("qid",$qid);
		}
		$this->yunset("answer_review",$rows);
		$this->yuntpl(array('admin/admin_answer_review'));
	}

	function add_review_action(){
		if($_GET['id']){
			$review_show=$this->obj->DB_select_once("answer_review","`id`='".$_GET['id']."'");
			$this->yunset("review_show",$review_show);
		}else{
			$this->yunset("aid",$_GET['aid']);
			$this->yunset("qid",$_GET['qid']);
		}
		$this->yuntpl(array('admin/admin_add_review'));
	}

	function save_review_action(){
		$url="index.php?m=admin_question&c=getcomment&id=".$_POST['aid'];
		if($_POST['update']){
			$review.="`content`='".$_POST['content']."'";
			$r_id=$this->obj->DB_update_all("answer_review",$review,"`id`='".$_POST['id']."'");
			isset($r_id)?$this->ACT_layer_msg("�ʴ�����(ID:".$_POST['id'].")���³ɹ���",9,$url,2,1):$this->ACT_layer_msg("����ʧ�ܣ�",8,$url);
		}
	}
	function delreview_action(){
		$this->check_token();
		if($_GET['del']){
	    	$del=$_GET['del'];
	    	if($del){
	    		if(is_array($del)){
					$r_ids=@implode(',',$del);
					$this->obj->DB_delete_all("answer_review", "`id` in(".$r_ids.")","");
					$layertype=1;
			    }else{
					$layertype=0;
					$r_ids=$del;
	    		 	$this->obj->DB_delete_all("answer_review","`id`='".$del."'");
	    		}
	    		$this->obj->DB_update_all("answer","`comment`=`comment`-".count($del),"`id`='".$_GET['aid']."'");
	    		$this->layer_msg( "�ʴ�����(ID:".$r_ids.")ɾ���ɹ���",9,$layertype,$_SERVER['HTTP_REFERER']);
	    	}else{
				$this->layer_msg( "��ѡ����Ҫɾ������Ϣ��",8,$layertype,$_SERVER['HTTP_REFERER']);
	    	}
	    }
	}

	function status_action(){
		 extract($_POST);
		 $id = @explode(",",$pid);
		 if(is_array($id)){
			foreach($id as $value){
				if($value){
					$idlist[] = $value;
				}
			}
			
			$aid = @implode(",",$idlist);

			$id=$this->obj->DB_update_all("question",
				"`state`='$status',`lastupdate`='".time()."'",
				"`id` IN ($aid)");
			$id?$this->ACT_layer_msg("�ʴ����(ID:".$aid.")���óɹ���",9,$_SERVER['HTTP_REFERER'],2,1):$this->ACT_layer_msg("����ʧ�ܣ�",8,$_SERVER['HTTP_REFERER']);
		}else{
			$this->ACT_layer_msg("�Ƿ�������",8,$_SERVER['HTTP_REFERER']);
		}
	}
}
?>