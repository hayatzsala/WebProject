<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oceanstars";


if (isset($_POST['name'])&&isset($_POST['from'])&&isset($_POST['to'])&&isset($_POST['date'])&&isset($_POST['time'])&&isset($_POST['cost'])){
    $name= $_POST['name'];
    $from= $_POST['from'];
    $to= $_POST['to'];
    $date= $_POST['date'];
    $time= $_POST['time'];
    $cost= $_POST['cost'];
}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "INSERT INTO flights (`AirlineName`,`ContFrom`,`ContTo`,`Date`,`Time`,`cost`) VALUES ('$name','$from','$to','$date','$time','$cost')";

if (mysqli_query($conn, $sql)) {
    //echo "Record deleted successfully";
    header("location: index-2.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>