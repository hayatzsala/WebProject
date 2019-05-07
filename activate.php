<?php
    require_once("config.php");
    public $conn;
	public function __construct($db){
        $this->conn = $db;
    }
	if(!empty($_GET["id"])) {
	$query = "UPDATE users set status = 'active' WHERE id='" . $_GET["id"]. "'";
	$result = $conn->updateQuery($query);
		if(!empty($result)) {
			$message = "Your account is activated.";
		} else {
			$message = "Problem in account activation.";
		}
	}
?>