<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Dashboard_model', 'Dashboard');
        if ($this->session->userdata('is_login') != 1) {
            redirect('access/denied');
        }
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('dashboard/index');
        $this->load->view('templates/footer');
    }

    // public function index()
    // {
    //     $data['nilai_evaluasi'] = $this->get_nilai_evaluasi();
    //     $data['nilai_validasi'] = $this->get_nilai_validasi();
    //     $this->load->view('templates/header');
    //     $this->load->view('templates/sidebar');
    //     $this->load->view('templates/topbar');
    //     $this->load->view('dashboard/index', $data);
    //     $this->load->view('templates/footer');
    // }

    // public function validator()
    // {
    //     $data['belum_validasi'] = count($this->Dashboard->belum_valid());
    //     $data['sudah_validasi'] = count($this->Dashboard->sudah_valid());
    //     $data['total_inputan'] = count($this->Dashboard->total_inputan());
    //     $this->load->view('templates/header');
    //     $this->load->view('templates/sidebar');
    //     $this->load->view('templates/topbar');
    //     $this->load->view('dashboard/validator', $data);
    //     $this->load->view('templates/footer');
    // }

    // private function get_nilai_evaluasi()
    // {
    //     $opd_id = $this->session->userdata('opd_id');
    //     $evaluasi = $this->Dashboard->get_data_evaluasi($opd_id);
    //     $dimensi1 = 0;
    //     $dimensi2 = 0;
    //     $dimensi3 = 0;
    //     $dimensi4 = 0;

    //     if ($evaluasi != NULL) {
    //         foreach ($evaluasi as $e) {
    //             if ($e['indikator_id'] > 0 && $e['indikator_id'] <= 15) {
    //                 $dimensi1 += $e['nilai'];
    //             } else if ($e['indikator_id'] > 15 && $e['indikator_id'] <= 28) {
    //                 $dimensi2 += $e['nilai'];
    //             } else if ($e['indikator_id'] > 28 && $e['indikator_id'] <= 33) {
    //                 $dimensi3 += $e['nilai'];
    //             } else if ($e['indikator_id'] > 33 && $e['indikator_id'] <= 38) {
    //                 $dimensi4 += $e['nilai'];
    //             }
    //         }

    //         $input = $dimensi1 * 21.85 / 100;
    //         $proses = $dimensi2 * 32.37 / 100;
    //         $output = $dimensi3 * 24.24 / 100;
    //         $pengaduan = $dimensi4 * 21.54 / 100;

    //         $total_nilai = $input + $proses + $output + $pengaduan;
    //         $total_nilai = number_format($total_nilai, 2);
    //     } else {
    //         $total_nilai = 0;
    //     }

    //     return $total_nilai;
    // }

    // public function get_nilai_validasi()
    // {
    //     $opd_id = $this->session->userdata('opd_id');
    //     $evaluasi = $this->Dashboard->get_data_validasi($opd_id);
    //     $dimensi1 = 0;
    //     $dimensi2 = 0;
    //     $dimensi3 = 0;
    //     $dimensi4 = 0;

    //     if ($evaluasi != NULL) {
    //         foreach ($evaluasi as $e) {
    //             if ($e['indikator_id'] > 0 && $e['indikator_id'] <= 15) {
    //                 $dimensi1 += $e['nilai'];
    //             } else if ($e['indikator_id'] > 15 && $e['indikator_id'] <= 28) {
    //                 $dimensi2 += $e['nilai'];
    //             } else if ($e['indikator_id'] > 28 && $e['indikator_id'] <= 33) {
    //                 $dimensi3 += $e['nilai'];
    //             } else if ($e['indikator_id'] > 33 && $e['indikator_id'] <= 38) {
    //                 $dimensi4 += $e['nilai'];
    //             }
    //         }

    //         $input = $dimensi1 * 21.85 / 100;
    //         $proses = $dimensi2 * 32.37 / 100;
    //         $output = $dimensi3 * 24.24 / 100;
    //         $pengaduan = $dimensi4 * 21.54 / 100;

    //         $total_nilai = $input + $proses + $output + $pengaduan;
    //         $total_nilai = number_format($total_nilai, 2);
    //     } else {
    //         $total_nilai = 0;
    //     }

    //     return $total_nilai;
    // }
}
