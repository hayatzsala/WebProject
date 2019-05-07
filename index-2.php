<?php
session_start();
 $conn=mysqli_connect("localhost","root","","oceanstars");
             if($conn->connect_error){
                 die("Connection Failed:".$conn->connect_error);
               }

                             
   $stmt = mysqli_query($conn, "SELECT * FROM `admins` WHERE `email`='".$_SESSION["username"]."'");


   if(mysqli_num_rows($stmt)>0){
    $profileData=mysqli_fetch_assoc($stmt);
    
   }
   else
   {
    echo 'nooooo';
   }

?>
<!doctype html>
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
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script  src="assets/js/myCode.js">
    </script>
    <style>
    .collapse.in {        
      display: block;       
}
        </style>
    <script>
        function edit(){
            
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xmlhttp.open("GET", "cd_catalog.xml", true);
  xmlhttp.send();
}
        </script>

        
       
</head>

<body>

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

    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#home" href="#">Home</a>
                                    
                                </li>
                                <li><a data-toggle="collapse" data-target="#email" href="#">Email</a>
                                   
                                </li>
                                <li><a data-toggle="collapse" data-target="#Profile" href="#">My Profile</a>
                                    
                                </li>
                               <!--  <li><a data-toggle="collapse" data-target="#" href="#">Charts</a>
                                    
                                </li> -->
                                <li><a data-toggle="collapse" data-target="#" href="#">Tables</a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                        <li><a href="#Users">Customers</a></li>
                                        
                                        <li><a href="#Tours">Tours</a></li>
                                        <li><a href="#Hotels">Hotels</a></li>
                                        <li><a href="#Cars">Cars</a></li>
                                        <li><a href="#Flights">Flights</a></li>
                                    </ul>
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
                        <li id="Email-tapped" ><a data-toggle="tab" href="#mailbox"><i class="notika-icont notika-mail"></i> Email</a>
                        </li>
                        <li id="profile-tapped"><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i> My Profile</a>
                        </li>
                        <!-- <li id="chart-tapped"><a data-toggle="tab" href="#Charts"><i class="notika-icon notika-bar-chart"></i> Charts</a>
                        </li> -->
                        <li id="contTable"><a data-toggle="tab" href="#Tables"><i class="notika-icon notika-windows"></i> Tables</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                     
                        <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li id="Users-tapped"><a href="#Users">Customers</a>
                                </li>
                                
                                <li id="Tours-tapped"><a href="#Tours">Tours</a>
                                </li>
                                <li id="Hotels-tapped"><a href="#Hotels">Hotels</a>
                                </li>
                                <li id="Flights-tapped"><a href="#Flights">Flights</a>
                                </li>
                                <li id="Cars-tapped"><a href="#Cars">Cars</a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
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
                                    <h3>  <?php echo "Ghadir Shraim" ?> </h3>
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
    <!-- End Status area-->
    <!-- Start emails area -->
    <div class="breadcomb-area" id="email" style="display: none;">
        <div class="container" >
            <div class="row">
                <div class="col-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-mail"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Inbox</h2>
                                        <p>Welcome to OceanStar <span class="bread-ntd">Admin Inbox</span></p>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="inbox-area">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-14">
                    <div class="inbox-text-list sm-res-mg-t-30">
                        <div class="form-group">
                            <div class="nk-int-st search-input search-overt">
                                <input type="text" class="form-control" placeholder="Search email..." />
                                <button class="btn search-ib">Search</button>
                            </div>
                        </div>
                        <div class="inbox-btn-st-ls btn-toolbar">
                            <div class="btn-group ib-btn-gp active-hook nk-email-inbox">
                                <button class="btn btn-default btn-sm"><i class="notika-icon notika-refresh"></i> Refresh</button>
                                <button class="btn btn-default btn-sm"><i class="notika-icon notika-trash"></i></button>
                                <button class="btn btn-default btn-sm"><i class="notika-icon notika-checked"></i></button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-inbox">
                                <tbody>
<<<<<<< HEAD
                                    <?php 

                                

                                $conn=mysqli_connect("localhost","root","","oceanstars");

                                if($conn->connect_error){

                                    die("Connection Failed:".$conn->connect_error);

                                }

                                   $sql = "SELECT * FROM `emails` " ;

                                   $result = mysqli_query($conn, "SELECT * FROM `emails`");

                                   if(mysqli_num_rows($result) > 0){

                                       while($row = $result->fetch_assoc()){

                                           echo "<tr><td>". $row['name']."</td><td>".$row['email']."</td><td>".$row['message']."</td></tr>";

                                       }

                                       echo "</table>";

                                   }

                                   else {

                                       echo "0 result";

                                   }

                                   $conn ->close();

