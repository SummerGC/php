<?php 


function DeleteData($sql){
	# 连接到数据库
	$mysqli = new mysqli("localhost","root","","people");
	#测试是否连接成功
	if ($mysqli->connect_errno) {
		die($mysqli->connect_error); //0成功 非0失败
	}
	#准备sql语句
	$mysqli->query("set names utf8");
	#执行sql语句
	$result = $mysqli->query($sql);
	if($result) {
		echo "删除成功!";

	}else {
		echo "删除失败!";
	}
	//断开连接
	$mysqli->close();
	}

	$sql = "DELETE FROM customers WHERE id= 3";
	DeleteData($sql);
 ?>