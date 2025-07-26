<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model 
{
    public function authenticate($email, $cpf)
    {
        $this->db->where('email', $email);
        $this->db->where('cpf', $cpf);
        $this->db->where('softdelete IS NULL');
        $query = $this->db->get('usuarios');
        
        return $query->row_array();
    }
}
