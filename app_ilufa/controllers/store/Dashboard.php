<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('log_valid') == FALSE) {
			$this->session->set_flashdata("report", "<div><p>Anda harus login terlebih dahulu...</p></div>");
			redirect(base_url('login'));
		}
		// $this->load->model('Member_model');
	}

	function index()
	{
		$data['title'] 	= 'Dashboard Store';
		$data['page'] 	= 'dashboard';

		// $data['member_stat'] 	= $this->Admin_model->get_stat_member_dashboard();
		// $data['sales_stat'] 	= $this->Admin_model->get_stat_sales_dashboard();

		// $data['produk_stat']	= $this->db->query("SELECT id_produk,nama_produk,img_1,satuan FROM produk")->result();

		// $data['produk'] 		= $this->db->query("SELECT * FROM produk")->result();

		$this->load->view('back/store/dashboard', $data);
	}
}
