<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN</title>
	<link rel="stylesheet" href="project.css">
</head>
<body>
	
<div class="head" class="ptb--130">
	<img src="uniqlo.png" class="logoimg">

</div>

<div class="container" style=" background: rgba(0, 0, 0, 0) url(images/bg/5.jpg) no-repeat scroll center center / cover;">
<div class="login5">
	<ul>
<li >Login</li>
<li >Register</li>
</ul>
</div>



	
	<div class="row tab-content justify-content-center">

<div id="login" role="tabpanel" class="active">
 <?php include('inc/login_post.php')?>

	<form class="login" method="post">
		<?php 
			if(isset($username_err))
			{
				echo $username_err;
			}
		?>
		<br>
		<input type="text" placeholder="User Name*" class="user" name="username"><br>
		<?php 
			if(isset($password_err))
			{
				echo $password_err;
			}
		?>
		<br>
		<input type="password" placeholder="Password*" class="user" name="password">
		<br>
	<div>
		<input type="checkbox">
		<span class="remember">Remember Me</span>
		<span class="forget"><a href="#">Forget Pasword?</a></span>
	</div>
	<br>
	<div class="loginbutton">
		<input type="submit" value="Login" name="submit">
	</div>
	</form>

</div>
	<!--
  <div id="register" role="tabpanel" class="tab-pane">

	<form class="login" method="post">
		<input type="text" placeholder="Name*" class="user"><br>
		<input type="email" placeholder="Email*" class="user"><br>
		<input type="password" placeholder="Password*" class="user"><br>
	</form>
	<div class="loginbutton">
		<a href="#" class="button">Register</a>
	</div>




   </div>
-->
</div>
</div>
	







</body>
</html>