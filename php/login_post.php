<?php
include('Connections.php');

$err_s = 0;
if(isset($_POST['username']) && isset($_POST['password']))
{       
        $username = (strtolower($_POST['username']));


        $password = (strtolower($_POST['password']));

        
if(empty($username)){

        $username_err = '<p id="40">Please insert your username</p>';
        $err_s = 1 ;
        
}
if(empty($password)){

        $password_err = '<p id="40">Please insert your password</p>';
        $err_s = 1 ;
}


//check if username or password is correct 
   if($err_s == 0){
        $sql= "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
        $result = mysqli_query($conn,$sql);
        $check = mysqli_fetch_array($result);
        if(isset($check)){
        header('location:website/home.php');/////////////// if success redirct me to home page////////////////////////////////////////
        }else{
                echo '<p id="40">your username or password incorrect try again</p>';
        }
}
}