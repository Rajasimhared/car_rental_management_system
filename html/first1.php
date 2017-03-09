<!DOCTYPE html>
<head>
	<style>
		/*body {background-color: #6B8E23;
			background-repeat: no-repeat;
			width: 1450px;
			height: 750px;
		}*/
		html { 
 	 background: url(carrent.jpeg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
		.button {
                           position:absolute;
                           background-color:#e7e7e7;
                           border:none;
                           width:100px;
                           color: #555555;
                           padding: 15px 25px;
                           text-align: center;
    	                   text-decoration: none;
                           display: inline-block;
                           font-size: 15px;
                           appearance: button;
                           color: black;
                           
}
</style>
</head>
	<center><h1 style="color:white;">Car Rental Management System</h1></center>
	<center><h3 style="color:white;">Login</h3></center>
<body>
	<form method="POST" action="home.php">
	
	<label><b><font color="white">Username</font></b></label>
	<input type="text" placeholder="Enter Username" name="username"/>	

	<label><b><font color="white">Password</font></b></label>
	<input type="Password" placeholder="Enter Password" name="password"/>	
	<br><br><br>
	<center><input type="submit" class="button" value="Login"/></center>
<br><br><br>
</form>
</body>
</html>
