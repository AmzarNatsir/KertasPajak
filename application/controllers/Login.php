<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		//$this->load->model(array("model_registrasi"));
		date_default_timezone_set("Asia/Makassar");
	}

	public function index()
	{
		$this->load->view('login');
	}
	public function do_login()
	{
		$usr_dev = "admin";
        $pss_dev = "z";
		$user_name = $this->input->post("inp_username");
		$user_passwd = $this->input->post("inp_passwd");
        if($usr_dev==$user_name && $pss_dev==$user_passwd)
        {
        	$sess = array("aktif_ses"=>"1", "user_ses"=>"Admin", "user_kat"=>"1");
            $this->session->set_userdata($sess);
            redirect("induk");   
        }
        else
        {
            $this->session->set_flashdata("konfirm", "Maaf, Nama Pengguna atau Password Salah. Coba Lagi");
            redirect("");
        }
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect("");
	}
}
