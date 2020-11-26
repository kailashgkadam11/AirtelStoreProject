<?php
$servername = "localhost";
$username = "id12710932_kailash1";
$password = "kailash";
$dbname = "id12710932_db1";

// Create connection
$link = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
else{
	echo "connected successfuly";
}
?>