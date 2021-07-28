<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Games extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('log_valid') == FALSE) {
			$this->session->set_flashdata("report", "<div><p>Anda harus login terlebih dahulu...</p></div>");
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$this->load->view('guest/games/fortune');
	}
}
