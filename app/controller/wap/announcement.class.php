<?php
/*
* $Author ��PHPYUN�����Ŷ�
*
* ����: http://www.phpyun.com
*
* ��Ȩ���� 2009-2017 ��Ǩ�γ���Ϣ�������޹�˾������������Ȩ����
*
* ����������δ����Ȩǰ���£�����������ҵ��Ӫ�����ο����Լ��κ���ʽ���ٴη�����
 */
class announcement_controller extends common{
	function index_action(){
		$id=(int)$_GET['id'];
		$M=$this->MODEL('announcement');
		$row=$M->GetAnnouncementOne(array("id"=>$id));
		$row['content']=str_replace(array("&nbsp;","&"),array(" ","&amp;"),$row['content']);
		$this->yunset("row",$row);
		$this->yunset("title","��վ����"); 
		$this->yunset("headertitle","��վ����");
		$this->yuntpl(array('wap/announcements'));
	}	
}
?>