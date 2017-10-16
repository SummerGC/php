<?php 

	$user =["name"=>"Tom",
			"email"=>"henry@gmail.com",
			"age"=>30
			];
	//将数组转化为字节流
	$users = serialize($user);
	setcookie('users',$users,time()+86400);
	//重新解码
	$newusers = unserialize($_COOKIE['users']);
	print_r($newusers);



 ?>