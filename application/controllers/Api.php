<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Api_model');
        if ($this->session->userdata('is_login') != 1) {
            redirect('access/denied');
        }
    }
}
