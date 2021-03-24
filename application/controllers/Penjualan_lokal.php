<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan_lokal extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("model_b");
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
		//bulan 1
		$data['bln_1_1'] = (empty($this->model_b->get_row_b_1_1($thn_pajak, 1)->n_spt)) ? "0" : $this->model_b->get_row_b_1_1($thn_pajak, 1)->n_spt;
		$data['bln_1_2'] = (empty($this->model_b->get_row_b_1_1($thn_pajak, 1)->n_pemeriksa)) ? "0" : $this->model_b->get_row_b_1_1($thn_pajak, 1)->n_pemeriksa;
		//bulan 2
		$data['bln_2_1'] = (empty($this->model_b->get_row_b_1_1($thn_pajak, 2)->n_spt)) ? "0" : $this->model_b->get_row_b_1_1($thn_pajak, 2)->n_spt;
		$data['bln_2_2'] = (empty($this->model_b->get_row_b_1_1($thn_pajak, 2)->n_pemeriksa)) ? "0" : $this->model_b->get_row_b_1_1($thn_pajak, 2)->n_pemeriksa;
		//bulan 3
		$data['bln_3_1'] = (empty($this->model_b->get_row_b_1_1($thn_pajak, 3)->n_spt)) ? "0" : $this->model_b->get_row_b_1_1($thn_pajak, 3)->n_spt;
		$data['bln_3_2'] = (empty($this->model_b->get_row_b_1_1($thn_pajak, 3)->n_pemeriksa)) ? "0" : $this->model_b->get_row_b_1_1($thn_pajak, 3)->n_pemeriksa;
		//bulan 4
		$data['bln_4_1'] = (empty($this->model_b->get_row_b_1_1($thn_pajak, 4)->n_spt)) ? "0" : $this->model_b->get_row_b_1_1($thn_pajak, 4)->n_spt;
		$data['bln_4_2'] = (empty($this->model_b->get_row_b_1_1($thn_pajak, 4)->n_pemeriksa)) ? "0" : $this->model_b->get_row_b_1_1($thn_pajak, 4)->n_pemeriksa;
		//bulan 5
		$data['bln_5_1'] = (empty($this->model_b->get_row_b_1_1($thn_pajak, 5)->n_spt)) ? "0" : $this->model_b->get_row_b_1_1($thn_pajak, 5)->n_spt;
		$data['bln_5_2'] = (empty($this->model_b->get_row_b_1_1($thn_pajak, 5)->n_pemeriksa)) ? "0" : $this->model_b->get_row_b_1_1($thn_pajak, 5)->n_pemeriksa;
		//bulan 6
		$data['bln_6_1'] = (empty($this->model_b->get_row_b_1_1($thn_pajak, 6)->n_spt)) ? "0" : $this->model_b->get_row_b_1_1($thn_pajak, 6)->n_spt;
		$data['bln_6_2'] = (empty($this->model_b->get_row_b_1_1($thn_pajak, 6)->n_pemeriksa)) ? "0" : $this->model_b->get_row_b_1_1($thn_pajak, 6)->n_pemeriksa;
		//bulan 7
		$data['bln_7_1'] = (empty($this->model_b->get_row_b_1_1($thn_pajak, 7)->n_spt)) ? "0" : $this->model_b->get_row_b_1_1($thn_pajak, 7)->n_spt;
		$data['bln_7_2'] = (empty($this->model_b->get_row_b_1_1($thn_pajak, 7)->n_pemeriksa)) ? "0" : $this->model_b->get_row_b_1_1($thn_pajak, 7)->n_pemeriksa;
		//bulan 8
		$data['bln_8_1'] = (empty($this->model_b->get_row_b_1_1($thn_pajak, 8)->n_spt)) ? "0" : $this->model_b->get_row_b_1_1($thn_pajak, 8)->n_spt;
		$data['bln_8_2'] = (empty($this->model_b->get_row_b_1_1($thn_pajak, 8)->n_pemeriksa)) ? "0" : $this->model_b->get_row_b_1_1($thn_pajak, 8)->n_pemeriksa;
		//bulan 9
		$data['bln_9_1'] = (empty($this->model_b->get_row_b_1_1($thn_pajak, 9)->n_spt)) ? "0" : $this->model_b->get_row_b_1_1($thn_pajak, 9)->n_spt;
		$data['bln_9_2'] = (empty($this->model_b->get_row_b_1_1($thn_pajak, 9)->n_pemeriksa)) ? "0" : $this->model_b->get_row_b_1_1($thn_pajak, 9)->n_pemeriksa;
		//bulan 10
		$data['bln_10_1'] = (empty($this->model_b->get_row_b_1_1($thn_pajak, 10)->n_spt)) ? "0" : $this->model_b->get_row_b_1_1($thn_pajak, 10)->n_spt;
		$data['bln_10_2'] = (empty($this->model_b->get_row_b_1_1($thn_pajak, 10)->n_pemeriksa)) ? "0" : $this->model_b->get_row_b_1_1($thn_pajak, 10)->n_pemeriksa;
		//bulan 11
		$data['bln_11_1'] = (empty($this->model_b->get_row_b_1_1($thn_pajak, 11)->n_spt)) ? "0" : $this->model_b->get_row_b_1_1($thn_pajak, 11)->n_spt;
		$data['bln_11_2'] = (empty($this->model_b->get_row_b_1_1($thn_pajak, 11)->n_pemeriksa)) ? "0" : $this->model_b->get_row_b_1_1($thn_pajak, 11)->n_pemeriksa;
		//bulan 12
		$data['bln_12_1'] = (empty($this->model_b->get_row_b_1_1($thn_pajak, 12)->n_spt)) ? "0" : $this->model_b->get_row_b_1_1($thn_pajak, 12)->n_spt;
		$data['bln_12_2'] = (empty($this->model_b->get_row_b_1_1($thn_pajak, 12)->n_pemeriksa)) ? "0" : $this->model_b->get_row_b_1_1($thn_pajak, 12)->n_pemeriksa;
		$this->load->view('page_b/b_1_1', $data);
	}
	function tambah_data()
	{
		$this->_init();
		$this->model_security->get_security_user();
		$this->load->view('page_b/b_1_1_add');
	}
	function simpan_data()
	{
		$thn_pajak = date("Y");
		$bln_1 = $this->model_b->cari_b_1_1($thn_pajak, 1);
		if(count($bln_1)==0) {
			//insert
			$data['tahun_pajak'] = $thn_pajak;
			$data['bulan_pajak'] = 1;
			$data['n_spt'] = str_replace(",", "", $this->input->post("inp_sptwp_jan"));
			$data['n_pemeriksa'] = str_replace(",", "", $this->input->post("inp_pemeriksa_jan"));
			$this->model_b->insert_b_1_1($data);
		} else {
			//update
			$data['n_spt'] = str_replace(",", "", $this->input->post("inp_sptwp_jan"));
			$data['n_pemeriksa'] = str_replace(",", "", $this->input->post("inp_pemeriksa_jan"));
			$this->model_b->update_b_1_1($data, $thn_pajak, 1);
		}

		$bln_2 = $this->model_b->cari_b_1_1($thn_pajak, 2);
		if(count($bln_2)==0) {
			//insert
			$data['tahun_pajak'] = $thn_pajak;
			$data['bulan_pajak'] = 2;
			$data['n_spt'] = str_replace(",", "", $this->input->post("inp_sptwp_feb"));
			$data['n_pemeriksa'] = str_replace(",", "", $this->input->post("inp_pemeriksa_feb"));
			$this->model_b->insert_b_1_1($data);
		} else {
			//update
			$data['n_spt'] = str_replace(",", "", $this->input->post("inp_sptwp_feb"));
			$data['n_pemeriksa'] = str_replace(",", "", $this->input->post("inp_pemeriksa_feb"));
			$this->model_b->update_b_1_1($data, $thn_pajak, 2);
		}
		$bln_3 = $this->model_b->cari_b_1_1($thn_pajak, 3);
		if(count($bln_3)==0) { 
			//insert
			$data['tahun_pajak'] = $thn_pajak;
			$data['bulan_pajak'] = 3;
			$data['n_spt'] = str_replace(",", "", $this->input->post("inp_sptwp_mar"));
			$data['n_pemeriksa'] = str_replace(",", "", $this->input->post("inp_pemeriksa_mar"));
			$this->model_b->insert_b_1_1($data);
		} else {
			//update
			$data['n_spt'] = str_replace(",", "", $this->input->post("inp_sptwp_mar"));
			$data['n_pemeriksa'] = str_replace(",", "", $this->input->post("inp_pemeriksa_mar"));
			$this->model_b->update_b_1_1($data, $thn_pajak, 3);
		}
		$bln_4 = $this->model_b->cari_b_1_1($thn_pajak, 4);
		if(count($bln_4)==0) {
			//insert
			$data['tahun_pajak'] = $thn_pajak;
			$data['bulan_pajak'] = 4;
			$data['n_spt'] = str_replace(",", "", $this->input->post("inp_sptwp_apr"));
			$data['n_pemeriksa'] = str_replace(",", "", $this->input->post("inp_pemeriksa_apr"));
			$this->model_b->insert_b_1_1($data);
		} else {
			//update
			$data['n_spt'] = str_replace(",", "", $this->input->post("inp_sptwp_apr"));
			$data['n_pemeriksa'] = str_replace(",", "", $this->input->post("inp_pemeriksa_apr"));
			$this->model_b->update_b_1_1($data, $thn_pajak, 4);
		}
		$bln_5 = $this->model_b->cari_b_1_1($thn_pajak, 5);
		if(count($bln_5)==0) {
			//insert
			$data['tahun_pajak'] = $thn_pajak;
			$data['bulan_pajak'] = 5;
			$data['n_spt'] = str_replace(",", "", $this->input->post("inp_sptwp_mei"));
			$data['n_pemeriksa'] = str_replace(",", "", $this->input->post("inp_pemeriksa_mei"));
			$this->model_b->insert_b_1_1($data);
		} else {
			//update
			$data['n_spt'] = str_replace(",", "", $this->input->post("inp_sptwp_mei"));
			$data['n_pemeriksa'] = str_replace(",", "", $this->input->post("inp_pemeriksa_mei"));
			$this->model_b->update_b_1_1($data, $thn_pajak, 5);
		}
		$bln_6 = $this->model_b->cari_b_1_1($thn_pajak, 6);
		if(count($bln_6)==0) {
			//insert
			$data['tahun_pajak'] = $thn_pajak;
			$data['bulan_pajak'] = 6;
			$data['n_spt'] = str_replace(",", "", $this->input->post("inp_sptwp_jun"));
			$data['n_pemeriksa'] = str_replace(",", "", $this->input->post("inp_pemeriksa_jun"));
			$this->model_b->insert_b_1_1($data);
		} else {
			//update
			$data['n_spt'] = str_replace(",", "", $this->input->post("inp_sptwp_jun"));
			$data['n_pemeriksa'] = str_replace(",", "", $this->input->post("inp_pemeriksa_jun"));
			$this->model_b->update_b_1_1($data, $thn_pajak, 6);
		}
		$bln_7 = $this->model_b->cari_b_1_1($thn_pajak, 7);
		if(count($bln_7)==0) {
			//insert
			$data['tahun_pajak'] = $thn_pajak;
			$data['bulan_pajak'] = 7;
			$data['n_spt'] = str_replace(",", "", $this->input->post("inp_sptwp_jul"));
			$data['n_pemeriksa'] = str_replace(",", "", $this->input->post("inp_pemeriksa_jul"));
			$this->model_b->insert_b_1_1($data);
		} else {
			//update
			$data['n_spt'] = str_replace(",", "", $this->input->post("inp_sptwp_jul"));
			$data['n_pemeriksa'] = str_replace(",", "", $this->input->post("inp_pemeriksa_jul"));
			$this->model_b->update_b_1_1($data, $thn_pajak, 7);
		}
		$bln_8 = $this->model_b->cari_b_1_1($thn_pajak, 8);
		if(count($bln_8)==0) {
			//insert
			$data['tahun_pajak'] = $thn_pajak;
			$data['bulan_pajak'] = 8;
			$data['n_spt'] = str_replace(",", "", $this->input->post("inp_sptwp_agu"));
			$data['n_pemeriksa'] = str_replace(",", "", $this->input->post("inp_pemeriksa_agu"));
			$this->model_b->insert_b_1_1($data);
		} else {
			//update
			$data['n_spt'] = str_replace(",", "", $this->input->post("inp_sptwp_agu"));
			$data['n_pemeriksa'] = str_replace(",", "", $this->input->post("inp_pemeriksa_agu"));
			$this->model_b->update_b_1_1($data, $thn_pajak, 8);
		}
		$bln_9 = $this->model_b->cari_b_1_1($thn_pajak, 9);
		if(count($bln_9)==0) {
			//insert
			$data['tahun_pajak'] = $thn_pajak;
			$data['bulan_pajak'] = 9;
			$data['n_spt'] = str_replace(",", "", $this->input->post("inp_sptwp_sep"));
			$data['n_pemeriksa'] = str_replace(",", "", $this->input->post("inp_pemeriksa_sep"));
			$this->model_b->insert_b_1_1($data);
		} else {
			//update
			$data['n_spt'] = str_replace(",", "", $this->input->post("inp_sptwp_sep"));
			$data['n_pemeriksa'] = str_replace(",", "", $this->input->post("inp_pemeriksa_sep"));
			$this->model_b->update_b_1_1($data, $thn_pajak, 9);
		}
		$bln_10 = $this->model_b->cari_b_1_1($thn_pajak, 10);
		if(count($bln_10)==0) {
			//insert
			$data['tahun_pajak'] = $thn_pajak;
			$data['bulan_pajak'] = 10;
			$data['n_spt'] = str_replace(",", "", $this->input->post("inp_sptwp_okt"));
			$data['n_pemeriksa'] = str_replace(",", "", $this->input->post("inp_pemeriksa_okt"));
			$this->model_b->insert_b_1_1($data);
		} else {
			//update
			$data['n_spt'] = str_replace(",", "", $this->input->post("inp_sptwp_okt"));
			$data['n_pemeriksa'] = str_replace(",", "", $this->input->post("inp_pemeriksa_okt"));
			$this->model_b->update_b_1_1($data, $thn_pajak, 10);
		}
		$bln_11 = $this->model_b->cari_b_1_1($thn_pajak, 11);
		if(count($bln_11)==0) {
			//insert
			$data['tahun_pajak'] = $thn_pajak;
			$data['bulan_pajak'] = 11;
			$data['n_spt'] = str_replace(",", "", $this->input->post("inp_sptwp_nov"));
			$data['n_pemeriksa'] = str_replace(",", "", $this->input->post("inp_pemeriksa_nov"));
			$this->model_b->insert_b_1_1($data);
		} else {
			//update
			$data['n_spt'] = str_replace(",", "", $this->input->post("inp_sptwp_nov"));
			$data['n_pemeriksa'] = str_replace(",", "", $this->input->post("inp_pemeriksa_nov"));
			$this->model_b->update_b_1_1($data, $thn_pajak, 11);
		}
		$bln_12 = $this->model_b->cari_b_1_1($thn_pajak, 12);
		if(count($bln_12)==0) {
			//insert
			$data['tahun_pajak'] = $thn_pajak;
			$data['bulan_pajak'] = 12;
			$data['n_spt'] = str_replace(",", "", $this->input->post("inp_sptwp_des"));
			$data['n_pemeriksa'] = str_replace(",", "", $this->input->post("inp_pemeriksa_des"));
			$this->model_b->insert_b_1_1($data);
		} else {
			//update
			$data['n_spt'] = str_replace(",", "", $this->input->post("inp_sptwp_des"));
			$data['n_pemeriksa'] = str_replace(",", "", $this->input->post("inp_pemeriksa_des"));
			$this->model_b->update_b_1_1($data, $thn_pajak, 12);
		}
		$this->session->set_flashdata("konfirm", "Pembaharuan Data berhasil disimpan");
		redirect("penjualan_lokal");

	}
}