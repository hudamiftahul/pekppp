<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    public function get_data_evaluasi($opd_id)
    {
        $this->db
            ->select('*')
            ->from('nilai_jawaban_evaluator')
            ->where(['opd_id' => $opd_id, 'tahun' => date('Y')]);
        return $this->db->get()->result_array();
    }

    public function get_data_validasi($opd_id)
    {
        $this->db
            ->select('*')
            ->from('nilai_jawaban_validator')
            ->where(['opd_id' => $opd_id, 'tahun' => date('Y')]);
        return $this->db->get()->result_array();
    }

    public function belum_valid()
    {
        $this->db->where('is_validasi', 0);
        return $this->db->get('jawaban')->result_array();
    }

    public function sudah_valid()
    {
        $this->db->where('is_validasi', 1);
        return $this->db->get('jawaban')->result_array();
    }

    public function total_inputan()
    {
        return $this->db->get('jawaban')->result_array();
    }
}
