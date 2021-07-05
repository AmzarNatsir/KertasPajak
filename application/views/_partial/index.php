<?php
$this->load->view('_partial/header');
$this->load->view('_partial/top');
//$this->load->view('_partial/menu_sidebar');
$this->load->get_section('sidebar');
$this->load->get_section('theme-switcher');
echo $output;
$this->load->view('_partial/footer');
?>