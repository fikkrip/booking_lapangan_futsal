<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "mahasiswa";

$conn = mysql_connect($host, $user, $pass);
if ($conn)
{
    $open = mysql_select_db($dbnm);
    if (!$open) 
    {
        die ("Database tidak dapat dibuka karena".mysql_error());
    }
} 
else 
{ 
    die ("Server MySQL tidak terhubung karena ".mysql_error());
}
$query = "SELECT * FROM daftarmhs ORDER BY id";
$sql = mysql_query ($query);
$data = array();
while ($row = mysql_fetch_assoc($sql)) 
{ 
    array_push($data, $row);
}
$judul = "Tabel Rekapitulasi Mahasiswa:";
$header = array( array("label"=>"No", "length"=>10, "align"=>"C"), array("label"=>"Jurusan", "length"=>100, "align"=>"C"), array("label"=>"Jumlah Mahasiswa", "length"=>80, "align"=>"C") );

include_once ("fpdf181/fpdf.php");
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B','16');
$pdf->Cell(0,20, $judul, '0', 1, 'L');

$pdf->SetFont('Arial','B','10');
$pdf->SetFillColor(255,255,50);
$pdf->SetTextColor(0);
$pdf->SetDrawColor(0);
foreach ($header as $kolom) 
{
    $pdf->Cell($kolom['length'], 10, $kolom['label'], 1, '0', $kolom['align'], true);
}
$pdf->Ln();

$pdf->SetFillColor(255,255,100);
$pdf->SetTextColor(0);
$pdf->SetFont('');
$fill=false;
foreach ($data as $baris) 
{
    $i = 0;
    foreach ($baris as $cell) 
    {
        $pdf->Cell($header[$i]['length'], 10, $cell, 1, '0', $kolom['align'], $fill);
        $i++;
    }
    $fill = !$fill;
    $pdf->Ln();
}

$pdf->Output();
?>