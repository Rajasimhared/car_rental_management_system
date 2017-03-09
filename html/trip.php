<!DOCTYPE html>
<html>
<head>
	<title>Trip details</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password= "reddy";
$dbname = "carrental";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn) {
	die("Connection failed: ". mysqli_connect_error());
}
//$i = 1;
$sql= "SELECT transit.tripcode,car_num,model,customer.customer_id,customer.Name,customer.Address,driver_id,driver.Name FROM car,customer,driver,transit WHERE car.tripcode & driver.tripcode = '1'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0 )
{
	echo $row["transit.tripcode"]. $row["car_num"]. $row["model"]. $row["customer.customer_id"]. $row["customer.Name"]. $row["customer.Address"].  $row["driver_id"]. $row["driver.Name"];
}

else
echo "0 results";

mysqli_close($conn);
?>
</body>
</html>