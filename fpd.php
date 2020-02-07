<?php 
require "library/fpdf.php";

class PDF extends FPDF{
		function header(){
			$this->Image('logo.jpg', 10,6);
			$this->SetFont('Arial', '8', 14);
			$this->Cell(276,5,'STUDENTS RECORD',0, 0,'C');
			$this->Ln();
			$this->SetFont('Times','B',12);
			$this->Cell(276,10,'Kenya Industrial Training Institute',0,0,'c');
			$this->Ln(20);
		}
		function footer(){
			$this->SetY(-15);
			$this->SetFont('Arial','B',8);
			$this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'c');
		}
	}

	$pdf = new FPDF();
	$pdf->AliasNbPages();
	$pdf->AddPage('p','A4', 0);
	$pdf->Output();


 ?>