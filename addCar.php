<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oceanstars";


if (isset($_POST['name'])&&isset($_POST['year'])&&isset($_POST['ppd'])&&isset($_POST['cap'])){
    $name= $_POST['name'];
    $year= $_POST['year'];
    $ppd= $_POST['ppd'];
    $cap= $_POST['cap'];

}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "INSERT INTO cars (`ModelName`,`ModelYear`,`PricePerDay`,`Capacity`) VALUES ('$name','$year','$ppd','$cap')";

if (mysqli_query($conn, $sql)) {
    //echo "Record deleted successfully";
    header("location: index-2.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>