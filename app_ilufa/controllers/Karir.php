<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karir extends CI_Controller {

	public function index()
	{
		$this->load->view('guest/karir/index');
	}
}
