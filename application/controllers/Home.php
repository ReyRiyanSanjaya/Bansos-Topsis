<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('home');
		$this->load->view('isian');
		$this->load->view('layout/footer');
	}

	public function tentang()
	{
		$this->load->view('layout/header');
		$this->load->view('tentang');
		$this->load->view('layout/footer');
	}
}
