<?php
	$server = "localhost";
	$username = "guest";
	$password = "guest@123";
	//$dbname = "test";
	$dbname = "indian_science";

// Create connection
	try{
		$conn = new PDO("mysql:host=$server;dbname=$dbname","$username","$password");
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		die('Unable to connect with the database');
	}
