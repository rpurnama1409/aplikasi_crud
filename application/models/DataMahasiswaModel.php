<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataMahasiswaModel extends CI_Model{
	public function getDataMahasiswa(){
		return $this->db->get('mahasiswa')->result();
	}

	public function simpanDataMahasiswa($data){
		$this->db->insert('mahasiswa',$data);
	}

	public function getDataEdit($id){
		$this->db->where('id',$id);
		return $this->db->get('mahasiswa')->row();
	}

	public function updateDataMahasiswa($data,$id){
		$this->db->where('id',$id);
		$this->db->update('mahasiswa',$data);
	}

	public function hapusDataMahasiswa($id){
		$this->db->where('id',$id);
		$this->db->delete('mahasiswa');
	}
}