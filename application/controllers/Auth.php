<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        // if ($this->session->userdata('is_login') == 1) {
        //     redirect('dashboard');
        // }
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function store()
    {
        $username = htmlspecialchars($this->input->post('username'));
        $password = htmlspecialchars($this->input->post('password'));

        // ambil data user 
        $user = $this->Auth_model->get_user($username);

        // check jika data ditemukan
        if ($user != NULL) {

            // check kesesuaian password dengan password pada database
            if (password_verify($password, $user['password'])) {

                // membuat array untuk session login
                $sess_login = [
                    'username' => $user['username'],
                    'name' => $user['fullname'],
                    'opd_id' => $user['opd_id'],
                    'role_id' => $user['role_id'],
                    'user_id' => $user['id'],
                    'is_login' => 1
                ];

                // set session login
                $this->session->set_userdata($sess_login);

                // check user akses menu
                if ($sess_login['role_id'] == 2) {
                    $result['status'] = 'success';
                    $result['message'] = 'Berhasil Login';
                    $result['redirect_url'] = base_url('dashboard/validator');
                } elseif ($sess_login['role_id'] == 3) {
                    $result['status'] = 'success';
                    $result['message'] = 'Berhasil Login';
                    $result['redirect_url'] = base_url('dashboard');
                }
            } else {
                $result['status'] = 'error';
                $result['errormsg'] = 'Password Salah';
            }
        } else {
            $result['status'] = 'error';
            $result['errormsg'] = 'Username tidak ditemukan';
        }
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($result));
        $string = $this->output->get_output();
        echo $string;
        exit();
    }

    public function logout()
    {
        $user_data = $this->session->all_userdata();
        foreach ($user_data as $key) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
        $this->session->sess_destroy();
        redirect('auth');
    }
}
