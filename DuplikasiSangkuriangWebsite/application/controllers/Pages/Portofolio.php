<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolio extends CI_Controller {
	function __construct()
  {
    parent::__construct();
	$this->load->model("portofolioModel");
	$this->load->library("form_validation");
  }
	
	public function index()
	{
		$data = [];
		$data["portofolio"] = $this->portofolioModel->get_data_portofolio();
		$this->load->view('/Pages/portofolio',$data);

		if ($this->input->post('keyword')) {
			$data['portofolio'] = $this->portofolioModel->caridataportofolio();
		}
	}

	public function hapus($id)
	{
		$this->portofolioModel->hapusData($id);
		$this->session->set_flashdata("Data Portofolio Dihapus");
		redirect("Pages/portofolio");

	}

	public function ubah($id)
	{
		$data[] = 'Form Ubah Data Portofolio';

		$data['portofolio'] = $this->portofolioModel->getPortofolioById($id);

		$this->form_validation->set_rules("tahun","Tahun","required");
		$this->form_validation->set_rules("judul","Judul","required");
		$this->form_validation->set_rules("client","Client","required");
		$this->form_validation->set_rules("harga","Harga","required");
		$this->form_validation->set_rules("type","Type","required");

		if ($this->form_validation->run() == false){
				$this->load->view('Pages/ubah',$data);


		}
		else{
				$this->portofolioModel->ubahData($id);
				$this->session->set_flashdata($data,"Data Portofolio telah Di ubah");
				redirect("Pages/portofolio");


		}
	}

	public function tambah()
	{
		$data[] = 'Form Tambah Data Portofolio';

		$this->form_validation->set_rules("tahun","Tahun","required");
		$this->form_validation->set_rules("judul","Judul","required");
		$this->form_validation->set_rules("client","Client","required");
		$this->form_validation->set_rules("harga","Harga","required");
		$this->form_validation->set_rules("type","Type","required");


		//conditon in form_validation, if user input form = false, then load page "tambah" again
		if ($this->form_validation->run() == false){
			$this->load->view("Pages/tambah",$data);

		}
		else{
			$data["portofolio"] = $this->portofolioModel->tambahDataPortofolio();
			$this->session->set_flashdata($data, "Data Portofolio Sudah Ditambahkan");
			redirect("Pages/portofolio");


		}

	}
}