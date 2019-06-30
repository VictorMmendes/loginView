<?php
	require("./cellfit/cellfit.php");

	$name = "";
	if(isset($_POST))
	{
		if(isset($_POST["name"]))
		{
			$name = $_POST["name"];
		}
	}

	$pdf = new FPDF_CellFit();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);

        $pdf->CellFitScale(40,6,$name,'C');
        $pdf->Cell(40,6,'Test','L',0,'C');
        $pdf->Cell(40,6,'adasd','L',0,'C');
        $pdf->Cell(40,6,'aadasd','LR',0,'C');
        $pdf->Ln();

	$pdf->Output();
?>