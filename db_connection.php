<?php
session_start();

// initializing variables
$password = "";
$email    = "";
$errors = array(); 

// connect to the database


// REGISTER USER
if (isset($_POST['register'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['fn']);
  $lastname = mysqli_real_escape_string($db, $_POST['ln']);
  $email = mysqli_real_escape_string($db, $_POST['remail']);
  $password_1 = mysqli_real_escape_string($db, $_POST['rpass']);
  $password_2 = mysqli_real_escape_string($db, $_POST['cpass']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) { array_push($errors, " required"); }
  if (empty($lasttname)) { array_push($errors, " required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM clients WHERE email='$email' OR password='$password' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }


  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO clients (Fname,Lname ,username,password,birthdate,gender,phone-no,email) 
  			  VALUES('$firstname', '$lastname','' ,'$password','','','','$email')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}
}

if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($db, $_POST['remail']);
  $password = mysqli_real_escape_string($db, $_POST['rpass']);

  if (empty($email)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  $check_email_query="select * from users WHERE email='$email'";
  $run_query=mysqli_query($db,$check_email_query);

  if(mysqli_num_rows($run_query)>0)
  {

      echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
      exit();
  }
//insert the user into the database.
  $insert_user="insert into clients (fname,lname,username,password,birthdate,gender,phone-no,email) VALUE ('$user_name','$user_pass','$user_email','$age')";
  if(mysqli_query($dbcon,$insert_user))
  {
      echo"<script>window.open('welcome.php','_self')</script>";
  }



}


  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM clients WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
    }
    else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }

?>
