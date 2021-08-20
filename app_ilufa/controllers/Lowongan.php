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
		$data['title']	= "job_list";
		$data['job'] 	= $this->Guest_model->get_job();
		$this->load->view('guest/lowongan/list', $data);
	}

	public function detail($id)
	{
		$data['title'] 		= "job_detail";
		$data['detail_job'] = $this->Guest_model->get_job_by_id($id);
		$this->load->view('guest/lowongan/detail', $data);
	}

	public function apply($id)
	{
		$data['title'] = "job_apply";

		$data['detail_job'] = $this->Guest_model->get_job_by_id($id);
		$data['province'] 	= $this->Guest_model->get_province();
		$data['district'] 	= $this->Guest_model->get_district();

		$this->load->view('guest/lowongan/apply', $data);
	}

	function act($x)
	{
		date_default_timezone_set('Asia/Jakarta');
		$now = date("Y-m-d h:i:s");

		if ($x == "send_applicant") {

			$config['upload_path']      = './public/guest/upload/lowongan/cv/';
			$config['allowed_types']    = 'pdf|docx|doc|jpg|jpeg|png|PNG|JPG';
			$config['max_size']         = 5120;
			$config['encrypt_name']     = TRUE;
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('bukti_transfer')) {
				$error = $this->upload->display_errors();
				$this->alert('danger', $error);
				// redirect('lowongan/');

				// $this->alert('info', 'Harga berhasil ditambahkan...');
				$referred_from = $this->session->userdata('referred_lowongan');
				redirect($referred_from);
			} else {
				$up = $this->upload->data();
				$cv = $up['file_name'];
			}

			$data = array(
				'nik' => $this->input->post('nik'),
				'full_name'	=> $this->input->post('full_name'),
				'birth_place' => $this->input->post('birth_place'),
				'birth_date' => $this->input->post('birth_date'),
				'gender' => $this->input->post('gender'),
				'email'	=> $this->input->post('email'),
				'no_hp' => $this->input->post('no_hp'),
				'cv' => $cv,
				'expected_salary' => $this->input->post('expected_salary'),
				'id_location_province' => $this->input->post('id_location_province'),
				'id_location_district' => $this->input->post('id_location_district'),
				'id_location_subdistrict' => $this->input->post('id_location_subdistrict'),
				'address' => $this->input->post('address'),
				'last_education' => $this->input->post('last_education'),
				'department' => $this->input->post('department'),
				'school' => $this->input->post('school'),
				'language_skills' => $this->input->post('language_skills'),
				'skills' => $this->input->post('skills'),
				'submit_time' => $now
			);

			$this->db->insert('ilufa_job_applicant', $data);

			$insert_id = $this->db->insert_id();

			$work_experience = array();
			foreach ($this->cart->contents() as $cart) {
				$transaksi_produk[] = array(
					'id_job_applicant' => $insert_id,
					'position' => $cart['qty'],
					'company' => $cart['qty'],
					'date_start' => $cart['price'],
					'date_end' => $cart['qty']
				);
			}
			$this->db->insert_batch('transaksi_produk', $transaksi_produk);


			$data['notifikasi'] = "";
			redirect(base_url('guest/lowongan/sent', $data));
		} elseif ($x == "") { }
	}

	// Flashdata Report
	function alert($x, $y)
	{
		// $x : warna
		// $y : pesan
		return $this->session->set_flashdata("report", "<div class='alert alert-$x alert-dismissible fade show' role='alert'><span class='alert-icon'><i class='ni ni-like-2'></i></span><span class='alert-text'><strong>$y</strong></span><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button></div>");
	}
}
