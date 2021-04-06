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
		//$data['res'] = $this->model_b->get_row_b_2($thn_pajak);
		$this->load->view('page_b/b_3');
	}

}