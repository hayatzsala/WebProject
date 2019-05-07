<?php
session_start();
// $_SESSION["Fname"]="Hayat";
// $_SESSION["Lname"]="Salawdeh";
 
  $conn=mysqli_connect("localhost","root","","oceanstar");
             if($conn->connect_error){
                 die("Connection Failed:".$conn->connect_error);
               }
                                   
   $stmt = mysqli_query($conn, "SELECT * FROM `users` WHERE `email`='".$_SESSION["username"]."'");


   if(mysqli_num_rows($stmt)>0){
    $profileData=mysqli_fetch_assoc($stmt);

   }
   else
   {
    echo 'nooooo';
   }

?>
<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Profile</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
  
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">

    <link rel="stylesheet" href="assets/css/meanmenu/meanmenu.min.css">

    <link rel="stylesheet" href="assets/css/animate.css">

    <link rel="stylesheet" href="assets/css/normalize.css">
   
    <link rel="stylesheet" href="assets/css/scrollbar/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="assets/css/jvectormap/jquery-jvectormap-2.0.3.css">

    <link rel="stylesheet" href="assets/css/notika-custom-icon.css">
 
    <link rel="stylesheet" href="assets/css/wave/waves.min.css">

    <link rel="stylesheet" href="assets/css/main2.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">   
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script  src="assets/js/myCode.js">

  
    </script>
    <!-- <script type="text/javascript" src="update.js"></script> -->
</head>

<body>

        <div id="static" style="display:none;">
                My Static Content
            </div>

    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="index.php"><img src="images/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                         
                            <li class="nav-item dropdown" >
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><ion-icon name="cog"></ion-icon></span></a>
                                <div role="menu" class="dropdown-menu message-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2><a href="logout.php"><ion-icon name="power"></ion-icon>Sign Out </a> </h2>
                                        <h2><a href="#" id="edit-button"><ion-icon name="create"></ion-icon>Edit profile </a> </h2>
                                    </div>
                                    
                                </div>
                            </li>
                        
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->

    <!-- Main Menu area start-->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#home" href="#">Home</a>
                                    
                                </li>
                                <li><a data-toggle="collapse" data-target="#email" href="#">My Tours</a>
                                   
                                </li>
                                <li><a data-toggle="collapse" data-target="#Profile" href="#">My Profile</a>
                                    
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->

    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="active" id="home-tapped"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Home</a>
                        </li>
                        <li id="Email-tapped" ><a data-toggle="tab" href="#mailbox"><i class="notika-icont notika-mail"></i>My Tours</a>
                        </li>
                        <li id="profile-tapped"><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i> My Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Menu area End-->
    <!-- Start home area -->
    <div class="notika-status-area" id="home" style="display: block;">
        <div class="container"  >
            <div class="row">
                <div class="col-12">
                    <div class="hd-message-sn">
                                <div class="hd-message-img">
                                    <img src="images/1.png" alt="" />
                                </div>
                                <div class="hd-mg-ctn">
                                    <h3> <?php echo $profileData["Fname"].' '.$profileData["Lname"]; ?> </h3>
                                    <p>Welcome to OceanStar's Family</p>
                                </div>
                            </div>
                </div>
                <div class="col-6">
                    <div class="">
                                    <img src="images/home1.jpg" alt="" />
                                </div>
                </div>
                <div class="col-6">
                    <div class="">
                                    <img src="images/home2.jpg" alt="" />
                                </div>
                </div>
                <div class="col-12">
                    <div class="text">
                        <p>We are happy to working with you. In our amazing website , we trust you we do all the best effort you can to our company.</p>

                    </div>
                   
                </div>
            </div>
        </div>
    </div>

    <!-- Main Menu area End-->
    <!-- Start home area -->

        
    
    <!-- End Status area-->
   
     
                
                
    
     <!-- profile area-->
     
        
   

     <div class="breadcomb-area" id="Profile" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <div class="breadcomb-list">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="breadcomb-wp">
                                        <div class="hd-message-img">
                                        <img src="images/2.png" alt="" />
                                    </div>
                                        <div class="breadcomb-ctn">
                                            <h2><?php echo $profileData["Fname"].' '.$profileData["Lname"]; ?></h2>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                    <div class="breadcomb-report">
                                        <button type="button" class="btn btn-secondary btn-sm">
                                        <ion-icon name="attach"></ion-icon>Upload picture</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                                
                    </div>
                
            </div>
        <div class="container">
            <div id="data-section" style="display: block;">
           <form action="editInfo.php" method="Get">
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="validationDefault01">First name</label>
          <input type="text" class="form-control" id="Fname" placeholder="First name" value="<?php echo $profileData["Fname"];?>" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationDefault02">Last name</label>
          <input type="text" class="form-control" id="Lname" placeholder="Last name" value="<?php echo $profileData["Lname"];?>" required>
        </div>
        
      </div>
      <div class="form-row">
        <div class="col-md-4 mb-3">
        <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" id="emaill" aria-describedby="emailHelp" placeholder="col-form-label" value="<?php echo $profileData["email"];?>">
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationDefault04">Phone number</label>
          <input type="text" class="form-control" id="phone-no" placeholder=" _ _ _ - _ _ _ - _ _ _ _" value="<?php echo $profileData["phone-no"];?>" required >
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationDefault04">Gender</label>
            <select class="custom-select custom-select-lg mb-3">
                <?php
                if($profileData["gender"]=="femal"){
                    echo ' <option value="1">Male</option>
                 <option value="2" selected>Female</option>';

                }
                else if($profileData["gender"]=="male"){
                    echo ' <option value="1" selected>Male</option>
                 <option value="2" >Female</option>';
                }
                else{
                    echo ' <option selected></option> <option value="1" >Male</option>
                 <option value="2" >Female</option>';

                }

                ?>
                
            </select>
            
        </div>
    
        <div class="col-md-5 mb-3">
            <label for="validationDefault01" >Birtdate</label>
            <input type="Date" id="birthdate" class="" placeholder="" value="<?php echo $profileData["birthdate"];?>">
            
        </div>
         
    </div>
    </div>
      <div class="form-row" id="password-section" style="display: none;">
        <div class="col-md-4 mb-3">
          <label for="validationDefault01">Old password</label>
          <input type="password" class="form-control" id="oldpassword" placeholder="old password" value="" required>
          </div>
          <div class="col-md-4 mb-3">
          <label for="validationDefault01">New password</label>
          <input type="password" class="form-control" id="password" placeholder="new password" value="" required>
          </div>
        <div class="col-md-4 mb-3">
          <label for="validationDefault02">Confirm password</label>
          <input type="password" class="form-control" id="password2" placeholder="confirm password" value="" required>
        </div>
    </div>
      <div class="form-buttons" >
      <button class="btn btn-primary" id="Save" value="Save Changes" onclick="resetpass()" >Save changes</button>

      <button class="btn btn-primary" type="button" id="Reset" >Reset password</button>
      </div>
    </form>
    
