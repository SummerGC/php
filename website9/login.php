<?php include("server.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册和登录系统</title>
	<link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<header>
			<h2 class="text-muted text-center">登陆</h2>
		</header>
		<?php include("errors.php") ?>
		<form action="login.php" method="post">
			<div class="form-group">
				<label>账号</label>
				<input type="text" name="username" class="form-control">
			</div>

			<div class="form-group">
				<label>密码</label>
				<input type="password" name="password" class="form-control">
			</div>
			<input type="submit" class="btn btn-success btn-block" name="login_user" value="登陆">
			<a href="register.php" class="btn btn-success btn-block">没有账号,请注册</a>
		</form>
	</div>
</body>
</html>