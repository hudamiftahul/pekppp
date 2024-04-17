<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Evaluator_model extends CI_Model
{
    public function get_indikator_id()
    {
        $query = $this->db
            ->select('id')
            ->from('indikator')
            ->get()
            ->result_array();
        return $query;
    }

    public function insert($data)
    {
        $this->db->insert('nilai_jawaban_evaluator', $data);
    }

    public function get_opd_name($opd_id)
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
