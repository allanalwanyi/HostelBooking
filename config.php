<!-- connection to 'reset' database -->
<?php 

 	$conn = mysqli_connect("localhost","root","","project");
 	if(mysqli_connect_errno())
 	{
 		echo "Failed To Connect:" . mysqli_connect_errno();
 	}



 ?>