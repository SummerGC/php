<?php 
# string functin: 处理字符串的函数
	# 返回字符串的一部分 substr
	$output = "HelloWorld";
	// $output =substr($output, 1);
	// echo $output;
	# 返回给定的字符串 string 的长度  strlen
	// echo strlen($output);
	# 查找字符串首次出现的位置 strpos
	// $output = strpos($output, "o");
	// echo $output;
	# 计算指定字符串在目标字符串中最后一次出现的位置 strrpos
	// $output = strrpos($output, "l");
	// echo $output;
	# 去除首尾空格trim
	// $output = "  helloworld  ";
	// echo strlen($output);
	// echo trim($output);
	
	# 将字符串转为大写 strtoupper
	$str="helloworld";
	// $newstr=strtoupper($str);
	// echo $newstr;
	
	# 将字符串转为小写 strtolower
	// $newstr=strtolower($str);
	// echo $newstr;
	
	# 将每个单词首字母大写 ucwords
	// $ucword = ucwords($str);
	// echo $ucword;
	# 替换所有匹配的内容  str_replace
	// $text ="hellow world";
	// $output1 = str_replace("world","everyone", $text);
	// echo $output1;
	
	# 判断是否是字符串  is_string
	// $val ="22";
	// $output2 = is_string($val);
	// echo $output2; //是字符串打印为1 不是什么也不打印
	# 过滤掉数组中非字符串的值
	$values = array(true,false,"hello",32,"23",23.4,"32.4",'',0,'0');
	foreach ($values as $value) {
		if (is_string($value)){
			echo $value ."is a string <br>";
		}
	}
	# 压缩字符串  gzcompress
	// $string = "一大堆文字";
	// $compressed = gzcompress($string);
	// echo $compressed;
	# 解压字符串
	// $uncompressed = gzuncompress($compressed);
	// echo $uncompressed;








 ?>