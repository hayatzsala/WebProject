<?php



//session_start();

//if(isset($_SESSION['id'])){

 //   die(header("location: 404.php"));

//}



 // include 'index.php'; 

// get database connection

include_once 'config.php';

 

// instantiate user object

include_once 'user.php';

 

$database = new Database();

$db = $database->getConnection();

 

$user = new User($db);

if(isset($_POST['username']) && !empty($_POST['username']) AND isset($_POST['pass']) && !empty($_POST['pass']) AND isset($_POST['password']) && !empty($_POST['password'])){

  $pass1=$_POST['password'];

  $pass2=$_POST['pass'];

  $email= $_POST['username'];

  if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email) AND ($pass1==$pass2)){

    // Return Error - Invalid Email

    $msg = 'The email you have entered is invalid, please try again.';

}

else{

    // Return Success - Valid Email

    $user->username = $_POST['username'];

    $user->password =$_POST['password'];

    $msg = 'Your account has been made, <br /> please verify it by clicking the activation link that has been send to your email.';

}

}

else {

  $user_arr=array(

    "status" => false,

    "message" => "check your password!"

);

}



// set user property values

//$user->username = $_POST['username'];

//$user->password = $_POST['password'];

//$user->created = date('Y-m-d H:i:s');

 

// create the user





if($user->signup()){

    

   // $_SESSION['email'] = $email;

    header("location: index.php");

  //  $user_arr=array(

    //    "status" => true,

    //   "message" => "Successfully Signup!",

    //   "id" => $user->id,

  //     "username" => $user->username

   // );

}

else{

  header("location: login-register.php");

    $user_arr=array(

     

        "status" => false,

        //"message" => "Username already exists!"

        

    );

}

print_r(json_encode($user_arr));

?>