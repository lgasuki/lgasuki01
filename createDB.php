<?php
$servername = "localhost";
$username = "root";
$password = "123456";

$conn = new mysqli($servername, $username, $password);
if($conn->connect_error) {
	die("connect failed:" . $connect_error);
} else {
	echo "success!";
}

$sql = "CREATE DATABASE myDB";
if($conn->query($sql)) {
	echo "create database myDB successfully";
} else {
	echo "ERROR creating database:" . $conn->error;
}
$coon->close();


?>