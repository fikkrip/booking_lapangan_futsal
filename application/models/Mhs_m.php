<?php

class Mhs_m extends CI_Model{
    
    function insert(){
        $data = array(
            'nama'=> $this->input -> post('nama'),
            'nrp'=> $this->input -> post('nrp'),
            'alamat'=> $this->input -> post('alamat'),
            'umur'=> $this->input -> post('umur'),
            'jurusan'=> $this->input -> post('jurusan')
        );
        return $this->db->insert('data_mahasiswa',$data);
    }
    
    function delete_data($where,$table){
        $this->db->where($where);
	    $this->db->delete($table);
    }
    
    function editData($where,$table){
        return $this->db->get_where($table,$where);
    }
    
    function updateData($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
    
    function getAll(){
        $query=$this->db->get('data_mahasiswa');
        return $query->result();
    }
    
    function getJurusan($where){
        $result = $this->db->get_where('data_mahasiswa', array('jurusan' => $where));
        return  $result->result();
    }
}
?>
































