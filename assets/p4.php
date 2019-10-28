<?php

include ("jpgraph-4.0.1/jpgraph-4.0.1/src/jpgraph.php");
include ("jpgraph-4.0.1/jpgraph-4.0.1/src/jpgraph_pie.php");
include ("jpgraph-4.0.1/jpgraph-4.0.1/src/jpgraph_pie3d.php");
$db = mysql_connect("localhost", "root","") or die(mysql_error());
mysql_select_db("mahasiswa",$db) or die(mysql_error());
$sql = mysql_query("SELECT jurusan, jmlmhs FROM daftarmhs") or die(mysql_error());
while($row = mysql_fetch_array($sql))
{
$data[] = $row[1];
$leg[] = $row[0];
}
$graph = new PieGraph(700 ,800,"auto");
$graph->SetScale('textint');
$graph->img->SetMargin(100,30,150,150);
$graph->SetShadow();
$graph->title->Set("Grafik Pie Chart 3 Dimensi");
$bplot = new PiePlot3D($data);
$bplot->SetCenter(0.50);
$bplot->SetLegends($leg);
$graph->Add($bplot);
$graph->Stroke();

?>