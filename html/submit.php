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
$v4 =$_POST['b'];
$v5 =$_POST['c'];
$v6 =$_POST['d'];
$v7 =$_POST['e'];
$v8 =$_POST['f'];

if(empty($v3)||empty($v4)||empty($v5)||empty($v6)||empty($v7)){
	echo "PLEASE FILL THE FULL FORM";
	header('refresh:2 , URL=updatecar.php');
}
else

}*/$sql= "SELECT car_num from car";
	$result = mysql_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result)){
		if($v3 == $row){
			echo "Not possible for booking Try again!";
			header('refresh:1, URL=updatecar.php');
		}
	}

	$sql = "INSERT into car(car_num,model,seat_capacity,fare_per_km,car_type,tripcode)  VALUES('$v3','$v4','$v5','$v6','$v7','$v8')";
	
	if($conn->query($sql) == FALSE)
	{
		echo "Not created";
	}
	else
	{
		echo"Created";
		header('refresh:1, URL=car1.php');
	}
}

mysqli_close($conn);
?>
