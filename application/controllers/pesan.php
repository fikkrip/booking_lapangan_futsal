<?php

class pesan extends CI_Controller {
    function  __construct() {
        parent::__construct();
        $this->load->model('webtools_m','wm');
        $this->load->library('template');
        $this->load->library('table');
        $this->load->helper('display');
        $this->load->helper('form');
        $this->load->helper('html');

        $this->load->config('pdf_config');
        $this->load->library('fpdf');
        define('FPDF_FONTPATH',$this->config->item('fonts_path'));
    }

    function index(){
       echo anchor('cabang/pesan/testpdf/','Click');
    }


    function testpdf() {


        $this->fpdf->Open();
        $this->fpdf->AddPage();
        //$this->fpdf->Image('assets/images/logo.png',170,5,33);
        $this->fpdf->SetFont('Arial','B',10);
        //Move to the right
        //$this->fpdf->Cell(80);
        //Title
        //$this->fpdf->Ln(5);
        //$this->fpdf->Cell(30,10,'Report Controllers',0,0,'L');
        //$this->fpdf->Cell(30,10,'Customer',0,0,'L');
        $y = $this->fpdf->GetY(); //Need the current Y value to reset it after the next line, as multicell automatically moves down after write
        $x = $this->fpdf->GetX();
        $this->fpdf->MultiCell(180,5,'Summary Report ',0,'R',false);
        $this->fpdf->MultiCell(80,5,'Customer Name ',0,'L',false);
        $this->fpdf->MultiCell(80,5,'Total :  Download ',0,'L',false);

        //Line break
        $this->fpdf->Ln(20);
        $this->fpdf->SetY(0); //reset the Y to the original, since we moved it down to write INVOICE
        $this->fpdf->SetFont('Arial','',7);
        $this->fpdf->SetDrawColor(255,255,255);
        $this->fpdf->SetFillColor(0,0,0); //Set background of the cell to be that grey color
        $this->fpdf->SetTextColor(255,255,255);
        $this->fpdf->SetY(30);

        $this->fpdf->Ln(0);
        $this->fpdf->Cell(20,8,"Device Type ",1,0,'C',true);  //Write a cell 20 wide, 12 high, filled and bordered, with Order # centered inside, last argument 'true' tells it to fill the cell with the color specified
        $this->fpdf->Cell(40,8,"Module",1,0,'C',true);  //Write a cell 20 wide, 12 high, filled and bordered, with Order # centered inside, last argument 'true' tells it to fill the cell with the color specified
        $this->fpdf->Cell(60,8,"Remote Addr",1,0,'C',true);
        $this->fpdf->Cell(40,8,"Date",1,0,'C',true);

        $this->fpdf->Ln(8);
        $this->fpdf->SetDrawColor(0,0,0);
        $this->fpdf->SetFillColor(224,224,224);
        $this->fpdf->SetTextColor(0,0,0);


        $this->fpdf->Cell(20,8,"Device typenyaDevice",1,0,'C');
        $this->fpdf->Cell(40,8,"Modulenya",1,0,'C');
        $this->fpdf->Cell(60,8,"remote addressnya ",1,0,'C');
        $this->fpdf->Cell(40,8,"datenya",1,0,'C');
        $this->fpdf->Ln(8);

        $this->fpdf->Output('output.pdf','D');
    }
}