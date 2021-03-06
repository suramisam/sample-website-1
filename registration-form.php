<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User data Table</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="datatable-style.css"/>
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
        <section class="datatable">
            <div class="datatable-wrapper">
                <div class="datatable-wrapper-box">
                    <h1 class="datatable-heading">List of Students</h1>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div class="table-body">
                        <table>
                            <tr id="header">
                                <th>ID</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Date of Birth</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Contact Number</th>
                            </tr>
                            <?php
                                $servername = "localhost";
                                $username = "root";
                                $password = "surami";

                                // Create connection
                                $conn = new mysqli($servername, $username, $password,"institute","3307");

                                // Check connection
                                if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                                }
                                echo "Connected successfully<br>";
                                $sql = "SELECT * FROM registration";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["first_name"]. "</td><td>" . $row["last_name"]. "</td><td>" . $row["dob"]."</td><td>" . $row["gender"]."</td><td>" . $row["email"]."</td><td>" . $row["address"]."</td><td>" . $row["contact_number"]."</td></tr>";
                                }
                                } else {
                                echo "0 results";
                                }
                                $conn->close();
                            ?>
                           
                        </table>
                    </div>    
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
        <a href="#" class="scroll-btn">
            <i class="fas fa-arrow-up"></i>
        </a>  
    </div>
    <script src="script.js"></script>
</body>
</html>        