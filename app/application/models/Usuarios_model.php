<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		// Load database or any other libraries here if needed
	}	

	public function get_all_users()
	{
		$query = $this->db->get('usuarios');
		return $query->result_array();
	}
	
}
