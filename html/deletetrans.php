<!DOCTYPE html>
<head>
	<style>
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
                           font-size: 12px;
                           appearance: button;
                           color: black;
                           
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
	<center><h1 style="color:white;">Delete Details</h1></center>
<body>
	<form method="POST" action="submit7.php">
		
		<table>
<thead>
	<tr>
	<th>Tripcode</th>
	</tr>
</thead>

<tbody>

<tr>    <td><input type="text" name="a"/></td>

</tr>
</tbody>
</table>
	<br><br><br>
	<center><input type="submit" class="button" value="Delete"/></center>
<br><br><br>
</form>

<form method="POST" action="transition.php">
<center><input type="submit" class="button" value="Cust Details"/></center>
</form>

</body>

</html>