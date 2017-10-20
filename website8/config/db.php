<?php 
	#连接数据库
	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	if (mysqli_connect_errno()) {
		echo "数据库链接失败".mysqli_connect_errno();
	}




 ?>