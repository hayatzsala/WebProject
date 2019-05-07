<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oceanstars";


if (isset($_POST['idf'])){
    $id= $_POST['idf'];

}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM `flights` WHERE `AirlineName`= '$id'";

if (mysqli_query($conn, $sql)) {
    //echo "Record deleted successfully";
    header("location: index-2.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>