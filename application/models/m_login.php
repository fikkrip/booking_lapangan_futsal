<?php 
class M_login extends CI_Model{	
    
    function insert(){
        $data1 = array(
            'username'=> $this->input -> post('username'),
            'password'=> $this->input -> post('password'),
            'account'=> $this->input -> post('account')
        );
        $data2 = array(
            'username'=> $this->input -> post('username'),
            'nama_pel'=> $this->input -> post('nama'),
            'alamat_pel'=> $this->input -> post('alamat'),
            'no_telp'=> $this->input -> post('no_telp')
        );
        
        if($this->db->insert('login',$data1)){
            $this->db->insert('pelanggan', $data2);
            return true;
        }
    }

    function insertAdmin(){
        $data1 = array(
            'username'=> $this->input -> post('username'),
            'password'=> $this->input -> post('password'),
            'account'=> $this->input -> post('account')
        );

        if($this->db->insert('login',$data1)){
            return true;
        }
    }
    
    function insert_sewa(){
        if($this->input -> post('lapangan') == "Lapangan_A" || $this->input -> post('lapangan') == "Lapangan_C"){
            $kode = "1";    
        }
        else{
            $kode = "0";
        }
        
        if($kode == 1){
            $tarif = "150000";
            $harga = $tarif * $this->input -> post('lama_sewa'); 
        }else{            
            $tarif = "175000";
            $harga = $tarif * $this->input -> post('lama_sewa');
        }
        
        $data = array(
            'lapangan'=> $this->input -> post('lapangan'),
            'tgl_sewa'=> $this->input -> post('tanggal'),
            'jam_sewa'=> $this->input -> post('jam'),
            'lama_sewa'=> $this->input -> post('lama_sewa'),
            'status'=> $this->input -> post('default'),
            'username'=> $this->input -> post('username'),
            'nama'=> $this->input -> post('nama'),
            'tarif'=> $tarif,
            'jumlah'=> $harga,
            'kode_lap'=> $kode
        );

        if ($this->db->insert('sewa', $data)){
            return true;
        }else{
            return false;
        }
    }
    
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
    
    function cek_crashdate($table,$where){		
		return $this->db->get_where($table,$where);
	}

    function cek_crashdate1($table,$where){
        return $this->db->get_where($table,$where)->result();
    }
    
    function cek_tgl($table,$where){		
		return $this->db->get_where($table,$where);
	}

    function cek_account($where){
        $result = $this->db->get_where('login', array('username' => $where))->result_array();
        return $result[0]['account'];
    }
    
    function getAll(){
        $this->db->order_by('tgl_sewa', 'DESC');
        $query=$this->db->get('sewa');
        return $query->result();
    }

    function getAllUser(){
        $this->db->order_by('nama_pel', 'ASC');
        $query=$this->db->get('pelanggan');
        return $query->result();
    }

    function getAllLapangan(){
        $this->db->order_by('no_lap', 'ASC');
        $query=$this->db->get('lapangan');
        return $query->result();
    }
    
    function getNota($where){
        $result = $this->db->get_where('sewa', array('kode_sewa' => $where));
        return $result->result_array();
    }
    
    function getLap($where){
        $this->db->order_by('tgl_sewa', 'DESC');
        $result = $this->db->get_where('sewa', array('lapangan' => $where));
        return $result->result();
    }
    
    function getLunas($where){
        $this->db->order_by('tgl_sewa', 'DESC');
        $result = $this->db->get_where('sewa', array('status' => $where));
        return $result->result();
    }
    
    function getJns($where){
        $this->db->order_by('tgl_sewa', 'DESC');
        $result = $this->db->get_where('sewa', array('kode_lap' => $where));
        return $result->result();
    }
    
    function statusbayar_m($kode_sewa, $status){
        if($status == 1){
            $data=array('status'=>0);
            $result = $this->db->update('sewa', $data, array('kode_sewa'=>$kode_sewa));
        }else{
            $data=array('status'=>1);
            $result = $this->db->update('sewa', $data, array('kode_sewa'=>$kode_sewa));
        }
        
        if($result){
            redirect(base_url("index.php/Welcome/ambilAdmin"));
        }else{
            echo $this->db->error();
        }
    }
    
    function hapus_data($where,$table){
	   $this->db->where($where);
	   $this->db->delete($table);
    }
    
    function statistik_pengunjung(){ 
          $sql = $this->db->query("
          select
          ifnull((SELECT count(lapangan) FROM (sewa)WHERE((Month(tgl_sewa)=1)AND (YEAR(tgl_sewa)=2016))),0) AS `Januari`,
          ifnull((SELECT count(lapangan) FROM (sewa)WHERE((Month(tgl_sewa)=2)AND (YEAR(tgl_sewa)=2016))),0) AS `Februari`,
          ifnull((SELECT count(lapangan) FROM (sewa)WHERE((Month(tgl_sewa)=3)AND (YEAR(tgl_sewa)=2016))),0) AS `Maret`,
          ifnull((SELECT count(lapangan) FROM (sewa)WHERE((Month(tgl_sewa)=4)AND (YEAR(tgl_sewa)=2016))),0) AS `April`,
          ifnull((SELECT count(lapangan) FROM (sewa)WHERE((Month(tgl_sewa)=5)AND (YEAR(tgl_sewa)=2016))),0) AS `Mei`,
          ifnull((SELECT count(lapangan) FROM (sewa)WHERE((Month(tgl_sewa)=6)AND (YEAR(tgl_sewa)=2016))),0) AS `Juni`,
          ifnull((SELECT count(lapangan) FROM (sewa)WHERE((Month(tgl_sewa)=7)AND (YEAR(tgl_sewa)=2016))),0) AS `Juli`,
          ifnull((SELECT count(lapangan) FROM (sewa)WHERE((Month(tgl_sewa)=8)AND (YEAR(tgl_sewa)=2016))),0) AS `Agustus`,
          ifnull((SELECT count(lapangan) FROM (sewa)WHERE((Month(tgl_sewa)=9)AND (YEAR(tgl_sewa)=2016))),0) AS `September`,
          ifnull((SELECT count(lapangan) FROM (sewa)WHERE((Month(tgl_sewa)=10)AND (YEAR(tgl_sewa)=2016))),0) AS `Oktober`,
          ifnull((SELECT count(lapangan) FROM (sewa)WHERE((Month(tgl_sewa)=11)AND (YEAR(tgl_sewa)=2016))),0) AS `November`,
          ifnull((SELECT count(lapangan) FROM (sewa)WHERE((Month(tgl_sewa)=12)AND (YEAR(tgl_sewa)=2016))),0) AS `Desember`
          from sewa GROUP BY YEAR(tgl_sewa) ");
          return $sql;
    }
}
?>