<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
	die("connect failed:" . $connect_error);
} else {
	echo "connect success."
}

$sql = "CREATE TABLE quest(
		id INT(6),
		name CHAR(5) NOT NULL
		)";

if($conn->query($sql)) {
	echo "create table quest in myDB success.";
} else {
	echo "ERROR creating table :" . $conn->error;
}
$conn->close();
?>