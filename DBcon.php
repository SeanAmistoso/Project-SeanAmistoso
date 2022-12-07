<?php

$servername="localhost";
$username="root";
$password="";
$dbname="Employees";
$port = 3306;

$con = mysqli_connect($servername, $username, $password, $dbname, $port);
if (!con) {
	die("Connection Failed: " . mysqli_connect_error());
}

?>