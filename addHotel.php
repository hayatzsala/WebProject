<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oceanstars";


if (isset($_POST['name'])&&isset($_POST['stars'])&&isset($_POST['city'])&&isset($_POST['country'])&&isset($_POST['cbd'])){
    $name= $_POST['name'];
    $stars= $_POST['stars'];
    $city= $_POST['city'];
    $country= $_POST['country'];
    $cpd= $_POST['cbd'];

}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "INSERT INTO hotels (`name`,`stars`,`city`,`country`,`costPerDay`) VALUES ('$name','$stars','$city','$country','$cpd')";

if (mysqli_query($conn, $sql)) {
    //echo "Record deleted successfully";
    header("location: index-2.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>