=======
                                <?php 
                                
                                $conn=mysqli_connect("localhost","root","","oceanstar");
                                if($conn->connect_error){
                                    die("Connection Failed:".$conn->connect_error);
                                }
                                   $sql = "SELECT * FROM `emails` " ;
                                   $result = mysqli_query($conn, "SELECT * FROM `emails`");
                                   if(mysqli_num_rows($result) > 0){
                                       while($row = $result->fetch_assoc()){
                                           echo "<tr><td>". $row['name']."</td><td>".$row['email']."</td><td>".$row['message']."</td></tr>";
                                       }
                                       echo "</table>";
                                   }
                                   else {
                                       echo "0 result";
                                   }
                                   $conn ->close();
>>>>>>> origin/master
                                   ?>    
                                </tbody>
                            </table>
                            <div class="pagination-inbox">
                                <ul class="wizard-nav-ac">
                                    <li><a class="btn" href="#"><i class="notika-icon notika-back"></i></a></li>
                                    <li class="active"><a class="btn" href="#">1</a></li>
                                    <li><a class="btn" href="#">2</a></li>
                                    <li><a class="btn" href="#">3</a></li>
                                    <li><a class="btn" href="#"><i class="notika-icon notika-next-pro"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
     <!-- end emails area -->

     <!-- tables area-->
     <div class="breadcomb-area" id="Users" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-windows"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Customers Table</h2>
                                        <p>View all customers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    
                                    <a  data-placement="left" title="Download Report" class="btn"  data-target="#multiCollapseExample1" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><ion-icon name="close"></ion-icon>Delete</a>
                                   
 
    
                                  
  
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <form action="deleteQ.php" method="post">
    <input type="text" name="idd" id="idd" class="form-control" placeholder="Enter the id of the tour that u want to delete">
    <button type="submit" class="btn btn-primary">Delete</button>
</form>
   
  </div>
  
  <a  data-placement="left" title="Download Report" class="btn"  data-target="#multiCollapseExample8" data-toggle="collapse" href="#multiCollapseExample8" role="button" aria-expanded="false" aria-controls="multiCollapseExample8"><ion-icon name="close"></ion-icon>ADD</a>
  <div class="collapse multi-collapse" id="multiCollapseExample8">
      <form action="AddCus.php" method="post">
    <input type="text" name="email" id="idcus" class="form-control" placeholder="email">
    <input type="text" name="first" id="idcus" class="form-control" placeholder="first name">
    <input type="text" name="last" id="idcus" class="form-control" placeholder="last name">
    <button type="submit" class="btn btn-primary">Add</button>
</form>
   
  </div>
  
  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <p>This table shows all customer registered in website.</p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead class="thead-light">
                                    <tr>
                                    <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 292px;" aria-label="Position: activate to sort column ascending" rowspan="1" colspan="1">E-mail</th>
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 150px;" aria-label="Name: activate to sort column ascending" rowspan="1" colspan="1">First Name</th>
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 292px;" aria-label="Position: activate to sort column ascending" rowspan="1" colspan="1">Last Name</th>
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 140px;" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Birthdate</th>
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 52px;" aria-label="Age: activate to sort column ascending" rowspan="1" colspan="1">Gender</th>
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 116px;" aria-label="Salary: activate to sort column ascending" rowspan="1" colspan="1">phone Number</th>
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 97px;" aria-label="Salary: activate to sort column ascending" rowspan="1" colspan="1">Nationality</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                <?php 
                                
                                $conn=mysqli_connect("localhost","root","","oceanstar");
                                if($conn->connect_error){
                                    die("Connection Failed:".$conn->connect_error);
                                }
                                   $sql = "SELECT * FROM `users` " ;
                                   $result = mysqli_query($conn, "SELECT * FROM `users`");
                                   if(mysqli_num_rows($result) > 0){
                                       while($row = $result->fetch_assoc()){
                                           echo "<tr><td>". $row['email']."</td><td>".$row['Fname']."</td><td>".$row['Lname']."</td><td>".$row['birthdate']."</td><td>".$row['gender']."</td><td>".$row['phone-no']."</td><td>".$row['nationality']."</td></tr>";
                                       }
                                       echo "</table>";
                                   }
                                   else {
                                       echo "0 result";
                                   }
                                   $conn ->close();
                                   ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   
