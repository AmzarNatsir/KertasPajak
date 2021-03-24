<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_pendataan extends CI_Model {
	
	public function __construct(){
		$this->load->database();		
    }
    function insert_data($data)
    {
    	$this->db->insert("obat_alkes", $data);
    }
    function update_data($id, $data)
    {
        $this->db->where("id", $id)->update("obat_alkes", $data);
    }
    function hapus_data($id)
    {
        $this->db->where("id", $id)->delete("obat_alkes");
    }
    function get_all_persediaan()
    {
    	return $this->db->select("a.*, b.nama_satuan, c.nama_jenis")
    		->from("obat_alkes a")
    		->from("mst_satuan b")
    		->from("mst_jenis c")
    		->where("a.satuan=b.id")
    		->where("a.jenis=c.id")
    		->get()->result_array();

    }
    function get_profil_data($id)
    {
        return $this->db->where("id", $id)->get("obat_alkes")->row();
    }
    function update_stok_masuk($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->set('jumlah', 'jumlah+'.$data, FALSE);
        $this->db->update('obat_alkes');
    }
    function update_stok_keluar($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->set('jumlah', 'jumlah-'.$data, FALSE);
        $this->db->update('obat_alkes');
    }
    //dashboard
    function get_items_obat()
    {
        return $this->db->where("kategori", 1)->get("obat_alkes")->result_array();
    }
    function get_qty_obat()
    {
        return $this->db->select_sum("jumlah")
            ->where("kategori", 1)->get("obat_alkes")->row()->jumlah;
    }
    function get_items_alkes()
    {
        return $this->db->where("kategori", 2)->get("obat_alkes")->result_array();
    }
    function get_qty_alkes()
    {
        return $this->db->select_sum("jumlah")
            ->where("kategori", 2)->get("obat_alkes")->row()->jumlah;
    }
    //pelaporan
    function get_all_persediaan_obat_alkes($kategori)
    {
        return $this->db->select("a.*, b.nama_satuan, c.nama_jenis")
            ->from("obat_alkes a")
            ->from("mst_satuan b")
            ->from("mst_jenis c")
            ->where("a.satuan=b.id")
            ->where("a.jenis=c.id")
            ->where("a.kategori", $kategori)
            ->get()->result_array();

    }
}