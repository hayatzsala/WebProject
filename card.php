<?php
session_start();
if(isset($_SESSION["username"])){
header("Content-Type: application/json; charset=UTF-8");
// Create connection
$conn = new mysqli("localhost","root", "","oceanstars");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

$obj = $_GET["c"];
$tours=json_decode($obj);



$result = mysqli_query($conn,"INSERT INTO `booked`(`id`, `tourID`, `AirlineName`, `carID`, `hotelName`) VALUES ('".$_SESSION["id"]."','".$tours->tour."','".$tours->flight."','".$tours->car."','".$tours->hotel."')");
if ($result==false) {
  echo "error query";
}
else{
	echo "Your Package added in your profile successfully";
}
}

?>