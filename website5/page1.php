<?php 
	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		setcookie('username',$username,time()+3600);
		header("location: page2.php");
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<input type="text" name="username" placeholder="name">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>