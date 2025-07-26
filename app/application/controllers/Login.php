<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('session');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            redirect('usuarios');
        }

        $this->load->library('template');
        $data['titulo'] = 'Login';
        $this->template->show('login', $data);
    }

    public function submit()
    {
        $email = $this->input->post('email');
        $cpf = $this->input->post('cpf');

        // Remove caracteres especiais do CPF
        $cpf = preg_replace('/[^0-9]/', '', $cpf);

        if (empty($email) || empty($cpf)) {
            $this->session->set_flashdata('error', 'Preencha todos os campos');
            redirect('login');
            return;
        }

        $user = $this->login_model->authenticate($email, $cpf);

        if ($user) {
            $this->session->set_userdata([
                'logged_in' => true,
                'user_id' => $user['id'],
                'user_name' => $user['nome'],
                'user_email' => $user['email']
            ]);
            redirect('usuarios');
        } else {
            $this->session->set_flashdata('error', 'Email ou CPF inválidos');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
