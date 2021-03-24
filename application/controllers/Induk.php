<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Induk extends CI_Controller {

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
	//login
	public function index()
	{
		$this->_init();
		$this->model_security->get_security_user();
		$thn_pajak = date("Y");
		$data['penjualan_local_spt'] = $this->model_b->get_sum_spt_b_1_1($thn_pajak);
		$data['penjualan_local_pmrs'] = $this->model_b->get_sum_pemeriksa_b_1_1($thn_pajak);
		$this->load->view('utama', $data);
	}

}