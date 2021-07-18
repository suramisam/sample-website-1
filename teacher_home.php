<?php
session_start();
include 'connect.php';
if(isset($_SESSION['user_data'])){
	if($_SESSION['user_data']['usertypes']!=1){
		header("Location:student_home.php");
	}

	$data=array();
	$qr=mysqli_query($con,"select * from users where usertypes='2'");
	while($row=mysqli_fetch_assoc($qr)){
		array_push($data,$row);
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User data Table</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="teacher-style.css"/>
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
<div class="teacher-container">
    <div class="row">
        <?php if(isset($_REQUEST['error'])) { ?>
            <div class="col-lg-12">
                <span class="alert alert-danger" style="display: block;">
               				<?php echo $_REQUEST['error']; ?>
            			</span>
               		</div>
            	   	<?php } ?>
            	 </div>
    	 <div class="row">
       		<?php if(isset($_REQUEST['success'])) { ?>
       		<div class="col-lg-12">
       			<span class="alert alert-success" style="display: block;">
       				<?php echo $_REQUEST['success']; ?>
    			</span>
       		</div>
    	   	<?php } ?>
    </div>
    <h1 class="table-heading">List of Students</h1>
    <table style="width:80%">
        <tr id="header">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php
		    foreach($data as $d) {
		?>
        <tr>
            <td><?php echo $d['id']; ?></td>
            <td><?php echo $d['name']; ?></td>
            <td><?php echo $d['email']; ?></td>
            <td><button><a class="btn btn-info" href="edit_result.php?id=<?php echo $d['id']; ?>">Edit Result</a></button></td>
        </tr>
        <?php
		    }
		?>
    </table>
    <div class="row">
    <ul>
        <li><button class="register">REGISTER NOW</button></li>
        <li><button class="login">LOG IN</button></li>
  </ul>
	</div>
</div>
</body>
</html>
<?php
}
else{
	header("Location:index-login.php?error=UnAuthorized Access");
}