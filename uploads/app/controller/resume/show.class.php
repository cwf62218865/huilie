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
class show_controller extends resume_controller{
	function index_action(){ 
	    include(CONFIG_PATH."db.data.php");
		unset($arr_data['sex'][3]);
		$this->yunset("arr_data",$arr_data);
		$JobM=$this->MODEL("job");
		$company_job=$JobM->GetComjobList(array("uid"=>$this->uid,"state"=>1,"`edate`>'".time()."' and `r_status`<>'2' and `status`<>'1'"),array("field"=>"`name`,`id`"));
		$this->yunset("company_job",$company_job);
		
		if(($this->uid==''||$this->username=='')&&$this->config['sy_resume_visitors']>0){ 
			if($_COOKIE['resumevisitors']>=$this->config['sy_resume_visitors']){
				$this->ACT_msg(Url('login'),"�ο��û���ÿ��ֻ�ܷ���".$this->config['sy_resume_visitors']."�ݼ��������¼��������ʣ�");
			}else{
				if ($_COOKIE['resumevisitors']==''){
					$resumevisitors=1;
				}else{
					$resumevisitors=$_COOKIE['resumevisitors']+1;
				}
				if($this->config['sy_web_site']=="1"){
					if($this->config['sy_onedomain']!=""){
						$weburl=get_domain($this->config['sy_onedomain']);
					}else{
						$weburl=get_domain($this->config['sy_weburl']);
					}
					SetCookie("resumevisitors",$resumevisitors,time()+86400, "/",$weburl);
				}else{
					SetCookie("resumevisitors",$resumevisitors,time()+86400,"/");
				}
			}
		}

		$statis=$this->obj->DB_select_once("company_statis","`uid`='".$this->uid."'");
		if ($statis){
			$rating=$statis['rating'];
			$discount=$this->obj->DB_select_once("company_rating","`id`=$rating");
			$this->yunset("discount",$discount);
		}
		$packs=$this->obj->DB_select_all("company_service","`display`='1'");
		$pid=intval($_POST['pid']);
		if($pid){
			$packinfo=$this->obj->DB_select_all("company_service_detail","`type` = '$pid' order by `service_price` asc");
			$this->yunset("pid",$pid);
		}else{
			$pack=$this->obj->DB_select_once("company_service","`display`='1'","id");
			$packinfo=$this->obj->DB_select_all("company_service_detail","`type` = '".$pack['id']."' order by `service_price` asc");
		}
		$this->yunset("packs",$packs);
		$this->yunset("packinfo",$packinfo);
	
		
		
		$M=$this->MODEL('resume');
		if((int)$_GET['uid']){
			if((int)$_GET['type']=="2"){
				$user=$M->SelectExpectOne(array("uid"=>(int)$_GET['uid'],"height_status"=>"2"));
				$id=(int)$user['id'];
			}else{
				$def_job=$M->SelectResumeOne(array("uid"=>(int)$_GET['uid'],"`r_status`<>'2'"),"def_job");
				if(!is_array($def_job)){
	    			$this->ACT_msg($this->config['sy_weburl'],"û���ҵ����˲ţ�");
	    		}else if($def_job['def_job']<'1'){
					$this->ACT_msg($this->config['sy_weburl'].'/member',"��û�д���������");
	    		}else if($def_job['def_job']){
					$id=(int)$def_job['def_job'];
				}
			}
		}else if((int)$_GET['id']){
			$id=(int)$_GET['id'];
			$expect=$M->SelectExpectOne(array("id"=>$id),"r_status"); 
			if($expect['r_status']<'1'){
				$this->ACT_msg($this->config['sy_weburl'].'/member',"������������У�");
			}elseif($expect['r_status']=='2'){
				$this->ACT_msg($this->config['sy_weburl'].'/member',"�����ݱ����������Ժ�鿴��");
			}elseif($expect['r_status']=='3'){
				$this->ACT_msg($this->config['sy_weburl'].'/member',"���������δͨ����");
			}
		} 
		$resume_expect=$M->SelectExpectOne(array("id"=>$id));
		if($resume_expect['id']){ 
		
			$UserinfoM=$this->MODEL('userinfo');
			$UserMember=$UserinfoM->GetMemberOne(array("uid"=>$resume_expect['uid']),array("field"=>"`source`,`email`,`claim`"));
			$this->yunset("UserMember",$UserMember);
			
			$time=strtotime("-14 day");
			$allnum=$M->SelectUserIdMsgNum(array("uid"=>$resume_expect['uid'],"`datetime`>'".$time."'"));
			$replynum=$M->SelectUserIdMsgNum(array("uid"=>$resume_expect['uid'],"`datetime`>'".$time."' and `is_browse`>'2'"));
			$pre=round(($replynum/$allnum)*100); 
			$this->yunset("pre",$pre); 
			if($this->usertype==2){
				$JobM=$this->MODEL('job');
				$jobnum=$JobM->GetComjobNum(array("uid"=>$this->uid));
				$this->yunset("jobnum",$jobnum);
			}
			$user=$M->resume_select($id,$resume_expect);
			if($user['sex']==152){
				$user['sex']='2';
			}elseif ($user['sex']==153){
				$user['sex']='1';
			}
			$user['sex']=$arr_data['sex'][$user['sex']];
			$data['resume_username']=$user['username_n'];
			$data['resume_city']=$user['city_one'].",".$user['city_two'];
			$data['resume_job']=$user['hy'];
			$this->data=$data;
			$this->seo("resume");
			$this->yunset("Info",$user);
			
			
			if(is_array($user)&&$user&&$this->uid){
				$usermsgnum=$M->SelectUserIdMsgNum(array('fid'=>$this->uid,'uid'=>$user['uid']));
				$this->yunset("usermsgnum",$usermsgnum);
			}
			

			if($_GET['type']=="word"){ 

				if($user['uid']==$this->uid){
					$this->yuntpl(array('resume/wordresume'));
					die;
				}else{
					$resume=$M->SelectDownResumeOne(array("eid"=>(int)$_GET['id'],"downtime"=>$_GET['downtime']));
					if(is_array($resume) && !empty($resume)){ 
						$this->yuntpl(array('resume/wordresume'));
					}
					die;
				}
			}

			if($this->usertype=="2" || $this->usertype=="3"){
				$this->yunset("uid",$this->uid);
				$M->RemindDeal("userid_job",array("is_browse"=>"2"),array("com_id"=>$this->uid,"eid"=>(int)$_GET['id']));
				if($this->usertype=="2"){
					$talent_pool=$M->SelectTalentPool(array("eid"=>$id,"cuid"=>$this->uid));
					$this->yunset("talent_pool",$talent_pool);
					
				}else{
					
				}
				

				$look_resume=$M->SelectLookResumeOne(array("com_id"=>$this->uid,"resume_id"=>$id));

				if(!empty($look_resume)){
					$M->SaveLookResume(array("datetime"=>time()),array("resume_id"=>$id,"com_id"=>$this->uid));
				}else{
					$data['uid']=$resume_expect['uid'];
					$data['resume_id']=$id;
					$data['com_id']=$this->uid;
					$data['did']=$this->userdid;
					$data['datetime']=time();
					$M->SaveLookResume($data);
					$historyM = $this->MODEL('history');
					$historyM->addHistory('lookresume',$id);
				}
			}
			

			
			 
				$this->yunset(array("resumestyle"=>$this->config['sy_weburl']."/app/template/resume"));  
				$tmp=intval($_GET['tmp']); 
				$statis=$this->MODEL('userinfo')->GetUserstatisOne(array('uid'=>$user['uid']),array('field'=>'`tpl`,`paytpls`','usertype'=>1));
				if($statis['paytpls']){
					$paytpls=@explode(',',$statis['paytpls']);
					$this->yunset("paytpls",$paytpls);
				}  
				if($tmp){ 
					$url=$this->MODEL('resume')->SelectResumeTpl(array('id'=>$tmp)); 
					if($this->uid!=$user['uid']&&in_array($tmp,$paytpls)==false){
						unset($tmp);
					} 
				} else{
					$tmp=1;
					$url=$this->MODEL('resume')->SelectResumeTpl(array('id'=>$statis['tpl'])); 
				}   
				if($url['url']==''){
					unset($tmp);
				} 
				if($tmp){ 
					$this->yunset("tplurl",$url);
					$this->yuntpl(array('resume/'.$url['url'].'/index')); 
				}else{

					$this->yuntpl(array('resume/resume'));
				} 
			
		}else{
			$this->ACT_msg($this->config['sy_weburl'],"û���ҵ����˲ţ�");
		}
    } 
    function GetHits_action() {
        if((int)$_GET['id']){
            $ResumeM=$this->MODEL('resume');
            $ResumeM->AddExpectHits((int)$_GET['id']);
            $hits=$ResumeM->SelectExpectOne(array('id'=>(int)$_GET['id']),'hits');
            echo 'document.write('.$hits['hits'].')';
        }
    }
    
	
	function getPrice_action(){
		if($_POST['comservinceid']){
			$packinfo=$this->obj->DB_select_once("company_service_detail","`id` = '".$_POST['comservinceid']."'","`service_price`");
			
			$statis=$this->obj->DB_select_once("company_statis","`uid`='".$this->uid."'");
			if ($statis){
				$rating=$statis['rating'];
				$discount=$this->obj->DB_select_once("company_rating","`id`=$rating");
			}
			if ($discount['service_discount']){
				$price=$packinfo['service_price']*$discount['service_discount']*0.01;
			}else{
				$price=$packinfo['service_price'];
			}
		}
		echo $price;
	}
    function pay_action(){
	
		if($_POST){
			
			 $M=$this->MODEL('compay');
			 $return  =  $M->buyPackOrder($_POST);
			
			 if($return['order']['order_id'] && $return['order']['id']){
			
				
				echo json_encode(array('error'=>0,'orderid'=>$return['order']['order_id'],'id'=>$return['order']['id']));
					
			 }else{
			
				 
				 echo json_encode(array('error'=>1,'msg'=>iconv('gbk','utf-8',$return['error'])));
			 }
		}else{
			echo json_encode(array('error'=>1,'msg'=>iconv('gbk','utf-8','�������������ԣ�')));
		
		}
	
	}
    
}
?>