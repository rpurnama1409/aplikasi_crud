<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	public function index()
	{
		$this->load->model('DataMahasiswaModel');

		$data = ['data_mahasiswa' => $this->DataMahasiswaModel->getDataMahasiswa()];

		$this->load->view('vw-mahasiswa',$data);
	}

	public function simpan(){
		$this->load->model('DataMahasiswaModel');

		$id = $this->input->post('id');

		$data = [
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'nomor_hp' => $this->input->post('nomor_hp')
		];

		if($id!=''){
			$this->DataMahasiswaModel->updateDataMahasiswa($data,$id);
		}else{
			$this->DataMahasiswaModel->simpanDataMahasiswa($data);
		}

		$this->session->set_flashdata('pesan','Data berhasil disimpan');

		redirect('mahasiswa');


	}

	public function edit($id){
		$this->load->model('DataMahasiswaModel');

		$data = ['data_mahasiswa' => $this->DataMahasiswaModel->getDataMahasiswa(),
				 'data_edit' => $this->DataMahasiswaModel->getDataEdit($id)];

		$this->load->view('vw-mahasiswa',$data);
	}

	public function hapus($id){
		$this->load->model('DataMahasiswaModel');

		$this->DataMahasiswaModel->hapusDataMahasiswa($id);

		$this->session->set_flashdata('pesan','Data berhasil dihapus');

		redirect('mahasiswa');
	}
}