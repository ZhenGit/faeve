<?php
	$link=mysql_connect("localhost","root","");
	if (!$link){
		echo "û�����ϣ�";
	}
	else {
		$con=mysql_select_db("mysql");
		if (! $con){
			echo "û���ӵ�test";
		}
	}
?>