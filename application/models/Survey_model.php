<?php

class Survey_model extends CI_Model
{
	public function data_tabel_kriteria()
	{
		$this->db->select('*');
		$this->db->from('kriteria');
		$query = $this->db->get();
		return $query->result();
	}

	public function nilai_tabel_kriteria()
	{
		$this->db->select('*');
		$this->db->from('t_kriteria');
		$query = $this->db->get();
		return $query->result();
	}
}