</div>
    
    
    </div>
</div>

<div class="breadcomb-area" id="email" style="display: none;">
    <div class="container" >
        <div class="row">
            <div class="col-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <!-- <div class="card" style="width: 18rem; display: block">
                            <div class="card-body">
                              <h5 class="card-title">Your Tour Name</h5>
                              <img src="images/Bali.jpg">
                              <p class="card-text"></p>
                              <a href="#" class="card-link">Edit</a>
                              <a href="#" class="card-link">cancel</a>
                            </div>
                          </div> -->
                          <div class="container">
                          <?php 
                            if(isset($_SESSION["id"])){
                                $conn=mysqli_connect("localhost","root","","oceanstars");
                                if($conn->connect_error){
                                    die("Connection Failed:".$conn->connect_error);
                                }
                                   
                                   $result = mysqli_query($conn, "SELECT * FROM `booked` WHERE `id`='".$_SESSION["id"]."'");
                                   $count=1;
                                   if(mysqli_num_rows($result) > 0){
                                        while($row = mysqli_fetch_assoc($result)){

                                        $result2 = mysqli_query($conn, "SELECT * FROM `tours` WHERE `tourID`='".$row["tourID"]."'");
                                        $row2 = mysqli_fetch_assoc($result2);
                                        echo '<h3>My tour ( '.$count.' ) </h3>';
                                      echo '<div class="input-group">'
                                     .'<div class="input-group-prepend">'
                                     .'<span class="input-group-text">Package Name</span>'
                                    .'</div>'
                                    .'<input type="text" aria-label="First name" value = "'.$row2["name"].'" class="form-control" disabled="">'
                                    
                                    .'</div>'
                                    .'<br>';

                                    $result3 = mysqli_query($conn, "SELECT * FROM `flights` WHERE `AirlineName`='".$row["AirlineName"]."'");
                                        $row3 = mysqli_fetch_assoc($result3);

                                      echo '<div class="input-group">'
                                     .'<div class="input-group-prepend">'
                                     .'<span class="input-group-text">Airline Name</span>'
                                    .'</div>'
                                    .'<input type="text" aria-label="First name" value = "'.$row3["AirlineName"].'" class="form-control" disabled="">'
                                    .'<br>'
                                    .'<input type="text" aria-label="First name" value = "'.$row3["Date"].'" class="form-control" disabled="">'
                                    .'<br>'
                                    .'<input type="text" aria-label="First name" value = "'.$row3["time"].'" class="form-control" disabled="">'
                                    
                                    .'<br>'
                                    .'<input type="text" aria-label="First name" value = "From: '.$row3["ContFrom"].'" class="form-control" disabled="">'
                                    .'<br>'
                                    .'<input type="text" aria-label="First name" value = "To: '.$row3["ContTo"].'" class="form-control" disabled="">'
                                    .'<br>'
                                    
                                    .'</div>'
                                    .'<br>';

                                     $result4 = mysqli_query($conn, "SELECT * FROM `hotels` WHERE `name`='".$row["hotelName"]."'");
                                        $row4 = mysqli_fetch_assoc($result4);

                                      echo '<div class="input-group">'
                                     .'<div class="input-group-prepend">'
                                     .'<span class="input-group-text">Hotel Name</span>'
                                    .'</div>'
                                    .'<input type="text" aria-label="First name" value = "'.$row4["name"].'" class="form-control" disabled="">'
                                    .'<br>'
                                    .'<div class="input-group-prepend">'
                                     .'<span class="input-group-text">Location</span>'
                                    .'</div>'
                                    .'<input type="text" aria-label="First name" value = "'.$row4["City"].' , '.$row4["Country"].'" class="form-control" disabled="">'
                                    .'<br>'
                                    .'</div>'
                                    .'<br>';

                                    $result5 = mysqli_query($conn, "SELECT * FROM `cars` WHERE `carID`='".$row["carID"]."'");
                                        $row5 = mysqli_fetch_assoc($result5);

                                      echo '<div class="input-group">'
                                     .'<div class="input-group-prepend">'
                                     .'<span class="input-group-text">Car Model</span>'
                                    .'</div>'
                                    .'<input type="text" aria-label="First name" value = "'.$row5["ModelName"].'" class="form-control" disabled="">'
                                    .'<br>'
                                    
                                    .'</div>'
                                    .'<br>'
                                    .'<br>';

                                    $totalCost=$row5["PricePerDay"]+$row4["CostPerDay"]+$row3["cost"]+$row2["cost"];

                                    echo '<div class="alert alert-danger" role="alert">The total cost = '.$totalCost.' JD
                                </div>'
                                .'<br>';


                                 echo '<button type="button" class="btn btn-success">Check out!</button>
                                    <button type="button" class="btn btn-danger" )">Delete</button>'.'<br>';


                                    $count=$count+1;
                                    }
                                   }



                                   else {
                                       echo '<div class="alert alert-success" role="alert">
                                   No booked packages in your card.
                                </div>';
                                   }





                            }




                           ?>
                           </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="breadcomb-area" id="Tables" style="display: none;">
    <div class="container">
        <div class="row">
        <div class="row">
  
      </div>
