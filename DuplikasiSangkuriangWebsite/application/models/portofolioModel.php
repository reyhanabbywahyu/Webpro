<?php
defined("BASEPATH") OR exit("file dosn't exists");

class portofolioModel extends CI_Model{

    public function get_data_portofolio()
    {

      $data = $this->db->get("portofolio");

      return $data->result_array();

      
    }

    public function hapusData($id)
    {
      return $this->db->where("id_portofolio",$id)->delete("portofolio");
    }

    public function getPortofolioById($id)
    {
      return $this->db->where("id_portofolio",$id)->get("portofolio")->row_array();
    }

    public function ubahData($id)
    {
      $data = [
        "tahun" => $this->input->post('tahun', true),
        "judul" => $this->input->post('judul', true),
        "client" => $this->input->post('client', true),
        "harga" => $this->input->post('harga', true),
        "type" => $this->input->post('type', true),
      ];
      $this->db->where("id_portofolio",$id)->update("portofolio",$data);
    }

    public function tambahDataPortofolio()
    {
      $data = [
        "tahun" => $this->input->post("tahun",true),
        "judul" => $this->input->post("judul",true),
        "client" => $this->input->post("client",true),
        "harga"=> $this->input->post("harga",true),
        "type"=> $this->input->post("type",true)
      ];
      return $this->db->insert("portofolio",$data);
    }

    public function cariDataportofolio()
    {
      $keyword = $this->input->post('keyword', true);
      $this->db->like('tahun', $keyword);
      $this->db->or_like('judul', $keyword);
      $this->db->or_like('client', $keyword);
      $this->db->or_like('harga', $keyword);
      $this->db->or_like('type', $keyword);
      return $this->db->get('portofolio')->result_array();

    }

}