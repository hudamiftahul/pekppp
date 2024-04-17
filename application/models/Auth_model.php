<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    protected $table = "users";

    public function get_user($username)
    {
        $this->db->where('username', $username);
        return $this->db->get($this->table)->row_array();
    }
}
