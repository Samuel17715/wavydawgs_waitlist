<?php
header("Access-Control-Allow-Origin: *");

// Report all errors
error_reporting(E_ALL);

require_once('server.php');

// //PDO Database Configuration
// $dbhost = 'localhost';	
// $dbname = 'wavydawgs_waitlist';
// $dbuser = 'root';	 
// $dbpass = '';

// //PDO Database Configuration
// $dbhost = 'wavydawgswaitlist-do-user-12485871-0.b.db.ondigitalocean.com';	
// $dbname = 'defaultdb';
// $dbuser = 'doadmin';	 
// $dbpass = 'AVNS_jJhWlL5vZ0m1RBTPUMf';

//PDO Database Configuration
$dbhost = 'localhost';
$dbname = 'wavydawgs_waitlist';
$dbuser = 'admin';
$dbpass = '95e5532b2f9faabe790786fa0bf2b29ae8ddb0abc0ce7613';

// Creating a object of PDODatabaseConnection Class
$pdo = new serverProcessing($dbhost, $dbname, $dbuser, $dbpass);

// Connect to the Database
$pdo->connect(); //If connection fails give error message and exit