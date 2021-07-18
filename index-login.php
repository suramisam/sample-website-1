<?php
session_start();
if(isset($_SESSION['user_data'])){
	if($_SESSION['user_data']['usertype']==1){
		header("Location:teacher_home.php");
	}
	else{
		header("Location:student_home.php");	
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form Design</title>
    <link rel="stylesheet" href="index-login-style.css"/>
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <link
            href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Josefin+Slab:ital,wght@0,400;0,600;1,300;1,400;1,600&family=Muli:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
            rel="stylesheet"
    />
</head>
<body>
<div class="loginbox">
    <img src="images/user3.ico" class="avatar">
    <h1>LOGIN HERE</h1>
    <form action="login.php" method="post">
        <p>Username</p>
        <input type="text" name="email" placeholder="Enter Email Address" required autofocus>
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter Password" required>
        <input type="submit" " value="Login">
        <a href="#">Lost your password?</a><br>
        <a href="#">Don't have an account?</a>
    </form>

</div>
</body>
</html>