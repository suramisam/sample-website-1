<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="registration-style.css"/>
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
                <a href="datatable.php" class="menu-link" data-content="Data Table">Data Table</a>
              </li>
            </ul>
            <div class="social-media">
                <a href="#"><i class="fab fa-facebook-f"></i></a> 
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>  
            </div>   
        </section>
        
        <section class="registration">
            <div class="registration-wrapper">
              <div class="registration-left"></div>
              <div class="registration-right">
                <h1 class="registration-heading">Registration Form</h1>
                <form action="index.php" method= "POST">
                  <div class="input-group">
                    <input type="text" name="FirstName" id="FirstName" class="field" />
                    <label for="FirstName" class="input-label">First Name</label>
                  </div>
                  <div class="input-group">
                    <input type="text" name="LastName" id="LastName" class="field" />
                    <label for="LastName" class="input-label">Last Name</label>
                  </div>
                  <div class="input-group">
                    <select name="Gender" id="Gender" class="field">
                        <option value id="first">Please select</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                        <option value="3">Other</option>
                    </select>
                    <label for="Gender" class="input-label">Gender</label>
                  </div>
                  <div class="input-group">
                    <input type="date" id="dob" name="dob" class="field" />
                    <label for="dob" class="input-label">Date of Birth</label>
                  </div>
                  <div class="input-group">
                    <input type="email" id="email" name="email" class="field" />
                    <label for="email" class="input-label">Email</label>
                  </div>
                  <div class="input-group">
                    <textarea id="address" name="address" class="field"></textarea>
                    <label for="address" class="message">Address</label>
                  </div>
                  <div class="input-group">
                    <input type="tel" id="contactNo" name="contactNo" class="field" pattern="[0-9]{10}" required />
                    <label for="contactNo" class="input-label">contact Number</label>
                  </div>
                  <input type="submit" class="submit-btn" value="Submit" />
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
    <script>
        (function(){
            document.getElementById("first").text = "";
        })()
    </script>
    <script src="script.js"></script>
</body>
</html>        