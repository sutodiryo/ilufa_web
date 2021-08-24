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

			if (!$this->upload->do_upload('cv')) {
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

			foreach ($this->input->post('position') as $key => $val) {
				$work_experience[] = array(
					// 'nama' => $_POST['nama'][$key],
					// 'alamat' => $_POST['alamat'][$key],
					
					'id_job_applicant' => [$insert_id][$key],
					'position' => $_POST['position'][$key],
					'company' => $_POST['company'][$key],
					'date_start' => $_POST['date_start'][$key],
					'date_end' => $_POST['date_end'][$key]
				);
			}
			$this->db->insert_batch('ilufa_job_applicant_work_experience', $work_experience);




			// foreach ($work_experience as $we) {
			// 	$work_ex[] = array(
			// 		'id_job_applicant' => $insert_id,
			// 		'position' => $we['position'],
			// 		'company' => $we['company'],
			// 		'date_start' => $we['date_start'],
			// 		'date_end' => $we['date_end']
			// 	);
			// }
			// $this->db->insert_batch('ilufa_job_applicant_work_experience', $work_ex);


			$data['notifikasi'] = "";
			redirect(base_url('lowongan/sent', $data));
		} elseif ($x == "") { }
	}

	function sent(){
		echo "OK";
	}

	// Flashdata Report
	function alert($x, $y)
	{
		// $x : warna
		// $y : pesan
		return $this->session->set_flashdata("report", "<div class='alert alert-$x mb-4' role='alert'> <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-x close' data-dismiss='alert'><line x1='18' y1='6' x2='6' y2='18'></line><line x1='6' y1='6' x2='18' y2='18'></line></svg></button> <strong>$y</strong></div>");
	}
}
