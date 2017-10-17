<?php 


function selectData($sql){
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
	// var_dump($result);

	if($result->num_rows) {
		$data = $result->fetch_all(MYSQLI_ASSOC);
		echo json_encode($data); //转化为json数据 将php转化为json
	}
	//断开连接
	$mysqli->close();
	}

	$sql = "SELECT * FROM customers ";
	selectData($sql);
 ?>