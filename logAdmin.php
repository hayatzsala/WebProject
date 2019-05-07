<!DOCTYPE html>

<?php 
session_start();
///if(isset($_SESSION['id'])){
   // die(header("location: 404.php"));
//}


?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ٍSign in</title>
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
      <link rel="stylesheet" href="./style.css">
  
</head>
<body>
  <div class="login-wrap">
  <div class="login-html">
  
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form class="sign-in-htm" action="login.php" method="GET">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input">
          <?php  $_SESSION['username']="ghadeer.9816.ps@gmail.com" ;

          ?>
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group"><a href="index-2.php">
          <input type="button" class="button" value="Sign In"></a>
        </div>
        <div class="hr"></div>
       
      </form>
        </div>
  </div>
</div>
  
  
</body>
</html>

<?php


?>

