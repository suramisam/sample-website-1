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
    <link rel="stylesheet" href="style.css"/>
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
    <div class="container">
    <div class="row">
   		<?php if(isset($_REQUEST['error'])){ ?>
   		<div class="col-lg-12">
   			<span class="alert alert-danger" style="display: block;"><?php echo $_REQUEST['error']; ?></span>
   		</div>
	   	<?php } ?>
      <div class="hamburger-menu">
          <div class="line line-1"></div>
          <div class="line line-2"></div>
          <div class="line line-3"></div>
          <span>Close</span>
      </div>    
      <section class="sidebar">
          <ul class="menu">
            <li class="menu-item">
              <a href="home.html" class="menu-link" data-content="Home">Home</a>
            </li>
            <li class="menu-item">
              <a href="about us.html" class="menu-link" data-content="About Us">About Us</a>
            </li>
            <li class="menu-item">
              <a href="contact.html" class="menu-link" data-content="Contact">Contact</a>
            </li>
            <li class="menu-item">
              <a href="registration.html" class="menu-link" data-content="Registration">Registration</a>
            </li>
            <li class="menu-item">
              <a href="datatable.html" class="menu-link" data-content="Data Table">Data Table</a>
            </li>
          </ul>
          <div class="social-media">
              <a href="#"><i class="fab fa-facebook-f"></i></a> 
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>  
          </div>   
      </section>
      <div class="loginbox">
        <img src="images/user3.ico" class="avatar">
        <h1>LOGIN HERE</h1>
          <form action="login.php" method="post">
            <p>Username</p>
              <input type="text" name="" placeholder="Enter Username">
            <p>Password</p>
              <input type="password" name="" placeholder="Enter Password">
              <input type="submit" name="" value="Login">
              <a href="#">Lost your password?</a><br>
              <a href="#">Don't have an account?</a>
          </form>
      </div>    
    </div> 
  <script src="script.js"></script>    
</body>
</html>