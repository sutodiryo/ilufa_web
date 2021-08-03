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

    function branch()
    {
        $x = $this->session->userdata('log_level');
        $data['page']   = 'branch';
        $data['title']  = 'Master Data Cabang';

        $data['branch'] = $this->db->query("SELECT * FROM ilufa_master_branch")->result();
        if ($x == 0) { } elseif ($x == 2) { }

        $this->load->view('back/admin/branch/list', $data);
    }

    function type()
    {
        $x = $this->session->userdata('log_level');
        $data['page']   = 'job_type';
        $data['title']  = 'Master Jenis Lowongan';

        if ($x == 0) { } elseif ($x == 1) {
            $data['jenis']  = $this->db->query("SELECT * FROM ilufa_job_type")->result();
        }

        $this->load->view('back/admin/job/type', $data);
    }
    function applicant()
    {
        $x = $this->session->userdata('log_level');
        $data['page']   = 'job_applicant';
        $data['title']  = 'Data Pelamar Kerja';

        $data['applicant']  = $this->Admin_model->get_applicant();

        if ($x == 0) { } elseif ($x == 1) { }

        $this->load->view('back/admin/job/applicant', $data);
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
