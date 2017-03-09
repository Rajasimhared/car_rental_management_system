<html>
	<title>Car Entry</title>
	<body style="background-color: #6B8E23;">
<br><br>
<!--	<style>
		table{
			border-collapse: collapse;
		}
		table, th{
			border: 2px solid black;
		}
		th{
			height:50px;
			font-size:20px;
		}
	</style>
		<table style="width:100%">
			<tr>
				<th>Car Number</th>
				<th>Model</th>
				<th>Capacity</th>
				<th>FareperKM</th>
				<th>Car Type</th>
			</tr>
		</table>
-->

</html>

<?php

echo"getting<br>";
$servername = "localhost";
$username = "root";
$password= "reddy";
$dbname = "CarRental";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn) {
	die("Connection failed: ". mysqli_connect_error());
}
$sql = "SELECT * FROM car";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
<html>

<table border="1px solid black">
<?php

 while($row = mysqli_fetch_assoc($result)) {
?>
	<tr><td>.<?php $row["car_num"] ?>.</td><td>.<?php $row["model"] ?>.</td></tr>;
<?php
} 
?>
</table>
</html>
}

else echo "0 results";

/*

if(mysqli_num_rows($result) > 0){
			echo"<table>";
			echo"<tr><th>Car Number</th><th>Model</th><th>Capacity</th><th>FareperKM</th><th>Car Type</th></tr>";
while($row = mysqli_fetch_assoc($result)){
			echo"<tr><td>";
			echo $row["car_num"];
			echo"</td><td>";
			echo $row["model"];
			echo"</td><td>";
			echo $row["seat_capacity"];
			echo"</td><td>";
			echo $row["fare_per_km"];
			echo"</td><td>";
			echo $row["car_type"];
			echo"</td></tr>";
				}
				echo "</table>";
/*$sql = "SELECT car_num, model FROM car";
$result = mysqli_query($conn, $sql);
*//*
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "car_number: " . $row["car_num"]. "<br>"." Model: " . $row["model"]."<br>";
    }
} else {
    echo "0 results";
}
*/
mysqli_close($conn);

?>
