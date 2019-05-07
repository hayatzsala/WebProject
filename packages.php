
<!DOCTYPE html>

<?php
session_start();
// $_SESSION["username"]="hayatzs.4ever@gmail.com";
// $_SESSION["id"]="hayat";
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Packages - Oceanstars</title>
  <link rel="stylesheet" href="assets/css/main.css" />
  <link rel="stylesheet" href="assets/css/packagesStyle.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css"
    />
    <script type="text/javascript" src="assets/js/packagesData.js">
    
     </script>

    <link rel="stylesheet" href="css/style.css" />
  </head>


    <body class="subpage" onload="getPackages()">
      
        <!-- Header -->
        <header id="header" class="alt">
          <div class="logo">
          <a href="index.php" class="special">OceanStars Company <span>travel and tourism agency</span></a>
          </div>
          <a href="#menu"><span>Menu</span></a>
        </header>
      
        <!-- Nav -->
        <nav id="menu">
          <ul class="links">
          <li><a href="index.php">Home</a></li>
          <li><a href="AboutUS.html">About Us</a></li>
          <li><a href="packages.php">Packages</a></li>
          
          <?php
          if(isset($_SESSION['username'])){
            echo "<li><a href='client1.php'>My Profile</a></li>";
            echo "<li><a href='logout.php'>Logout</a></li>";
          }
          else{
            echo "<li><a href='login-register.php'>Sign In</a></li>";
          }

        ?>  

          </ul>
        </nav>
        
    <div class="container-fluid">
    <br/>
    <h1 class="text-center mb-3">BOOK THE PACKAGE THAT MEETS YOUR WISHES !</h1>
    <br/>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
      </div>
      <div class="notification">
        <p> </p>
      </div>
      <br/>
      <br/>
      <div id="myServices"></div>
    
    </div>
  <footer id="footer">
      <div class="inner">
        <h2>Contact Me</h2>
    
        <form action="#" method="post">
        <div class="field half first">
          <label for="name">Name</label>
          <input name="name" id="name" type="text" placeholder="Name" />
        </div>
        <div class="field half">
          <label for="email">Email</label>
          <input name="email" id="email" type="email" placeholder="Email" />
        </div>
        <div class="field">
          <label for="message">Message</label>
          <textarea
          name="message"
          id="message"
          rows="6"
          placeholder="Message"
          ></textarea>
        </div>
        <ul class="actions">
          <li>
          <input value="Send Message" class="button alt" type="submit" />
          </li>
        </ul>
        </form>
    
        <ul class="icons">
        <li>
          <a href="#" class="icon round fa-twitter"
          ><span class="label">Twitter</span></a
          >
        </li>
        <li>
          <a href="#" class="icon round fa-facebook"
          ><span class="label">Facebook</span></a
          >
        </li>
        <li>
          <a href="#" class="icon round fa-instagram"
          ><span class="label">Instagram</span></a
          >
        </li>
        </ul>
    
        <div class="copyright">
            &copy; OceanStar company 2019 .    Design: Hayat & Ghadir Technologies . 
          </div>
      </div>
      </footer>
    
      <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>
      <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <script src="js/carousel.js"></script>
  
  </body>
</html>
