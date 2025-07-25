<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function get_all_users()
	{
		$query = $this->db->get('usuarios');
		return $query->result_array();
	}
	
	public function get_user_by_id($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('usuarios');
		return $query->row_array();
	}

	public function add_user($data)
	{
		var_dump($data); die();
		// return $this->db->insert('usuarios', $data);
	}
}
