<?php
session_start();
$conn=mysqli_connect("localhost","root","","oceanstars");
             if($conn->connect_error){
                 die("Connection Failed:".$conn->connect_error);
               }
               // $obj1=$_GET["y"];
               // $patra1=json_decode($obj);
               // $stmt = mysqli_query($conn, "UPDATE `users` SET `Fname`='".$_GET["Fname"]."',`Lname`='".$_GET["Lname"]."',`birthdate`='".$_GET["birthdate"]."',`phone-no`='".$_GET["phone-no"]."' WHERE `email`='".$_SESSION["username"]."'");
            	$obj = $_GET["n"];
				$patra=json_decode($obj);
				$email=$patra->Fname;
				$pass=$patra->oldPassword;
				$pass=md5($pass);
				 $stmt = mysqli_query($conn,"SELECT  `password` FROM `users` WHERE `email`='".$email."'" );

                // $stmt = mysqli_query($conn, "UPDATE `users` SET `passwoe`='".$_GET["Fname"]."',`Lname`='".$_GET["Lname"]."',`birthdate`='".$_GET["birthdate"]."',`phone-no`='".$_GET["phone-no"]."' WHERE `email`='".$email."'");

               if($stmt){
               	//echo "trueee";
               	$row=mysqli_fetch_assoc($stmt);
               	if($pass==md5($row["password"])){
               		$newPass=md5($patra->newPassword);
                  
               		$result = mysqli_query($conn, "UPDATE `users` SET `password`='".$newPass."' WHERE `email`='".$email."'");

                  echo "changeed";
               	}
               }
               else{
               	echo "faaaaaalse";
               }


?>