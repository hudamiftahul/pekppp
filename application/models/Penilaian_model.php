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

    public function find($table, $user_id, $tahun)
    {
        return $this->db->get_where($table, ['user_id' => $user_id, 'tahun' => $tahun])
                ->row_array();
    }

    public function check($table, $aspek_id, $user_id)
    {
        return $this->db->get_where($table, ['id' => $aspek_id, 'user_id' => $user_id])
                        ->num_rows();
    }

    public function findIdTable($table, $user_id, $tahun)
    {
        return $this->db->select('id')
                        ->from($table)
                        ->where('user_id', $user_id)
                        ->where('tahun', $tahun)
                        ->get()
                        ->row_array();
    }

    public function findBuktiDukung($table, $id_aspek)
    {
        $aspek = substr($table, 11);
        return $this->db->select('*')
                        ->from($table)
                        ->where($aspek . '_id', $id_aspek)
                        ->order_by('nomor', 'asc')
                        ->get()
                        ->result_array();
    }

    public function update($table, $data, $aspek_id)
    {
        $this->db->where('id', $aspek_id)
                ->update($table, $data);
    }

    public function deleteFile($table, $id)
    {
        $this->db->where('id', $id);
        $this->db->delete($table);
    }
    
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
