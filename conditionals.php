<?php 
	#if & switch
	//关系运算符
	/* > < == != >= <= === !=== */
	$num = 2;
	if($num <= 4) {
		echo "num的值一定小于等于四";
	}

	#if else
	if($num >= 4) {
		echo "true";
	}else{
		echo "false";
	}
	#nesting if
	if($num >= 4){
		if($num <=10) {
			echo "num一定会是在4-10之间";
		}
		else{
			echo "num一定大于10";
		}
	}else{
		echo "num一定<4";
	}


	#逻辑运算符
	/*
	逻辑与 &&   AND
	逻辑或 ||  OR
	逻辑非 !  
	逻辑异或 XOR

	*/
	$num = 3;
	if($num > 3 AND $num < 10) {
		echo "num大于3 小于10";
	}  //有假即假
	/*
	 AND:一假即假
	 OR:一真即真
	 XOR:只有一个为真 结果才为真
	*/

	 #switch
	 $favColor = "green";
	 switch ($favColor) {
	 	case 'red':
	 		echo "angry";
	 		break;
	 	case 'blue':
	 		echo "anjing";
	 		break;
	 	case 'green':
	 		echo "dddd";
	 		break;
	 	default:
	 		echo "gun";
	 		break;
	 }



 ?>