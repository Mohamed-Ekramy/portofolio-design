-<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sign.css">
    <style>
       h1{
    font-family: login;
}
@font-face{
    font-family: login;
    src: url(Milky\ Honey.otf);
}
.btn{
    background-color:rgb(10, 126, 242); 
    color:white;
    border-radius:18px;
    width:20%;
    height:10%;
}
.btn:hover{
    background-color:rgb(255, 255, 255); 
    color:black;
    transform:scale(1.1);
    transition:0.9s;
}
    </style>
    <title>login</title>
</head>
<body>
    <?php include('php/login_post.php')?>
    <form action="" method="post">
    <img class="wallpaper" src="sign.jpeg">
    <div class="main">
        <h1 class="h1">login</h1>
        <?php 
			if(isset($username_err))
			{
				echo $username_err;
			}
		?>
		<br>
        <div class="textbox">
           
            <input type="text" placeholder="username" name="username">
            <?php 
			if(isset($password_err))
			{
				echo $password_err;
			}
		?>
		<br>
           
        <div class="textbox">
            
            <input type="password" placeholder="password" name="password">
        </div>
        
    </div>
    <input type="submit" class="btn" value="login" name="submit">
    
</div>
</form>
</body>
</html>