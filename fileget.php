<html>
<body>
<h2>file get test</h2>
<?php
echo "in the file <br>";
$filename = realpath("welcome.txt");
echo file_get_contents($filename);
echo "<br> END!";
?>
</body>
</html>