<html>
<title>Car Entry</title>
</html>
<?php

echo"getting<br>";
$servername = "localhost";
$username = "root";
$password= "";
$dbname = "CarRental";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
mysqli_close($conn);

?>
