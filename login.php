<?php
	require_once 'conn.php';
/* 	$userName="";
	$passWord=""; */
	
	//echo "all :".print_r($_POST);
	$userName=$_POST['username'];
	$passWord=$_POST['password']; 
	//echo  $userName;
	
	if(($userName==NULL) || ($passWord==NULL))
	{
		echo "�������û��������룡";
		exit();
	} 
	else {
		$sql="select * from usermessage where username='$userName'";
		$result= mysql_query($sql);
		if(! $result){
			echo "���û������ڣ�";
			exit();
		}
		else {
			$row=mysql_fetch_array($result);
			echo  $row["password"];
			if ($passWord != $row["password"])
			{
				echo "�������";
			}
			else  {
				echo "��½�ɹ���";
				exit();
					
				}
				}
			
	}
?>