<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		// if ($this->session->userdata('log_valid') == FALSE) {
		// 	redirect(base_url('auth'));
		// }
		// if ($this->session->userdata('log_admin') == FALSE) {
		// 	redirect(base_url('member'));
		// }
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->model('Admin_model');

		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else if (!$this->ion_auth->is_admin()) {
			redirect(base_url('member'));
			// show_error('You must be an administrator to view this page.');
		}
	}

	function index()
	{
		$data['title'] 	= 'Dashboard Admin';
		$data['page'] 	= 'dashboard';

		// $data['member_stat'] 	= $this->Admin_model->get_stat_member_dashboard();
		// $data['sales_stat'] 	= $this->Admin_model->get_stat_sales_dashboard();

		// $data['produk_stat']	= $this->db->query("SELECT id_produk,nama_produk,img_1,satuan FROM produk")->result();

		// $data['produk'] 		= $this->db->query("SELECT * FROM produk")->result();

		$this->load->view('admin/dashboard', $data);
	}

	public function homepage2()
	{
		$this->load->view('guest/homepage2');
	}
}
