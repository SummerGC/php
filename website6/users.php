<?php 
	#链接数据库
 $conn = mysqli_connect("localhost","root","","ajaxtest");//表名
 $query =  "SELECT * FROM users";//数据库名密码, `

 $result = mysqli_query($conn,$query);
 $users = mysqli_fetch_all($result,MYSQLI_ASSOC);
 // print_r($users);
 echo json_encode($users); //返回json给前台


 ?>