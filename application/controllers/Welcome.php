<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct(){
        parent::__construct();
        $this->load->library('fpdf');
    }
    
	public function index()
	{
		$this->load->view('index');
	}
    
    public function about()
	{
		$this->load->view('about');
	}
     
    public function login()
	{
		$this->load->view('login');
	}
    
    public function tampil_lap()
	{
		$this->load->view('tampil_lapangan'); 
	}
    
    public function tampil_admin()
	{
		$this->load->view('admin/tampil_admin');
	}
    
    public function tampil_akun()
	{
		$this->load->view('createnew'); 
	}
    
    public function sewa()
	{
		$this->load->view('user/formsewa');
	}

    public function signUpAdmin()
    {
        if($_GET['key'] == 'C7zkfrxj4WR4VtG4'){
            $this->load->view('signupadmin');
        }else{
            $this->load->view('error');
        }

        //http://localhost/ci2/index.php/Welcome/signUpAdmin?key=C7zkfrxj4WR4VtG4
    }
    
    function aksi_regis(){  
            if($this->input->post('submit') ) 
            {
                $this->load->model('m_login');
                $this->m_login->insert();
                redirect(base_url("index.php/Welcome/index"));
            }
    }

    function aksi_regis_admin(){
        if($this->input->post('submit') )
        {
            $this->load->model('m_login');
            $this->m_login->insertAdmin();
            redirect(base_url("index.php/Welcome/index"));
        }
    }
    
    function aksi_sewa(){
        $error=0;
        $waktu = 0;
        $waktuBaru = 0;
        $tanggal = $this->input->post('tanggal');
		$jam = $this->input->post('jam');
        $lapangan = $this->input->post('lapangan');
		$where = array(
			'tgl_sewa' => $tanggal,
			'jam_sewa' => $jam,
            'lapangan' => $lapangan
			);

        $this->load->model('m_login');
        $cek = $this->m_login->cek_crashdate('sewa',$where)->num_rows();

        if($this->input->post('submit') )
        {
            if($cek == 1){
                $error++;
            }

            for($i = 1; $i<=2; $i++) {
                $waktu = substr($jam, 0, 2) - $i;
                if (strlen($waktu) == 1) {
                    $waktuBaru = "0" . $waktu . ":00:00";
                } elseif (strlen($waktu) == 2) {
                    $waktuBaru = $waktu . ":00:00";
                }

                $where = array(
                    'tgl_sewa' => $tanggal,
                    'jam_sewa' => $waktuBaru,
                    'lapangan' => $lapangan
                );

                $cek = $this->m_login->cek_crashdate('sewa', $where)->num_rows();

                if ($cek == 1) {
                    $sewa = $this->m_login->cek_crashdate1('sewa', $where);

                    if ($sewa[0]->lama_sewa > $i) {
                        $error++;
                    }
                }
            }

            if($error == 0){
                $this->load->model('m_login');

                if($this->m_login->insert_sewa()){
                    echo "<script>alert('Pemesanan Berhasil Silahkan Verifikasi Pesanan Dengan Menghubungi Admin di Whatsapp : 089620679146 Dan Selesaikan Pembayaran Via Transfer/Datang Langsung Ke Fakusa Sport Center ');</script>";
                    $this->load->model('m_login');
                    $data['query'] = $this->m_login->getAll();
                    $this->load->view('user/tampil_user',$data);
                }
            }else{
                echo "<script>alert('Maaf Lapangan Pada Waktu Tersebut Sudah Dipesan');</script>";
                $this->load->view('user/formsewa');
            }
        }
    }
    
    function cek_tanggal(){
        $tanggal = $this->input->get('tgl');
        $jam = $this->input->get('hours');
        $lapangan = $this->input->get('lap');
        $where = array(
			'tgl_sewa' => $tanggal,
			'jam_sewa' => $jam,
            'lapangan' => $lapangan
			);
        $this->load->model('m_login');
        $cek = $this->m_login->cek_tgl('sewa',$where)->num_rows();
        if($cek == 0){
            echo "Belum Ada";
        }else{
            echo "Sudah Ada";
        }
    }
    
    function ambil($lap){
        $this->load->model('m_login');
        $data['query'] = $this->m_login->getLap($lap);
        $this->load->view('tampil_lapangan',$data);
    }
    
    function ambil2($lap){
        $this->load->model('m_login');
        $data['query'] = $this->m_login->getLap($lap);
        $this->load->view('admin/tampil_admin',$data);
    }
    
    function ambil3($lap){
        $this->load->model('m_login');
        $data['query'] = $this->m_login->getLap($lap);
        $this->load->view('tampil_user',$data);
    }
    
    function ambilJns($kode){
        $this->load->model('m_login');
        $data['query'] = $this->m_login->getJns($kode);
        $this->load->view('tampil_lapangan',$data);
    }
    
    function ambilJns2($kode){
        $this->load->model('m_login');
        $data['query'] = $this->m_login->getJns($kode);
        $this->load->view('tampil_admin',$data);
    }
        
    function ambilSemua(){
        $this->load->model('m_login');
        $data['query'] = $this->m_login->getAll();
        $this->load->view('tampil_lapangan',$data);
    }
    
    function ambilLunas($lunas){
        $this->load->model('m_login');
        $data['query'] = $this->m_login->getLunas($lunas);
        $this->load->view('tampil_lapangan',$data);
    }
    
    function ambilUser(){
        $this->load->model('m_login');
        $data['query'] = $this->m_login->getAll();
        $this->load->view('user/tampil_user',$data);
    }
    
    function ambilAdmin(){
        $this->load->model('m_login');
        $data['query'] = $this->m_login->getAll();
        $this->load->view('admin/tampil_admin',$data);
    }
    
    function statusbayar($kode_sewa, $status){
        $this->load->model('m_login');
        $this->m_login->statusbayar_m($kode_sewa, $status);
    }
    
    function hapus($id){
		$where = array('kode_sewa' => $id);
        $this->load->model('m_login');
		$this->m_login->hapus_data($where,'sewa');
		redirect(base_url("index.php/Welcome/ambilAdmin"));
	}

    function dataUser(){
        $this->load->model('m_login');
        $data['query'] = $this->m_login->getAllUser();
        $this->load->view('admin/data_user',$data);
    }

    function dataLapangan(){
        $this->load->model('m_login');
        $data['query'] = $this->m_login->getAllLapangan();
        $this->load->view('admin/data_lapangan',$data);
    }
    
    function tampil_grafik() {
        $this->load->model('m_login');
        foreach($this->m_login->statistik_pengunjung()->result_array() as $row)
        {
            $data['grafik'][]=(float)$row['Januari'];
            $data['grafik'][]=(float)$row['Februari'];
            $data['grafik'][]=(float)$row['Maret'];
            $data['grafik'][]=(float)$row['April'];
            $data['grafik'][]=(float)$row['Mei'];
            $data['grafik'][]=(float)$row['Juni'];
            $data['grafik'][]=(float)$row['Juli'];
            $data['grafik'][]=(float)$row['Agustus'];
            $data['grafik'][]=(float)$row['September'];
            $data['grafik'][]=(float)$row['Oktober'];
            $data['grafik'][]=(float)$row['November'];
            $data['grafik'][]=(float)$row['Desember'];
        }
        $this->load->view('tampil_grafik', $data); 
    }
    
    function toPdf(){
        $nota = $this->uri->segment(3);
        
          define('FPDF_FONTPATH',$this->config->item('fonts_path'));
          $this->load->model('m_login');
          $data['query'] = $this->m_login->getNota($nota);
          $this->load->view('laporanpdf',$data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */