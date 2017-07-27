<?php
  require ('fpdf.php');
  require'connect.inc.php';
  $pdf = new FPDF();
  $pdf->AddPage();
  $pdf->SetFont('Arial','',15);
  $pdf->Write(15, 'M Com PG Admission Rank List');
  $pdf->Ln();
  $pdf->SetFontSize(10);
  $pdf->Write(5, 'Commerce Department NASC ');
  $pdf->Ln();

  $pdf->Ln(5);
  $pdf->SetFont('Arial', 'B', 10);
  $pdf->Cell(20 ,7,'Rank', 1);
  $pdf->Cell(60 ,7,'Name', 1);
  $pdf->Cell(35 ,7,'Application No', 1);
  $pdf->Cell(35 ,7,'Category', 1);
  $pdf->Cell(35,7,'Final Score',1);
  $pdf->Ln();
  $pdf->SetFont('Arial', '', 10);

  $query = "SELECT * FROM data ORDER BY fs DESC";
  $result=mysql_query($query) or die(mysql_error());

  if ($result) {

    $num=mysql_num_rows($result);
    if ($num) {

      $i =1;
      while ($res=mysql_fetch_array($result)) {

        $pdf->Cell(20 ,7,$i, 1);
        $pdf->Cell(60 ,7,$res['name'], 1);
        $pdf->Cell(35 ,7,$res['appno'], 1);

        if($res['caste'] == 1)
          $caste = "General";
        elseif($res['caste'] == 2)
          $caste = "OBC";
        elseif($res['caste']==3)
          $caste = "OEC";
        elseif($res['caste']==4)
          $caste = "SC";
        elseif($res['caste']==5)
          $caste = "ST";
        else
          $caste = "No data";

        $pdf->Cell(35 ,7,$caste, 1);
        $pdf->Cell(35,7,$res['fs'],1);
        $pdf->Ln();
        $i++;
      }
    }
  }
  $pdf->Output();
exit;
?>
