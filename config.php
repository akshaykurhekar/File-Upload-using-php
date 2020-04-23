<?php
	$user='root';  // change this with your sql username
	$pass='root145';  // change passward  
    $dbname='filesOpe';
		
$conn = new PDO('mysql:host=localhost;dbname=filesOpe', $user, $pass);
	if (!$conn) {
		die("Connection failed: " . $conn->connect_error);
	}
  	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
?>
