<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios extends CI_Controller
{

	public function index()
	{
		$this->load->model('Usuarios_model');
		$data['usuarios'] = $this->Usuarios_model->get_all_users();
		$this->load->library('template');
		$data['titulo'] = 'Usuários';
		$this->template->show('usuarios', $data);
	}
	//Método para obter todos os usuários via API
	public function getAll()
	{
		$this->load->model('Usuarios_model');
		$data['usuarios'] = $this->Usuarios_model->get_all_users();
		if (empty($data['usuarios'])) {
			$response = ['Vazio' => 'Nenhum usuário encontrado'];
		} else {
			$response = $data['usuarios'];
		}
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}

	public function add()
	{
		$this->load->model('Usuarios_model');
		$data = $this->input->post();

		if ($this->Usuarios_model->add_user($data)) {
			$response = ['success' => 'Usuário cadastrado com sucesso!'];
		} else {
			$response = ['error' => 'Erro ao cadastrar usuário.'];
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}

	public function editUser($id)
	{
		$this->load->model('Usuarios_model');
		$data = $this->input->post();

		if ($this->Usuarios_model->update_user($id, $data)) {
			$response = ['success' => 'Usuário atualizado com sucesso!'];
		} else {
			$response = ['error' => 'Erro ao atualizar usuário.'];
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}
	
	public function softDeleteUser($id)
	{
		$this->load->model('Usuarios_model');
		if ($this->Usuarios_model->soft_delete_user($id)) {
			$response = ['success' => 'Usuário excluído com sucesso!'];
		} else {
			$response = ['error' => 'Erro ao excluir usuário.'];
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}
}
