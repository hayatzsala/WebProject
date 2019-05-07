<?php
<<<<<<< HEAD

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "oceanstars";





if (isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['message'])){

    $name= $_POST['name'];

    $email= $_POST['email'];

    $message= $_POST['message'];

    

}



// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}



// sql to delete a record

$sql = "INSERT INTO emails (`name`,`email`,`message`) VALUES ('$name','$email','$message')";



if (mysqli_query($conn, $sql)) {

    //echo "Record deleted successfully";

    header("location: index.php");

} else {

    echo "Error deleting record: " . mysqli_error($conn);

}



mysqli_close($conn);

=======
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oceanstar";


if (isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['message'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['message'];
    
}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "INSERT INTO emails (`name`,`email`,`message`) VALUES ('$name','$email','$message')";

if (mysqli_query($conn, $sql)) {
    //echo "Record deleted successfully";
    header("location: index.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
>>>>>>> origin/master
?>