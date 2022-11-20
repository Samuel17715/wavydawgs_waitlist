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
$dbhost = '159.89.90.119';
$dbname = 'wavydawgs_waitlist';
$dbuser = 'admin';
$dbpass = 'e720860c4ec340ac4b43ae6e5b793e150d1b406628370f16';

// Creating a object of PDODatabaseConnection Class
$pdo = new serverProcessing($dbhost, $dbname, $dbuser, $dbpass);

// Connect to the Database
$pdo->connect(); //If connection fails give error message and exit