<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guest extends CI_Controller
{

	public function index()
	{
		$data['title'] 			= "home";
		$data['homepage'] 		= $this->db->query("SELECT id_homepage,hero_text,hero_video,featured_product,status FROM ilufa_homepage WHERE status=1")->row();
		$data['branch_group'] 	= $this->db->query("SELECT * FROM ilufa_master_branch_group WHERE status=1 ORDER BY show_number ASC")->result();
		$data['store'] 			= $this->db->query("SELECT * FROM ilufa_master_branch
													WHERE id_branch != 'C0000' AND status=1
													ORDER BY branch_name ASC")->result();

		$data['product']		= $this->db->query("SELECT 	id_product,id_brand,id_supplier,name,slug,description,category,free_delivery,weight,length,width,height,status,
															(SELECT name FROM ilufa_master_product_category WHERE id_category=ilufa_master_product.category) AS category_name,
															(SELECT name FROM ilufa_master_product_brand WHERE id_brand=ilufa_master_product.id_brand) AS brand_name,
															(SELECT image FROM ilufa_master_product_image WHERE id_product=ilufa_master_product.id_product LIMIT 1) AS image
													FROM ilufa_master_product")->result();

		$this->load->view('guest/homepage', $data);
	}

	//Semua produk
	public function product()
	{
		$data['title']		= "product";
		$data['category']	= $this->db->query("SELECT * FROM ilufa_master_product_category")->result();
		$data['product']	= $this->db->query("SELECT 	id_product,id_brand,id_supplier,name,slug,description,category,free_delivery,weight,length,width,height,status,
														(SELECT name FROM ilufa_master_product_category WHERE id_category=ilufa_master_product.category) AS category_name,
														(SELECT name FROM ilufa_master_product_brand WHERE id_brand=ilufa_master_product.id_brand) AS brand_name,
														(SELECT image FROM ilufa_master_product_image WHERE id_product=ilufa_master_product.id_product LIMIT 1) AS image
												FROM ilufa_master_product")->result();

		$this->load->view('guest/product/index', $data);
	}

	//Detail Produk
	public function product_detail($slug)
	{
		$data['title'] = "product";

		$q = $this->db->query("SELECT * FROM ilufa_master_product WHERE slug='$slug'")->num_rows();

		if ($q > 0) {
			$data['product'] = $this->db->query("SELECT 	id_product,id_brand,id_supplier,name,slug,description,category,free_delivery,weight,length,width,height,status,
																(SELECT name FROM ilufa_master_product_category WHERE id_category=ilufa_master_product.category) AS category_name,
															(SELECT name FROM ilufa_master_product_brand WHERE id_brand=ilufa_master_product.id_brand) AS brand_name,
																(SELECT image FROM ilufa_master_product_image WHERE id_product=ilufa_master_product.id_product LIMIT 1) AS image
														FROM ilufa_master_product WHERE slug='$slug'")->row();
			$this->load->view('guest/product/detail', $data);
		} else {
			echo "produk tidak tersedia";
		}
	}

	public function store()
	{
		$data['title'] 			= "store";
		$data['store'] 			= $this->db->query("SELECT * FROM ilufa_master_branch
														WHERE id_branch != 'C0000' AND status=1
														ORDER BY branch_name ASC")->result();

		$this->load->view('guest/store/index', $data);
	}

	public function supplier()
	{
		$data['title'] = "Form Pendaftaran Supplier";

		$this->form_validation->set_rules('name', 'Nama', 'required', ['required' => 'Nama belum diisi!']);
		$this->form_validation->set_rules('official_phone', 'Nomor Telepon', 'required|trim|is_unique[ilufa_master_supplier.official_phone]', ['required' => 'Nomor Telepon wajib diisi!', 'is_unique' => 'Nomor telepon sudah terdaftar']);
		$this->form_validation->set_rules('official_email', 'Email Kantor', 'required|trim|valid_email|trim|is_unique[ilufa_master_supplier.official_email]', ['required' => 'Email wajib diisi!', 'valid_email' => 'Format email salah!', 'is_unique' => 'Email sudah dipakai']);
		$this->form_validation->set_rules('siup', 'SIUP', 'required|trim|min_length[4]', ['required' => 'SIUP wajib diisi!', 'min_length' => 'SIUP minimal terdiri dari 4 karakter']);

		$this->form_validation->set_rules('address', 'address', 'required', ['required' => 'Alamat wajib diisi!']);
		// $this->form_validation->set_rules('official_phone', 'official_phone', 'required', ['required' => 'Nomo diisi!']);
		// $this->form_validation->set_rules('official_email', 'official_email', 'required', ['required' => 'Nomor rekening belum diisi!']);
		$this->form_validation->set_rules('owner_name', 'owner_name', 'required', ['required' => 'Nama owner wajib diisi!']);
		$this->form_validation->set_rules('owner_id', 'owner_id', 'required', ['required' => 'NIK wajib diisi!']);
		$this->form_validation->set_rules('owner_phone', 'owner_phone', 'required', ['required' => 'Nomor handphone wajib diisi!']);
		$this->form_validation->set_rules('bank_account', 'bank_account', 'required', ['required' => 'Rekening bank wajib diisi!']);
		$this->form_validation->set_rules('bank_account_name', 'bank_account_name', 'required', ['required' => 'Nama rekening bank wajib diisi!']);
		$this->form_validation->set_rules('company_name', 'company_name', 'required', ['required' => 'Nama profil perusahaan wajib diisi!']);
		$this->form_validation->set_rules('company_pic', 'company_pic', 'required', ['required' => 'Penanggungjawab perusahaan wajib diisi!']);

		date_default_timezone_set('Asia/Jakarta');
		$now   = date("Y-m-d H:i:s");

		if (empty($_FILES['attachment']['name'])) {
			$this->form_validation->set_rules('attachment', 'Document', 'required', ['required' => 'Anda belum memilih file attachment!']);
		} else {
			$config['upload_path']      = './public/back/upload/supplier/';
			$config['allowed_types']    = 'zip|rar|ZIP|RAR';
			$config['max_size']         = 5120;
			$config['encrypt_name']     = TRUE;
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('attachment')) {
				// $this->form_validation->set_rules('attachment', 'Document', 'required', ['required' => 'Format file tidak sesuai!']);
				// $this->load->view('guest/supplier/form', $data);
				$error = $this->upload->display_errors();
				$this->session->set_flashdata("report", $error);
				// $this->alert('danger', $error);
				redirect('formsupplierilufa', $data);
				// die('aa');
			} else {
				$up_file 		= $this->upload->data();
				$attachment 	= $up_file['file_name'];
			}
		}

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('guest/supplier/form', $data);
		} else {

			$data 	= [
				'name' => $this->input->post('name'),
				'address' => $this->input->post('address'),
				'city' => $this->input->post('city'),
				'postal_code' => $this->input->post('postal_code'),
				'official_phone'  => $this->input->post('official_phone'),
				'official_phone_2' => $this->input->post('official_phone_2'),
				'fax' => $this->input->post('fax'),
				'official_email' => $this->input->post('official_email'),
				// 'scan_npwp' => $this->input->post('scan_npwp'),
				'npwp_name' => $this->input->post('npwp_name'),
				'siup' => $this->input->post('siup'),
				'owner_name' => $this->input->post('owner_name'),
				'owner_id' => $this->input->post('owner_id'),
				// 'owner_id_card' => $this->input->post('owner_id_card'),
				// 'owner_id_card' => $ktp,
				'owner_address' => $this->input->post('owner_address'),
				'owner_city' => $this->input->post('owner_city'),
				'owner_postal_code' => $this->input->post('owner_postal_code'),
				'owner_phone' => $this->input->post('owner_phone'),
				'owner_fax' => $this->input->post('owner_fax'),
				'owner_email' => $this->input->post('owner_email'),
				'owner_npwp' => $this->input->post('owner_npwp'),
				'owner_npwp_name' => $this->input->post('owner_npwp_name'),
				'bank' => $this->input->post('bank'),
				'bank_account' => $this->input->post('bank_account'),
				'bank_account_name' => $this->input->post('bank_account_name'),
				'company_name' => $this->input->post('company_name'),
				'company_field' => $this->input->post('company_field'),
				'company_established' => $this->input->post('company_established'),
				'company_headquarter' => $this->input->post('company_headquarter'),
				'company_pic' => $this->input->post('company_pic'),
				'company_director' => $this->input->post('company_director'),
				'company_phone' => $this->input->post('company_phone'),
				'company_website' => $this->input->post('company_website'),
				'company_email' => $this->input->post('company_email'),
				'attachment' => $attachment,
				'status' => 1,
				'date_add' => $now
			];
			$this->db->insert('ilufa_master_supplier', $data);

			redirect(base_url('supplier_ok'));
		}
	}

	public function supplier_ok()
	{
		$this->load->view('guest/supplier/supplier_ok');
	}

	public function file_check($str)
	{
		$allowed_mime_type_arr = array('application/zip', 'application/vnd.rar');
		// $allowed_mime_type_arr = array('application/pdf','image/gif','image/jpeg','image/pjpeg','image/png','image/x-png');
		$mime = get_mime_by_extension($_FILES['file']['name']);
		if (isset($_FILES['file']['name']) && $_FILES['file']['name'] != "") {
			if (in_array($mime, $allowed_mime_type_arr)) {
				return true;
			} else {
				$this->form_validation->set_message('file_check', 'Format file attachment harus berupa .zip/.rar.');
				return false;
			}
		} else {
			$this->form_validation->set_message('file_check', 'Anda belum memilih file attachment.');
			return false;
		}
	}
}
