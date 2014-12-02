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
		echo "请输入用户名或密码！";
		exit();
	} 
	else {
		$sql="select * from usermessage where username='$userName'";
		$result= mysql_query($sql);
		if(! $result){
			echo "该用户不存在！";
			exit();
		}
		else {
			$row=mysql_fetch_array($result);
			echo  $row["password"];
			if ($passWord != $row["password"])
			{
				echo "密码错误！";
			}
			else  {
				echo "登陆成功！";
				exit();
					
				}
				}
			
	}
?>