<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


	public function index()
	{
		$this->load->library('template');
		$data['titulo'] = 'Login Page';
		$this->template->show('login', $data);
		
	}

	
}
