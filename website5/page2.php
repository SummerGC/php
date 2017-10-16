<?php 
	setcookie('username',"Franch",time()+86400);



	if(count($_COOKIE)>0) {
		echo "一共有".count($_COOKIE)."COOKIE";
	}else{
		"没有";
	}


	if(isset($_COOKIE['username'])) {
		echo "你的用户名是:".$_COOKIE['username'];

	}else{
		echo "用户名不存在";
	}





 ?>