<?php
    class Mahasiswa extends CI_Controller{
        function __construct(){
            parent::__construct();		
            $this->load->view_data['base_url'] = base_url();
            $this->load->model('Mhs_m');

	   }
    
        function kokindex(){
            $this->load->view('add_mahasiswa');
        }
        
        function save(){  
            if($this->input->post('submit') ) 
            {
                $this->load->model('Mhs_m');
                $this->Mhs_m->insert();
                redirect('Mahasiswa/ambilSemua');
            }
        }
        
        function delete($nrp){
            $where = array('nrp' => $nrp);
            $this->load->model('Mhs_m');
            $this->Mhs_m->delete_data($where,'data_mahasiswa');
            redirect('Mahasiswa/ambilSemua');
        }
        
        function jurusan(){
            $this->load->model('Mhs_m');
            $data['data_mahasiswa']=$this->Mhs_m->getJurusan($jurusan,'data_mahasiswa');
            $this->load->view('tampil_mahasiswa',$data);
        }
        
        function edit($nrp){
            $where = array('nrp' => $nrp);
            $this->load->model('Mhs_m');
            $data['data_mahasiswa']=$this->Mhs_m->editData($where,'data_mahasiswa')->result();
            $this->load->view('form_edit',$data);
        }
        
        function updateMahasiswa(){
            $nrp = $this->input->post('nrp');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $umur = $this->input->post('umur');
            $jurusan = $this->input->post('jurusan');

            $data = array(
                'nama' => $nama,
                'alamat' => $alamat,
                'umur' => $umur,
                'jurusan' => $jurusan
            );

            $where = array(
                'nrp' => $nrp
            );
            
            $this->load->model('Mhs_m');
            $this->Mhs_m->updateData($where,$data,'data_mahasiswa');
            redirect('Mahasiswa/ambilSemua');
        }
        
        function ambil($jur){
            $this->load->model('Mhs_m');
            $data['query'] = $this->Mhs_m->getJurusan($jur);
            $this->load->view('tampil_mahasiswa',$data);
        }
        
        function ambilSemua(){
            $this->load->model('Mhs_m');
            $data['query'] = $this->Mhs_m->getAll();
            $this->load->view('tampil_mahasiswa',$data);
        }
    }


?>

