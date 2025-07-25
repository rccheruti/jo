<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	
	public function index()
	{
		$this->load->library('template');
		$data['titulo'] = 'Lista de Usuários';
		$this->template->show('usuarios', $data);
	}

	public function home()
	{
		$this->load->view('home');
	}

	public function about()
	{
		$this->load->view('about');
	}
}
