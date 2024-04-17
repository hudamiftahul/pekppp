<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jawaban_model extends CI_Model
{

    public function insertbukung($data)
    {
        $this->db->insert('buktidukung_jawaban', $data);
    }

    public function insertjawaban($data)
    {
        $this->db->insert('jawaban', $data);
    }
}
