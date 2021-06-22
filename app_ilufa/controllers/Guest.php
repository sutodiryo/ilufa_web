<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {

	public function index()
	{
		$this->load->view('guest/homepage');
	}

	public function homepage2()
	{
		$this->load->view('guest/homepage2');
	}
}
