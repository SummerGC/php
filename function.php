<?php 
	#函数 具有某一个功能的代码块
	/*
    	Camel Case - myFunction()
    	Lower Case - my_function()
    	pascal Case - MyFunction()
	*/

    //定义函数
    	function simpleFunction(){
    		echo "hello world !";
    	}
    	#调用函数
    	simpleFunction(); //php中函数的名字不分大小写
    	SIMPLEFUNCTION();

    	#有参数无返回值
    	function buy($money="2块钱") {
    		echo $money."给了,没买东西";
    	}
    	buy("十块钱");

    	#多参 有返回值
    	function sumValue($num1,$num2) {
    		$sum = $num1 + $num2;
    		return $sum;
    	}
    	$result=sumValue(5,6);
    	echo $result;

    	#无参数 有返回值
    	function buyDrink() {
    		return "饭后的饮料";
    	}
    	echo buyDrink();

    	#函数传引用
    	$myNum = 10;
    	function addFive(&$num){
    		echo $num += 5;
    	}
    	addFive($myNum); //15
 		echo $myNum;  //拿到了myNum的引用,改变了内存中的数值 所以是15;







 ?>