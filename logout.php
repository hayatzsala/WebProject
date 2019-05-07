<?php
session_start();
// if(!isset($_SESSION['username'])){
//    header("Location:index.php");
// }
// session_start();
session_unset();
session_destroy();
header("location: index.php");
exit();
?>