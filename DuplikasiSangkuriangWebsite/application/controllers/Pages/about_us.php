<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class about_us extends CI_Controller {
	public function index()
	{
		$this->load->view('Pages/about_us');
	}
}