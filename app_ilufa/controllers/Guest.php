<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {

	public function index()
	{
		$data['branch_group'] = $this->db->query("SELECT * FROM ilufa_master_branch_group WHERE status=1 ORDER BY show_number ASC")->result();
		$this->load->view('guest/homepage', $data);
	}

	// public function homepage2()
	// {
	// 	$this->load->view('guest/homepage2');
	// }
}
