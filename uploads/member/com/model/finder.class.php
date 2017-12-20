<?php
/* *
* $Author ��PHPYUN�����Ŷ�
*
* ����: http://www.phpyun.com
*
* ��Ȩ���� 2009-2017 ��Ǩ�γ���Ϣ�������޹�˾������������Ȩ����
*
* ����������δ����Ȩǰ���£�����������ҵ��Ӫ�����ο����Լ��κ���ʽ���ٴη�����
*/
class finder_controller extends company{
	function index_action(){
		include(CONFIG_PATH."db.data.php");
		unset($arr_data['sex'][3]);
		$this->yunset("arr_data",$arr_data);
		$finder=$this->obj->DB_select_all("finder","`uid`='".$this->uid."' order  by `id` desc");
		if($finder&&is_array($finder)){
			include PLUS_PATH."/user.cache.php";
			include PLUS_PATH."/job.cache.php";
			include PLUS_PATH."/industry.cache.php";
			include PLUS_PATH."/city.cache.php";

			$uptime=array('1'=>'����',"3"=>'�������','7'=>'�������','30'=>'���һ����',"90"=>'���������');
			$adtime=array('1'=>'һ����',"3"=>'������','7'=>'������',"15"=>'ʮ������','30'=>'һ������',"60"=>'��������');


			foreach($finder as $key=>$val){
				$arr=$findername=array();
				$para=@explode('##',$val['para']);
				$arr['m']='resume';
				$arr['c']='list';
				foreach($para as $val){
					$parav=@explode('=',$val);
					$arr[$parav[0]]=$parav[1];
				}
				if($arr['jobids']){
					$jobids=@explode(',',$arr['jobids']);
					foreach($jobids as $val){
						$jobname[]=$job_name[$val];
					}
					$findername[]=@implode('��',$jobname);
				} 
				if($arr['keyword']){$findername[]=$arr['keyword'];}
				if($arr['hy']){$findername[]=$industry_name[$arr['hy']];}
				if($arr['job1']){$findername[]=$job_name[$arr['job1']];}
				if($arr['job1_son']){$findername[]=$job_name[$arr['job1_son']];}
				if($arr['job_post']){$findername[]=$job_name[$arr['job_post']];}
				if($arr['adtime']){$findername[]=$adtime[$arr['adtime']];}
				if($arr['edu']){$findername[]=$userclass_name[$arr['edu']];}
				if($arr['word']){$findername[]=$userclass_name[$arr['word']];}
				if($arr['uptime']){$findername[]=$uptime[$arr['uptime']];}
				
				if($arr['minsalary']&&$arr['maxsalary']){
					$findername[]='��'.$arr['minsalary'].'-'.$arr['maxsalary'];
				}elseif($arr['maxsalary']){
					$findername[]='��'.$arr['maxsalary'].'����';
				}elseif ($arr['minsalary']){
					$findername[]='��'.$arr['minsalary'].'����';
				}
				if($arr['type']){$findername[]=$userclass_name[$arr['type']];}
				if($arr['provinceid']){$findername[]=$city_name[$arr['provinceid']];}
				if($arr['cityid']){$findername[]=$city_name[$arr['cityid']];}
				if($arr['three_cityid']){$findername[]=$city_name[$arr['three_cityid']];}
				if($arr['exp']){$findername[]=$userclass_name[$arr['exp']];}
				if($arr['sex']){$findername[]=$arr_data['sex'][$arr['sex']];}
				
				$finder[$key]['findername']=@implode('+',array_filter($findername));
				$_GET=$arr;
				$finder[$key]['url']=searchListRewrite($arr,$this->config);
			}
		}
		if($this->config['com_finder']>count($finder)){
			$this->yunset("addnew",'1');
		}

		$this->yunset('config_com_finder_num',$this->config['com_finder']);

		$this->yunset("js_def",5);
		$this->public_action();
		$this->yunset("finder",$finder);
		$this->com_tpl('finder');
	}
	function edit_action(){
		include(CONFIG_PATH."db.data.php");
		unset($arr_data['sex'][3]);		
		$this->yunset("arr_data",$arr_data);
        $result=$this->MODEL('cache')->GetCache(array('hy','job','user','city'));
        $this->yunset($result);

		if($_GET['id']){
			$info=$this->obj->DB_select_once("finder","`uid`='".$this->uid."' and `id`='".(int)$_GET['id']."'");
			
			if($info['para']){
				$para=@explode('##',$info['para']);
				foreach($para as $val){
					$arr=@explode('=',$val);
					$parav[$arr['0']]=$arr['1'];
				}
				if($parav['jobids']){
					$jobids=@explode(',',$parav['jobids']);
					foreach($jobids as $val){
						$jobname[]=$result['job_name'][$val];
					}
					$parav['jobname']=@implode(',',$jobname);
				} 
				$this->yunset("parav",$parav);
			} 
			$this->yunset("info",$info); 
			$this->public_action();

		}
		$uptime=array('1'=>'����',"3"=>'�������','7'=>'�������','30'=>'���һ����',"90"=>'���������');
		$adtime=array('1'=>'һ����',"3"=>'������','7'=>'������',"15"=>'ʮ������','30'=>'һ������',"60"=>'��������');

		$this->yunset("adtime",$adtime);
		$this->yunset("uptime",$uptime);
		$this->public_action();
		$this->yunset("js_def",5);
		$this->com_tpl('finderinfo');
	}
	function save_action()
	{
		if($_POST['submitBtn'])
		{
			$num=$this->obj->DB_select_num('finder',"`uid`='".$this->uid."'");
			if($_POST['id']==""){
				if($num>=$this->config['com_finder'])
				{
					$this->ACT_layer_msg("�Ѵﵽ���������������",8,"index.php?c=finder");
				}
				$msg='����';
			}else{
				$msg='����';
			}
			
			$post=$this->post_trim($_POST);
			$id=(int)$post['id'];
			$cycle=(int)$post['cycle'];
			$job_num=(int)$post['job_num'];
			$name=$post['name'];
 			unset($post['id']);
			unset($post['submitBtn']);
			unset($post['name']);
			foreach($post as $key=>$val){
				if(trim($val)){
					$para[]=$key."=".$val;
				}
			}
			$paras=@implode('##',$para);
			if($paras=="")
			{
				$this->ACT_layer_msg("���������ݲ���Ϊ�ձ�������ѡһ��!",8,$_SERVER['HTTP_REFERER']);
			}
		
			$result=$this->insertfinder($paras,$id,$name,1);
			$result?$this->ACT_layer_msg("��Ϣ".$msg."�ɹ���",9,"index.php?c=finder"):$this->ACT_layer_msg("��Ϣ".$msg."ʧ�ܣ�",8,"index.php?c=finder");
		}
	}
	function del_action(){
		if($_GET['id']){
			$this->obj->member_log("ɾ��������");
			$res=$this->obj->DB_delete_all("finder","`id`='".(int)$_GET['id']."' and `uid`='".$this->uid."'");
			$res?$this->layer_msg("ɾ���ɹ���",9,0):$this->layer_msg("ɾ��ʧ�ܣ�",8,0);
		}
	}
}
?>