<?php 
 $loggedIn = true;
 $values =['a','s','d','g'];
//  if ($loggedIn) {
//  	echo "U r logged In";
//  }else{
//  	echo "U r NOT Logged In";
//  }
// #三目运算副
//  echo ($loggedIn) ? "U r Logged In" :"U r NOT Logged In";

//  #简写得到true或者false
//  $isRegistered = ($loggedIn == true)? true : false;
//  echo $isRegistered;

//  #三目嵌套
//  $age =18;
//  $score =80;
//  echo "your score is".($score > 70 ?($age < 20 ? "优秀":"一般"):($age <20 ? "一般":"差等"));

 ?>
<!-- html+php 嵌套语法糖 -->
<div>
	<?php 
		if($loggedIn) {?>
		<p>welconme to beijing</p>
		<?php  }else {?>
		<p>welcome to zhengzhou!</p>
		<?php } ?>
</div>

<!-- 优化 -->
<div>
	<?php 
		if($loggedIn) :?>
		<p>welconme to beijing</p>
		<?php else :?>
		<p>welcome to zhengzhou!</p>
		<?php endif; ?>
</div>
<!-- 遍历数组  foreach -->
<div>
	<?php  foreach($values as $val): ?>
		<?php  echo $val ?>
	<?php endforeach; ?>
</div>
<!-- 遍历数组 for -->
<div>
	<?php for($i=0;$i<count($values);$i++): ?>
		<?php echo $values[$i]; ?>
	<?php endfor; ?>
</div>



