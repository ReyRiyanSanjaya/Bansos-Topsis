<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eror extends CI_Controller {


	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('eror');
		$this->load->view('layout/footer');
	}

}
