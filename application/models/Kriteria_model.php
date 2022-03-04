<?php

class Kriteria_model extends CI_Model
{
	public function data_kriteria()
	{
		$query = $this->db->get('kriteria');
		return $query->result();
	}

	public function tambah_data_kriteria($data)
	{
		$this->db->insert('kriteria', $data);
	}

	public function getDatakriteria($id_kriteria)
	{
		$this->db->where('id_kriteria', $id_kriteria);
		$query = $this->db->get('kriteria');;
		return $query->row();
	}

	public function editDatakriteria($id_kriteria, $arrEditDatak)
	{
		$this->db->where('id_kriteria', $id_kriteria);
		$this->db->update('kriteria', $arrEditDatak);
	}

	public function deleteDatakriteria($where)
	{
		$this->db->where($where);
		$this->db->delete('kriteria');
	}
}
