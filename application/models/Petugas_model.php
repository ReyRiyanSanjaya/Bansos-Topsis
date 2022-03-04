<?php

class Petugas_model extends CI_Model
{
	public function data_petugas()
	{
		$query = $this->db->get('petugas');
		return $query->result();
	}

	public function tambah_data_petugas($data)
	{
		$this->db->insert('petugas', $data);
	}

	public function getDatapetugas($id_petugas)
	{
		$this->db->where('id_petugas', $id_petugas);
		$query = $this->db->get('petugas');;
		return $query->row();
	}

	public function editDatapetugas($id_petugas, $arrEditDatap)
	{
		$this->db->where('id_petugas', $id_petugas);
		$this->db->update('petugas', $arrEditDatap);
	}

	public function deleteDatapetugas($where)
	{
		$this->db->where($where);
		$this->db->delete('petugas');
	}
}
