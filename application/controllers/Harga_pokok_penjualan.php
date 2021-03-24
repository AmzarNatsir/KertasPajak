<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Harga_pokok_penjualan extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model(array("model_b"));
		date_default_timezone_set("Asia/Makassar");
	}
	function _init()
	{
		$this->output->set_template('index');
	}
	//satuan
	function index()
	{
		$this->_init();
		$this->model_security->get_security_user();
		$thn_pajak = date("Y");
		$data['res'] = $this->model_b->get_row_b_2($thn_pajak);
		$this->load->view('page_b/b_2', $data);
	}
	function simpan_data()
	{
		$thn_pajak = date("Y");
		$res = $this->model_b->cari_b_2($thn_pajak);
		if(count($res)==0) {
			//insert
			$data['tahun_pajak'] = $thn_pajak;
			//persediaan bahan baku
			$data['b_2_1_spt'] = str_replace(",", "", $this->input->post("inp_spt_row_1"));
			$data['b_2_1_pem'] = str_replace(",", "", $this->input->post("inp_pem_row_1"));
			//pembelian bahan baku
			$data['b_2_2_spt'] = str_replace(",", "", $this->input->post("inp_spt_row_2"));
			$data['b_2_2_pem'] = str_replace(",", "", $this->input->post("inp_pem_row_2"));
			//persediaan akhir bahan baku
			$data['b_2_3_spt'] = str_replace(",", "", $this->input->post("inp_spt_row_3"));
			$data['b_2_3_pem'] = str_replace(",", "", $this->input->post("inp_pem_row_3"));
			//Tenaga Kerja Langsung
			$data['b_2_4_spt'] = str_replace(",", "", $this->input->post("inp_spt_row_5"));
			$data['b_2_4_pem'] = str_replace(",", "", $this->input->post("inp_pem_row_5"));
			//biaya overhead
			$data['b_2_5_spt'] = str_replace(",", "", $this->input->post("inp_spt_row_6"));
			$data['b_2_5_pem'] = str_replace(",", "", $this->input->post("inp_pem_row_6"));
			//Persediaan Awal
			$data['b_2_6_spt'] = str_replace(",", "", $this->input->post("inp_spt_row_8"));
			$data['b_2_6_pem'] = str_replace(",", "", $this->input->post("inp_pem_row_8"));
			//Persediaan akhir barang jadi
			$data['b_2_7_spt'] = str_replace(",", "", $this->input->post("inp_spt_row_10"));
			$data['b_2_7_pem'] = str_replace(",", "", $this->input->post("inp_pem_row_10"));
			//total
			//pemakaian bahan baku
			$data['b_total_1_spt'] = str_replace(",", "", $this->input->post("tot_spt_row_4"));
			$data['b_total_1_pem'] = str_replace(",", "", $this->input->post("tot_pem_row_4"));
			//Jumlah biaya produksi
			$data['b_total_2_spt'] = str_replace(",", "", $this->input->post("tot_spt_row_7"));
			$data['b_total_2_pem'] = str_replace(",", "", $this->input->post("tot_pem_row_7"));
			//Barang tersedia untuk dijual
			$data['b_total_3_spt'] = str_replace(",", "", $this->input->post("tot_spt_row_9"));
			$data['b_total_3_pem'] = str_replace(",", "", $this->input->post("tot_pem_row_9"));
			//hpp
			$data['b_total_4_spt'] = str_replace(",", "", $this->input->post("tot_spt_row_11"));
			$data['b_total_4_pem'] = str_replace(",", "", $this->input->post("tot_pem_row_11"));
			$data['tgl_post'] = date("Y-m-d");
			$this->model_b->insert_b_2($data);
		} else {
			//update
			//persediaan bahan baku
			$data['b_2_1_spt'] = str_replace(",", "", $this->input->post("inp_spt_row_1"));
			$data['b_2_1_pem'] = str_replace(",", "", $this->input->post("inp_pem_row_1"));
			//pembelian bahan baku
			$data['b_2_2_spt'] = str_replace(",", "", $this->input->post("inp_spt_row_2"));
			$data['b_2_2_pem'] = str_replace(",", "", $this->input->post("inp_pem_row_2"));
			//persediaan akhir bahan baku
			$data['b_2_3_spt'] = str_replace(",", "", $this->input->post("inp_spt_row_3"));
			$data['b_2_3_pem'] = str_replace(",", "", $this->input->post("inp_pem_row_3"));
			//Tenaga Kerja Langsung
			$data['b_2_4_spt'] = str_replace(",", "", $this->input->post("inp_spt_row_5"));
			$data['b_2_4_pem'] = str_replace(",", "", $this->input->post("inp_pem_row_5"));
			//biaya overhead
			$data['b_2_5_spt'] = str_replace(",", "", $this->input->post("inp_spt_row_6"));
			$data['b_2_5_pem'] = str_replace(",", "", $this->input->post("inp_pem_row_6"));
			//Persediaan Awal
			$data['b_2_6_spt'] = str_replace(",", "", $this->input->post("inp_spt_row_8"));
			$data['b_2_6_pem'] = str_replace(",", "", $this->input->post("inp_pem_row_8"));
			//Persediaan akhir barang jadi
			$data['b_2_7_spt'] = str_replace(",", "", $this->input->post("inp_spt_row_10"));
			$data['b_2_7_pem'] = str_replace(",", "", $this->input->post("inp_pem_row_10"));
			//total
			//pemakaian bahan baku
			$data['b_total_1_spt'] = str_replace(",", "", $this->input->post("tot_spt_row_4"));
			$data['b_total_1_pem'] = str_replace(",", "", $this->input->post("tot_pem_row_4"));
			//Jumlah biaya produksi
			$data['b_total_2_spt'] = str_replace(",", "", $this->input->post("tot_spt_row_7"));
			$data['b_total_2_pem'] = str_replace(",", "", $this->input->post("tot_pem_row_7"));
			//Barang tersedia untuk dijual
			$data['b_total_3_spt'] = str_replace(",", "", $this->input->post("tot_spt_row_9"));
			$data['b_total_3_pem'] = str_replace(",", "", $this->input->post("tot_pem_row_9"));
			//hpp
			$data['b_total_4_spt'] = str_replace(",", "", $this->input->post("tot_spt_row_11"));
			$data['b_total_4_pem'] = str_replace(",", "", $this->input->post("tot_pem_row_11"));
			$data['tgl_edit'] = date("Y-m-d");
			$this->model_b->update_b_2($data, $thn_pajak);
		}
		$this->session->set_flashdata("konfirm", "Pembaharuan Data berhasil disimpan");
		redirect("harga_pokok_penjualan");
	}
}