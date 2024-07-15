<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'page' => 'login',
            'konten' => $this->load->view('login/v_login', [], TRUE),
        ];
        $this->load->view('login/v_template', $data);
    }
}

/* End of file: Login.php */
