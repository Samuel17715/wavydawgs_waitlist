<?php
	header("Access-Control-Allow-Origin: *");
	
	// Report all errors
	error_reporting(E_ALL);

	require_once ('server.php');

    //PDO Database Configuration
	$dbhost = 'localhost';	
	$dbname = 'wavydawgs_waitlist';
	$dbuser = 'root';	 
	$dbpass = '';

	// Creating a object of PDODatabaseConnection Class
	$pdo = new serverProcessing($dbhost, $dbname, $dbuser, $dbpass);

    // Connect to the Database
	$pdo->connect(); //If connection fails give error message and exit