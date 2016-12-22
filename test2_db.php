<html>
<body>
<h2>database query test</h2>
<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "ICN";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
	die("connect failed:" . $connect_error);
} else {
	echo " connected success";
}

$sql = "INSERT INTO ACL (name) VALUES ('test1.txt')";
$rs = $conn->query($sql);
if($rs) {
	echo " <br> INSERT data success";
} else {
	echo "<br> insert failed";
}
?>
</body>
</html>