<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Validator_model extends CI_Model
{

    public function get_jawaban()
    {
        $this->db->select('*');
        $this->db->from('jawaban');
        $this->db->join('opd', 'opd.id=jawaban.opd_id', 'left');
        $this->db->order_by('jawaban.id', 'desc');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function update($set, $opd_id)
    {
        $this->db->where('opd_id', $opd_id);
        $this->db->update('jawaban', $set);
    }

    public function insert($data)
    {
        $this->db->insert('nilai_jawaban_validator', $data);
    }

    public function get_name_opd($opd_id)
    {
        $query = $this->db
            ->select('opd')
            ->from('opd')
            ->where('id', $opd_id)
            ->get()
            ->row_array();
        return $query;
    }
}
