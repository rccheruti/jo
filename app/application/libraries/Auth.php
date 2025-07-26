<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth
{
    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    public function check_login()
    {
        if (!$this->CI->session->userdata('logged_in')) {
            redirect('login');
        }
    }
}
