<?php

$username = "localhost";
$username = "root";
$password = "reddy";
$dbname = "carrental";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$v3 =$_POST['a'];

if(empty($v3)){
	echo "Please fill all the info";
	header('refresh:1 , URL=deletedri.php');
}
else
{
$sql = "delete from driver where driver_id='$v3'";

if($conn->query($sql) == FALSE)
{
echo "Failed to Remove";
}
else
header('refresh:0, URL=driver.php');
}

mysqli_close($conn);
?>
