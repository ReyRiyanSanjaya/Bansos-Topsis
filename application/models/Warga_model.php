<?php

class Warga_model extends CI_Model
{
	public function data_warga()
	{
		$query = $this->db->get('warga');
		return $query->result();
	}

	public function tambah_data_warga($data)
	{
		$this->db->insert('warga', $data);
	}

	public function getDataWarga($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('warga');;
		return $query->row();
	}

	public function editDataWarga($id, $arrEditData)
	{
		$this->db->where('id', $id);
		$this->db->update('warga', $arrEditData);
	}

	public function deleteDataWarga($where)
	{
		$this->db->where($where);
		$this->db->delete('warga');
	}
}
