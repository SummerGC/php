<?php 
	//loops: 循环 --让项目制作的更高效 
	#根据某个条件,重复执行某段代码
	/*
	for
	while
	do while
	for each

	*/
	#for循环
	#@params init,condition,inc
	for($i = 0;	$i < 10; $i++) {
		echo ($i+1)."<br>";
	}
	#while循环
	#@params condition
	$i=0;
	while ($i<10)
	 {
	 	echo $i."<br>";
	 	$i++;
	}
	/* for循环在知道循环次数的时候用*/

	#do while
	$i=0;
	do{
		echo $i."<br>";
		$i++;
	}
	while($i<10);

	#foreach 循环的 下标数组
	$people = array("a","b","c","d");
	foreach($people as $person) {
		echo $person;
		echo "<br>";
	}
	#foreach 循环 关联数组
	$people = array(
		"a"=>"123",
		"b"=>"456",
		"c"=>"789"
		);
	foreach ($people as $key => $value) {
		echo $key.":".$value;
		echo "<br>";
	}
	/*
	打印1-100之间7的倍数
	打印1-100之间个位是7的数
	..........十位为7
	个位十位都不是7,且不不是7的倍数


	打印99乘法表;
	*/
 ?>