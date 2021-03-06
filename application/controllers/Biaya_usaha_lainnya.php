<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biaya_usaha_lainnya extends CI_Controller 
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
		$data['gaji_karyawan_spt'] = $this->model_b->get_sum_spt_b_3_1($thn_pajak);
		$data['gaji_karyawan_pem'] = $this->model_b->get_sum_pemeriksa_b_3_1($thn_pajak);
		$data['pemasaran_spt'] = $this->model_b->get_sum_spt_b_3_2($thn_pajak);
		$data['pemasaran_pem'] = $this->model_b->get_sum_pemeriksa_b_3_2($thn_pajak);
		$data['sewa_spt'] = $this->model_b->get_sum_spt_b_3_3($thn_pajak);
		$data['sewa_pem'] = $this->model_b->get_sum_pemeriksa_b_3_3($thn_pajak);
		$data['konsultan_spt'] = $this->model_b->get_sum_spt_b_3_4($thn_pajak);
		$data['konsultan_pem'] = $this->model_b->get_sum_pemeriksa_b_3_4($thn_pajak);
		$data['piutang_ragu_spt'] = $this->model_b->get_sum_spt_b_3_5($thn_pajak);
		$data['piutang_ragu_pem'] = $this->model_b->get_sum_pemeriksa_b_3_5($thn_pajak);
		
		//$data['res'] = $this->model_b->get_row_b_2($thn_pajak);
		$this->load->view('page_b/b_3', $data);
	}

}