<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Access extends CI_Controller
{
    public function denied()
    {
        $this->load->view('access_denied');
    }
}
