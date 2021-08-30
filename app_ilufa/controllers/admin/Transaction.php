<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaction extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('log_valid') == FALSE) {
			$this->session->set_flashdata("report", "<div><p>Anda harus login terlebih dahulu...</p></div>");
			redirect(base_url('login'));
		}
		if ($this->session->userdata('log_admin') == FALSE) {
			$this->session->set_flashdata("report", "<div><p>Anda tidak diperkenankan mengakses halaman Admin.</p></div>");
			redirect(base_url('login'));
		}
		$this->load->model('Admin_model');
	}

	function index()
	{
		$x = $this->session->userdata('log_level');
		$data['page'] 	= 'transaction';

		if ($x == 0) {
			$data['title'] 	= 'Daftar Transaksi';
			$this->load->view('back/admin/transaction/list', $data);
		} elseif ($x == 1) {
		} elseif ($x == 2) {
		} elseif ($x == 3) {
		}
	}
}
