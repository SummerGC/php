<div class="container">
	<?php 
		//检查是否存在data的name属性
		if(filter_has_var(INPUT_POST,"data")) {
			// echo "data存在";
			$email =  $_POST["data"]; //取到值
			// echo $email;
			// 过滤掉不合法的字符
			$email = filter_var($email,FILTER_SANITIZE_EMAIL);
			echo $email;
			//验证是否是一个有效的邮箱
			if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
				echo "邮箱合法";
			}
			else{
				echo "不合法";
			}
		} else{
			echo "data不存在";
		}

			/*
		审核
		FILTER_SANITIZE_EMAIL
		FILTER_SANITIZE_ENCODED
		FILTER_SANITIZE_MAGIC_QUOTES
		FILTER_SANITIZE_NUMBER_FLOAT
		FILTER_SANITIZE_NUMBER_INT
		FILTER_SANITIZE_SPECIAL_CHARS
		FILTER_SANITIZE_FULL_SPECIAL_CHARS
		FILTER_SANITIZE_STRING
		FILTER_SANITIZE_STRIPPED
		FILTER_SANITIZE_URL
		FILTER_UNSAFE_RAW
		
		验证
		FILTER_VALIDATE_BOOLEAN
		FILTER_VALIDATE_EMAIL
		FILTER_VALIDATE_FLOAT
		FILTER_VALIDATE_INT
		FILTER_VALIDATE_IP
		FILTER_VALIDATE_MAC
		FILTER_VALIDATE_REGEXP
		FILTER_VALIDATE_URL
	*/




		//验证一个变量中的值,是否是一个合法的整型
		$var =23;
		// $var = '321'; //也是合法的
		if(filter_var($var,FILTER_VALIDATE_INT)) {
			echo "是整型";
		} else{
			echo "不是整型";
		}

		//获取字符串中所有的数值
		$a='s6d54fsf1321sdf68ds4f231f';
		$a = filter_var($a,FILTER_SANITIZE_NUMBER_INT);
		echo $a;

		//特殊字符
		$c = "<script>alert(1)</script>";
		// echo $c;
		$d = filter_var($c,FILTER_SANITIZE_SPECIAL_CHARS);
		echo $d;

		//验证数组中的每个元素
		// $filters = array(
		// 	"data" => FILTER_VALIDATE_EMAIL,
		// 	"data2" => array(
		// 		'filter' =>FILTER_VALIDATE_INT,
		// 		'options' => array(
		// 			'min_range' =>1,
		// 			'max_range' =>150
		// 			)
		// 		)
		// 	);
		// print_r(filter_input_array(INPUT_POST,$filters));

		//验证表单中input的内容 第一个input一定是email 
		//第二个一定是数值 数值不能小于1 不能大于150
		if(filter_input(INPUT_POST,"data",FILTER_VALIDATE_EMAIL)) {
			echo "是合法的邮箱";
		}else {
			echo "不是合法的邮箱";
		}
		//获取值 $number = $_POST["data2"];
		if(filter_input(INPUT_POST,"data2",FILTER_VALIDATE_INT)){
			$num = $_POST["data2"];
			if(1<$num&&$num<150)
				echo "数字合法";
			}else {
				echo "数字不合法";
			}


		$arr = array(
			"name"=>"Tom",
			"age"=>"30",
			"email"=>"henry@qq.com"
			);
		$filters = array(
			"name" =>array(
				"filter"=>FILTER_CALLBACK,
				"options"=>"ucwords"
				),
			"age" =>array(
				"filter"=>FILTER_VALIDATE_INT,
				"options"=>array(
					"min_range"=>1,
					"max_range"=>150
					)
				),
			"email" =>FILTER_VALIDATE_EMAIL
			);
		print_r(filter_var_array($arr,$filters));
	 ?>

</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<input type="text" name="data" class="form-control">
			<input type="text" name="data2" class="form-control">
			<br>
			<button class="btn btn-primary btn-block">提交</button>
		</form>
	</div>
</body>
</html>