<?php
$servername = "localhost";
$username = "root";
$password = "surami";

$firstName=$_POST["FirstName"];
$lastName=$_POST["LastName"];
$gender=$_POST["Gender"];
$dob=$_POST["dob"];
$email=$_POST["email"];
$address=$_POST["address"];
$contactNo=$_POST["contactNo"];


//Create connection
$conn = new mysqli($servername, $username, $password,"institute","3307");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO registration (first_name, last_name, gender,dob,email,address,contact_number) VALUES ('".$firstName."', '".$lastName."', '".$gender."', '".$dob."','".$email."','".$address."','".$contactNo."')";

if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

<?php
$variableee = readfile("registration.html");
echo $variableee;
?>

