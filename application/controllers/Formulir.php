<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formulir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('is_login') != 1) {
            redirect('access/denied');
        }
        $this->load->model('Formulir_model');
    }

    public function getIDInsert($table)
    {
        $result = $this->Formulir_model->findIDLast($table);
        if ($result == NULL) {
            $id = 1;
        } else {
            $id = (int)$result->id + 1;
        }
        return $id;
    }

    public function tiga()
    {
        // get data berdasarkan opd id
        $formulir = $this->Formulir_model->getByOpdId($this->session->userdata('opd_id'));
        // check apakah data ditahun ini sudah = 10
        if (count($formulir) < 10) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('formulir/tiga');
            $this->load->view('templates/footer');
        } else {
            // tampilkan terimakasih
            $this->load->view('access_limit');
        }
    }

    public function proses_tiga()
    {
        $opd_id = $this->session->userdata('opd_id');
        $post = $this->input->post();

        $insert = [
            'opd_id' => $opd_id,
            'tahun' => date('Y'),
            'layanan1' => htmlspecialchars($post['layanan1']),
            'layanan2' => htmlspecialchars($post['layanan2']),
            'layanan3' => htmlspecialchars($post['layanan3']),
            'layanan4' => htmlspecialchars($post['layanan4']),
            'sdm1' => htmlspecialchars($post['sdm1']),
            'sdm2' => htmlspecialchars($post['sdm2']),
            'sdm3' => htmlspecialchars($post['sdm3']),
            'sarpras1' => htmlspecialchars($post['sarpras1']),
            'sarpras2' => htmlspecialchars($post['sarpras2']),
            'sarpras3' => htmlspecialchars($post['sarpras3']),
            'sarpras4' => htmlspecialchars($post['sarpras4']),
            'si1' => htmlspecialchars($post['si1']),
            'si2' => htmlspecialchars($post['si2']),
            'konsul1' => htmlspecialchars($post['konsul1']),
        ];

        $this->Formulir_model->insert($insert);
        $this->session->set_flashdata('success', 'Berhasil Menambahkan Survey F03');
        redirect('formulir/tiga');
    }

    public function do_upload_formulirtiga()
    {
        $directory = FCPATH . '/uploads/formulirtiga/' . $this->session->userdata('name') . '/' . date('Y') . '/';
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
        $config['upload_path']   = $directory;
        $config['allowed_types'] = 'jpeg|pdf|jpg|png|zip|rar';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('buktiformulirtiga')) {
            $nama = $this->upload->data('file_name');
            $this->Formulir_model->inserttiga('buktidukung_formulir3', ['formulir3_id' => $this->getIDInsert('formulir3'), 'buktidukung' => $nama]);
        }
    }
}
