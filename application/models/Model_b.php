<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_b extends CI_Model {
	
	public function __construct(){
		$this->load->database();		
    }
    //b_1_1
    public function insert_b_1_1($data)
    {
        $this->db->insert("b_1_1", $data);
    }
    public function update_b_1_1($data, $tahun, $bulan)
    {
        $this->db->where("tahun_pajak", $tahun)
                ->where("bulan_pajak", $bulan)
                ->update("b_1_1", $data);
    }
    public function get_data_b_1_1($tahun)
    {
        return $this->db->where("tahun_pajak", $tahun)->get("b_1_1")->result_array();
    }
    public function cari_b_1_1($tahun, $bulan)
    {
        return $this->db->where("tahun_pajak", $tahun)->where("bulan_pajak", $bulan)->get("b_1_1")->result_array();
    }
    public function get_row_b_1_1($tahun, $bulan)
    {
        return $this->db->where("tahun_pajak", $tahun)->where("bulan_pajak", $bulan)->get("b_1_1")->row();
    }
    public function get_sum_spt_b_1_1($tahun)
    {
        return $this->db->select_sum("n_spt")->where("tahun_pajak", $tahun)->get("b_1_1")->row();
    }
    public function get_sum_pemeriksa_b_1_1($tahun)
    {
        return $this->db->select_sum("n_pemeriksa")->where("tahun_pajak", $tahun)->get("b_1_1")->row();
    }
    //b.2
    public function insert_b_2($data)
    {
        $this->db->insert("b_2", $data);
    }
    public function update_b_2($data, $tahun)
    {
        $this->db->where("tahun_pajak", $tahun)
                ->update("b_2", $data);
    }
    public function cari_b_2($tahun)
    {
        return $this->db->where("tahun_pajak", $tahun)->get("b_2")->result_array();
    }
    public function get_row_b_2($tahun)
    {
        return $this->db->where("tahun_pajak", $tahun)->get("b_2")->row();
    }
    //b.3.1
    public function insert_b_3_1($data)
    {
        $this->db->insert("b_3_1", $data);
    }
    public function update_b_3_1($data, $tahun, $bulan)
    {
        $this->db->where("tahun_pajak", $tahun)
                ->where("bulan_pajak", $bulan)
                ->update("b_3_1", $data);
    }
    public function get_data_b_3_1($tahun)
    {
        return $this->db->where("tahun_pajak", $tahun)->get("b_3_1")->result_array();
    }
    public function get_row_b_3_1($tahun, $bulan)
    {
        return $this->db->where("tahun_pajak", $tahun)->where("bulan_pajak", $bulan)->get("b_3_1")->row();
    }
    public function cari_b_3_1($tahun, $bulan)
    {
        return $this->db->where("tahun_pajak", $tahun)->where("bulan_pajak", $bulan)->get("b_3_1")->result_array();
    }
    public function get_sum_spt_b_3_1($tahun)
    {
        return $this->db->select_sum("n_spt")->where("tahun_pajak", $tahun)->get("b_3_1")->row();
    }
    public function get_sum_pemeriksa_b_3_1($tahun)
    {
        return $this->db->select_sum("n_pemeriksa")->where("tahun_pajak", $tahun)->get("b_3_1")->row();
    }
    //b_3_2
    public function insert_b_3_2($data)
    {
        $this->db->insert("b_3_2", $data);
    }
    public function update_b_3_2($data, $tahun, $bulan)
    {
        $this->db->where("tahun_pajak", $tahun)
                ->where("bulan_pajak", $bulan)
                ->update("b_3_2", $data);
    }
    public function get_data_b_3_2($tahun)
    {
        return $this->db->where("tahun_pajak", $tahun)->get("b_3_2")->result_array();
    }
    public function get_row_b_3_2($tahun, $bulan)
    {
        return $this->db->where("tahun_pajak", $tahun)->where("bulan_pajak", $bulan)->get("b_3_2")->row();
    }
    public function cari_b_3_2($tahun, $bulan)
    {
        return $this->db->where("tahun_pajak", $tahun)->where("bulan_pajak", $bulan)->get("b_3_2")->result_array();
    }
    public function get_sum_spt_b_3_2($tahun)
    {
        return $this->db->select_sum("n_spt")->where("tahun_pajak", $tahun)->get("b_3_2")->row();
    }
    public function get_sum_pemeriksa_b_3_2($tahun)
    {
        return $this->db->select_sum("n_pemeriksa")->where("tahun_pajak", $tahun)->get("b_3_2")->row();
    }
    //b_3_3
    public function insert_b_3_3($data)
    {
        $this->db->insert("b_3_3", $data);
    }
    public function update_b_3_3($data, $tahun, $bulan)
    {
        $this->db->where("tahun_pajak", $tahun)
                ->where("bulan_pajak", $bulan)
                ->update("b_3_3", $data);
    }
    public function get_data_b_3_3($tahun)
    {
        return $this->db->where("tahun_pajak", $tahun)->get("b_3_3")->result_array();
    }
    public function get_row_b_3_3($tahun, $bulan)
    {
        return $this->db->where("tahun_pajak", $tahun)->where("bulan_pajak", $bulan)->get("b_3_3")->row();
    }
    public function cari_b_3_3($tahun, $bulan)
    {
        return $this->db->where("tahun_pajak", $tahun)->where("bulan_pajak", $bulan)->get("b_3_3")->result_array();
    }
    public function get_sum_spt_b_3_3($tahun)
    {
        return $this->db->select_sum("n_spt")->where("tahun_pajak", $tahun)->get("b_3_3")->row();
    }
    public function get_sum_pemeriksa_b_3_3($tahun)
    {
        return $this->db->select_sum("n_pemeriksa")->where("tahun_pajak", $tahun)->get("b_3_3")->row();
    }
     //b_3_4
     public function insert_b_3_4($data)
     {
         $this->db->insert("b_3_4", $data);
     }
     public function update_b_3_4($data, $tahun, $bulan)
     {
         $this->db->where("tahun_pajak", $tahun)
                 ->where("bulan_pajak", $bulan)
                 ->update("b_3_4", $data);
     }
     public function get_data_b_3_4($tahun)
     {
         return $this->db->where("tahun_pajak", $tahun)->get("b_3_4")->result_array();
     }
     public function get_row_b_3_4($tahun, $bulan)
     {
         return $this->db->where("tahun_pajak", $tahun)->where("bulan_pajak", $bulan)->get("b_3_4")->row();
     }
     public function cari_b_3_4($tahun, $bulan)
     {
         return $this->db->where("tahun_pajak", $tahun)->where("bulan_pajak", $bulan)->get("b_3_4")->result_array();
     }
     public function get_sum_spt_b_3_4($tahun)
     {
         return $this->db->select_sum("n_spt")->where("tahun_pajak", $tahun)->get("b_3_4")->row();
     }
     public function get_sum_pemeriksa_b_3_4($tahun)
     {
         return $this->db->select_sum("n_pemeriksa")->where("tahun_pajak", $tahun)->get("b_3_4")->row();
     }
     //b_3_5
     public function insert_b_3_5($data)
     {
         $this->db->insert("b_3_5", $data);
     }
     public function update_b_3_5($data, $tahun, $bulan)
     {
         $this->db->where("tahun_pajak", $tahun)
                 ->where("bulan_pajak", $bulan)
                 ->update("b_3_5", $data);
     }
     public function get_data_b_3_5($tahun)
     {
         return $this->db->where("tahun_pajak", $tahun)->get("b_3_5")->result_array();
     }
     public function get_row_b_3_5($tahun, $bulan)
     {
         return $this->db->where("tahun_pajak", $tahun)->where("bulan_pajak", $bulan)->get("b_3_5")->row();
     }
     public function cari_b_3_5($tahun, $bulan)
     {
         return $this->db->where("tahun_pajak", $tahun)->where("bulan_pajak", $bulan)->get("b_3_5")->result_array();
     }
     public function get_sum_spt_b_3_5($tahun)
     {
         return $this->db->select_sum("n_spt")->where("tahun_pajak", $tahun)->get("b_3_5")->row();
     }
     public function get_sum_pemeriksa_b_3_5($tahun)
     {
         return $this->db->select_sum("n_pemeriksa")->where("tahun_pajak", $tahun)->get("b_3_5")->row();
     }
}