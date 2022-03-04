<?php

class Auth_model extends CI_Model
{
	public function login($post)
	{
		$this->db->from('user');
		$this->db->where('nik',$post['nik']);
		$this->db->where('password',sha1($post['password']));
		$query = $this->db->get();
		return $query;
	}
}
