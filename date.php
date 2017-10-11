<?php 
	//echo date(); 至少给一个参数
	echo date('d'); //day
	echo date('m');//month
	echo date('Y');// Year 2017 year 17
	echo date('l'); //周几

	echo date('Y/m/d'); //年月日
	echo date('d-m-Y');

	//时分秒
	echo date('h'); //shi
	echo date('i');//fen
	echo date('s'); //miao
	echo date('a'); //AM PM
	//设置时区
	date_default_timezone_set("Asia/Shanghai");
	echo "<br>";
	echo date('h:i:sa');

	//mktime 设置时间
	$timestamp = mktime(07,00,12,1,24,1988);
	echo $timestamp; //打印结果为时间戳
	//完整的时间
	echo date("m/d/Y h:i:sa",$timestamp); //转化为完整的时间

	//字符串转时间
	$timestamp2 =strtotime("7:00pm March 22 2016");
	echo "<hr>";
	echo date("m/d/Y h:i:sa",$timestamp2);
	$timestamp3 = strtotime("tomorrow");
	echo "<hr>";
	echo date("m/d/Y h:i:sa",$timestamp3);
	echo "<hr>";
	$timestamp4 = strtotime("next sunday");
	echo date("m/d/Y h:i:sa",$timestamp4);
	echo "<hr>";
	$timestamp5 = strtotime("+2 Days");
	echo date("m/d/Y h:i:sa",$timestamp5);
	echo "<hr>";






 ?>