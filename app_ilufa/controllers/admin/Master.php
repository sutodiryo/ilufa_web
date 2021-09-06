<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('log_valid') == FALSE) {
            $this->session->set_flashdata("report", "<div><p>Anda harus login terlebih dahulu...</p></div>");
            redirect(base_url('login'));
        } elseif ($this->session->userdata('log_admin') == FALSE) {
            $this->session->set_flashdata("report", "<div><p>Anda tidak diperkenankan mengakses halaman Admin.</p></div>");
            redirect(base_url('login'));
        }
        $this->load->model('Admin_model');
    }

    function applicant() //Pelamar Kerja
    {
        $x = $this->session->userdata('log_level');
        $data['page']   = 'job_applicant';
        $data['title']  = 'Data Pelamar Kerja';

        if ($x == 0 || $x == 1) {
            $data['applicant']  = $this->Admin_model->get_applicant();
            $this->load->view('back/admin/job/applicant', $data);
        } else {
            echo "Akses Ditolak";
        }
    }

    function branch_group()
    {
        $x = $this->session->userdata('log_level');
        $data['page']   = 'branch_group';
        $data['title']  = 'Master Data Kelompok Cabang';

        if ($x == 0 || $x == 2) {
            $data['branch_group'] = $this->db->query("SELECT *  FROM ilufa_master_branch_group
                                                                WHERE status=1
                                                        ORDER BY show_number ASC")->result();
            $this->load->view('back/admin/branch/group', $data);
        } else {
            echo "Akses Ditolak";
        }
    }

    function branch()
    {
        $x = $this->session->userdata('log_level');
        $data['page']   = 'branch';
        $data['title']  = 'Master Data Cabang';

        if ($x == 0 || $x == 2) {

            $data['branch'] = $this->db->query("SELECT  id_branch,branch_name,phone,email,password,instagram,facebook,tiktok,twitter,city,address,lat,lng,branch_group_id,status,
                                                        (SELECT name FROM ilufa_location_district WHERE id_location_district=ilufa_master_branch.city) AS kota
                                                        FROM ilufa_master_branch")->result();

            $this->load->view('back/admin/branch/list', $data);
        } else {
            echo "Akses Ditolak";
        }
    }

    function partner()
    {
        $x = $this->session->userdata('log_level');
        $data['page']   = 'partner';
        $data['title']  = 'Master Data Partnership';

        if ($x == 0 || $x == 2) {

            $data['partner'] = $this->db->query("SELECT  *
                                                        FROM ilufa_master_partner")->result();

            $this->load->view('back/admin/product/list', $data);
        } else {
            echo "Akses Ditolak";
        }
    }

    function product()
    {
        $x = $this->session->userdata('log_level');
        $data['page']   = 'product';
        $data['title']  = 'Master Data Produk';

        if ($x == 0 || $x == 3) {

            $data['product'] = $this->db->query("SELECT id_product,id_brand,id_supplier,name,slug,description,category,free_delivery,weight,length,width,height,status,
                                                        (SELECT name FROM ilufa_master_product_category WHERE id_category=ilufa_master_product.category) AS category_name,
                                                        (SELECT name FROM ilufa_master_product_brand WHERE id_brand=ilufa_master_product.id_brand) AS brand_name,
                                                        (SELECT image FROM ilufa_master_product_image WHERE id_product=ilufa_master_product.id_product LIMIT 1) AS image
                                                FROM ilufa_master_product")->result();

            $this->load->view('back/admin/product/list', $data);
        } else {
            echo "Akses Ditolak";
        }
    }

    function supplier() //Master Data Supplier
    {
        $x = $this->session->userdata('log_level');
        $data['page']   = 'supplier';
        $data['title']  = 'Master Supplier';

        if ($x == 0 || $x == 3) {
            $data['supplier']  = $this->db->query("SELECT * FROM ilufa_master_supplier")->result();
            $this->load->view('back/admin/supplier/list', $data);
        } else {
            echo "Akses Ditolak";
        }
    }

    function type() //Tipe Pekerjaan
    {
        $x = $this->session->userdata('log_level');
        $data['page']   = 'job_type';
        $data['title']  = 'Master Jenis Lowongan';

        if ($x == 0) { } elseif ($x == 1) {
            $data['jenis']  = $this->db->query("SELECT * FROM ilufa_job_type")->result();
        }

        $this->load->view('back/admin/job/type', $data);
    }

    //ACT

    //ACT
    function add($x)
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date("Y-m-d h:i:s");

        if ($x == "job") {
            $data     = array(
                'posisi'             => $this->input->post('posisi'),
                'deskripsi'     => $this->input->post('deskripsi'),
                'id_job_type'         => $this->input->post('id_job_type'),
                'status'         => $this->input->post('status'),
                'date_start'   => $this->input->post('date_start'),
                'date_end'          => $this->input->post('date_end'),
                'lokasi'          => $this->input->post('lokasi'), //Cabang
                'created'        => $now
            );

            $this->db->insert('ilufa_job', $data);

            $this->alert('info', 'Lowongan berhasil ditambahkan...');
            redirect(base_url('admin/job'));
        } elseif ($x == "job_type") {
            $data = array(
                'name'         => $this->input->post('name'),
                'status'     => $this->input->post('status')
            );

            $this->db->insert('ilufa_job_type', $data);

            $this->alert('info', 'Data berhasil ditambahkan...');
            redirect(base_url('admin/job/type'));
        } elseif ($x == "supplier") {
            $data     = array(
                'name' => $this->input->post('name'),
                'address' => $this->input->post('address'),
                'official_phone'  => $this->input->post('official_phone'),
                'official_phone_2' => $this->input->post('official_phone_2'),
                'fax' => $this->input->post('fax'),
                'official_email' => $this->input->post('official_email'),
                'scan_npwp' => $this->input->post('scan_npwp'),
                'npwp_name' => $this->input->post('npwp_name'),
                'siup' => $this->input->post('siup'),
                'owner_name' => $this->input->post('owner_name'),
                'owner_id' => $this->input->post('owner_id'),
                'owner_id_card' => $this->input->post('owner_id_card'),
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
                'status' => 1,
                'date_add' => $now
            );

            $this->db->insert('ilufa_master_supplier', $data);

            $this->alert('info', 'Supplier berhasil ditambahkan...');
            redirect(base_url('admin/master/supplier'));
        }
    }

    // Flashdata Report
    function alert($x, $y)
    {
        // $x : warna
        // $y : pesan
        return $this->session->set_flashdata("report", "<div class='alert alert-$x alert-dismissible fade show' role='alert'><span class='alert-icon'><i class='ni ni-like-2'></i></span><span class='alert-text'><strong>$y</strong></span><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button></div>");
    }
}
