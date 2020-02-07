<?php 
/**
 * Created by PhpStorm.
 * User: Allan
 * Date: 18/10/2019
 * Time: 11:20am
 */
	$con = mysqli_connect("localhost","root","","project");
	// create connection with db
	if(!$con)
		echo "Could Not Connect to mysql server";

	// select db
	if (!mysqli_select_db($con,'project')) 
	{
		echo "Database Not Selected";
	}

	// select query
	$sql = "SELECT * FROM students";

	// execute the sql
	$records = mysqli_query($con,$sql);

	require("library/fpdf.php");

	class PDF extends FPDF{
		function Header(){
			$this->SetFont('Arial', 'B',15);
			$this->Cell(100,10,'Emobilis');
		}
	}


	$pdf = new FPDF('p', 'mm', 'A4');

	$pdf->AddPage();

	$pdf->SetFont('Arial', 'B', 10);

	
	$pdf->cell(10,7, "ID", 1, 0, 'c');
	$pdf->cell(35,7, "STUDENT NAME", 1, 0, 'c');
	$pdf->cell(47,7, "EMAIL", 1, 0, 'c');
	$pdf->cell(31,7, "PHONE NUMBER", 1, 0, 'c');
	$pdf->cell(28,7, "SCHOOL ID NO", 1, 0, 'c');
	$pdf->cell(18,7, "GENDER", 1, 0, 'c');
	$pdf->cell(20,7, "ROOM NO", 1, 1, 'c');
	
	$pdf->setFont('Arial', '', 9);

	while($row = mysqli_fetch_array($records))
	{
		$pdf->cell(10, 7, $row['id'], 1, 0,'c');
		$pdf->cell(35, 7, $row['studentname'], 1, 0,'c');
		$pdf->cell(47, 7, $row['email'], 1, 0,'c');
		$pdf->cell(31, 7, $row['phonenumber'], 1, 0,'c');
		$pdf->cell(28, 7, $row['schoolid'], 1, 0,'c');
		$pdf->cell(18, 7, $row['gender'], 1, 0,'c');
		$pdf->cell(20, 7, $row['roomnumber'], 1, 1,'c');
		
	}
	

	$pdf->Output();



 ?>