<?php
defined("BASEPATH") OR exit("file dosn't exists");

class portofolioModel extends CI_Model{

    public function get_data_portofolio()
    {

      $data = $this->db->get("portofolio");

      return $data->result_array();
    }

}