<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formulir_model extends CI_Model
{
    protected $table = "formulir3";

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function inserttiga($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function findIDLast($table)
    {
        $row = $this->db->select("*")->limit(1)->order_by('id', "DESC")->get($table)->row();
        return $row;
    }
}
