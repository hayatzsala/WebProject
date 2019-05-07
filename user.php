<?php

// include 'index.php'; 

class User{

 

    // database connection and table name

    private $conn;

    public $table_name="users" ;

 

    // object properties

   public $id;

    public $username;

    public $password;

   // public $created;

 

    // constructor with $db as database connection

    public function __construct($db){

        $this->conn = $db;

    }

    // signup user



    // login user

    

    

    // a function to check if username already exists

    function signup(){



        $table_name = "users";



        if($this->isAlreadyExist()){

            return false;

        }

        // query to insert record





        $this->password = md5($this->password);

        $query = "INSERT INTO users (`Fname`, `Lname`, `id`, `password`, `birthdate`, `gender`, `phone-no`, `email`,`nationality`,`role`,`status`) VALUES (DEFAULT,DEFAULT,DEFAULT,'$this->password',DEFAULT,DEFAULT,DEFAULT,'$this->username',DEFAULT,DEFAULT,DEFAULT)";





        // prepare query

        $stmt = $this->conn->prepare($query);

        // sanitize

        $this->username=htmlspecialchars(strip_tags($this->username));

        $this->password=htmlspecialchars(strip_tags($this->password));

        //$this->created=htmlspecialchars(strip_tags($this->created));

        // bind values

        $stmt->bindParam(":username", $this->username);

        $stmt->bindParam(":password", $this->password);

        // execute query

        if($stmt->execute()){

            $this->id = $this->conn->lastInsertId();

            if(!empty($this->id)){

            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."activate.php?id=" . $this->id;

            $toEmail = $_POST['username'];

            $subject = "User Registration Activation Email";

            $content = "Click this link to activate your account. <a href='" . $actual_link . "'>" . $actual_link . "</a>";

            $mailHeaders = "From: Admin\r\n";

            if(mail($toEmail, $subject, $content, $mailHeaders)) {

                $message = "You have registered and the activation mail is sent to your email. Click the activation link to activate you account."; 

                $type = "success";

            }

            unset($_POST);

            } //empty

            else {

                $message = "Problem in registration. Try Again!";   

            } //if else empty

        } //execute

            else {

                //$message = "User Email is already in use."; 

                //$type = "error";

                return true;

            }  

            

        return false;

        

    }

    function login(){
        // select all query
        
        $this->password = md5($this->password);

        if($this ->username == "ghadeer.9816.ps@gmail.com") {
            $table_name = "admins";
        }
        else 
        {
            $this->table_name = "users";
        }
        
        
        $query = "SELECT


                   `id`, `email`, `password`, `Fname`, `Lname`, `birthdate`, `gender`, `phone-no`, `nationality`, `role`

                FROM
                    ". $this->table_name . " 
                WHERE
                    email='".$this->username."' AND password='".$this->password."'";
        // prepare query statement
        
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
    }

    function isAlreadyExist(){
        //if ()
        $query = "SELECT*
            FROM
                " . $this->table_name. " 
            WHERE
                email='".$this->username."'";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return true;
        }
        else{
            return false;
        }
    }

}