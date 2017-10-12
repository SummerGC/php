<div class="container">
	<?php 
	// echo $_GET["sbqname"];
	//检查sbqname是否被获取到
	if(isset($_GET["sbqname"]) &&isset($_GET["sbqemail"])){
		$name = $_GET["sbqname"];
		$email = $_GET["sbqemail"];
		echo $name.":".$email;
		print_r($_GET);
	}




		// if(isset($_POST["sbqname"]) &&isset($_POST["sbqemail"])){
		// $name = $_POST["sbqname"];
		// $email = $_POST["sbqemail"];
		// echo $name.":".$email;
		// print_r($_POST);
		// }

		// if(isset($_REQUEST["sbqname"]) &&isset($_REQUEST["sbqemail"])){
		// $name = $_REQUEST["sbqname"];
		// $email = $_REQUEST["sbqemail"];
		// echo $name.":".$email;
		// print_r($_REQUEST);
		// }

	 //查询ur地址后面的参数
		// echo $_SERVER['QUERY_STRING'];
	 ?>

</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>get & post</title>
	<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="get_post.php" method="get">
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" name="sbqname">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="sbqemail">
			</div>

			<input class="btn btn-primary btn-block" type="submit" value="提交">
		</form>
		<ul class="list-group">
		<li class="list-group-item">
			<a href="<?php  echo $_SERVER['PHP_SELF']."?name=123"; ?>" class="btn btn-success btn-block">123</a>
		</li>
		<li class="list-group-item">
			<a href="<?php  echo $_SERVER['PHP_SELF']."?name=456"; ?>" class="btn btn-info btn-block">456</a>
		</li>
		</ul>
		<h1>
			<?php if(isset($_GET['name'])){echo $_GET['name'];} ?>
		</h1>
	</div>
	
</body>
</html>