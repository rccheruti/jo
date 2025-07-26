<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


	public function index()
	{
		$this->load->library('template');
		$data['titulo'] = 'Página Inicial';
		$this->template->show('home', $data);
	}
}
