<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oceanstars";


if (isset($_POST['name'])&&isset($_POST['cost'])&&isset($_POST['rate'])&&isset($_POST['date'])&&isset($_POST['dayno'])&&isset($_POST['city'])&&isset($_POST['country'])){
    $name= $_POST['name'];
    $cost= $_POST['cost'];
    $rate= $_POST['rate'];
    $date= $_POST['date'];
    $dayno= $_POST['dayno'];
    $city= $_POST['city'];
    $country= $_POST['country'];
}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "INSERT INTO tours (`name`,`cost`,`rate`,`tourDate`,`dayNo`,`City`,`Country`) VALUES ('$name','$cost','$rate','$date','$dayno','$city','$country')";

if (mysqli_query($conn, $sql)) {
    //echo "Record deleted successfully";
    header("location: index-2.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>