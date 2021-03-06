<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institute Website</title>
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
        <header class="header">
            <div class="img-wrapper">
                <img src="images/bg4.jpg">
            </div>
            <div class="banner">
                <h1>Informatics Institute of Technology</h1>
                <p>We make your dream a reality. Elevate your career to next level.</p>
                <button>Register now</button>
            </div>
        </header>
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
        
        
        <section class="team">
            <div class="section-header">
                <h1 class="section-heading">Levels of Study</h1>
                <div class="underline"></div>
            </div>
            <div class="cards-wrapper">
                <div class="card" data-tilt>
                    <div class="card-img-wrapper">
                        <img src="images/level-1-3.jpg" alt="Level-1">
                    </div>
                    <div class="card-info">
                        <h2>Foundation</h2>
                        <h3>Level-1</h3>
                        <p>"The Foundation Certificate in Higher Education."</p>
                        <button>Read More</button>
                    </div>
                </div>
                <div class="card" data-tilt>
                    <div class="card-img-wrapper">
                        <img src="images/level-2.jpg" alt="Level-2">
                    </div>
                    <div class="card-info">
                        <h2>Undergraduate</h2>
                        <h3>Level-2</h3>
                        <p>"Get a world-class undergraduate education at IIT."</p>
                        <button>Read More</button>
                    </div>
                </div>
                <div class="card" data-tilt>
                    <div class="card-img-wrapper">
                        <img src="images/level-3-1.jpg" alt="Level-3">
                    </div>
                    <div class="card-info">
                        <h2>Postgraduate</h2>
                        <h3>Level-3</h3>
                        <p>"Extend your subject knowledge, specialize in your field."</p>
                        <button>Read More</button>
                    </div>
                </div>
                <div class="card" data-tilt>
                    <div class="card-img-wrapper">
                        <img src="images/level-4.jpg" alt="Level-4">
                    </div>
                    <div class="card-info">
                        <h2>Training</h2>
                        <h3>Level-4</h3>
                        <p>"Professional training courses and customized corporate training."</p>
                        <button>Read More</button>
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
    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>
    <script src="tilt.js"></script>   
</body>
</html>