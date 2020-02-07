<?php 


if(isset($_POST['search']))
{
	$valueToSearch = $_POST['valueToSearch'];
	$query = "SELECT * FROM `students` WHERE CONCAT( `studentname`, `email`, `phonenumber`, `schoolid`,`gender`, `roomnumber`)LIKE'%".$valueToSearch."%'";
	$search_result = filterTable($query);


}
else{
	$query = "SELECT * FROM `students`";
	$search_result = filterTable($query);

}

	function filterTable($query)
	{
		$connect = mysqli_connect("localhost","root","","project");
		$filter_Result = mysqli_query($connect, $query);
		return $filter_Result;
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>FILTER STUDENT RECORDS</title>
 	<style type="text/css">
 		table,tr,th,td
 		{
 			border: 1px solid black;
 		}
 		form
		{
			background-color: white;
			border: solid gray 5px;
			width: 60%;
			border-radius: 5px;
			margin: 100px auto;
			background: ;
			padding: 50px;
			alignment-baseline: central;


		}
		body
		{
			background-color:maroon ;
		}

 	</style>
 </head>
 <body>
 	
 <form action="filter.php" method="post">
 	<br>
 	<button style="float: right;"><a href="pdf.php">GENERATE PDF</a></button>
 	<br>
 	<input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
 	<input type="submit" name="search" value="Filter"><br><br>
 	<table>
 		<tr>
 			<th colspan="8"><h2>STUDENT RECORDS</h2></th>
 			
 		</tr>
 		<tr>
 			
 			<th>STUDENT NAME</th>
 			<th>EMAIL</th>
 			<th>PHONE NUMBER</th>
 			<th>SCHOOL ID NO</th>
 			<th>GENDER</th>
 			<th>ROOM NO</th>
 			

 		</tr>
 		<?php  while($row = mysqli_fetch_array($search_result)):

 		?>
 		<!-- Record Display from the database -->
 		<tr>
 			
 			<td><?php echo $row['studentname']; ?></td>
 			<td><?php echo $row['email']; ?></td>
 			<td><?php echo $row['phonenumber']; ?></td>
 			<td><?php echo $row['schoolid']; ?></td>
 			<td><?php echo $row['gender']; ?></td>
 			<td><?php echo $row['roomnumber']; ?></td>
 			
 		</tr>
 	<?php  endwhile;?>
 	</table>
 </form>

 </body>
 </html>