<div class="breadcomb-area" id="Tours" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-windows"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Tours Table</h2>
                                        <p>View all avilable tours.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                    <div class="breadcomb-report">
                                        
                                        <a  data-placement="left" title="Download Report" class="btn"  data-target="#multiCollapseExample2" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2"><ion-icon name="close"></ion-icon>Delete</a>
                                       
     
        
                                      
      
        <div class="collapse multi-collapse" id="multiCollapseExample2">
          <form action="deleteTour.php" method="post">
        <input type="text" name="idtour" id="idtour" class="form-control" placeholder="tour name">
        <button type="submit" class="btn btn-primary">Delete</button>
    </form>
       
      </div>
      
      <a  data-placement="left" title="Download Report" class="btn"  data-target="#multiCollapseExample10" data-toggle="collapse" href="#multiCollapseExample10" role="button" aria-expanded="false" aria-controls="multiCollapseExample10"><ion-icon name="close"></ion-icon>ADD</a>
      <div class="collapse multi-collapse" id="multiCollapseExample10">
          <form action="AddTour.php" method="post">
          <input type="text" name="name" id="idd" class="form-control" placeholder="place">
    <input type="text" name="cost" id="idd" class="form-control" placeholder="cost">
    <input type="text" name="rate" id="idd" class="form-control" placeholder="rate">
    <input type="date" name="date" id="idd" class="form-control" placeholder="date">
    <input type="text" name="dayno" id="idd" class="form-control" placeholder="Number of days">
    <input type="text" name="city" id="idd" class="form-control" placeholder="city">
    <input type="text" name="country" id="idd" class="form-control" placeholder="country">
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
       
      </div>
      
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <p>This table contains all details related to our tours,Can Add,Edit And Delete any one of tours.</p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead class="thead-light">
                                    <tr>
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 65px;" aria-label="Name: activate to sort column ascending" rowspan="1" colspan="1">Name</th>
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 60px;" aria-label="Name: activate to sort column ascending" rowspan="1" colspan="1">city</th>
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 60px;" aria-label="Name: activate to sort column ascending" rowspan="1" colspan="1">Country</th>
                        
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 60px;" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">NumOf days</th>
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 60px;" aria-label="Age: activate to sort column ascending" rowspan="1" colspan="1">Rate</th>
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 60px;" aria-label="Salary: activate to sort column ascending" rowspan="1" colspan="1">Cost</th>
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 60px;" aria-label="Salary: activate to sort column ascending" rowspan="1" colspan="1">Date</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                
                                $conn=mysqli_connect("localhost","root","","oceanstar");
                                if($conn->connect_error){
                                    die("Connection Failed:".$conn->connect_error);
                                }
                                   $sql = "SELECT * FROM `tours` " ;
                                   $result = mysqli_query($conn, "SELECT * FROM `tours`");
                                   if(mysqli_num_rows($result) > 0){
                                       while($row = $result->fetch_assoc()){
                                           echo "<tr><td>". $row['name']."</td><td>".$row['City']."</td><td>".$row['Country']."</td><td>".$row['dayNo']."</td><td>".$row['rate']."</td><td>".$row['cost']."</td><td>".$row['tourDate']."</td></tr>";
                                       }
                                       echo "</table>";
                                   }
                                   else {
                                       echo "0 result";
                                   }
                                   $conn ->close();
                                   ?>                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="breadcomb-area" id="Hotels" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-windows"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Hotels Table</h2>
                                        <p>View all avilable hotels.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                    <div class="breadcomb-report">
                                        
                                        <a  data-placement="left" title="Download Report" class="btn"  data-target="#multiCollapseExample3" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3"><ion-icon name="close"></ion-icon>Delete</a>
                                       
     
        
                                      
      
        <div class="collapse multi-collapse" id="multiCollapseExample3">
          <form action="deleteHotel.php" method="post">
        <input type="text" name="idhotel" id="idhotel" class="form-control" placeholder="Enter the id of the tour that u want to delete">
        <button type="submit" class="btn btn-primary">Delete</button>
    </form>
       
      </div>
      
      <a  data-placement="left" title="Download Report" class="btn"  data-target="#multiCollapseExample12" data-toggle="collapse" href="#multiCollapseExample12" role="button" aria-expanded="false" aria-controls="multiCollapseExample12"><ion-icon name="close"></ion-icon>ADD</a>
      <div class="collapse multi-collapse" id="multiCollapseExample12">
          <form action="AddHotel.php" method="post">
        <input type="text" name="name" id="name" class="form-control" placeholder="name">
        <input type="text" name="stars" id="stars" class="form-control" placeholder="stars">
        <input type="text" name="city" id="city" class="form-control" placeholder="city">
        <input type="text" name="country" id="country" class="form-control" placeholder="country">
        <input type="text" name="cbd" id="cbd" class="form-control" placeholder="cost per day">
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
       
      </div>

      
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <p>This table contains all details related to hotels stored in database. We can delete,add and edit any of them.</p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped ">
                                <thead class="thead-light">
                                    <tr>
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 100px;" aria-label="Name: activate to sort column ascending" rowspan="1" colspan="1">Name</th>
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width:100px;" aria-label="Name: activate to sort column ascending" rowspan="1" colspan="1">Stars</th>
        
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 90px;" aria-label="Age: activate to sort column ascending" rowspan="1" colspan="1">City</th>
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 65 px;" aria-label="Salary: activate to sort column ascending" rowspan="1" colspan="1">Country</th>
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 65 px;" aria-label="Salary: activate to sort column ascending" rowspan="1" colspan="1">Cost for 1day</th>
                                        
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                
                                $conn=mysqli_connect("localhost","root","","oceanstar");
                                if($conn->connect_error){
                                    die("Connection Failed:".$conn->connect_error);
                                }
                                   $sql = "SELECT * FROM `hotels` " ;
                                   $result = mysqli_query($conn, "SELECT * FROM `hotels`");
                                   if(mysqli_num_rows($result) > 0){
                                       while($row = $result->fetch_assoc()){
                                           echo "<tr><td>". $row['name']."</td><td>".$row['stars']."</td><td>".$row['City']."</td><td>".$row['Country']."</td><td>".$row['CostPerDay']."</td></tr>";
                                       }
                                       echo "</table>";
                                   }
                                   else {
                                       echo "0 result";
                                   }
                                   $conn ->close();
                                   ?>                                     
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="breadcomb-area" id="Flights" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-windows"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>flights Table</h2>
                                        <p>View all avilable flihghts offer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                    <div class="breadcomb-report">
                                        
                                        <a  data-placement="left" title="Download Report" class="btn"  data-target="#multiCollapseExample4" data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample4"><ion-icon name="close"></ion-icon>Delete</a>
                                       
     
        
                                      
      
        <div class="collapse multi-collapse" id="multiCollapseExample4">
          <form action="deleteFlight.php" method="post">
        <input type="text" name="idf" id="idf" class="form-control" placeholder="Enter the id of the tour that u want to delete">
        <button type="submit" class="btn btn-primary">Delete</button>
    </form>
       
      </div>
      
      <a  data-placement="left" title="Download Report" class="btn"  data-target="#multiCollapseExample14" data-toggle="collapse" href="#multiCollapseExample14" role="button" aria-expanded="false" aria-controls="multiCollapseExample14"><ion-icon name="close"></ion-icon>ADD</a>
      <div class="collapse multi-collapse" id="multiCollapseExample14">
          <form action="AddFlight.php" method="post">
        <input type="text" name="name" id="idfli" class="form-control" placeholder="airline name">
        <input type="text" name="from" id="idfli" class="form-control" placeholder="from">
        <input type="text" name="to" id="idfli" class="form-control" placeholder="to">
        <input type="date" name="date" id="idfli" class="form-control" placeholder="date">
        <input type="time" name="time" id="idfli" class="form-control" placeholder="time">
        <input type="text" name="cost" id="idfli" class="form-control" placeholder="cost">

        <button type="submit" class="btn btn-primary">Add</button>
    </form>
       
      </div>
      
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <p>This table contains all details related to flights stored in database. We can delete,add and edit any of them.</p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead class="thead-light">
                                    <tr>
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 156px;" aria-label="Name: activate to sort column ascending" rowspan="1" colspan="1">Airline</th>
                                        
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 150px;" aria-label="Name: activate to sort column ascending" rowspan="1" colspan="1">From</th>
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 150px;" aria-label="Name: activate to sort column ascending" rowspan="1" colspan="1">To</th>
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 150px;" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Time of dep.</th>
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 150px;" aria-label="Age: activate to sort column ascending" rowspan="1" colspan="1">Date</th>
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 100 px;" aria-label="Salary: activate to sort column ascending" rowspan="1" colspan="1">cost</th>
                                        
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                
                                $conn=mysqli_connect("localhost","root","","oceanstar");
                                if($conn->connect_error){
                                    die("Connection Failed:".$conn->connect_error);
                                }
                                   $sql = "SELECT * FROM `flights` " ;
                                   $result = mysqli_query($conn, "SELECT * FROM `flights`");
                                   if(mysqli_num_rows($result) > 0){
                                       while($row = $result->fetch_assoc()){
                                           echo "<tr><td>". $row['AirlineName']."</td><td>".$row['ContFrom']."</td><td>".$row['ContTo']."</td><td>".$row['time']."</td><td>".$row['Date']."</td><td>".$row['cost']."</td></tr>";
                                       }
                                       echo "</table>";
                                   }
                                   else {
                                       echo "0 result";
                                   }
                                   $conn ->close();
                                   ?>                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="breadcomb-area" id="Cars" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-windows"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Cars Table</h2>
                                        <p>View all avilable car for rent.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                    <div class="breadcomb-report">
                                        
                                        <a  data-placement="left" title="Download Report" class="btn"  data-target="#multiCollapseExample5" data-toggle="collapse" href="#multiCollapseExample5" role="button" aria-expanded="false" aria-controls="multiCollapseExample5"><ion-icon name="close"></ion-icon>Delete</a>
                                       
     
        
                                      
      
        <div class="collapse multi-collapse" id="multiCollapseExample5">
          <form action="deleteCar.php" method="post">
        <input type="text" name="idc" id="idc" class="form-control" placeholder="Enter the id of the tour that u want to delete">
        <button type="submit" class="btn btn-primary">Delete</button>
    </form>
       
      </div>
      
      <a  data-placement="left" title="Download Report" class="btn"  data-target="#multiCollapseExample6" data-toggle="collapse" href="#multiCollapseExample6" role="button" aria-expanded="false" aria-controls="multiCollapseExample6"><ion-icon name="close"></ion-icon>ADD</a>
      <div class="collapse multi-collapse" id="multiCollapseExample6">
          <form action="AddCar.php" method="post">
        <input type="text" name="name" id="name" class="form-control" placeholder="car name">
        <input type="text" name="year" id="year" class="form-control" placeholder="car year model">
        <input type="text" name="ppd" id="ppd" class="form-control" placeholder="price per day">
        <input type="text" name="cap" id="cap" class="form-control" placeholder="capacity">
        
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
       
      </div>
      

                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <p>This table contains all avilable cars for rent by our customers. We can delete,add and edit any of them.</p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead class="thead-light">
                                    <tr>
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 150px;" aria-label="Name: activate to sort column ascending" rowspan="1" colspan="1">Model Name</th>
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 150px;" aria-label="Name: activate to sort column ascending" rowspan="1" colspan="1">Model year</th>
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 150px;" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Price/day</th>
                                        <th tabindex="0" class="sorting" aria-controls="data-table-basic" style="width: 150px;" aria-label="Age: activate to sort column ascending" rowspan="1" colspan="1">Capacity</th>
                                                                           
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                
                                $conn=mysqli_connect("localhost","root","","oceanstar");
                                if($conn->connect_error){
                                    die("Connection Failed:".$conn->connect_error);
                                }
                                   $sql = "SELECT * FROM `cars` " ;
                                   $result = mysqli_query($conn, "SELECT * FROM `cars`");
                                   if(mysqli_num_rows($result) > 0){
                                       while($row = $result->fetch_assoc()){
                                           echo "<tr><td>". $row['ModelName']."</td><td>".$row['ModelYear']."</td><td>".$row['PricePerDay']."</td><td>".$row['Capacity']."</td></tr>";
                                       }
                                       echo "</table>";
                                   }
                                   else {
                                       echo "0 result";
                                   }
                                   $conn ->close();
                                   ?>                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="breadcomb-area" id="Profile" style="display: none;">
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
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="col-form-label" value="<?php echo $profileData["email"];?>">
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
      <label for="validationDefault01">New password</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Confirm password</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="" required>
    </div>
  </div>
  <div class="form-buttons" >
  <button class="btn btn-primary" type="submit" id="Save" onclick="edit()">Save Changes</button>
  <button class="btn btn-primary" type="button" id="Reset">Reset password</button>
  </div>
</form>

    </div>


    </div>






    </div>
    
   
        
     <!-- end tables ares-->
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