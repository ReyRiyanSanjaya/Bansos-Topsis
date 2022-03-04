<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Warga_model');
		$this->load->model('Petugas_model');
		$this->load->model('Kriteria_model');
		$this->load->model('Pengaturan_model');
		$this->load->model('Survey_model');
		$this->load->library('session');
	}

	public function index()
	{
		$data['title'] = 'Dashboard Admin';
		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$this->load->view('dashboard/layout/header', $data);
		$this->load->view('dashboard/layout/sidebar');
		$this->load->view('dashboard/index');
		$this->load->view('dashboard/layout/footer');
	}

	// controller data warga 
	public function data_warga()
	{
		$warga = $this->Warga_model->data_warga();
		$datawarga = array('datawarga' => $warga);
		$data['title'] = 'Menu Data Warga';
		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$this->load->view('dashboard/layout/header', $data);
		$this->load->view('dashboard/layout/sidebar');
		$this->load->view('dashboard/menu/data_warga', $datawarga);
		$this->load->view('dashboard/layout/footer');
	}

	public function edit_data_warga($id)
	{
		$queryDataWarga = $this->Warga_model->getDataWarga($id);
		$datawargaedit = array('editdatawarga' => $queryDataWarga);
		$data['title'] = 'Menu Data Warga';
		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$this->load->view('dashboard/layout/header', $data);
		$this->load->view('dashboard/layout/sidebar');
		$this->load->view('dashboard/menu/edit_datawarga', $datawargaedit);
		$this->load->view('dashboard/layout/footer');
	}

	public function tambah_data_warga()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$photo = $this->input->post('photo');
		$status = $this->input->post('status_survey');

		$arrTambahData = array(
			'nik' => $nik,
			'nama' => $nama,
			'alamat' => $alamat,
			'photo' => $photo,
			'status_survey' => $status
		);

		$this->Warga_model->tambah_data_warga($arrTambahData);
		$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
			Berhasil menambah data warga.
		  </div>');
		redirect('admin/data_warga');
	}

	public function edit_data()
	{
		$id = $this->input->post('id');
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$photo = $this->input->post('photo');

		$arrEditData = array(
			'id' => $id,
			'nik' => $nik,
			'nama' => $nama,
			'alamat' => $alamat,
			'photo' => $photo
		);

		$this->Warga_model->editDataWarga($id, $arrEditData);
		$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
			Data berhasil diubah.
		  </div>');
		redirect('admin/data_warga');
	}

	public function delete_data_warga($id)
	{
		$where = array('id' => $id);
		$this->Warga_model->deleteDataWarga($where, 'warga');
		$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
			Data berhasil dihapus.
		  </div>');
		redirect('admin/data_warga');
	}



	// controller data petugas 
	public function data_petugas()
	{
		$petugas = $this->Petugas_model->data_petugas();
		$datapetugas = array('datapetugas' => $petugas);
		$data['title'] = 'Menu Data Petugas';
		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$this->load->view('dashboard/layout/header', $data);
		$this->load->view('dashboard/layout/sidebar');
		$this->load->view('dashboard/menu/data_petugas', $datapetugas);
		$this->load->view('dashboard/layout/footer');
	
	}

	public function edit_data_petugas($id_petugas)
	{
		$queryDatapetugas = $this->Petugas_model->getDatapetugas($id_petugas);
		$datapetugasedit = array('editdatapetugas' => $queryDatapetugas);
		$data['title'] = 'Menu Data Petugas';
		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$this->load->view('dashboard/layout/header', $data);
		$this->load->view('dashboard/layout/sidebar');
		$this->load->view('dashboard/menu/petugas/edit_datapetugas', $datapetugasedit);
		$this->load->view('dashboard/layout/footer');
	}

	public function tambah_data_petugas()
	{

		$nama = $this->input->post('nama');
		$no_hp = $this->input->post('no_hp');
		$photo = $this->input->post('photo');

		$arrTambahData = array(
			'nama' => $nama,
			'no_hp' => $no_hp,
			'photo' => $photo
		);

		$this->Petugas_model->tambah_data_petugas($arrTambahData);
		redirect('admin/data_petugas');
	}

	public function edit_datap()
	{
		$id_petugas = $this->input->post('id_petugas');
		$nama = $this->input->post('nama');
		$no_hp = $this->input->post('no_hp');
		$photo = $this->input->post('photo');
		$status = $this->input->post('status');
		$arrEditDatap = array(
			'id_petugas' => $id_petugas,
			'nama' => $nama,
			'no_hp' => $no_hp,
			'photo' => $photo,
			'status' => $status
		);

		$this->Petugas_model->editDatapetugas($id_petugas, $arrEditDatap);
		$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
			Data berhasil diubah.
		  </div>');
		redirect('admin/data_petugas');
	}

	public function delete_data_petugas($id_petugas)
	{
		$where = array('id_petugas' => $id_petugas);
		$this->Petugas_model->deleteDatapetugas($where, 'petugas');
		$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
			Data berhasil dihapus.
		  </div>');
		redirect('admin/data_petugas');
	}



	// kriteria controller 
	// controller data kriteria 
	public function data_kriteria()
	{
		$kriteria = $this->Kriteria_model->data_kriteria();
		$datakriteria = array('datakriteria' => $kriteria);
		$data['title'] = 'Menu Kriteria';
		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$this->load->view('dashboard/layout/header', $data);
		$this->load->view('dashboard/layout/sidebar');
		$this->load->view('dashboard/menu/kriteria/data_kriteria', $datakriteria);
		$this->load->view('dashboard/layout/footer');
	
	}

	public function edit_data_kriteria($id_kriteria)
	{
		$queryDatakriteria = $this->Kriteria_model->getDatakriteria($id_kriteria);
		$datakriteriaedit = array('editdatakriteria' => $queryDatakriteria);
		$data['title'] = 'Dashboard Admin';
		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$this->load->view('dashboard/layout/header', $data);
		$this->load->view('dashboard/layout/sidebar');
		$this->load->view('dashboard/menu/kriteria/edit_datakriteria', $datakriteriaedit);
		$this->load->view('dashboard/layout/footer');
	}

	public function tambah_data_kriteria()
	{

		$nama = $this->input->post('nama');
		$no_hp = $this->input->post('no_hp');
		$photo = $this->input->post('photo');

		$arrTambahData = array(
			'nama' => $nama,
			'no_hp' => $no_hp,
			'photo' => $photo
		);

		$this->Kriteria_model->tambah_data_kriteria($arrTambahData);
		redirect('admin/data_kriteria');
	}

	public function edit_datak()
	{
		$id_kriteria = $this->input->post('id_kriteria');
		$atribut = $this->input->post('atribut');
		$bobot_nilai = $this->input->post('bobot_nilai');
		$nama_kriteria = $this->input->post('nama_kriteria');
		$arrEditDatak = array(
			'id_kriteria' => $id_kriteria,
			'atribut' => $atribut,
			'bobot_nilai' => $bobot_nilai,
			'nama_kriteria' => $nama_kriteria,
		);

		$this->Kriteria_model->editDatakriteria($id_kriteria, $arrEditDatak);
		$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
			Data berhasil diubah.
		  </div>');
		redirect('admin/data_kriteria');
	}

	public function delete_data_kriteria($id_kriteria)
	{
		$where = array('id_kriteria' => $id_kriteria);
		$this->Kriteria_model->deleteDatakriteria($where, 'kriteria');
		$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
			Data berhasil dihapus.
		  </div>');
		redirect('admin/data_kriteria');
	}


	// controller pengaturan akun 
	public function setting()
	{
		$data['title'] = 'Pengaturan Akun';
		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$this->load->view('dashboard/layout/header', $data);
		$this->load->view('dashboard/layout/sidebar');
		$this->load->view('dashboard/akun/data_user');
		$this->load->view('dashboard/layout/footer');
	}

	public function setting_user()
	{
		$data['title'] = 'Ubah Data Admin';
		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$this->load->view('dashboard/layout/header', $data);
		$this->load->view('dashboard/layout/sidebar');
		$this->load->view('dashboard/akun/edit_datapengaturan');
		$this->load->view('dashboard/layout/footer');
	}

	public function edit_datau()
	{
		$id = $this->input->post('id');
		$nik = $this->input->post('nik');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$poto = $this->input->post('poto');
		$level = $this->input->post('level');
		$arrEditDataku = array(
			'id' => $id,
			'nik' => $nik,
			'password' => $password,
			'nama' => $nama,
			'alamat' => $alamat,
			'poto' => $poto,
			'level' => $level
		);

		$this->Pengaturan_model->editDataUser($id, $arrEditDataku);
		$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
			Data berhasil diubah.
		  </div>');
		redirect('admin/setting');
	}



	// survey warga 
	public function survey_warga() {
		$survey = $this->Survey_model->data_tabel_kriteria();
		$datasurvey = array('datasurvey' => $survey);
		$survey1 = $this->Survey_model->nilai_tabel_kriteria();
		$datasurvey1 = array('datasurvey1' => $survey1);

		$datasemua= array('datas' => $datasurvey, 'datas1' =>$datasurvey1);
		$data['title'] = 'Silahkan Masukan Data Hasil Survey';
		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$this->load->view('dashboard/layout/header', $data);
		$this->load->view('dashboard/layout/sidebar');
		$this->load->view('dashboard/survey/survey_warga', $datasurvey);
		$this->load->view('dashboard/layout/footer');
	//  print_r($ss[1]);
	}



	// hasil nilai topsis
	public function hasil_topsis() {
		$data['title'] = 'Hasil Nilai Topsis';
		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$this->load->view('dashboard/layout/header', $data);
		$this->load->view('dashboard/layout/sidebar');
		$this->load->view('dashboard/topsis/index');
		$this->load->view('dashboard/layout/footer');
	}

}
