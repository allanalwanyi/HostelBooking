 <!-- Students Record generation  -->
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Fetch Students Details From Database</title>
 	<style type="text/css">
 		body
 		{
 			background-color: brown;
 		}
 		table
 		{
 			background-color: white;
 			border: solid black 5px;

 		}
 	</style>
 </head>
 <body>
 	<br>
 	<div class="container">
 		<!-- Generating pdf link -->

 	<button style="float: right;"><a href="pdf.php">GENERATE PDF</a></button>
 	<br>
 	<br>
 	<button style="float:right;"><a href="filter.php">FILTER RECORDS</a></button>
 	<br>
 	<table align="center" border="1px" style="width: 900px; line-height:25px; font-size: 15px; height:">
 		<tr>
 			<th colspan="8"><h2>STUDENT RECORDS</h2></th>
 			
 		</tr>
 		<tr style="font-size: 13px;">
 			<th>STUDENT NAME</th>
 			<th>EMAIL</th>
 			<th>PHONE NUMBER</th>
 			<th>SCHOOL ID NO</th>
 			<th>GENDER</th>
 			<th>ROOM</th>

 		</tr>
 		<?php 

 			$conn = mysqli_connect("localhost","root","","project");
 			if ($conn-> connect_error) {
 				die("Connection failed:". $conn-> connect_error);
 			}

 			$sql = "SELECT * from students";
 			$result = mysqli_query($conn,$sql);
 			$number_of_rows = mysqli_num_rows($result);
 			if ($number_of_rows > 0) {
 				while ($row = mysqli_fetch_assoc($result)) {
 					extract($row);
 					echo "<tr>
	 						<td>$studentname</td>
	 						<td>$email</td>
	 						<td>$phonenumber</td>
	 						<td>$schoolid</td>
	 						<td>$gender</td>
	 						<td>$roomnumber</td>
 					</tr>";
 				}
 				echo "<table>";
 			}
 			else {
 				echo "0 result";
 			}
 			$conn-> close();

  		?>

 	</table>
 	</div>
 	<br>
 	<br>
 </body>
 </html>