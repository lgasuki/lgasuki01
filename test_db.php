<html>
<body>
	<h2>database query test</h2>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "123456";
	$dbname = "ICN";
	$name = $_GET['name'];

	$conn = new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_error) {
		die("connect failed:" . connect->error);
	} else {
		echo "connect success";
	}

	$sql = "SELECT name FROM ACL WHERE name='$name'";
	$rs = $conn->query($sql);
	if($rs->num_rows > 0) {
		while($rows = $rs->fetch_assoc()) {
			echo " <br> name" . $rows["name"];
		}
		echo "<br> get database success";
	} else {
		echo "<br> non result, but success";
	}
	$conn->close();
	?>
</body>
</html>