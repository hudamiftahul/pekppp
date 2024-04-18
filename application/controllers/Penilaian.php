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

    public function store()
    {
        $post = $this->input->post();

        // kepel:begin
        $masyarakat_dilibatkan = implode(", ", $post["masyarakat_dilibatkan"]);
        $media_publikasi_sp = implode(", ", $post['media_publikasi_sp']);
        $media_publikasi_maklumat_pelayanan = implode(", ", $post["media_publikasi_sp_digunakan"]);
        $media_publikasi_skm = implode(", ", $post['media_publikasi_skm']);
        $jumlah_media_publikasi_skm = implode(",", $post['publikasi_skm']);
        $insert_kebijakan = [
            'user_id' => $this->session->userdata('user_id'),
            'tahun' => date('Y'),
            'dibuat_standar_pelayanan' =>  $post["dibuat_standar_pelayanan"],
            'jumlah_pelayanan_dimiliki' => $post["jumlah_jenis_pelayanan_dimiliki"],
            'jumlah_pelayanan_dibuat' => $post["jumlah_jenis_pelayanan_dibuat"],
            'pelayanan_memenuhi_14komponen' => $post["memenuhi_14_komponen"],
            'pelayanan_melibatkan_masyarakat' => $post["melibatkan_unsur_masyarakat"],
            'pelayanan_telah_ditetapkan' => $post["ditetapkan_standar_pelayanan"],
            'pelayanan_monev' => $post["monev_standar_pelayanan"],
            'sp_melibatkan_masyarakat' => $post["unsur_mas"],
            'unsur_masyarakat_dilibatkan' => $masyarakat_dilibatkan,
            'sp_dipublikasi' => $post["sp_publikasi"],
            'sp_dipublikasi_6komponen_service_delivery' => $post["6_komponen_serv_delivery"],
            'media_publikasi' => $media_publikasi_sp,
            'pernyataan_peninjauan_ulang' => $post["tinjau_ulang"],
            'maklumat_pelayanan_ditetapkan' => $post["maklumat_pelayanan_ditetapkan"],
            'maklumat_pelayanan_sesuai_pp' => $post["maklumat_pelayanan_sesuai_ppu"],
            'maklumat_pelayanan_dipublikasi' => $post["maklumat_pelayanan_dipublikasi"],
            'media_publikasi_maklumat_pelayanan' => $media_publikasi_maklumat_pelayanan,
            'melaksanakan_skm' => $post["unit_lokus_skm"],
            'berapakali_setahun_skm' => $post["jumlah_dilaksanakan_skm"],
            'nilai_rata_rata_skm' => $post["rata_rata_skm"],
            'skm_sesuai_permenpanrb' => $post["pelaksanaan_skm_permenpanrb"],
            'skm_dipublikasi' => $post["publikasi_hasil_skm"],
            'media_publikasi_skm_menggunakan' => $media_publikasi_skm,
            'hasil_skm_ditindaklanjuti' => $post["tindak_lanjut_hasil_skm"],
            'jumlah_media_publikasi_skm' => $jumlah_media_publikasi_skm,
            'rencana_tindak_lanjut_skm' => $post["rencana_tindak_lanjut_skm"],
            'persentase_rencana_tindaklanjut_skm_1tahun' => $post["persentase_tindak_lanjut_skm"],
            'laporan_tindaklanjut' => $post["laporan_tindak_lanjut_skm"],
            'apakah_hasil_skm_ditindaklanjuti' => $post["apakah_hasil_skm_ditindaklanjuti"],
            'berapa_lama_tindaklanjut_skm' => $post["berapa_lama_tindak_lanjut_skm"]
        ];
        $this->Penilaian_model->insert('kepel', $insert_kebijakan);
        // kepel::end


        // prof sdm::begin
        $pelaksanaan_waktu_pelayanan = implode(", ", $post["pelaksanaan_waktu_pelayanan"]);
        $aper_kotik_pp = implode(", ", $post["aper_kotik_pp"]);
        $kriteria_penghargaan = implode(", ", $post["kriteria_penghargaan"]);
        $pemberian_penghargaan = implode(", ", $post["pemberian_penghargaan"]);
        $budaya_pelayanan = implode(", ", $post["budaya_pelayanan"]);
        $insert_profsdm = [
            'user_id' => $this->session->userdata('user_id'),
            'tahun' => date('Y'),
            'waktu_pelayanan' => $post['waktu_pelayanan'],
            'pelaksanaan_waktu_pelayanan' => $pelaksanaan_waktu_pelayanan,
            'aturan_perilaku_kode_etik' => $post['aturan_perilaku_kode_etik'],
            'aper_kotik_pp' => $aper_kotik_pp,
            'kriteria_penghargaan' => $kriteria_penghargaan,
            'pemberian_penghargaan' => $pemberian_penghargaan,
            'budaya_pelayanan' => $budaya_pelayanan
        ];
        $this->Penilaian_model->insert('prof_sdm', $insert_profsdm);
        // prof sdm::end

        // sarpras::begin
        $fasilitas_parkir = implode(", ", $post["fasilitas_parkir"]);
        $fasilitas_ruang_tunggu = implode(", ", $post["fasilitas_ruang_tunggu"]);
        $fasilitas_toilet = implode(", ", $post["fasilitas_toilet"]);
        $sarana_disabilitas = implode(", ", $post["sarana_disabilitas"]);
        $sarpras_penunjang_pelayanan = implode(", ", $post["sarpras_penunjang_pelayanan"]);
        $fasilitas_fo = implode(", ", $post["fasilitas_fo"]);
        $insert_sarpras = [
            'user_id' => $this->session->userdata('user_id'),
            'tahun' => date('Y'),
            'tersedia_tempat_parkir' => $post['tersedia_tempat_parkir'],
            'fasilitas_parkir' => $fasilitas_parkir,
            'fasilitas_ruang_tunggu' => $fasilitas_ruang_tunggu,
            'tersedia_toilet' => $post['tersedia_toilet'],
            'fasilitas_toilet' => $fasilitas_toilet,
            'sarana_disabilitas' => $sarana_disabilitas,
            'sarpras_penunjang_pelayanan' => $sarpras_penunjang_pelayanan,
            'fasilitas_fo' => $fasilitas_fo,
        ];
        $this->Penilaian_model->insert('sarpras', $insert_sarpras);
        // sarpras::end

        // sipp::begin
        $sipp_yang_tersedia = implode(", ", $post["sipp_yang_tersedia"]);
        $sipp_non_elektronik = implode(", ", $post["sipp_non_elektronik"]);
        $sipp_elektronik = implode(", ", $post["sipp_elektronik"]);
        $unsur_pendukung = implode(", ", $post["unsur_pendukung"]);

        $insert_sipp = [
            'user_id' => $this->session->userdata('user_id'),
            'tahun' => date('Y'),
            'tersedia_sipp' => $post['tersedia_sipp'],
            'sipp_yang_tersedia' => $sipp_yang_tersedia,
            'sipp_non_elektronik' => $sipp_non_elektronik,
            'sipp_elektronik' => $sipp_elektronik,
            'penggunaan_sippn' => $post['penggunaan_sippn'],
            'akun_pengguna_sippn' => $post['akun_pengguna_sippn'],
            'jumlah_layanan_terinput_sippn' => $post['jumlah_layanan_terinput_sippn'],
            'unsur_pendukung' => $unsur_pendukung,
            'memiliki_sippe' => $post['memiliki_sippe'],
            'kemudahan_operasional_sippe_webbase' => $post['kemudahan_operasional_sippe_webbase'],
            'kemudahan_akses_sippe_webbase' => $post['kemudahan_akses_sippe_webbase'],
            'fungsi_kompatibel_sippe_webbase' => $post['fungsi_kompatibel_sippe_webbase'],
            'domain_goverment_sippe_webbase' => $post['domain_goverment_sippe_webbase'],
            'navigasi_sippe_webbase' => $post['navigasi_sippe_webbase'],
            'pemutakhiran_informasi_pelayanan_publik' => $post['pemutakhiran_informasi_pelayanan_publik'],
            'jangka_waktu_pemutakhiran_informasi_pelayanan_publik' => $post['jangka_waktu_pemutakhiran_informasi_pelayanan_publik']
        ];
        $this->Penilaian_model->insert('sipp', $insert_sipp);
        // sipp::end

        // konsul::begin
        $fasilitas_sarpras_konsul = implode(", ", $post["fasilitas_sarpras_konsul"]);
        $sarana_konsultasi_yang_dimiliki = implode(", ", $post["sarana_konsultasi_yang_dimiliki"]);

        $konsul = [
            'user_id' => $this->session->userdata('user_id'),
            'tahun' => date('Y'),
            'fasilitas_sarpras_konsul' => $fasilitas_sarpras_konsul,
            'tersedia_sarana_konsultasi_pengaduan' => $post['tersedia_sarana_konsultasi_pengaduan'],
            'sarana_konsultasi_yang_dimiliki' => $sarana_konsultasi_yang_dimiliki,
            'dokumentasi_hasil_konsultasi' => $post['dokumentasi_hasil_konsultasi'],
            'hasil_konsultasi_pengaduan_diarsipkan' => $post['hasil_konsultasi_pengaduan_diarsipkan'],
            'hasil_konsul_jadi_laporan' => $post['hasil_konsul_jadi_laporan'],
            'monev_hasil_konsul' => $post['monev_hasil_konsul'],
            'tindaklanjut_hasil_konsul' => $post['tindaklanjut_hasil_konsul'],
            'publikasi_hasil_konsul' => $post['publikasi_hasil_konsul'],
            'jumlah_konsul_pengaduan_masuk' => $post['jumlah_konsul_pengaduan_masuk'],
            'jumlah_konsul_pengaduan_ditindaklanjuti' => $post['jumlah_konsul_pengaduan_ditindaklanjuti'],
            'jumlah_konsul_pengaduan_masuk_sp4nlapor' => $post['jumlah_konsul_pengaduan_masuk_sp4nlapor'],
            'jumlah_konsul_pengaduan_ditindaklanjuti_sp4nlapor' => $post['jumlah_konsul_pengaduan_ditindaklanjuti_sp4nlapor'],
        ];
        $this->Penilaian_model->insert('konsul', $konsul);
        // konsul::end

        // inovasi::begin
        $penghargaan_inovasi = implode(", ", $post["penghargaan_inovasi"]);
        $bentuk_sumber_daya_pendukung = implode(", ", $post["bentuk_sumber_daya_pendukung"]);

        $inovasi = [
            'user_id' => $this->session->userdata('user_id'),
            'tahun' => date('Y'),
            'inovasi_yang_ada' => $post['inovasi_yang_ada'],
            'judul_inovasi' => $post['judul_inovasi'],
            'inisiatif_inovasi' => $post['inisiatif_inovasi'],
            'jangka_waktu_inovasi' => $post['jangka_waktu_inovasi'],
            'waktu_pelaksanaan_inovasi' => $post['waktu_pelaksanaan_inovasi'],
            'ikut_serta_kompeisi_inovasi' => $post['ikut_serta_kompeisi_inovasi'],
            'penghargaan_inovasi' => $penghargaan_inovasi,
            'tersedia_sdm_inovasi' => $post['tersedia_sdm_inovasi'],
            'sdm_mendukung_inovasi' => $post['sdm_mendukung_inovasi'],
            'bentuk_sumber_daya_pendukung' => $bentuk_sumber_daya_pendukung
        ];

        $this->Penilaian_model->insert('inovasi', $inovasi);
        // inovasi::end

        // tambahan::begin
        $fasilitas_sistem_antrian = implode(", ", $post["fasilitas_sistem_antrian"]);

        $tambahan = [
            'user_id' => $this->session->userdata('user_id'),
            'tahun' => date('Y'),
            'terdapat_sistem_antrian' => $post['adanya_sistem_antrian'],
            'fasilitas_sistem_antrian' => $fasilitas_sistem_antrian,
            'url_video_youtube' => $post['url_youtube']
        ];

        $this->Penilaian_model->insert('tambahan', $tambahan);
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

    public function checkdir()
    {
        $directory = FCPATH . '/uploads/kepel/' . $this->session->userdata('name') . '/' . date('Y') . '/';
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
    }

    public function do_upload_kepel()
    {
        $directory = FCPATH . '/uploads/kepel/' . $this->session->userdata('name') . '/' . date('Y') . '/';
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
        $config['upload_path']   = $directory;
        $config['allowed_types'] = 'jpeg|pdf|jpg|png|zip|rar';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('buktikepel')) {
            $nomor = $this->input->post('nomor');
            $nama = $this->upload->data('file_name');
            $this->Penilaian_model->insert('buktidukungkepel', ['kepel_id' => $this->getIDInsert('kepel'), 'nomor' => $nomor, 'namafile' => $nama]);
        }
    }

    public function do_upload_profsdm()
    {
        $directory = FCPATH . '/uploads/profsdm/' . $this->session->userdata('name') . '/' . date('Y') . '/';
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
        $config['upload_path']   = $directory;
        $config['allowed_types'] = 'jpeg|pdf|jpg|png|zip|rar';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('buktiprofsdm')) {
            $nomor = $this->input->post('nomor');
            $nama = $this->upload->data('file_name');
            $this->Penilaian_model->insert('buktidukungprofsdm', ['profsdm_id' => $this->getIDInsert('prof_sdm'), 'nomor' => $nomor, 'namafile' => $nama]);
        }
    }

    public function do_upload_sarpras()
    {
        $directory = FCPATH . '/uploads/sarpras/' . $this->session->userdata('name') . '/' . date('Y') . '/';
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
        $config['upload_path']   = $directory;
        $config['allowed_types'] = 'jpeg|pdf|jpg|png|zip|rar';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('buktisarpras')) {
            $nomor = $this->input->post('nomor');
            $nama = $this->upload->data('file_name');
            $this->Penilaian_model->insert('buktidukungsarpras', ['sarpras_id' => $this->getIDInsert('sarpras'), 'nomor' => $nomor, 'namafile' => $nama]);
        }
    }

    public function do_upload_sipp()
    {
        $directory = FCPATH . '/uploads/sipp/' . $this->session->userdata('name') . '/' . date('Y') . '/';
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
        $config['upload_path']   = $directory;
        $config['allowed_types'] = 'jpeg|pdf|jpg|png|zip|rar';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('buktisipp')) {
            $nomor = $this->input->post('nomor');
            $nama = $this->upload->data('file_name');
            $this->Penilaian_model->insert('buktidukungsipp', ['sipp_id' => $this->getIDInsert('sipp'), 'nomor' => $nomor, 'namafile' => $nama]);
        }
    }

    public function do_upload_konsul()
    {
        $directory = FCPATH . '/uploads/konsul/' . $this->session->userdata('name') . '/' . date('Y') . '/';
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
        $config['upload_path']   = $directory;
        $config['allowed_types'] = 'jpeg|pdf|jpg|png|zip|rar';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('buktikonsul')) {
            $nomor = $this->input->post('nomor');
            $nama = $this->upload->data('file_name');
            $this->Penilaian_model->insert('buktidukungkonsul', ['konsul_id' => $this->getIDInsert('konsul'), 'nomor' => $nomor, 'namafile' => $nama]);
        }
    }

    public function do_upload_inovasi()
    {
        $directory = FCPATH . '/uploads/inovasi/' . $this->session->userdata('name') . '/' . date('Y') . '/';
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
        $config['upload_path']   = $directory;
        $config['allowed_types'] = 'jpeg|pdf|jpg|png|zip|rar';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('buktiinovasi')) {
            $nomor = $this->input->post('nomor');
            $nama = $this->upload->data('file_name');
            $this->Penilaian_model->insert('buktidukunginovasi', ['inovasi_id' => $this->getIDInsert('inovasi'), 'nomor' => $nomor, 'namafile' => $nama]);
        }
    }

    public function do_upload_tambahan()
    {
        $directory = FCPATH . '/uploads/tambahan/' . $this->session->userdata('name') . '/' . date('Y') . '/';
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
        $config['upload_path']   = $directory;
        $config['allowed_types'] = 'jpeg|pdf|jpg|png|zip|rar';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('buktitambahan')) {
            $nomor = $this->input->post('nomor');
            $nama = $this->upload->data('file_name');
            $this->Penilaian_model->insert('buktidukungtambahan', ['tambahan_id' => $this->getIDInsert('tambahan'), 'nomor' => $nomor, 'namafile' => $nama]);
        }
    }
}
