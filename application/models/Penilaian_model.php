<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penilaian_model extends CI_Model
{
    public function insert($table, $data)
    {
        $this->db->insert($table, $data);
    }

    // public function get_sts($opd_id)
    // {
    //     $this->db->select('telah_input.*, opd.opd')
    //         ->from('telah_input')
    //         ->join('opd', 'telah_input.opd_id = opd.id')
    //         ->where('opd_id', $opd_id);
    //     return $this->db->get()->result_array();
    // }
    
    public function get_sts($user_id)
    {
        return $this->db->select('telah_input.*, users.fullname')
            ->from('telah_input')
            ->join('users', 'telah_input.user_id = users.id')
            ->where('user_id', $user_id)
            ->get()
            ->result_array();
    }

    public function findIDLast($table)
    {
        $row = $this->db->select("*")->limit(1)->order_by('id', "DESC")->get($table)->row();
        return $row;
    }
}
