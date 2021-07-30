<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Job extends CI_Controller
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
        $data['page'] = 'job';

        if ($x == 0) {

            $data['title']     = 'Dashboard Admin';
            // $data['produk'] = $this->db->query("SELECT * FROM produk")->result();
        } elseif ($x == 1) {

            $data['title']     = 'Dashboard HRD Recruitment';
            // $data['produk'] = $this->db->query("SELECT * FROM produk")->result();
            // $data['member_stat'] 	= $this->Admin_model->get_stat_member_dashboard();
            // $data['sales_stat'] 	= $this->Admin_model->get_stat_sales_dashboard();

            // $data['produk_stat']	= $this->db->query("SELECT id_produk,nama_produk,img_1,satuan FROM produk")->result();
        }

        $this->load->view('back/admin/job/list', $data);
    }

    function type()
    {
        $x = $this->session->userdata('log_level');
        $data['page']   = 'job_type';
        $data['title']  = 'Master Jenis Lowongan';

        if ($x == 0) { } elseif ($x == 1) { }

        $this->load->view('back/admin/job/type', $data);
    }
    function applicant()
    {
        $x = $this->session->userdata('log_level');
        $data['page']   = 'job_applicant';
        $data['title']  = 'Data Pelamar Kerja';
        
        if ($x == 0) { } elseif ($x == 1) { }

        $this->load->view('back/admin/job/applicant', $data);
    }
}
