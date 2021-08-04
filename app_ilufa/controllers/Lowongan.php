<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lowongan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Guest_model');
	}

	public function index()
	{
		$data['job'] = $this->Guest_model->get_job();
		$this->load->view('guest/lowongan/list', $data);
	}

	public function detail($id)
	{
		$data['detail_job'] = $this->Guest_model->get_job_by_id($id);
		$this->load->view('guest/lowongan/detail', $data);
	}

	public function apply($id)
	{
		$this->load->view('guest/lowongan/apply');
	}
}
