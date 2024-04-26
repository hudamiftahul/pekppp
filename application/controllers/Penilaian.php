<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penilaian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penilaian_model');
        if ($this->session->userdata('is_login') != 1) {
            redirect('access/denied');
        }
    }

    public function getIDInsert($table)
    {
        $result = $this->Penilaian_model->findIDLast($table);
        if ($result == NULL) {
            $id = 1;
        } else {
            $id = (int)$result->id + 1;
        }
        return $id;
    }

    public function index()
    {
        $user_id = $this->session->userdata('user_id');
        $ata['no'] = 1;
        $data['sts_input'] = $this->Penilaian_model->get_sts($user_id);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('penilaian/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pertanyaan/index');
        $this->load->view('templates/footer');
    }

    public function edit($tahun = '')
    {
        // find (table, where)
        $user_id = $this->session->userdata('user_id');
        $data['buktiDukung'] = $this->buktiDukung($tahun);
        
        if ($user_id != NULL) {
            $data['user_id'] = $user_id;
            $data['kepel'] = $this->Penilaian_model->find('kepel', $user_id, $tahun);
            $data['prof_sdm'] = $this->Penilaian_model->find('prof_sdm', $user_id, $tahun);
            $data['sarpras'] = $this->Penilaian_model->find('sarpras', $user_id, $tahun);
            $data['sipp'] = $this->Penilaian_model->find('sipp', $user_id, $tahun);
            $data['konsul'] = $this->Penilaian_model->find('konsul', $user_id, $tahun);
            $data['inovasi'] = $this->Penilaian_model->find('inovasi', $user_id, $tahun);
            $data['tambahan'] = $this->Penilaian_model->find('tambahan', $user_id, $tahun);
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('pertanyaan/edit', $data);
            $this->load->view('templates/footer');
        } else {
            redirect('penilaian');
        }
    }

    public function hapusdukung()
    {
        $post = $this->input->post();
        if (isset($post['namafile']) && isset($post['path']) && isset($post['table']) && isset($post['id'])) {
            // check exists file
            if (file_exists(FCPATH . $post['path'] . $post['namafile'])) {
                // remove file from path
                unlink(FCPATH . $post['path'] . $post['namafile']);
                // remove db
                $this->Penilaian_model->deleteFile($post['table'], $post['id']);
            }
        }
    }

    public function update()
    {
        $user_id = htmlspecialchars($this->input->post('user_id'));
        if ($user_id === $this->session->userdata('user_id')) {
            $post = $this->input->post();
            
            // kepel:begin
            if (isset($post['masyarakat_dilibatkan'])) {
                $masyarakat_dilibatkan = implode(", ", $post["masyarakat_dilibatkan"]);
            } else {
                $masyarakat_dilibatkan = NULL;
            }
            
            if (isset($post['media_publikasi_sp'])) {
                $media_publikasi_sp = implode(", ", $post['media_publikasi_sp']);
            } else {
                $media_publikasi_sp = NULL;
            }
            
            if (isset($post['media_publikasi_sp_digunakan'])) {
                $media_publikasi_maklumat_pelayanan = implode(", ", $post["media_publikasi_sp_digunakan"]);
            } else {
                $media_publikasi_maklumat_pelayanan = NULL;
            }

            if (isset($post['media_publikasi_skm'])) {
                $media_publikasi_skm = implode(", ", $post['media_publikasi_skm']);
            } else {
                $media_publikasi_skm = NULL;
            }

            if (isset($post['publikasi_skm'])) {
                $jumlah_media_publikasi_skm = implode(",", $post['publikasi_skm']);
            } else {
                $jumlah_media_publikasi_skm = NULL;
            }

            // get tabel dulu
            $table_kepel = $this->Penilaian_model->check('kepel', $post['kepel_id'], $this->session->userdata('user_id'));
            if ($table_kepel < 1) {
                // kosong
                // jika tabel kepel dengan id, user_id kosong lakukan insert
                $insert_kebijakan = [
                    'user_id' => $this->session->userdata('user_id'),
                    'tahun' => date('Y'),
                    'dibuat_standar_pelayanan' => (isset($post["dibuat_standar_pelayanan"])) ? $post["dibuat_standar_pelayanan"] : NULL,
                    'jumlah_pelayanan_dimiliki' => (isset($post["jumlah_jenis_pelayanan_dimiliki"])) ? $post["jumlah_jenis_pelayanan_dimiliki"] : NULL,
                    'jumlah_pelayanan_dibuat' => (isset($post["jumlah_jenis_pelayanan_dibuat"])) ? $post["jumlah_jenis_pelayanan_dibuat"] : NULL,
                    'pelayanan_memenuhi_14komponen' => (isset($post['memenuhi_14_komponen'])) ? $post["memenuhi_14_komponen"] : NULL,
                    'pelayanan_melibatkan_masyarakat' => (isset($post['melibatkan_unsur_masyarakat'])) ? $post["melibatkan_unsur_masyarakat"] : NULL,
                    'pelayanan_telah_ditetapkan' => (isset($post["ditetapkan_standar_pelayanan"])) ? $post["ditetapkan_standar_pelayanan"] : NULL,
                    'pelayanan_monev' => (isset($post["monev_standar_pelayanan"])) ? $post["monev_standar_pelayanan"] : NULL,
                    'sp_melibatkan_masyarakat' => (isset($post["monev_standar_pelayanan"])) ? $post["unsur_mas"] : NULL,
                    'unsur_masyarakat_dilibatkan' => $masyarakat_dilibatkan,
                    'sp_dipublikasi' => (isset($post["sp_publikasi"])) ? $post["sp_publikasi"] : NULL,
                    'sp_dipublikasi_6komponen_service_delivery' => (isset($post["6_komponen_serv_delivery"])) ? $post["6_komponen_serv_delivery"] : NULL,
                    'media_publikasi' => $media_publikasi_sp,
                    'pernyataan_peninjauan_ulang' => (isset($post["tinjau_ulang"])) ? $post["tinjau_ulang"] : NULL,
                    'maklumat_pelayanan_ditetapkan' => (isset($post["maklumat_pelayanan_ditetapkan"])) ? $post["maklumat_pelayanan_ditetapkan"] : NULL,
                    'maklumat_pelayanan_sesuai_pp' => (isset($post["maklumat_pelayanan_sesuai_ppu"])) ? $post["maklumat_pelayanan_sesuai_ppu"] : NULL,
                    'maklumat_pelayanan_dipublikasi' => (isset($post["maklumat_pelayanan_dipublikasi"])) ? $post["maklumat_pelayanan_dipublikasi"] : NULL,
                    'media_publikasi_maklumat_pelayanan' => $media_publikasi_maklumat_pelayanan,
                    'melaksanakan_skm' => (isset($post["unit_lokus_skm"])) ? $post["unit_lokus_skm"] : NULL,
                    'berapakali_setahun_skm' => (isset($post["jumlah_dilaksanakan_skm"])) ? $post["jumlah_dilaksanakan_skm"] : NULL,
                    'nilai_rata_rata_skm' => (isset($post["rata_rata_skm"])) ? $post["rata_rata_skm"] : NULL,
                    'skm_sesuai_permenpanrb' => (isset($post["pelaksanaan_skm_permenpanrb"])) ? $post["pelaksanaan_skm_permenpanrb"] : NULL,
                    'skm_dipublikasi' => (isset($post["publikasi_hasil_skm"])) ? $post["publikasi_hasil_skm"] : NULL,
                    'media_publikasi_skm_menggunakan' => $media_publikasi_skm,
                    'hasil_skm_ditindaklanjuti' => (isset($post["tindak_lanjut_hasil_skm"])) ? $post["tindak_lanjut_hasil_skm"] : NULL,
                    'jumlah_media_publikasi_skm' => $jumlah_media_publikasi_skm,
                    'rencana_tindak_lanjut_skm' => (isset($post["rencana_tindak_lanjut_skm"])) ? $post["rencana_tindak_lanjut_skm"] : NULL,
                    'persentase_rencana_tindaklanjut_skm_1tahun' => (isset($post["persentase_tindak_lanjut_skm"])) ? $post["persentase_tindak_lanjut_skm"] : NULL,
                    'laporan_tindaklanjut' => (isset($post["laporan_tindak_lanjut_skm"])) ? $post["laporan_tindak_lanjut_skm"] : NULL,
                    'apakah_hasil_skm_ditindaklanjuti' => (isset($post["apakah_hasil_skm_ditindaklanjuti"])) ? $post["apakah_hasil_skm_ditindaklanjuti"] : NULL,
                    'berapa_lama_tindaklanjut_skm' => (isset($post["berapa_lama_tindak_lanjut_skm"])) ? $post["berapa_lama_tindak_lanjut_skm"] : NULL
                ];
                $this->Penilaian_model->insert('kepel', $insert_kebijakan);
            } else {
                // ada
                $update_kepel = [
                    'dibuat_standar_pelayanan' => (isset($post["dibuat_standar_pelayanan"])) ? $post["dibuat_standar_pelayanan"] : NULL,
                    'jumlah_pelayanan_dimiliki' => (isset($post["jumlah_jenis_pelayanan_dimiliki"])) ? $post["jumlah_jenis_pelayanan_dimiliki"] : NULL,
                    'jumlah_pelayanan_dibuat' => (isset($post["jumlah_jenis_pelayanan_dibuat"])) ? $post["jumlah_jenis_pelayanan_dibuat"] : NULL,
                    'pelayanan_memenuhi_14komponen' => (isset($post['memenuhi_14_komponen'])) ? $post["memenuhi_14_komponen"] : NULL,
                    'pelayanan_melibatkan_masyarakat' => (isset($post['melibatkan_unsur_masyarakat'])) ? $post["melibatkan_unsur_masyarakat"] : NULL,
                    'pelayanan_telah_ditetapkan' => (isset($post["ditetapkan_standar_pelayanan"])) ? $post["ditetapkan_standar_pelayanan"] : NULL,
                    'pelayanan_monev' => (isset($post["monev_standar_pelayanan"])) ? $post["monev_standar_pelayanan"] : NULL,
                    'sp_melibatkan_masyarakat' => (isset($post["monev_standar_pelayanan"])) ? $post["unsur_mas"] : NULL,
                    'unsur_masyarakat_dilibatkan' => $masyarakat_dilibatkan,
                    'sp_dipublikasi' => (isset($post["sp_publikasi"])) ? $post["sp_publikasi"] : NULL,
                    'sp_dipublikasi_6komponen_service_delivery' => (isset($post["6_komponen_serv_delivery"])) ? $post["6_komponen_serv_delivery"] : NULL,
                    'media_publikasi' => $media_publikasi_sp,
                    'pernyataan_peninjauan_ulang' => (isset($post["tinjau_ulang"])) ? $post["tinjau_ulang"] : NULL,
                    'maklumat_pelayanan_ditetapkan' => (isset($post["maklumat_pelayanan_ditetapkan"])) ? $post["maklumat_pelayanan_ditetapkan"] : NULL,
                    'maklumat_pelayanan_sesuai_pp' => (isset($post["maklumat_pelayanan_sesuai_ppu"])) ? $post["maklumat_pelayanan_sesuai_ppu"] : NULL,
                    'maklumat_pelayanan_dipublikasi' => (isset($post["maklumat_pelayanan_dipublikasi"])) ? $post["maklumat_pelayanan_dipublikasi"] : NULL,
                    'media_publikasi_maklumat_pelayanan' => $media_publikasi_maklumat_pelayanan,
                    'melaksanakan_skm' => (isset($post["unit_lokus_skm"])) ? $post["unit_lokus_skm"] : NULL,
                    'berapakali_setahun_skm' => (isset($post["jumlah_dilaksanakan_skm"])) ? $post["jumlah_dilaksanakan_skm"] : NULL,
                    'nilai_rata_rata_skm' => (isset($post["rata_rata_skm"])) ? $post["rata_rata_skm"] : NULL,
                    'skm_sesuai_permenpanrb' => (isset($post["pelaksanaan_skm_permenpanrb"])) ? $post["pelaksanaan_skm_permenpanrb"] : NULL,
                    'skm_dipublikasi' => (isset($post["publikasi_hasil_skm"])) ? $post["publikasi_hasil_skm"] : NULL,
                    'media_publikasi_skm_menggunakan' => $media_publikasi_skm,
                    'hasil_skm_ditindaklanjuti' => (isset($post["tindak_lanjut_hasil_skm"])) ? $post["tindak_lanjut_hasil_skm"] : NULL,
                    'jumlah_media_publikasi_skm' => $jumlah_media_publikasi_skm,
                    'rencana_tindak_lanjut_skm' => (isset($post["rencana_tindak_lanjut_skm"])) ? $post["rencana_tindak_lanjut_skm"] : NULL,
                    'persentase_rencana_tindaklanjut_skm_1tahun' => (isset($post["persentase_tindak_lanjut_skm"])) ? $post["persentase_tindak_lanjut_skm"] : NULL,
                    'laporan_tindaklanjut' => (isset($post["laporan_tindak_lanjut_skm"])) ? $post["laporan_tindak_lanjut_skm"] : NULL,
                    'apakah_hasil_skm_ditindaklanjuti' => (isset($post["apakah_hasil_skm_ditindaklanjuti"])) ? $post["apakah_hasil_skm_ditindaklanjuti"] : NULL,
                    'berapa_lama_tindaklanjut_skm' => (isset($post["berapa_lama_tindak_lanjut_skm"])) ? $post["berapa_lama_tindak_lanjut_skm"] : NULL
                ];
                // jika tabel tidak kosong lakukan update
                $this->Penilaian_model->update('kepel', $update_kepel, $post['kepel_id']);
            }
            // kepel::end

            // ***********************************************************************************************************************************

            // prof sdm::begin
            if (isset($post['pelaksanaan_waktu_pelayanan'])) {
                $pelaksanaan_waktu_pelayanan = implode(", ", $post["pelaksanaan_waktu_pelayanan"]);
            } else {
                $pelaksanaan_waktu_pelayanan = NULL;
            }

            if (isset($post['aper_kotik_pp'])) {
                $aper_kotik_pp = implode(", ", $post["aper_kotik_pp"]);
            } else {
                $aper_kotik_pp = NULL;
            }

            if (isset($post["kriteria_penghargaan"])) {
                $kriteria_penghargaan = implode(", ", $post["kriteria_penghargaan"]);
            } else {
                $kriteria_penghargaan = NULL;
            }

            if (isset($post['pemberian_penghargaan'])) {
                $pemberian_penghargaan = implode(", ", $post["pemberian_penghargaan"]);
            } else {
                $pemberian_penghargaan = NULL;
            }

            if (isset($post['budaya_pelayanan'])) {
                $budaya_pelayanan = implode(", ", $post["budaya_pelayanan"]);
            } else {
                $budaya_pelayanan = NULL;
            }

            // get tabel profsdm
            $table_profsdm = $this->Penilaian_model->check('prof_sdm', $post['profsdm_id'], $this->session->userdata('user_id'));

            if ($table_profsdm < 1) {
                // kosong
                $insert_profsdm = [
                    'user_id' => $this->session->userdata('user_id'),
                    'tahun' => date('Y'),
                    'waktu_pelayanan' => (isset($post['waktu_pelayanan'])) ? $post['waktu_pelayanan'] : NULL,
                    'pelaksanaan_waktu_pelayanan' => $pelaksanaan_waktu_pelayanan,
                    'aturan_perilaku_kode_etik' => (isset($post['aturan_perilaku_kode_etik'])) ? $post['aturan_perilaku_kode_etik'] : NULL,
                    'aper_kotik_pp' => $aper_kotik_pp,
                    'kriteria_penghargaan' => $kriteria_penghargaan,
                    'pemberian_penghargaan' => $pemberian_penghargaan,
                    'budaya_pelayanan' => $budaya_pelayanan
                ];
                // lakukan insert
                $this->Penilaian_model->insert('prof_sdm', $insert_profsdm);
            } else {
                // ada
                $update_profsdm = [
                    'waktu_pelayanan' => (isset($post['waktu_pelayanan'])) ? $post['waktu_pelayanan'] : NULL,
                    'pelaksanaan_waktu_pelayanan' => $pelaksanaan_waktu_pelayanan,
                    'aturan_perilaku_kode_etik' => (isset($post['aturan_perilaku_kode_etik'])) ? $post['aturan_perilaku_kode_etik'] : NULL,
                    'aper_kotik_pp' => $aper_kotik_pp,
                    'kriteria_penghargaan' => $kriteria_penghargaan,
                    'pemberian_penghargaan' => $pemberian_penghargaan,
                    'budaya_pelayanan' => $budaya_pelayanan
                ];
                // lakukan update
                $this->Penilaian_model->update('prof_sdm', $update_profsdm, $post['profsdm_id']);
            }
            // prof sdm::end

            // ***********************************************************************************************************************************

            // sarpras::begin
            if (isset($post['fasilitas_parkir'])) {
                $fasilitas_parkir = implode(", ", $post["fasilitas_parkir"]);
            } else {
                $fasilitas_parkir = NULL;
            }

            if (isset($post['fasilitas_ruang_tunggu'])) {
                $fasilitas_ruang_tunggu = implode(", ", $post["fasilitas_ruang_tunggu"]);
            } else {
                $fasilitas_ruang_tunggu = NULL;
            }

            if (isset($post['fasilitas_toilet'])) {
                $fasilitas_toilet = implode(", ", $post["fasilitas_toilet"]);
            } else {
                $fasilitas_toilet = NULL;
            }

            if (isset($post['sarana_disabilitas'])) {
                $sarana_disabilitas = implode(", ", $post["sarana_disabilitas"]);
            } else {
                $sarana_disabilitas = NULL;
            }

            if (isset($post['sarpras_penunjang_pelayanan'])) {
                $sarpras_penunjang_pelayanan = implode(", ", $post["sarpras_penunjang_pelayanan"]);
            } else {
                $sarpras_penunjang_pelayanan = NULL;
            }

            if (isset($post['fasilitas_fo'])) {
                $fasilitas_fo = implode(", ", $post["fasilitas_fo"]);
            } else {
                $fasilitas_fo = NULL;
            }

            // check tabel sarpras
            $table_sarpras = $this->Penilaian_model->check('sarpras', $post['sarpras_id'], $this->session->userdata('user_id'));
            if ($table_sarpras < 1) {
                // kosong
                $insert_sarpras = [
                    'user_id' => $this->session->userdata('user_id'),
                    'tahun' => date('Y'),
                    'tersedia_tempat_parkir' => (isset($post['tersedia_tempat_parkir'])) ? $post['tersedia_tempat_parkir'] : NULL,
                    'fasilitas_parkir' => $fasilitas_parkir,
                    'fasilitas_ruang_tunggu' => $fasilitas_ruang_tunggu,
                    'tersedia_toilet' => (isset($post['tersedia_toilet'])) ? $post['tersedia_toilet'] : NULL,
                    'fasilitas_toilet' => $fasilitas_toilet,
                    'sarana_disabilitas' => $sarana_disabilitas,
                    'sarpras_penunjang_pelayanan' => $sarpras_penunjang_pelayanan,
                    'fasilitas_fo' => $fasilitas_fo,
                ];
                // lakukan insert
                $this->Penilaian_model->insert('sarpras', $insert_sarpras);
            } else {
                // ada
                $update_sarpras = [
                    'tersedia_tempat_parkir' => (isset($post['tersedia_tempat_parkir'])) ? $post['tersedia_tempat_parkir'] : NULL,
                    'fasilitas_parkir' => $fasilitas_parkir,
                    'fasilitas_ruang_tunggu' => $fasilitas_ruang_tunggu,
                    'tersedia_toilet' => (isset($post['tersedia_toilet'])) ? $post['tersedia_toilet'] : NULL,
                    'fasilitas_toilet' => $fasilitas_toilet,
                    'sarana_disabilitas' => $sarana_disabilitas,
                    'sarpras_penunjang_pelayanan' => $sarpras_penunjang_pelayanan,
                    'fasilitas_fo' => $fasilitas_fo,
                ];
                // lakukan update
                $this->Penilaian_model->update('sarpras', $update_sarpras, $post['sarpras_id']);
            }
            // sarpras::end

            // ***********************************************************************************************************************************

            // sipp::begin
            if (isset($post["sipp_yang_tersedia"])) {
                $sipp_yang_tersedia = implode(", ", $post["sipp_yang_tersedia"]);
            } else {
                $sipp_yang_tersedia = NULL;
            }

            if (isset($post['sipp_non_elektronik'])) {
                $sipp_non_elektronik = implode(", ", $post["sipp_non_elektronik"]);
            } else {
                $sipp_non_elektronik = NULL;
            }

            if (isset($post['sipp_elektronik'])) {
                $sipp_elektronik = implode(", ", $post["sipp_elektronik"]);
            } else {
                $sipp_elektronik = NULL;
            }

            if (isset($post['unsur_pendukung'])) {
                $unsur_pendukung = implode(", ", $post["unsur_pendukung"]);
            } else {
                $unsur_pendukung = NULL;
            }

            // check table
            $table_sipp = $this->Penilaian_model->check('sipp', $post['sipp_id'], $this->session->userdata('user_id'));
            if ($table_sipp < 1) {
                // kosong
                $insert_sipp = [
                    'user_id' => $this->session->userdata('user_id'),
                    'tahun' => date('Y'),
                    'tersedia_sipp' => (isset($post['tersedia_sipp'])) ? $post['tersedia_sipp'] : NULL,
                    'sipp_yang_tersedia' => $sipp_yang_tersedia,
                    'sipp_non_elektronik' => $sipp_non_elektronik,
                    'sipp_elektronik' => $sipp_elektronik,
                    'penggunaan_sippn' => (isset($post['penggunaan_sippn'])) ? $post['penggunaan_sippn'] : NULL,
                    'akun_pengguna_sippn' => (isset($post['akun_pengguna_sippn'])) ? $post['akun_pengguna_sippn'] : NULL,
                    'jumlah_layanan_terinput_sippn' => (isset($post['jumlah_layanan_terinput_sippn'])) ? $post['jumlah_layanan_terinput_sippn'] : NULL,
                    'unsur_pendukung' => $unsur_pendukung,
                    'memiliki_sippe' => (isset($post['memiliki_sippe'])) ? $post['memiliki_sippe'] : NULL,
                    'kemudahan_operasional_sippe_webbase' => (isset($post['kemudahan_operasional_sippe_webbase'])) ? $post['kemudahan_operasional_sippe_webbase'] : NULL,
                    'kemudahan_akses_sippe_webbase' => (isset($post['kemudahan_akses_sippe_webbase'])) ? $post['kemudahan_akses_sippe_webbase'] : NULL,
                    'fungsi_kompatibel_sippe_webbase' => (isset($post['fungsi_kompatibel_sippe_webbase'])) ? $post['fungsi_kompatibel_sippe_webbase'] : NULL,
                    'domain_goverment_sippe_webbase' => (isset($post['domain_goverment_sippe_webbase'])) ? $post['domain_goverment_sippe_webbase'] : NULL,
                    'navigasi_sippe_webbase' => (isset($post['navigasi_sippe_webbase'])) ? $post['navigasi_sippe_webbase'] : NULL,
                    'pemutakhiran_informasi_pelayanan_publik' => (isset($post['pemutakhiran_informasi_pelayanan_publik'])) ? $post['pemutakhiran_informasi_pelayanan_publik'] : NULL,
                    'jangka_waktu_pemutakhiran_informasi_pelayanan_publik' => (isset($post['jangka_waktu_pemutakhiran_informasi_pelayanan_publik'])) ? $post['jangka_waktu_pemutakhiran_informasi_pelayanan_publik'] : NULL
                ];
                // lakukan insert
                $this->Penilaian_model->insert('sipp', $insert_sipp);
            } else {
                // ada
                $update_sipp = [
                    'tersedia_sipp' => (isset($post['tersedia_sipp'])) ? $post['tersedia_sipp'] : NULL,
                    'sipp_yang_tersedia' => $sipp_yang_tersedia,
                    'sipp_non_elektronik' => $sipp_non_elektronik,
                    'sipp_elektronik' => $sipp_elektronik,
                    'penggunaan_sippn' => (isset($post['penggunaan_sippn'])) ? $post['penggunaan_sippn'] : NULL,
                    'akun_pengguna_sippn' => (isset($post['akun_pengguna_sippn'])) ? $post['akun_pengguna_sippn'] : NULL,
                    'jumlah_layanan_terinput_sippn' => (isset($post['jumlah_layanan_terinput_sippn'])) ? $post['jumlah_layanan_terinput_sippn'] : NULL,
                    'unsur_pendukung' => $unsur_pendukung,
                    'memiliki_sippe' => (isset($post['memiliki_sippe'])) ? $post['memiliki_sippe'] : NULL,
                    'kemudahan_operasional_sippe_webbase' => (isset($post['kemudahan_operasional_sippe_webbase'])) ? $post['kemudahan_operasional_sippe_webbase'] : NULL,
                    'kemudahan_akses_sippe_webbase' => (isset($post['kemudahan_akses_sippe_webbase'])) ? $post['kemudahan_akses_sippe_webbase'] : NULL,
                    'fungsi_kompatibel_sippe_webbase' => (isset($post['fungsi_kompatibel_sippe_webbase'])) ? $post['fungsi_kompatibel_sippe_webbase'] : NULL,
                    'domain_goverment_sippe_webbase' => (isset($post['domain_goverment_sippe_webbase'])) ? $post['domain_goverment_sippe_webbase'] : NULL,
                    'navigasi_sippe_webbase' => (isset($post['navigasi_sippe_webbase'])) ? $post['navigasi_sippe_webbase'] : NULL,
                    'pemutakhiran_informasi_pelayanan_publik' => (isset($post['pemutakhiran_informasi_pelayanan_publik'])) ? $post['pemutakhiran_informasi_pelayanan_publik'] : NULL,
                    'jangka_waktu_pemutakhiran_informasi_pelayanan_publik' => (isset($post['jangka_waktu_pemutakhiran_informasi_pelayanan_publik'])) ? $post['jangka_waktu_pemutakhiran_informasi_pelayanan_publik'] : NULL
                ];
                // lakukan update
                $this->Penilaian_model->update('sipp', $update_sipp, $post['sipp_id']);
            }
            // sipp::end

            // ***********************************************************************************************************************************

            // konsul::begin
            if (isset($post["fasilitas_sarpras_konsul"])) {
                $fasilitas_sarpras_konsul = implode(", ", $post["fasilitas_sarpras_konsul"]);
            } else {
                $fasilitas_sarpras_konsul = NULL;
            }

            if (isset($post['sarana_konsultasi_yang_dimiliki'])) {
                $sarana_konsultasi_yang_dimiliki = implode(", ", $post["sarana_konsultasi_yang_dimiliki"]);
            } else {
                $sarana_konsultasi_yang_dimiliki = NULL;
            }

            // check tabel 
            $table_konsul = $this->Penilaian_model->check('konsul', $post['konsul_id'], $this->session->userdata('user_id'));

            if ($table_konsul < 1) {
                // kosong
                $insert_konsul = [
                    'user_id' => $this->session->userdata('user_id'),
                    'tahun' => date('Y'),
                    'fasilitas_sarpras_konsul' => $fasilitas_sarpras_konsul,
                    'tersedia_sarana_konsultasi_pengaduan' => (isset($post['tersedia_sarana_konsultasi_pengaduan'])) ? $post['tersedia_sarana_konsultasi_pengaduan'] : NULL,
                    'sarana_konsultasi_yang_dimiliki' => $sarana_konsultasi_yang_dimiliki,
                    'dokumentasi_hasil_konsultasi' => (isset($post['dokumentasi_hasil_konsultasi'])) ? $post['dokumentasi_hasil_konsultasi'] : NULL,
                    'hasil_konsultasi_pengaduan_diarsipkan' => (isset($post['hasil_konsultasi_pengaduan_diarsipkan'])) ? $post['hasil_konsultasi_pengaduan_diarsipkan'] : NULL,
                    'hasil_konsul_jadi_laporan' => (isset($post['hasil_konsul_jadi_laporan'])) ? $post['hasil_konsul_jadi_laporan'] : NULL,
                    'monev_hasil_konsul' => (isset($post['monev_hasil_konsul'])) ? $post['monev_hasil_konsul'] : NULL,
                    'tindaklanjut_hasil_konsul' => (isset($post['tindaklanjut_hasil_konsul'])) ? $post['tindaklanjut_hasil_konsul'] : NULL,
                    'publikasi_hasil_konsul' => (isset($post['publikasi_hasil_konsul'])) ? $post['publikasi_hasil_konsul'] : NULL,
                    'jumlah_konsul_pengaduan_masuk' => (isset($post['jumlah_konsul_pengaduan_masuk'])) ? $post['jumlah_konsul_pengaduan_masuk'] : NULL,
                    'jumlah_konsul_pengaduan_ditindaklanjuti' => (isset($post['jumlah_konsul_pengaduan_ditindaklanjuti'])) ? $post['jumlah_konsul_pengaduan_ditindaklanjuti'] : NULL,
                    'jumlah_konsul_pengaduan_masuk_sp4nlapor' => (isset($post['jumlah_konsul_pengaduan_masuk_sp4nlapor'])) ? $post['jumlah_konsul_pengaduan_masuk_sp4nlapor'] : NULL,
                    'jumlah_konsul_pengaduan_ditindaklanjuti_sp4nlapor' => (isset($post['jumlah_konsul_pengaduan_ditindaklanjuti_sp4nlapor'])) ? $post['jumlah_konsul_pengaduan_ditindaklanjuti_sp4nlapor'] : NULL
                ];
                // lakukan insert
                $this->Penilaian_model->insert('konsul', $insert_konsul);
            } else {
                // ada
                $update_konsul = [
                    'fasilitas_sarpras_konsul' => $fasilitas_sarpras_konsul,
                    'tersedia_sarana_konsultasi_pengaduan' => (isset($post['tersedia_sarana_konsultasi_pengaduan'])) ? $post['tersedia_sarana_konsultasi_pengaduan'] : NULL,
                    'sarana_konsultasi_yang_dimiliki' => $sarana_konsultasi_yang_dimiliki,
                    'dokumentasi_hasil_konsultasi' => (isset($post['dokumentasi_hasil_konsultasi'])) ? $post['dokumentasi_hasil_konsultasi'] : NULL,
                    'hasil_konsultasi_pengaduan_diarsipkan' => (isset($post['hasil_konsultasi_pengaduan_diarsipkan'])) ? $post['hasil_konsultasi_pengaduan_diarsipkan'] : NULL,
                    'hasil_konsul_jadi_laporan' => (isset($post['hasil_konsul_jadi_laporan'])) ? $post['hasil_konsul_jadi_laporan'] : NULL,
                    'monev_hasil_konsul' => (isset($post['monev_hasil_konsul'])) ? $post['monev_hasil_konsul'] : NULL,
                    'tindaklanjut_hasil_konsul' => (isset($post['tindaklanjut_hasil_konsul'])) ? $post['tindaklanjut_hasil_konsul'] : NULL,
                    'publikasi_hasil_konsul' => (isset($post['publikasi_hasil_konsul'])) ? $post['publikasi_hasil_konsul'] : NULL,
                    'jumlah_konsul_pengaduan_masuk' => (isset($post['jumlah_konsul_pengaduan_masuk'])) ? $post['jumlah_konsul_pengaduan_masuk'] : NULL,
                    'jumlah_konsul_pengaduan_ditindaklanjuti' => (isset($post['jumlah_konsul_pengaduan_ditindaklanjuti'])) ? $post['jumlah_konsul_pengaduan_ditindaklanjuti'] : NULL,
                    'jumlah_konsul_pengaduan_masuk_sp4nlapor' => (isset($post['jumlah_konsul_pengaduan_masuk_sp4nlapor'])) ? $post['jumlah_konsul_pengaduan_masuk_sp4nlapor'] : NULL,
                    'jumlah_konsul_pengaduan_ditindaklanjuti_sp4nlapor' => (isset($post['jumlah_konsul_pengaduan_ditindaklanjuti_sp4nlapor'])) ? $post['jumlah_konsul_pengaduan_ditindaklanjuti_sp4nlapor'] : NULL
                ];
                // lakukan update
                $this->Penilaian_model->update('konsul', $update_konsul, $post['konsul_id']);
            }
            // konsul::end

            // ***********************************************************************************************************************************

            // inovasi::begin
            if (isset($post["penghargaan_inovasi"])) {
                $penghargaan_inovasi = implode(", ", $post["penghargaan_inovasi"]);
            } else {
                $penghargaan_inovasi = NULL;
            }

            if (isset($post["bentuk_sumber_daya_pendukung"])) {
                $bentuk_sumber_daya_pendukung = implode(", ", $post["bentuk_sumber_daya_pendukung"]);
            } else {
                $bentuk_sumber_daya_pendukung = NULL;
            }

            // check table
            $table_inovasi = $this->Penilaian_model->check('inovasi', $post['inovasi_id'], $this->session->userdata('user_id'));

            if ($table_inovasi < 1) {
                // kosong
                $insert_inovasi = [
                    'user_id' => $this->session->userdata('user_id'),
                    'tahun' => date('Y'),
                    'inovasi_yang_ada' => (isset($post['inovasi_yang_ada'])) ? $post['inovasi_yang_ada'] : NULL,
                    'judul_inovasi' => (isset($post['judul_inovasi'])) ? $post['judul_inovasi'] : NULL,
                    'inisiatif_inovasi' => (isset($post['inisiatif_inovasi'])) ? $post['inisiatif_inovasi'] : NULL,
                    'jangka_waktu_inovasi' => (isset($post['jangka_waktu_inovasi'])) ? $post['jangka_waktu_inovasi'] : NULL,
                    'waktu_pelaksanaan_inovasi' => (isset($post['waktu_pelaksanaan_inovasi'])) ? $post['waktu_pelaksanaan_inovasi'] : NULL,
                    'ikut_serta_kompeisi_inovasi' => (isset($post['ikut_serta_kompeisi_inovasi'])) ? $post['ikut_serta_kompeisi_inovasi'] : NULL,
                    'penghargaan_inovasi' => $penghargaan_inovasi,
                    'tersedia_sdm_inovasi' => (isset($post['tersedia_sdm_inovasi'])) ? $post['tersedia_sdm_inovasi'] : NULL,
                    'sdm_mendukung_inovasi' => (isset($post['sdm_mendukung_inovasi'])) ? $post['sdm_mendukung_inovasi'] : NULL,
                    'bentuk_sumber_daya_pendukung' => $bentuk_sumber_daya_pendukung
                ];
                // lakukan insert
                $this->Penilaian_model->insert('inovasi', $insert_inovasi);
            } else {
                // ada
                $update_inovasi = [
                    'inovasi_yang_ada' => (isset($post['inovasi_yang_ada'])) ? $post['inovasi_yang_ada'] : NULL,
                    'judul_inovasi' => (isset($post['judul_inovasi'])) ? $post['judul_inovasi'] : NULL,
                    'inisiatif_inovasi' => (isset($post['inisiatif_inovasi'])) ? $post['inisiatif_inovasi'] : NULL,
                    'jangka_waktu_inovasi' => (isset($post['jangka_waktu_inovasi'])) ? $post['jangka_waktu_inovasi'] : NULL,
                    'waktu_pelaksanaan_inovasi' => (isset($post['waktu_pelaksanaan_inovasi'])) ? $post['waktu_pelaksanaan_inovasi'] : NULL,
                    'ikut_serta_kompeisi_inovasi' => (isset($post['ikut_serta_kompeisi_inovasi'])) ? $post['ikut_serta_kompeisi_inovasi'] : NULL,
                    'penghargaan_inovasi' => $penghargaan_inovasi,
                    'tersedia_sdm_inovasi' => (isset($post['tersedia_sdm_inovasi'])) ? $post['tersedia_sdm_inovasi'] : NULL,
                    'sdm_mendukung_inovasi' => (isset($post['sdm_mendukung_inovasi'])) ? $post['sdm_mendukung_inovasi'] : NULL,
                    'bentuk_sumber_daya_pendukung' => $bentuk_sumber_daya_pendukung
                ];
                // lakukan update
                $this->Penilaian_model->update('inovasi', $update_inovasi, $post['inovasi_id']);
            }
            // inovasi::end

            // ***********************************************************************************************************************************

            // tambahan::begin
            if (isset($post['fasilitas_sistem_antrian'])) {
                $fasilitas_sistem_antrian = implode(", ", $post["fasilitas_sistem_antrian"]);
            } else {
                $fasilitas_sistem_antrian = NULL;
            }

            // check table 
            $table_tambahan = $this->Penilaian_model->check('tambahan', $post['tambahan_id'], $this->session->userdata('user_id'));

            if ($table_tambahan < 1) {
                // kosong
                $insert_tambahan = [
                    'user_id' => $this->session->userdata('user_id'),
                    'tahun' => date('Y'),
                    'terdapat_sistem_antrian' => (isset($post['adanya_sistem_antrian'])) ? $post['adanya_sistem_antrian'] : NULL,
                    'fasilitas_sistem_antrian' => $fasilitas_sistem_antrian,
                    'url_video_youtube' => (isset($post['url_youtube'])) ? $post['url_youtube'] : NULL
                ];
                // lakukan insert
                $this->Penilaian_model->insert('tambahan', $insert_tambahan);
            } else {
                // ada
                $update_tambahan = [
                    'terdapat_sistem_antrian' => (isset($post['adanya_sistem_antrian'])) ? $post['adanya_sistem_antrian'] : NULL,
                    'fasilitas_sistem_antrian' => $fasilitas_sistem_antrian,
                    'url_video_youtube' => (isset($post['url_youtube'])) ? $post['url_youtube'] : NULL
                ];
                // lakukan update
                $this->Penilaian_model->update('tambahan', $update_tambahan, $post['tambahan_id']);
            }
            // tambahan::end

            $this->session->set_flashdata('success', 'Berhasil Memperbarui Data');
            redirect('penilaian');
        } else {
            $redirect = base_url() . 'penilaian';
            echo "<script>alert('anda tidak dapat akses karna ini bukan halaman anda')</script>";
            echo "<script>document.location.href='" . $redirect . "'</script>";
        }
    }

    private function buktiDukung($tahun = 0)
    {
        $user_id = $this->session->userdata('user_id');
        // ambil id tiap inputan aspek berdasarkan user dan tahun
        $buktiDukung = [];
        $id_kepel = $this->Penilaian_model->findIdTable('kepel', $user_id, $tahun);
        if ($id_kepel != "") {
            $id_kepel = $id_kepel['id'];
            $buktiDukung['kepel']['data'] = $this->Penilaian_model->findBuktiDukung('buktidukungkepel', $id_kepel);
            if ($buktiDukung['kepel']['data'] != null) {
                $buktiDukung['kepel'] += ['path' => 'uploads/kepel/' . $this->session->userdata('name') . '/' . $tahun . '/'];
            }
        } else {
            $id_kepel = 0;
        }
        $id_profsdm = $this->Penilaian_model->findIdTable('prof_sdm', $user_id, $tahun);
        if ($id_profsdm != "") {
            $id_profsdm = $id_profsdm['id'];
            $buktiDukung['prof_sdm']['data'] = $this->Penilaian_model->findBuktiDukung('buktidukungprofsdm', $id_profsdm);
            if ($buktiDukung['prof_sdm']['data'] != null) {
                $buktiDukung['prof_sdm'] += ['path' => 'uploads/prof_sdm/' . $this->session->userdata('name') . '/' . $tahun . '/'];
            }
        } else {
            $id_profsdm = 0;
        }
        $id_sarpras = $this->Penilaian_model->findIdTable('sarpras', $user_id, $tahun);
        if ($id_sarpras != "") {
            $id_sarpras = $id_sarpras['id'];
            $buktiDukung['sarpras']['data'] = $this->Penilaian_model->findBuktiDukung('buktidukungsarpras', $id_sarpras);
            if ($buktiDukung['sarpras']['data'] != null) {
                $buktiDukung['sarpras'] += ['path' => 'uploads/sarpras/' . $this->session->userdata('name') . '/' . $tahun . '/'];
            }
        } else {
            $id_sarpras = 0;
        }
        $id_sipp = $this->Penilaian_model->findIdTable('sipp', $user_id, $tahun);
        if ($id_sipp != "") {
            $id_sipp = $id_sipp['id'];
            $buktiDukung['sipp']['data'] = $this->Penilaian_model->findBuktiDukung('buktidukungsipp', $id_sipp);
            if ($buktiDukung['sipp']['data'] != null) {
                $buktiDukung['sipp'] += ['path' => 'uploads/sipp/' . $this->session->userdata('name') . '/' . $tahun . '/'];
            }
        } else {
            $id_sipp = 0;
        }
        $id_konsul = $this->Penilaian_model->findIdTable('konsul', $user_id, $tahun);
        if ($id_konsul != "") {
            $id_konsul = $id_konsul['id'];
            $buktiDukung['konsul']['data'] = $this->Penilaian_model->findBuktiDukung('buktidukungkonsul', $id_konsul);
            if ($buktiDukung['konsul']['data'] != null) {
                $buktiDukung['konsul'] += ['path' => 'uploads/konsul/' . $this->session->userdata('name') . '/' . $tahun . '/'];
            }
        } else {
            $id_konsul = 0;
        }
        $id_inovasi = $this->Penilaian_model->findIdTable('inovasi', $user_id, $tahun);
        if ($id_inovasi != "") {
            $id_inovasi = $id_inovasi['id'];
            $buktiDukung['inovasi']['data'] = $this->Penilaian_model->findBuktiDukung('buktidukunginovasi', $id_inovasi);
            if ($buktiDukung['inovasi']['data'] != null) {
                $buktiDukung['inovasi'] += ['path' => 'uploads/inovasi/' . $this->session->userdata('name') . '/' . $tahun . '/'];
            }
        } else {
            $id_inovasi = 0;
        }
        $id_tambahan = $this->Penilaian_model->findIdTable('tambahan', $user_id, $tahun);
        if ($id_tambahan != "") {
            $id_tambahan = $id_tambahan['id'];
            $buktiDukung['tambahan']['data'] = $this->Penilaian_model->findBuktiDukung('buktidukungtambahan', $id_tambahan);
            if ($buktiDukung['tambahan']['data'] != null) {
                $buktiDukung['tambahan'] += ['path' => 'uploads/tambahan/' . $this->session->userdata('name') . '/' . $tahun . '/'];
            }
        } else {
            $id_tambahan = 0;
        }
        return $buktiDukung;
    }

    public function store()
    {
        $post = $this->input->post();

        // kepel:begin
        if (isset($post['masyarakat_dilibatkan'])) {
            $masyarakat_dilibatkan = implode(", ", $post["masyarakat_dilibatkan"]);
        } else {
            $masyarakat_dilibatkan = NULL;
        }
        
        if (isset($post['media_publikasi_sp'])) {
            $media_publikasi_sp = implode(", ", $post['media_publikasi_sp']);
        } else {
            $media_publikasi_sp = NULL;
        }
        
        if (isset($post['media_publikasi_sp_digunakan'])) {
            $media_publikasi_maklumat_pelayanan = implode(", ", $post["media_publikasi_sp_digunakan"]);
        } else {
            $media_publikasi_maklumat_pelayanan = NULL;
        }

        if (isset($post['media_publikasi_skm'])) {
            $media_publikasi_skm = implode(", ", $post['media_publikasi_skm']);
        } else {
            $media_publikasi_skm = NULL;
        }

        if (isset($post['publikasi_skm'])) {
            $jumlah_media_publikasi_skm = implode(",", $post['publikasi_skm']);
        } else {
            $jumlah_media_publikasi_skm = NULL;
        }

        $insert_kebijakan = [
            'user_id' => $this->session->userdata('user_id'),
            'tahun' => date('Y'),
            'dibuat_standar_pelayanan' => (isset($post["dibuat_standar_pelayanan"])) ? $post["dibuat_standar_pelayanan"] : NULL,
            'jumlah_pelayanan_dimiliki' => (isset($post["jumlah_jenis_pelayanan_dimiliki"])) ? $post["jumlah_jenis_pelayanan_dimiliki"] : NULL,
            'jumlah_pelayanan_dibuat' => (isset($post["jumlah_jenis_pelayanan_dibuat"])) ? $post["jumlah_jenis_pelayanan_dibuat"] : NULL,
            'pelayanan_memenuhi_14komponen' => (isset($post['memenuhi_14_komponen'])) ? $post["memenuhi_14_komponen"] : NULL,
            'pelayanan_melibatkan_masyarakat' => (isset($post['melibatkan_unsur_masyarakat'])) ? $post["melibatkan_unsur_masyarakat"] : NULL,
            'pelayanan_telah_ditetapkan' => (isset($post["ditetapkan_standar_pelayanan"])) ? $post["ditetapkan_standar_pelayanan"] : NULL,
            'pelayanan_monev' => (isset($post["monev_standar_pelayanan"])) ? $post["monev_standar_pelayanan"] : NULL,
            'sp_melibatkan_masyarakat' => (isset($post["monev_standar_pelayanan"])) ? $post["unsur_mas"] : NULL,
            'unsur_masyarakat_dilibatkan' => $masyarakat_dilibatkan,
            'sp_dipublikasi' => (isset($post["sp_publikasi"])) ? $post["sp_publikasi"] : NULL,
            'sp_dipublikasi_6komponen_service_delivery' => (isset($post["6_komponen_serv_delivery"])) ? $post["6_komponen_serv_delivery"] : NULL,
            'media_publikasi' => $media_publikasi_sp,
            'pernyataan_peninjauan_ulang' => (isset($post["tinjau_ulang"])) ? $post["tinjau_ulang"] : NULL,
            'maklumat_pelayanan_ditetapkan' => (isset($post["maklumat_pelayanan_ditetapkan"])) ? $post["maklumat_pelayanan_ditetapkan"] : NULL,
            'maklumat_pelayanan_sesuai_pp' => (isset($post["maklumat_pelayanan_sesuai_ppu"])) ? $post["maklumat_pelayanan_sesuai_ppu"] : NULL,
            'maklumat_pelayanan_dipublikasi' => (isset($post["maklumat_pelayanan_dipublikasi"])) ? $post["maklumat_pelayanan_dipublikasi"] : NULL,
            'media_publikasi_maklumat_pelayanan' => $media_publikasi_maklumat_pelayanan,
            'melaksanakan_skm' => (isset($post["unit_lokus_skm"])) ? $post["unit_lokus_skm"] : NULL,
            'berapakali_setahun_skm' => (isset($post["jumlah_dilaksanakan_skm"])) ? $post["jumlah_dilaksanakan_skm"] : NULL,
            'nilai_rata_rata_skm' => (isset($post["rata_rata_skm"])) ? $post["rata_rata_skm"] : NULL,
            'skm_sesuai_permenpanrb' => (isset($post["pelaksanaan_skm_permenpanrb"])) ? $post["pelaksanaan_skm_permenpanrb"] : NULL,
            'skm_dipublikasi' => (isset($post["publikasi_hasil_skm"])) ? $post["publikasi_hasil_skm"] : NULL,
            'media_publikasi_skm_menggunakan' => $media_publikasi_skm,
            'hasil_skm_ditindaklanjuti' => (isset($post["tindak_lanjut_hasil_skm"])) ? $post["tindak_lanjut_hasil_skm"] : NULL,
            'jumlah_media_publikasi_skm' => $jumlah_media_publikasi_skm,
            'rencana_tindak_lanjut_skm' => (isset($post["rencana_tindak_lanjut_skm"])) ? $post["rencana_tindak_lanjut_skm"] : NULL,
            'persentase_rencana_tindaklanjut_skm_1tahun' => (isset($post["persentase_tindak_lanjut_skm"])) ? $post["persentase_tindak_lanjut_skm"] : NULL,
            'laporan_tindaklanjut' => (isset($post["laporan_tindak_lanjut_skm"])) ? $post["laporan_tindak_lanjut_skm"] : NULL,
            'apakah_hasil_skm_ditindaklanjuti' => (isset($post["apakah_hasil_skm_ditindaklanjuti"])) ? $post["apakah_hasil_skm_ditindaklanjuti"] : NULL,
            'berapa_lama_tindaklanjut_skm' => (isset($post["berapa_lama_tindak_lanjut_skm"])) ? $post["berapa_lama_tindak_lanjut_skm"] : NULL
        ];
        $this->Penilaian_model->insert('kepel', $insert_kebijakan);
        // kepel::end


        // prof sdm::begin
        if (isset($post['pelaksanaan_waktu_pelayanan'])) {
            $pelaksanaan_waktu_pelayanan = implode(", ", $post["pelaksanaan_waktu_pelayanan"]);
        } else {
            $pelaksanaan_waktu_pelayanan = NULL;
        }

        if (isset($post['aper_kotik_pp'])) {
            $aper_kotik_pp = implode(", ", $post["aper_kotik_pp"]);
        } else {
            $aper_kotik_pp = NULL;
        }

        if (isset($post["kriteria_penghargaan"])) {
            $kriteria_penghargaan = implode(", ", $post["kriteria_penghargaan"]);
        } else {
            $kriteria_penghargaan = NULL;
        }

        if (isset($post['pemberian_penghargaan'])) {
            $pemberian_penghargaan = implode(", ", $post["pemberian_penghargaan"]);
        } else {
            $pemberian_penghargaan = NULL;
        }

        if (isset($post['budaya_pelayanan'])) {
            $budaya_pelayanan = implode(", ", $post["budaya_pelayanan"]);
        } else {
            $budaya_pelayanan = NULL;
        }

        $insert_profsdm = [
            'user_id' => $this->session->userdata('user_id'),
            'tahun' => date('Y'),
            'waktu_pelayanan' => (isset($post['waktu_pelayanan'])) ? $post['waktu_pelayanan'] : NULL,
            'pelaksanaan_waktu_pelayanan' => $pelaksanaan_waktu_pelayanan,
            'aturan_perilaku_kode_etik' => (isset($post['aturan_perilaku_kode_etik'])) ? $post['aturan_perilaku_kode_etik'] : NULL,
            'aper_kotik_pp' => $aper_kotik_pp,
            'kriteria_penghargaan' => $kriteria_penghargaan,
            'pemberian_penghargaan' => $pemberian_penghargaan,
            'budaya_pelayanan' => $budaya_pelayanan
        ];
        $this->Penilaian_model->insert('prof_sdm', $insert_profsdm);
        // prof sdm::end

        // sarpras::begin
        if (isset($post['fasilitas_parkir'])) {
            $fasilitas_parkir = implode(", ", $post["fasilitas_parkir"]);
        } else {
            $fasilitas_parkir = NULL;
        }

        if (isset($post['fasilitas_ruang_tunggu'])) {
            $fasilitas_ruang_tunggu = implode(", ", $post["fasilitas_ruang_tunggu"]);
        } else {
            $fasilitas_ruang_tunggu = NULL;
        }

        if (isset($post['fasilitas_toilet'])) {
            $fasilitas_toilet = implode(", ", $post["fasilitas_toilet"]);
        } else {
            $fasilitas_toilet = NULL;
        }

        if (isset($post['sarana_disabilitas'])) {
            $sarana_disabilitas = implode(", ", $post["sarana_disabilitas"]);
        } else {
            $sarana_disabilitas = NULL;
        }

        if (isset($post['sarpras_penunjang_pelayanan'])) {
            $sarpras_penunjang_pelayanan = implode(", ", $post["sarpras_penunjang_pelayanan"]);
        } else {
            $sarpras_penunjang_pelayanan = NULL;
        }

        if (isset($post['fasilitas_fo'])) {
            $fasilitas_fo = implode(", ", $post["fasilitas_fo"]);
        } else {
            $fasilitas_fo = NULL;
        }

        $insert_sarpras = [
            'user_id' => $this->session->userdata('user_id'),
            'tahun' => date('Y'),
            'tersedia_tempat_parkir' => (isset($post['tersedia_tempat_parkir'])) ? $post['tersedia_tempat_parkir'] : NULL,
            'fasilitas_parkir' => $fasilitas_parkir,
            'fasilitas_ruang_tunggu' => $fasilitas_ruang_tunggu,
            'tersedia_toilet' => (isset($post['tersedia_toilet'])) ? $post['tersedia_toilet'] : NULL,
            'fasilitas_toilet' => $fasilitas_toilet,
            'sarana_disabilitas' => $sarana_disabilitas,
            'sarpras_penunjang_pelayanan' => $sarpras_penunjang_pelayanan,
            'fasilitas_fo' => $fasilitas_fo,
        ];
        $this->Penilaian_model->insert('sarpras', $insert_sarpras);
        // sarpras::end

        // sipp::begin
        if (isset($post["sipp_yang_tersedia"])) {
            $sipp_yang_tersedia = implode(", ", $post["sipp_yang_tersedia"]);
        } else {
            $sipp_yang_tersedia = NULL;
        }

        if (isset($post['sipp_non_elektronik'])) {
            $sipp_non_elektronik = implode(", ", $post["sipp_non_elektronik"]);
        } else {
            $sipp_non_elektronik = NULL;
        }

        if (isset($post['sipp_elektronik'])) {
            $sipp_elektronik = implode(", ", $post["sipp_elektronik"]);
        } else {
            $sipp_elektronik = NULL;
        }

        if (isset($post['unsur_pendukung'])) {
            $unsur_pendukung = implode(", ", $post["unsur_pendukung"]);
        } else {
            $unsur_pendukung = NULL;
        }

        $insert_sipp = [
            'user_id' => $this->session->userdata('user_id'),
            'tahun' => date('Y'),
            'tersedia_sipp' => (isset($post['tersedia_sipp'])) ? $post['tersedia_sipp'] : NULL,
            'sipp_yang_tersedia' => $sipp_yang_tersedia,
            'sipp_non_elektronik' => $sipp_non_elektronik,
            'sipp_elektronik' => $sipp_elektronik,
            'penggunaan_sippn' => (isset($post['penggunaan_sippn'])) ? $post['penggunaan_sippn'] : NULL,
            'akun_pengguna_sippn' => (isset($post['akun_pengguna_sippn'])) ? $post['akun_pengguna_sippn'] : NULL,
            'jumlah_layanan_terinput_sippn' => (isset($post['jumlah_layanan_terinput_sippn'])) ? $post['jumlah_layanan_terinput_sippn'] : NULL,
            'unsur_pendukung' => $unsur_pendukung,
            'memiliki_sippe' => (isset($post['memiliki_sippe'])) ? $post['memiliki_sippe'] : NULL,
            'kemudahan_operasional_sippe_webbase' => (isset($post['kemudahan_operasional_sippe_webbase'])) ? $post['kemudahan_operasional_sippe_webbase'] : NULL,
            'kemudahan_akses_sippe_webbase' => (isset($post['kemudahan_akses_sippe_webbase'])) ? $post['kemudahan_akses_sippe_webbase'] : NULL,
            'fungsi_kompatibel_sippe_webbase' => (isset($post['fungsi_kompatibel_sippe_webbase'])) ? $post['fungsi_kompatibel_sippe_webbase'] : NULL,
            'domain_goverment_sippe_webbase' => (isset($post['domain_goverment_sippe_webbase'])) ? $post['domain_goverment_sippe_webbase'] : NULL,
            'navigasi_sippe_webbase' => (isset($post['navigasi_sippe_webbase'])) ? $post['navigasi_sippe_webbase'] : NULL,
            'pemutakhiran_informasi_pelayanan_publik' => (isset($post['pemutakhiran_informasi_pelayanan_publik'])) ? $post['pemutakhiran_informasi_pelayanan_publik'] : NULL,
            'jangka_waktu_pemutakhiran_informasi_pelayanan_publik' => (isset($post['jangka_waktu_pemutakhiran_informasi_pelayanan_publik'])) ? $post['jangka_waktu_pemutakhiran_informasi_pelayanan_publik'] : NULL
        ];
        $this->Penilaian_model->insert('sipp', $insert_sipp);
        // sipp::end

        // konsul::begin
        if (isset($post["fasilitas_sarpras_konsul"])) {
            $fasilitas_sarpras_konsul = implode(", ", $post["fasilitas_sarpras_konsul"]);
        } else {
            $fasilitas_sarpras_konsul = NULL;
        }

        if (isset($post['sarana_konsultasi_yang_dimiliki'])) {
            $sarana_konsultasi_yang_dimiliki = implode(", ", $post["sarana_konsultasi_yang_dimiliki"]);
        } else {
            $sarana_konsultasi_yang_dimiliki = NULL;
        }

        $insert_konsul = [
            'user_id' => $this->session->userdata('user_id'),
            'tahun' => date('Y'),
            'fasilitas_sarpras_konsul' => $fasilitas_sarpras_konsul,
            'tersedia_sarana_konsultasi_pengaduan' => (isset($post['tersedia_sarana_konsultasi_pengaduan'])) ? $post['tersedia_sarana_konsultasi_pengaduan'] : NULL,
            'sarana_konsultasi_yang_dimiliki' => $sarana_konsultasi_yang_dimiliki,
            'dokumentasi_hasil_konsultasi' => (isset($post['dokumentasi_hasil_konsultasi'])) ? $post['dokumentasi_hasil_konsultasi'] : NULL,
            'hasil_konsultasi_pengaduan_diarsipkan' => (isset($post['hasil_konsultasi_pengaduan_diarsipkan'])) ? $post['hasil_konsultasi_pengaduan_diarsipkan'] : NULL,
            'hasil_konsul_jadi_laporan' => (isset($post['hasil_konsul_jadi_laporan'])) ? $post['hasil_konsul_jadi_laporan'] : NULL,
            'monev_hasil_konsul' => (isset($post['monev_hasil_konsul'])) ? $post['monev_hasil_konsul'] : NULL,
            'tindaklanjut_hasil_konsul' => (isset($post['tindaklanjut_hasil_konsul'])) ? $post['tindaklanjut_hasil_konsul'] : NULL,
            'publikasi_hasil_konsul' => (isset($post['publikasi_hasil_konsul'])) ? $post['publikasi_hasil_konsul'] : NULL,
            'jumlah_konsul_pengaduan_masuk' => (isset($post['jumlah_konsul_pengaduan_masuk'])) ? $post['jumlah_konsul_pengaduan_masuk'] : NULL,
            'jumlah_konsul_pengaduan_ditindaklanjuti' => (isset($post['jumlah_konsul_pengaduan_ditindaklanjuti'])) ? $post['jumlah_konsul_pengaduan_ditindaklanjuti'] : NULL,
            'jumlah_konsul_pengaduan_masuk_sp4nlapor' => (isset($post['jumlah_konsul_pengaduan_masuk_sp4nlapor'])) ? $post['jumlah_konsul_pengaduan_masuk_sp4nlapor'] : NULL,
            'jumlah_konsul_pengaduan_ditindaklanjuti_sp4nlapor' => (isset($post['jumlah_konsul_pengaduan_ditindaklanjuti_sp4nlapor'])) ? $post['jumlah_konsul_pengaduan_ditindaklanjuti_sp4nlapor'] : NULL
        ];
        $this->Penilaian_model->insert('konsul', $insert_konsul);
        // konsul::end

        // inovasi::begin
        if (isset($post["penghargaan_inovasi"])) {
            $penghargaan_inovasi = implode(", ", $post["penghargaan_inovasi"]);
        } else {
            $penghargaan_inovasi = NULL;
        }

        if (isset($post["bentuk_sumber_daya_pendukung"])) {
            $bentuk_sumber_daya_pendukung = implode(", ", $post["bentuk_sumber_daya_pendukung"]);
        } else {
            $bentuk_sumber_daya_pendukung = NULL;
        }

        $insert_inovasi = [
            'user_id' => $this->session->userdata('user_id'),
            'tahun' => date('Y'),
            'inovasi_yang_ada' => (isset($post['inovasi_yang_ada'])) ? $post['inovasi_yang_ada'] : NULL,
            'judul_inovasi' => (isset($post['judul_inovasi'])) ? $post['judul_inovasi'] : NULL,
            'inisiatif_inovasi' => (isset($post['inisiatif_inovasi'])) ? $post['inisiatif_inovasi'] : NULL,
            'jangka_waktu_inovasi' => (isset($post['jangka_waktu_inovasi'])) ? $post['jangka_waktu_inovasi'] : NULL,
            'waktu_pelaksanaan_inovasi' => (isset($post['waktu_pelaksanaan_inovasi'])) ? $post['waktu_pelaksanaan_inovasi'] : NULL,
            'ikut_serta_kompeisi_inovasi' => (isset($post['ikut_serta_kompeisi_inovasi'])) ? $post['ikut_serta_kompeisi_inovasi'] : NULL,
            'penghargaan_inovasi' => $penghargaan_inovasi,
            'tersedia_sdm_inovasi' => (isset($post['tersedia_sdm_inovasi'])) ? $post['tersedia_sdm_inovasi'] : NULL,
            'sdm_mendukung_inovasi' => (isset($post['sdm_mendukung_inovasi'])) ? $post['sdm_mendukung_inovasi'] : NULL,
            'bentuk_sumber_daya_pendukung' => $bentuk_sumber_daya_pendukung
        ];

        $this->Penilaian_model->insert('inovasi', $insert_inovasi);
        // inovasi::end

        // tambahan::begin
        if (isset($post['fasilitas_sistem_antrian'])) {
            $fasilitas_sistem_antrian = implode(", ", $post["fasilitas_sistem_antrian"]);
        } else {
            $fasilitas_sistem_antrian = NULL;
        }

        $insert_tambahan = [
            'user_id' => $this->session->userdata('user_id'),
            'tahun' => date('Y'),
            'terdapat_sistem_antrian' => (isset($post['adanya_sistem_antrian'])) ? $post['adanya_sistem_antrian'] : NULL,
            'fasilitas_sistem_antrian' => $fasilitas_sistem_antrian,
            'url_video_youtube' => (isset($post['url_youtube'])) ? $post['url_youtube'] : NULL
        ];

        $this->Penilaian_model->insert('tambahan', $insert_tambahan);
        // tambahan::end

        $stats_input = [
            'user_id' => $this->session->userdata('user_id'),
            'tanggal' => date('Y-m-d'),
            'status' => 0
        ];
        $this->db->insert('telah_input', $stats_input);

        $this->session->set_flashdata('success', 'Berhasil Isi Penilaian');
        redirect('penilaian');
    }

    private function checkdir()
    {
        $directory = FCPATH . '/uploads/kepel/' . $this->session->userdata('name') . '/' . date('Y') . '/';
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
    }

    public function do_upload_kepel($aspek_id = '')
    {
        $directory = FCPATH . '/uploads/kepel/' . $this->session->userdata('name') . '/' . date('Y') . '/';
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
        $config['upload_path']   = $directory;
        $config['allowed_types'] = 'jpeg|pdf|jpg|png|zip|rar';
        $this->load->library('upload', $config);

        if ($aspek_id == '') {
            if ($this->upload->do_upload('buktikepel')) {
                $nomor = $this->input->post('nomor');
                $nama = $this->upload->data('file_name');
                $this->Penilaian_model->insert('buktidukungkepel', ['kepel_id' => $this->getIDInsert('kepel'), 'nomor' => $nomor, 'namafile' => $nama]);
            }
        } else {
            if ($this->upload->do_upload('buktikepel')) {
                $nomor = $this->input->post('nomor');
                $nama = $this->upload->data('file_name');
                $this->Penilaian_model->insert('buktidukungkepel', ['kepel_id' => $aspek_id, 'nomor' => $nomor, 'namafile' => $nama]);
            }
        }
    }

    public function do_upload_profsdm($aspek_id = '')
    {
        $directory = FCPATH . '/uploads/profsdm/' . $this->session->userdata('name') . '/' . date('Y') . '/';
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
        $config['upload_path']   = $directory;
        $config['allowed_types'] = 'jpeg|pdf|jpg|png|zip|rar';
        $this->load->library('upload', $config);

        if ($aspek_id == '') {
            if ($this->upload->do_upload('buktiprofsdm')) {
                $nomor = $this->input->post('nomor');
                $nama = $this->upload->data('file_name');
                $this->Penilaian_model->insert('buktidukungprofsdm', ['profsdm_id' => $this->getIDInsert('prof_sdm'), 'nomor' => $nomor, 'namafile' => $nama]);
            }
        } else {
            if ($this->upload->do_upload('buktiprofsdm')) {
                $nomor = $this->input->post('nomor');
                $nama = $this->upload->data('file_name');
                $this->Penilaian_model->insert('buktidukungprofsdm', ['profsdm_id' => $aspek_id, 'nomor' => $nomor, 'namafile' => $nama]);
            }
        }
    }

    public function do_upload_sarpras($aspek_id = '')
    {
        $directory = FCPATH . '/uploads/sarpras/' . $this->session->userdata('name') . '/' . date('Y') . '/';
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
        $config['upload_path']   = $directory;
        $config['allowed_types'] = 'jpeg|pdf|jpg|png|zip|rar';
        $this->load->library('upload', $config);

        if ($aspek_id == '') {
            if ($this->upload->do_upload('buktisarpras')) {
                $nomor = $this->input->post('nomor');
                $nama = $this->upload->data('file_name');
                $this->Penilaian_model->insert('buktidukungsarpras', ['sarpras_id' => $this->getIDInsert('sarpras'), 'nomor' => $nomor, 'namafile' => $nama]);
            }
        } else {
            if ($this->upload->do_upload('buktisarpras')) {
                $nomor = $this->input->post('nomor');
                $nama = $this->upload->data('file_name');
                $this->Penilaian_model->insert('buktidukungsarpras', ['sarpras_id' => $aspek_id, 'nomor' => $nomor, 'namafile' => $nama]);
            }
        }
    }

    public function do_upload_sipp($aspek_id = '')
    {
        $directory = FCPATH . '/uploads/sipp/' . $this->session->userdata('name') . '/' . date('Y') . '/';
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
        $config['upload_path']   = $directory;
        $config['allowed_types'] = 'jpeg|pdf|jpg|png|zip|rar';
        $this->load->library('upload', $config);

        if ($aspek_id == '') {
            if ($this->upload->do_upload('buktisipp')) {
                $nomor = $this->input->post('nomor');
                $nama = $this->upload->data('file_name');
                $this->Penilaian_model->insert('buktidukungsipp', ['sipp_id' => $this->getIDInsert('sipp'), 'nomor' => $nomor, 'namafile' => $nama]);
            }
        } else {
            if ($this->upload->do_upload('buktisipp')) {
                $nomor = $this->input->post('nomor');
                $nama = $this->upload->data('file_name');
                $this->Penilaian_model->insert('buktidukungsipp', ['sipp_id' => $aspek_id, 'nomor' => $nomor, 'namafile' => $nama]);
            }
        }
    }

    public function do_upload_konsul($aspek_id = '')
    {
        $directory = FCPATH . '/uploads/konsul/' . $this->session->userdata('name') . '/' . date('Y') . '/';
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
        $config['upload_path']   = $directory;
        $config['allowed_types'] = 'jpeg|pdf|jpg|png|zip|rar';
        $this->load->library('upload', $config);

        if ($aspek_id == '') {
            if ($this->upload->do_upload('buktikonsul')) {
                $nomor = $this->input->post('nomor');
                $nama = $this->upload->data('file_name');
                $this->Penilaian_model->insert('buktidukungkonsul', ['konsul_id' => $this->getIDInsert('konsul'), 'nomor' => $nomor, 'namafile' => $nama]);
            }
        } else {
            if ($this->upload->do_upload('buktikonsul')) {
                $nomor = $this->input->post('nomor');
                $nama = $this->upload->data('file_name');
                $this->Penilaian_model->insert('buktidukungkonsul', ['konsul_id' => $aspek_id, 'nomor' => $nomor, 'namafile' => $nama]);
            }
        }
        
    }

    public function do_upload_inovasi($aspek_id = '')
    {
        $directory = FCPATH . '/uploads/inovasi/' . $this->session->userdata('name') . '/' . date('Y') . '/';
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
        $config['upload_path']   = $directory;
        $config['allowed_types'] = 'jpeg|pdf|jpg|png|zip|rar';
        $this->load->library('upload', $config);

        if ($aspek_id == '') {
            if ($this->upload->do_upload('buktiinovasi')) {
                $nomor = $this->input->post('nomor');
                $nama = $this->upload->data('file_name');
                $this->Penilaian_model->insert('buktidukunginovasi', ['inovasi_id' => $this->getIDInsert('inovasi'), 'nomor' => $nomor, 'namafile' => $nama]);
            }
        } else {
            if ($this->upload->do_upload('buktiinovasi')) {
                $nomor = $this->input->post('nomor');
                $nama = $this->upload->data('file_name');
                $this->Penilaian_model->insert('buktidukunginovasi', ['inovasi_id' => $aspek_id, 'nomor' => $nomor, 'namafile' => $nama]);
            }
        }
    }

    public function do_upload_tambahan($aspek_id = '')
    {
        $directory = FCPATH . '/uploads/tambahan/' . $this->session->userdata('name') . '/' . date('Y') . '/';
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
        $config['upload_path']   = $directory;
        $config['allowed_types'] = 'jpeg|pdf|jpg|png|zip|rar';
        $this->load->library('upload', $config);

        if ($aspek_id == '') {
            if ($this->upload->do_upload('buktitambahan')) {
                $nomor = $this->input->post('nomor');
                $nama = $this->upload->data('file_name');
                $this->Penilaian_model->insert('buktidukungtambahan', ['tambahan_id' => $this->getIDInsert('tambahan'), 'nomor' => $nomor, 'namafile' => $nama]);
            }
        } else {
            if ($this->upload->do_upload('buktitambahan')) {
                $nomor = $this->input->post('nomor');
                $nama = $this->upload->data('file_name');
                $this->Penilaian_model->insert('buktidukungtambahan', ['tambahan_id' => $aspek_id, 'nomor' => $nomor, 'namafile' => $nama]);
            }
        }
        
    }
}
