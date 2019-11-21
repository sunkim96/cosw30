<?php
// Create environment variables
$hostname   = getenv('DB_HOSTNAME');
$dbname   = getenv('DB_NAME_CONS');
$password   = getenv('DB_PW_CLASS');
$username     = getenv('DB_USERNAME_CLASS');
// Establish the connection to the database
$connection = mysqli_connect($hostname, $username, $password, $dbname);
?>