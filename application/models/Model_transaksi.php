<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_transaksi extends CI_Model {
	
	public function __construct(){
		$this->load->database();		
    }
    //penerimaan
    function get_penerimaan_desc()
    {
    	return $this->db->limit(1)->order_by('id', "desc")->get("penerimaan")->row();
    }
    function insert_penerimaan($data)
    {
    	$this->db->insert("penerimaan", $data);
    	return $this->db->insert_id();
    }
    function insert_penerimaan_detail($data)
    {
    	$this->db->insert("penerimaan_detail", $data);
    }
    function get_head_penerimaan($tgl_1, $tgl_2)
    {
        return $this->db->where("tanggal >=", $tgl_1)
                ->where("tanggal <=", $tgl_2)->get("penerimaan")->result_array();
    }
    function get_detail_penerimaan($id_head)
    {
        return $this->db->select("a.*, b.kode, b.nama, b.kategori, c.nama_satuan, d.nama_jenis")
            ->from("penerimaan_detail a")
            ->from("obat_alkes b")
            ->from("mst_satuan c")
            ->from("mst_jenis d")
            ->where("a.id_item=b.id")
            ->where("b.satuan=c.id")
            ->where("b.jenis=d.id")
            ->where("a.id_head", $id_head)->get()->result_array();
    }
    //pengeluaran
    function get_pengeluaran_desc()
    {
    	return $this->db->limit(1)->order_by('id', "desc")->get("pengeluaran")->row();
    }
    function insert_pengeluaran($data)
    {
    	$this->db->insert("pengeluaran", $data);
    	return $this->db->insert_id();
    }
    function insert_pengeluaran_detail($data)
    {
    	$this->db->insert("pengeluaran_detail", $data);
    }
    function get_head_pengeluaran($tgl_1, $tgl_2)
    {
        return $this->db->where("tanggal >=", $tgl_1)
                ->where("tanggal <=", $tgl_2)->get("pengeluaran")->result_array();
    }
    function get_detail_pengeluaran($id_head)
    {
        return $this->db->select("a.*, b.kode, b.nama, b.kategori, c.nama_satuan, d.nama_jenis")
            ->from("pengeluaran_detail a")
            ->from("obat_alkes b")
            ->from("mst_satuan c")
            ->from("mst_jenis d")
            ->where("a.id_item=b.id")
            ->where("b.satuan=c.id")
            ->where("b.jenis=d.id")
            ->where("a.id_head", $id_head)->get()->result_array();
    }
}