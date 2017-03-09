<!DOCTYPE html>
<html>
	<title>Trip Details</title>

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
     background: url(t1.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

  table, td, tr, th{
            border: 2px solid white;
            color: white;
        }
	</style>
</head>
<body>
<center><h1 style="color:white;">Trip Details</h1></center>

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
$sql = "SELECT * FROM transit";
$result = mysqli_query($conn, $sql);

 if (mysqli_num_rows($result) > 0 )
{
echo "<table><tr><th>Tripcode</th><th>Date</th><th>PickupTime</th></th><th>Pickup Point</th><th>Drop Point</th><th>Distance</th></tr>";

 while($row = mysqli_fetch_assoc($result)) {
	echo "<tr><td>" . $row["tripcode"] . "</td><td>" . $row["Date"] . "</td><td>" .$row["Ptime"]."</td><td>" . $row["pickup_point"] . "</td><td>" . $row["drop_point"] . "</td><td>" . $row["distance"]. "</td></tr>";
} 

echo "</table>";
}

else
echo "0 results";

mysqli_close($conn);
?>

<br><br><a href="updatetrans.php" class="button">Update</a>
<a href="deletetrans.php" class="button1">Delete</a><br><br><br><br><br>


</body>

</html>
