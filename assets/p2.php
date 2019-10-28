<?php
include ("jpgraph-4.0.1/jpgraph-4.0.1/src/jpgraph.php");
include ("jpgraph-4.0.1/jpgraph-4.0.1/src/jpgraph_line.php");
$db = mysql_connect("localhost", "root","") or die(mysql_error());
mysql_select_db("mahasiswa",$db) or die(mysql_error());
$sql = mysql_query("SELECT jurusan, jmlmhs FROM daftarmhs") or die(mysql_error());
while($row = mysql_fetch_array($sql))
{
$data[] = $row[1];
$leg[] = $row[0];
}
$graph = new Graph(1500,750,"auto");
$graph->SetScale('textint');
$graph->img->SetMargin(50,30,50,50);
$graph->SetShadow();
$graph->title->Set("Grafik Garis");
$graph->xaxis->SetTickLabels($leg);
$bplot = new LinePlot($data);
$bplot->value->Show();
$bplot->value->SetFont(FF_ARIAL,FS_BOLD);
$bplot->value->SetAngle(45);
$bplot->SetLegend("Banyak data");
$graph->Add($bplot);
$graph->Stroke();	
?>
