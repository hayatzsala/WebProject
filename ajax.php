<?php 
$conn=mysqli_connect("localhost","root","","oceanstars");
if($conn->connect_error){
    die("Connection Failed:".$conn->connect_error);
}
            if(isset($_POST['fname'])&& isset($_POST['lname'])&&isset($_POST['no'])&& isset($_POST['birthdate'])&&isset($_POST['email'])) {
            $name = mysqli_escape_string($_POST['fname']);
            $last = mysqli_escape_string($conn,$_POST['lname']);
            $no= mysqli_escape_string($conn,$_POST['no']);
            $bd = mysqli_escape_string($conn,$_POST['birthdate']);
            $email= mysqli_escape_string($conn,$_POST['email']);

            $result=mysqli_query($conn,"SELECT * FROM `admins` WHERE id=`0`");
            if(mysqli_num_rows($result) > 0){
                                       
                $sql = "UPDATE admins set Fname = '".$name."', Lname = '".$last."', phone-no = '".$no."', birthdate = '".$bd."', email = '".$email."'";
               }
               else {
                   echo "0 result";
               }
               $conn ->close();
            }
?>