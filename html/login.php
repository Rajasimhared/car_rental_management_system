
<?php
	
	$user=$_POST['username'];
    $pass=$_POST['password'];
  	echo "hi";
  	$m= "0";
  	   
	$temp = "reddy";
	$comp = strcmp($user , $temp);
			if($comp=="0")
			{	echo "hello";
				$m = "1";
				break;
				
			}
		    
  if($m=="1")
	{
      			$dpass = "12345";
	//		$cont=$row['username'];
		
	   $i=strcmp($dpass,$pass);
	   if($i== "0")
	   {
	   	header('refresh:0, URl=home.php');
	   }
	 //  $j=1; 
/*		if($i=="0")
			{
				if($_SESSION['valid'])
					{
						echo"<h1 style='color:white;font-family:courier;position:fixed;right:400px;top:180px'> user already logged in!!</h1>";
						header('refresh:1.5,URl=home.php');
					}
				else{
						header('refresh:0,URl=home.php');
					
					}
					
			}
		else
		  {
			echo"<h1 style='color:white;font-family:courier;position:fixed;right:450px;top:180px'> incorrect password!!</h1>";	
			header('refresh:1.5,URl=first1.php');
		  }
	}
else
  {
	echo"<h1 style='color:white;font-family:courier;position:fixed;right:400px;top:180px'> sorry the user doesn't exist</h1>";	
	header('refresh:1.5,URl=first1.php');
  }
//	$link->close();
*/	
 ?>
