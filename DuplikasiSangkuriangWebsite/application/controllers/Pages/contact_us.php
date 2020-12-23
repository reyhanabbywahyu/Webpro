<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class contact_us extends CI_Controller {
	public function index()
	{
		$this->load->view('Pages/contact_us');
	}
}