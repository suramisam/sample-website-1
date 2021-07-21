<?php
session_start();
include 'connect.php';
if(isset($_SESSION['user_data'])){
	if($_SESSION['user_data']['usertypes']!=1){
		header("Location:student_home.php");
	}
	if(!isset($_REQUEST['id'])){
		header("Location:teacher_home.php?error=Please Enter ID");
	} 
	$qr=mysqli_query($con,"select * from users where id='".$_REQUEST['id']."'");
	if(mysqli_num_rows($qr)==0){
		header("Location:teacher_home.php?error=Student ID Not Found");	
	}
	$result_qr=mysqli_query($con,"select * from results where student_id='".$_REQUEST['id']."'");
	if(mysqli_num_rows($result_qr)>0){
		header("Location:teacher_home.php?error=Student Result Already Exist");	
	}
	$subjects=array();
	$subject_qr=mysqli_query($con,"select * from subjects");
	while($row=mysqli_fetch_assoc($subject_qr)){
		array_push($subjects,$row);
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="add_results-style.css"/>
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
        <div class="hamburger-menu">
            <div class="line line-1"></div>
            <div class="line line-2"></div>
            <div class="line line-3"></div>
            <span>Close</span>
        </div>    
        <section class="sidebar">
            <ul class="menu">
              <li class="menu-item">
                <a href="home.php" class="menu-link" data-content="Home">Home</a>
              </li>
              <li class="menu-item">
                <a href="about us.php" class="menu-link" data-content="About Us">About Us</a>
              </li>
              <li class="menu-item">
                <a href="contact.php" class="menu-link" data-content="Contact">Contact</a>
              </li>
              <li class="menu-item">
                <a href="registration.php" class="menu-link" data-content="Registration">Registration</a>
              </li>
              <li class="menu-item">
                <a href="registration-form.php" class="menu-link" data-content="Data Table">Data Table</a>
              </li>
            </ul>
            <div class="social-media">
                <a href="#"><i class="fab fa-facebook-f"></i></a> 
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>  
            </div>   
        </section>
        
        <section class="add_result">
            <div class="add_result-wrapper">
				<nav >
					<ul>
						<li><a class="tab" href="teacher_home.php"><i class="fa fa-user"></i>Add Student</a></li>
					</ul>		
              	</nav >
              <div class="add_result-left"></div>
              <div class="add_result-right">
                <h1 class="add_result-heading">Add Results</h1>
                <form action="add_result_post.php" method="post" >
                <input type="hidden" name="student_id" value="<?php echo $_REQUEST['id']; ?>">
                <?php foreach($subjects as $subject)  { ?>
                  <div class="input-group">
                    <label class="input-label"><?php echo $subject['subject_name']; ?></label>
                    <input type="hidden" name="id[]" value="<?php echo $subject['id']; ?>">
                    <input type="text" name="marks[]" class="field" placeholder="Add Marks"> 	  
                  </div>
                <?php } ?>
                  
                  	<input type="submit" class="submit-btn" value="Add Result" />
                </form>
              </div>
            </div>
        </section>
        <footer class="footer">
          <div class="footer-content">
            <p class="copyright">
              Copyright &copy; 2020, CodeAndCreate - All Rights Reserved
            </p>
            <div class="social-list">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
      </footer>
    </div>
    <script src="script.js"></script>
</body>
</html>      
<?php
}
else{
	header("Location:index-login.php?error=UnAuthorized Access");
}