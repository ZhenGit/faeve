<?php
	$link=mysql_connect("localhost","root","");
	if (!$link){
		echo "没连接上！";
	}
	else {
		$con=mysql_select_db("mysql");
		if (! $con){
			echo "没连接到test";
		}
	}
?>