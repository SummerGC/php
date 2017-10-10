<?php 
//存储一堆数据的集合
/*
	下标数组:下标以0开始
	关联数组:关联以第一个名字开头

*/

	#下标数组
	$people = array ("kevin","Bob","Tom");
	echo $people[1];
	// echo $people[3]; //数组越界
	
	$ids =[1,2,8,23,5,3];
	echo $ids[2];
	$cars = ["BMW","BYD","Benchi"];
	$cars[3]="audi";
	echo count($cars);
	print_r($cars);
	//万能打印
	var_dump($cars);

	#关联数组
	$people = array("henry"=>35,"Bukcy"=>25,"Emily"=>20);
	echo $people["Emily"];


	$ids = [22=>"Henry",25=>"Bob"];
	echo $ids[22];

	$ids[35] ="werry";
	$ids[]= "john";
	echo $ids[35];
	print_r($ids);

	#多维数组
	$cars = array(
		array("Honda",20,10),
		array("dz",20,20),
		array("Ford",15,10)
		);
	echo $cars[2][1];
 









 ?>