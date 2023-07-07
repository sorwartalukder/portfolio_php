<?php

// Set the database connection parameters.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

// Create a connection to the database.
$db_conn = new mysqli($servername, $username, $password, $dbname);

// // Check if the connection was successful.
if ($db_conn->connect_error) {
  die("Connection failed: " . $db_conn->connect_error);
}


?>