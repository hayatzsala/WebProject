<?php
session_start();

?>

<?php

 //include 'index.php'; 
// include database and object files
include_once 'config.php';
include_once 'user.php';
$table = "users";


// if(isset($_SESSION['id'])){
//     die(header("location: 404.php"));
// }

//if(isset($_SESSION['id'])){
  //  die(header("location: 404.php"));
//}


// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$user = new User($db);
// set ID property of user to be edited
$user->username = isset($_GET['username']) ? $_GET['username'] : die();
$user->password = isset($_GET['password']) ? $_GET['password'] : die();
// read the details of user to be edited
// if ($user->username == 'ghadeer.9816.ps@gmail.com'){
//        $_SESSION["username"];
//         $_SESSION["adminName"]=$row["Fname"].$row["Lname"];
//         $_SESSION["id"]=$row["id"];
//         header("location :index-2.php");
//     }
$stmt = $user->login();
if($stmt->rowCount() > 0){
    // get retrieved row
    // $_SESSION['username'] ='ghadeer.9816.ps@gmail.com';
    //$_SESSION['is_login'] = true;
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
<<<<<<< HEAD
    if ($user->username == 'ghadeer.9816.ps@gmail.com'){
      
      $_SESSION["adminName"]=$row["Fname"].$row["Lname"];
        $_SESSION["id"]=$row["id"];
=======
    if ($stmt->user->username == 'ghadeer.9816.ps@gmail.com'){
>>>>>>> origin/master
        header("location :index-2.php");
    }
    else{

      if($user->username==$row["email"]){

        $_SESSION["clientName"]=$row["Fname"].$row["Lname"];
        $_SESSION["id"]=$row["id"];
      }
    header("location: client1.php"); 
   // $_SESSION['clientName']=$
    echo "WELCOME" ;
    }
    // create array
    //$user_arr=array(
    //  "status" => true,
    //    "message" => "Successfully Login!",
    //    "id" => $row['id'],
        //"username" => $row['username']
       // loggedin= "yes";
      //  if($user->$username && password_verify($user->$password, $user['password'])){
        $_SESSION['username'] = $user->username;
        echo $_SESSION['username'];
     // if()
   // );
  // header("location: packages.php");
}
else{

    header("location: login-register.php");
  ///  $user_arr=array(
    //    "status" => false,
      //  "message" => "Invalid Username or Password!",
 //   );
}
// make it json format
print_r(json_encode($user_arr));
?>