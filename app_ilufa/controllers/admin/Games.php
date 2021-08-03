<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Games extends CI_Controller
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
        $data['title']    = 'Data Peserta Games iLuFA';
        $data['page']     = 'games';

        $id = $this->session->userdata('log_id');

        $data['games']    = $this->db->query("SELECT * FROM ilufa_lottery_games WHERE id_branch='$id'")->result();

        $this->load->view('back/admin/games', $data);
    }
}
