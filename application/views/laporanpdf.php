 <?php
   $this->load->library('fpdf');
   $this->fpdf->FPDF("P","cm","A5");
   // kita set marginnya dimulai dari kiri, atas, kanan. jika tidak diset, defaultnya 1 cm  
   $this->fpdf->SetMargins(1,1,1);
   /* AliasNbPages() merupakan fungsi untuk menampilkan total halaman
   di footer, nanti kita akan membuat page number dengan format : number page / total page
   */
   $this->fpdf->AliasNbPages();
   // AddPage merupakan fungsi untuk membuat halaman baru
  $this->fpdf->AddPage();
  // Setting Font : String Family, String Style, Font size
$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',32);
$this->fpdf->Cell(13,0,"Fakusa Sport Center",0,'C','C');
$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',10);  
$this->fpdf->Cell(13,2,'Jalan Raya Galaxy Permai Raya XX, Sukolilo',0,'C','C');
  $this->fpdf->Ln();
 $this->fpdf->Cell(13,-1,'Kota Surabaya',0,'C','C');
 $this->fpdf->Line(0,3.5,20,3.5);
$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',13);  
$this->fpdf->Cell(2,5,"Kode Sewa : ".$query[0]['kode_sewa'],0,'L','L');
$this->fpdf->Ln();  
$this->fpdf->Cell(2,-4,"Username : ".$query[0]['username'],0,'L','L');
$this->fpdf->Ln();  
$this->fpdf->Cell(2,5,"Tanggal Sewa : ".$query[0]['tgl_sewa'],0,'L','L');
$this->fpdf->Ln();  
$this->fpdf->Cell(2,-4,"Nama Lapangan : ".$query[0]['lapangan'],0,'L','L');
$this->fpdf->Ln();  
$this->fpdf->Cell(12,1,"Nama : ".$query[0]['nama'],0,'R','R');
$this->fpdf->Ln();
$this->fpdf->Cell(2,3,"Jam Mulai : ".$query[0]['jam_sewa'],0,'L','L');
$this->fpdf->Ln();
$this->fpdf->Cell(2,-2,"Lama Sewa : ".$query[0]['lama_sewa']." Jam",0,'L','L');
$this->fpdf->Ln();
$this->fpdf->Ln();  
$this->fpdf->Cell(12,14,"Harga/Jam : ".$query[0]['tarif'],0,'R','R');
$this->fpdf->Ln();
$this->fpdf->Cell(12,-13,"Total Harga : ".$query[0]['jumlah'],0,'R','R');
$this->fpdf->Ln();
$this->fpdf->Line(0,3.5,20,3.5);
$this->fpdf->Ln();

 $this->fpdf->Output("laporan.pdf","I");
?>