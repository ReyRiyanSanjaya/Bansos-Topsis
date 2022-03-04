<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {


	public function index()
	{
		$data['title'] = 'Dashboard Petugas Survey';
		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$this->load->view('dashboard/layout/header', $data);
		$this->load->view('dashboard/layout/sidebar');
		$this->load->view('dashboard/index');
		$this->load->view('dashboard/layout/footer');
	}

}
