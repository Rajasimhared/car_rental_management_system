<!DOCTYPE html>
<html>
	<title>Car Entry</title>

<br><br>
<head>
	<style>
		table{
		width:100%;	
		border-collapse: collapse;
		text-align: center;
        	
    	}
		table, td, tr, th{
			border: 2px solid black;
            color: black;
		}
		th, td, tr{
			align:"center";
			height:30px;
			font-size:22px;
		}

 .button {
                  position:absolute;
                  background-color:#e7e7e7;
                 border:none;
                 width:100px;
                 color: #555555;
                 padding: 15px 32px;
                 text-align: center;
                 text-decoration: none;
                display: inline-block;
                 font-size: 20px;
                appearance: button;
                 color: black;
                 left: 80px;
  
        }


 .button1 {
                  position:absolute;
                  background-color:#e7e7e7;
                 border:none;
                 width:100px;
                 color: #555555;
                 padding: 15px 32px;
                 text-align: center;
                 text-decoration: none;
                display: inline-block;
                 font-size: 20px;
                appearance: button;
                 color: black;
                 left: 780px;
  
        }

        html { 
     background: url(c2.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;

}

	</style>
</head>
<body>	
<div style="background-color: white">
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
$sql = "SELECT * FROM car";
$result = mysqli_query($conn, $sql);

 if (mysqli_num_rows($result) > 0 )
{
echo "<table><tr><th>Car Number</th><th>Model</th><th>Seat Capacity</th><th>Fare per KM</th><th>Car Type</th><th>Tripcode</th></tr>";

 while($row = mysqli_fetch_assoc($result)) {
	echo "<tr><td>" . $row["car_num"] . "</td><td>" . $row["model"] . "</td><td>" . $row["seat_capacity"] . "</td><td>" . $row["fare_per_km"] . "</td><td>" . $row["car_type"]. "</td><td>". $row["tripcode"]."</td></tr>";
} 

echo "</table>";
}

else
echo "0 results";

mysqli_close($conn);

?>
</div>
<br><br><a href="updatecar.php" class="button">Update</a>
<a href="deletecar.php" class="button1">Delete</a><br><br><br><br><br>

</body>

</html>