</div>
</div>
</div>
     <!-- end profile ares-->
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>© OceanStar company 2019 . Design: Hayat & Ghadir Technologies .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
        ============================================ -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="assets/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="assets/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="assets/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="assets/js/counterup/waypoints.min.js"></script>
    <script src="assets/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
        ============================================ -->
    <script src="assets/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
        ============================================ -->
    <script src="assets/js/flot/jquery.flot.js"></script>
    <script src="assets/js/flot/jquery.flot.resize.js"></script>
    <script src="assets/js/flot/curvedLines.js"></script>
    <script src="assets/js/flot/flot-active.js"></script>
    <!-- knob JS
        ============================================ -->
    <script src="assets/js/knob/jquery.knob.js"></script>
    <script src="assets/js/knob/jquery.appear.js"></script>
    <script src="assets/js/knob/knob-active.js"></script>
    <!--  wave JS
        ============================================ -->
    <script src="assets/js/wave/waves.min.js"></script>
    <script src="assets/js/wave/wave-active.js"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="assets/js/chat/moment.min.js"></script>
    <script src="assets/js/chat/jquery.chat.js"></script>
    <!--  todo JS
        ============================================ -->
    <script src="assets/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="assets/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="assets/js/main2.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="assets/js/tawk-chat.js"></script>
</body>

</html>