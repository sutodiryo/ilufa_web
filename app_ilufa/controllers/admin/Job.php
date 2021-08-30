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
        } elseif ($this->session->userdata('log_admin') == FALSE) {
            $this->session->set_flashdata("report", "<div><p>Anda tidak diperkenankan mengakses halaman Admin.</p></div>");
            redirect(base_url('login'));
        }
        $this->load->model('Admin_model');
    }

    function index()
    {
        $x = $this->session->userdata('log_level');
        $data['page']   = 'job';
        $data['title']  = 'Master Data Lowongan Kerja';

        if ($x == 0 || $x == 1) {
            $data['job']    = $this->Admin_model->get_job();
            $data['cabang'] = $this->db->query("SELECT * FROM ilufa_master_branch")->result();
            $data['jenis']  = $this->db->query("SELECT * FROM ilufa_job_type")->result();
        }

        $this->load->view('back/admin/job/list', $data);
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
    function applicant($x)
    {
        $level = $this->session->userdata('log_level');
        $data['page']   = 'job_applicant';

        if ($x == "all") {
            $data['title']  = 'Data Pelamar Kerja';
            $applicant = $this->Admin_model->get_applicant('all', 'by_status');
        } elseif ($x == "process") {
            $data['title']  = 'Data Pelamar Kerja Diproses';
            $applicant = $this->Admin_model->get_applicant('0', 'by_status');
        } elseif ($x == "accepted") {
            $data['title']  = 'Data Pelamar Kerja Diterima';
            $applicant = $this->Admin_model->get_applicant('1', 'by_status');
        } elseif ($x == "rejected") {
            $data['title']  = 'Data Pelamar Kerja Ditolak';
            $applicant = $this->Admin_model->get_applicant('2', 'by_status');
        } else {
            $job            = $this->db->query("SELECT posisi FROM ilufa_job WHERE id_job='$x'")->row();
            $data['title']  = 'Data Pelamar Kerja (' . $job->posisi . ')';
            $applicant = $this->Admin_model->get_applicant($x, 'by_job');
        }

        $data['applicant']  = $applicant;
        if ($level == 0) { } elseif ($level == 1) { }

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
