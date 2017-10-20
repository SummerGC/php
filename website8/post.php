<?php 
	require("config/config.php");
	require ("config/db.php");

	#实现删除博客
	if(isset($_POST['delete'])) {
		// echo "123";
		#sql语句
		$delete_id = mysqli_real_escape_string($conn,$_POST['delete_id']);
		$query = "DELETE FROM posts WHERE id={$delete_id}";
		if(mysqli_query($conn,$query)) {
			header("location:index.php");
		}else {
			echo "error".mysqli_error($conn);
		}
	}


	//从数据库里拿到对应的数据显示其详情
	mysqli_query($conn,"set names utf8");
	// $id = $_GET('id');//触发跳转页面以后拿值
	$id = mysqli_real_escape_string($conn,$_GET['id']);
	$query ="SELECT * FROM posts WHERE id='$id'";
	$result = mysqli_query($conn,$query);
	$post = mysqli_fetch_assoc($result);
	// var_dump($post);
	#释放数据
	mysqli_free_result($result);
	#断开连接
	mysqli_close($conn);
 ?>
 <?php include("inc/header.php"); ?>
 	<div class="container">
 		<h1>博客详情</h1>
 		<div class="well">
 			<a href="<?php echo ROOT_URL ?>" class="btn btn-primary">返回主页</a>
 			<h3><?php echo $post['title']; ?></h3>
 			<p>
 				<strong>ID:</strong>
 				<?php echo $post['id']; ?>
 			</p>
 			<p>
 				<strong>作者:</strong>
 				<?php echo $post['author']; ?>
 			</p>
 			<p>
 				<strong>时间:</strong>
 				<?php echo $post['created_at']; ?>
 			</p>
 			<p>
 				<?php echo $post['body']; ?>
 			</p>
 			<br>
 			<form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 				<input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
 				<input class="btn btn-danger" type="submit" name="delete" value="删除">
 			</form>
 			<a class="btn btn-info" href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id'];?>">编辑</a>		
 		</div>
 	</div>
<?php include("inc/footer.php"); ?>