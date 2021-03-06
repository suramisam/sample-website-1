
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="nav-footer-style.css"/>
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
        
        <section class="contact">
            <div class="contact-wrapper">
              <div class="contact-left"></div>
              <div class="contact-right">
                <h1 class="contact-heading">Contact</h1>
                <form>
                  <div class="input-group">
                    <input type="text" class="field" />
                    <label class="input-label">Full Name</label>
                  </div>
                  <div class="input-group">
                    <input type="email" class="field" />
                    <label class="input-label">Email</label>
                  </div>
                  <div class="input-group">
                    <textarea class="field"></textarea>
                    <label class="message">Message</label>
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
    <script src="script.js"></script>
</body>
</html>      
        