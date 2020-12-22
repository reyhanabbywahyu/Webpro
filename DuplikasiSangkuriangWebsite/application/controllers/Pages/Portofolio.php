<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolio extends CI_Controller {
	function __construct()
  {
    parent::__construct();
    $this->load->model("portofolioModel");
  }
	
	public function index()
	{
		$data = [];
		$data["portofolio"] = $this->portofolioModel->get_data_portofolio();
		
		$this->load->view('/Pages/portofolio',$data);
	}
}