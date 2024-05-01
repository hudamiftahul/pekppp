/*
SQLyog Community v13.2.1 (64 bit)
MySQL - 10.4.32-MariaDB : Database - pekppp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`saty4747_pekpp` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `saty4747_pekpp`;

/*Table structure for table `buktidukung_formulir3` */

DROP TABLE IF EXISTS `buktidukung_formulir3`;

CREATE TABLE `buktidukung_formulir3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `formulir3_id` int(11) NOT NULL,
  `buktidukung` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `buktidukung_formulir3` */

insert  into `buktidukung_formulir3`(`id`,`formulir3_id`,`buktidukung`) values 
(1,1,'WhatsApp_Image_2024-04-22_at_09_10_15.jpeg'),
(2,3,'WhatsApp_Image_2024-04-22_at_09_10_151.jpeg'),
(3,4,'WhatsApp_Image_2024-04-22_at_09_10_152.jpeg'),
(4,5,'WhatsApp_Image_2024-04-22_at_09_10_153.jpeg'),
(5,6,'WhatsApp_Image_2024-04-22_at_09_10_154.jpeg'),
(8,12,'SOP_PENCABUTAN_IJIN_PRAKTIK_TENAGA_KESEHATAN.pdf'),
(9,12,'SOP_PENDAFTARAN_PBID_KIS.pdf'),
(10,12,'BOOKLET_PELAYANAN_PERIZINAN_NAKES.pdf'),
(11,12,'SOP_PENGUNDURAN_PESERTA_PBID_KIS.pdf'),
(12,12,'SOP_PERIZINAN_TENAGA_KESEHATAN.pdf'),
(13,13,'Pengaduan_buku.jpg'),
(14,13,'beranda_instagram.jpg'),
(15,14,'beranda_website.jpg');

/*Table structure for table `buktidukunginovasi` */

DROP TABLE IF EXISTS `buktidukunginovasi`;

CREATE TABLE `buktidukunginovasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inovasi_id` int(11) NOT NULL,
  `nomor` char(8) NOT NULL,
  `namafile` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `buktidukunginovasi` */

insert  into `buktidukunginovasi`(`id`,`inovasi_id`,`nomor`,`namafile`) values 
(1,2,'6_1','KOLABIK_PELANGI.pdf'),
(2,2,'6_1','PELANGI.pdf'),
(3,2,'6_1','PENGHARGAAN_SIPNAKES_2022.pdf'),
(4,2,'6_1','KOLABIK_PELANGI1.pdf'),
(5,2,'6_1','PELANGI1.pdf'),
(6,2,'6_1','PENGHARGAAN_SIPNAKES_20221.pdf'),
(7,2,'6_2','WhatsApp_Image_2024-04-25_at_15_42_48.jpeg'),
(8,2,'6_2','Pembinaan_dan_Pengawasan_Tenaga_Kesehatan_serta_Tindak_Lanjut_Perizinan_Praktik_Tenaga_Kesehatan.pdf'),
(9,2,'6_2','DPPA_PAK_UKM_UKP.pdf'),
(10,2,'6_1','SK_TIM_PELAYANAN_DINKES_DI_MPP.pdf'),
(11,2,'6_1','KOLABIK_SIPNAKES.pdf'),
(12,2,'6_1','KOLABIK_PELANGI2.pdf'),
(13,2,'6_1','REKA_KARSA_CIPTA_PELANGI_.pdf'),
(14,2,'6_2','DPA_PERIZINAN_NAKES.pdf'),
(15,2,'6_2','PAYUNG_HUKUM_PELANGI.jpeg'),
(16,2,'6_2','DPPA_PAK_UKM_UKP1.pdf'),
(17,2,'6_2','PERWALI_50_TH_2021_TT_PERUBAHAN_PERWALI_56_2019_TT_JAMKES_BAGI_MASYARAKAT_PENERIMA_BID.pdf'),
(18,2,'6_2','SK_PENETAPAN_INOVASI_DAERAH_TAHUN_2022.pdf'),
(19,2,'6_2','SK_TIM_EFEKTIF_AK_SYMPHONI.pdf'),
(20,2,'6_2','SK_TIM_PELANGI.pdf'),
(21,3,'6_1','DOKUMENTASI_KEIKUTSERTAAN_KOLABIK.jpeg'),
(22,3,'6_1','PROPOSAL_PESONA_HATI.pdf'),
(23,3,'6_2','PROPOSAL_PESONA_HATI1.pdf'),
(24,3,'6_2','DUKUNGAN_ANGGARAN.pdf'),
(25,3,'6_2','REGULASI_DAERAH_ALL.pdf'),
(26,5,'6_1','WhatsApp_Image_2024-04-23_at_11_32_07.jpeg'),
(27,6,'6_1','PROPOSAL__PETI_KEMAS.pdf'),
(28,6,'6_2','2_12_03_2_01_Pelayanan_Pencatatan_Sipil.pdf'),
(29,6,'6_2','2022_-_PKS_RSUD.pdf'),
(30,10,'6_1','PROPOSAL_PELANGI_SAKINA.pdf'),
(31,10,'6_1','Proposal_Semar_Gendut.pdf'),
(32,10,'6_1','foto_semar_gendut.jpg'),
(33,11,'6_1','inovasi_aktualisasi.pdf'),
(34,11,'6_2','inovasi_aktualisasi1.pdf');

/*Table structure for table `buktidukungkepel` */

DROP TABLE IF EXISTS `buktidukungkepel`;

CREATE TABLE `buktidukungkepel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kepel_id` int(11) NOT NULL,
  `nomor` char(8) NOT NULL,
  `namafile` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=216 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `buktidukungkepel` */

insert  into `buktidukungkepel`(`id`,`kepel_id`,`nomor`,`namafile`) values 
(1,6,'1_1','SK_KADIN_STANDAR_PELAYANAN_2023.pdf'),
(2,6,'1_5','SK_MAKLUMAT_PELAYANAN.pdf'),
(3,6,'1_5','WhatsApp_Image_2024-04-24_at_08_26_52.jpeg'),
(4,6,'1_5','MAKLUMAT_PELAYANAN_DI_MPP.jpeg'),
(5,6,'1_5','WhatsApp_Image_2024-04-24_at_08_26_58.jpeg'),
(6,6,'1_7','LAP_IKM_DINKES_SEMESTER_1_2023.pdf'),
(7,6,'1_7','WhatsApp_Image_2024-04-24_at_08_30_01.jpeg'),
(8,10,'1_1','1__SPP_Dukcapil_2024.pdf'),
(9,6,'1_1','SK_KADIN_STANDAR_PELAYANAN_20231.pdf'),
(10,6,'1_2','UNDANGAN_PERTEMUAN_REVIEW_SPP.pdf'),
(11,6,'1_2','daftar_hadir.pdf'),
(12,6,'1_3','MAKLUMAT_PELAYANAN_DI_MPP1.jpeg'),
(13,6,'1_3','maklumat_di_website.jpeg'),
(14,6,'1_3','cetak_maklumat_pelayanan.jpeg'),
(15,6,'1_4','UNDANGAN_PERTEMUAN_REVIEW_SPP1.pdf'),
(16,6,'1_5','cetak_maklumat_pelayanan1.jpeg'),
(17,6,'1_5','SK_MAKLUMAT_PELAYANAN1.pdf'),
(18,6,'1_5','maklumat_di_website1.jpeg'),
(19,6,'1_5','MAKLUMAT_PELAYANAN_DI_MPP2.jpeg'),
(20,6,'1_6','IKM-SEMESTER-2-2023.jpg'),
(21,6,'1_6','LAP_IKM_DINKES_SEMESTER_1_20231.pdf'),
(22,6,'1_6','survey_IKM.pdf'),
(23,6,'1_7','IKM-SEMESTER-2-20231.jpg'),
(24,6,'1_7','publish_skm_di_website.jpeg'),
(25,6,'1_8','rekom_SKm.pdf'),
(26,6,'1_9','rekom_SKm1.pdf'),
(27,6,'1_1','SK_KADIN_STANDAR_PELAYANAN_20232.pdf'),
(28,6,'1_2','daftar_hadir1.pdf'),
(29,6,'1_2','UNDANGAN_PERTEMUAN_REVIEW_SPP2.pdf'),
(30,6,'1_2','20240207_104239.jpg'),
(31,6,'1_3','WhatsApp_Image_2024-04-25_at_18_38_18.jpeg'),
(32,6,'1_3','SK_KADIN_STANDAR_PELAYANAN_20233.pdf'),
(33,6,'1_4','UNDANGAN_PERTEMUAN_REVIEW_SPP3.pdf'),
(34,6,'1_4','daftar_hadir2.pdf'),
(35,6,'1_5','cetak_maklumat_pelayanan2.jpeg'),
(36,6,'1_5','maklumat_di_website2.jpeg'),
(37,6,'1_5','SK_MAKLUMAT_PELAYANAN2.pdf'),
(38,6,'1_5','MAKLUMAT_PELAYANAN_DI_MPP3.jpeg'),
(39,6,'1_6','IKM-SEMESTER-2-20232.jpg'),
(40,6,'1_6','publish_skm_di_website1.jpeg'),
(41,6,'1_6','rekom_SKm2.pdf'),
(42,6,'1_6','survey_IKM1.pdf'),
(43,6,'1_7','IKM-SEMESTER-2-20233.jpg'),
(44,6,'1_7','publish_skm_di_website2.jpeg'),
(45,6,'1_7','tv_mpp.jpeg'),
(46,6,'1_8','rekom_SKm3.pdf'),
(47,6,'1_9','rekom_SKm4.pdf'),
(48,7,'1_1','3__Paket_pertemuan_Forum_Masyarakat_Perduli_Puskesmas_(_FMPP_).pdf'),
(49,7,'1_1','WhatsApp_Image_2024-04-26_at_07_56_56_(1).jpeg'),
(50,7,'1_1','WhatsApp_Image_2024-04-26_at_07_56_56.jpeg'),
(51,7,'1_1','WhatsApp_Image_2024-04-26_at_07_56_55.jpeg'),
(52,7,'1_1','SURVEY_EVALUASI_JENIS_PELAYANAN_UPT_PUSKESMAS_TRAJENG_KELURAHAN_TRAJENG.pdf'),
(53,7,'1_2','3__Paket_pertemuan_Forum_Masyarakat_Perduli_Puskesmas_(_FMPP_)1.pdf'),
(54,7,'1_2','WhatsApp_Image_2022-12-06_at_09_12_45.jpeg'),
(55,7,'1_2','WhatsApp_Image_2022-12-06_at_09_12_34_(1).jpeg'),
(56,7,'1_2','WhatsApp_Image_2022-12-06_at_12_01_56_(1).jpeg'),
(57,7,'1_2','WhatsApp_Image_2022-12-06_at_12_01_56.jpeg'),
(58,7,'1_3','WhatsApp_Image_2024-04-26_at_08_11_01_(1).jpeg'),
(59,7,'1_3','WhatsApp_Image_2024-04-26_at_08_13_48.jpeg'),
(60,7,'1_3','WhatsApp_Image_2024-04-26_at_08_11_01.jpeg'),
(61,7,'1_3','WhatsApp_Image_2024-04-26_at_07_56_561.jpeg'),
(62,7,'1_3','WhatsApp_Image_2024-04-26_at_07_56_551.jpeg'),
(63,7,'1_4','SURVEY_EVALUASI_JENIS_PELAYANAN_UPT_PUSKESMAS_TRAJENG_KELURAHAN_TRAJENG1.pdf'),
(64,7,'1_5','WhatsApp_Image_2024-04-26_at_08_17_00.jpeg'),
(65,7,'1_5','WhatsApp_Image_2024-04-26_at_08_18_05.jpeg'),
(66,7,'1_5','WhatsApp_Image_2024-04-26_at_08_17_00_(1).jpeg'),
(67,7,'1_7','WhatsApp_Image_2024-04-26_at_08_24_42.jpeg'),
(68,7,'1_7','WhatsApp_Image_2024-04-26_at_08_12_22.jpeg'),
(69,7,'1_6','WhatsApp_Image_2024-04-26_at_08_26_02.jpeg'),
(70,7,'1_6','WhatsApp_Image_2024-04-26_at_08_12_221.jpeg'),
(71,7,'1_6','WhatsApp_Image_2024-04-26_at_08_24_421.jpeg'),
(72,7,'1_1','WhatsApp_Image_2024-04-26_at_08_11_011.jpeg'),
(73,7,'1_1','WhatsApp_Image_2024-04-26_at_08_13_481.jpeg'),
(74,7,'1_1','WhatsApp_Image_2024-04-26_at_07_56_57.jpeg'),
(75,7,'1_1','WhatsApp_Image_2024-04-26_at_07_56_56_(1)1.jpeg'),
(76,7,'1_1','WhatsApp_Image_2024-04-26_at_07_56_562.jpeg'),
(77,7,'1_1','WhatsApp_Image_2024-04-26_at_07_56_552.jpeg'),
(78,7,'1_2','3__Paket_pertemuan_Forum_Masyarakat_Perduli_Puskesmas_(_FMPP_)2.pdf'),
(79,7,'1_2','WhatsApp_Image_2022-12-06_at_09_12_33.jpeg'),
(80,7,'1_2','WhatsApp_Image_2022-12-06_at_09_12_34.jpeg'),
(81,7,'1_2','WhatsApp_Image_2022-12-06_at_12_01_56_(1)1.jpeg'),
(82,7,'1_2','WhatsApp_Image_2022-12-06_at_12_01_58.jpeg'),
(83,7,'1_4','SURVEY_EVALUASI_JENIS_PELAYANAN_UPT_PUSKESMAS_TRAJENG_KELURAHAN_TRAJENG2.pdf'),
(84,5,'1_1','otonomi_daerah.png'),
(85,6,'1_1','MAKLUMAT_PELAYANAN_DI_MPP4.jpeg'),
(86,6,'1_1','SK_KADIN_STANDAR_PELAYANAN_20234.pdf'),
(87,6,'1_2','DAFTAR_HADIR.pdf'),
(88,6,'1_2','NOTULEN_RAPAT_KOORDINASI_REVIEW_SP.pdf'),
(89,6,'1_2','DOKUMENTASI.jpg'),
(90,6,'1_2','UNDANGAN_PERTEMUAN_REVIEW_SPP4.pdf'),
(91,6,'1_3','SC_STANDAR_PELAYANAN_DI_WEBSITE.jpeg'),
(92,6,'1_3','SK_KADIN_STANDAR_PELAYANAN_20235.pdf'),
(93,6,'1_4','NOTULEN_RAPAT_KOORDINASI_REVIEW_SP1.pdf'),
(94,6,'1_4','UNDANGAN_PERTEMUAN_REVIEW_SPP5.pdf'),
(95,6,'1_4','DAFTAR_HADIR1.pdf'),
(96,6,'1_4','DOKUMENTASI1.jpg'),
(97,6,'1_5','MAKLUMAT_PELAYANAN_DI_MPP5.jpeg'),
(98,6,'1_5','SK_MAKLUMAT_PELAYANAN3.pdf'),
(99,6,'1_6','LAP_SKM_DINKE_SEMESTER_2_2023.pdf'),
(100,6,'1_6','LAP_TINDAK_LANJUT_SKM_TW_2_2023.pdf'),
(101,6,'1_6','LAP_SKM_DINKES_SEMESTER_1_2023.pdf'),
(102,6,'1_6','PUBLISH_SKM_DI_WEBSITE.jpeg'),
(103,6,'1_6','SKM_DI_MPP_DIGITAL.jpeg'),
(104,6,'1_8','E-SAMBAT_PRINTSCREEN_2023.pdf'),
(105,6,'1_8','DATA_PENGADUAN_SEMESTER_1_2023.pdf'),
(106,6,'1_8','LAP_TINDAK_LANJUT_SKM_TW_2_20231.pdf'),
(107,6,'1_8','LAPORAN_MONITORING_DAN_EVALUASI_PENANGANAN_PENGADUAN_MASYARAKAT_DINKES_2023_SMT_1.pdf'),
(108,6,'1_9','LAPORAN_TINDAK_LANJUT_SKM.pdf'),
(109,6,'1_9','LAP_SKM_TW_2_2023.pdf'),
(110,7,'1_1','WhatsApp_Image_2024-04-26_at_07_56_571.jpeg'),
(111,7,'1_1','WhatsApp_Image_2024-04-26_at_07_56_56_(1)2.jpeg'),
(112,7,'1_1','WhatsApp_Image_2024-04-26_at_08_11_012.jpeg'),
(113,7,'1_1','WhatsApp_Image_2024-04-26_at_08_13_482.jpeg'),
(114,7,'1_1','sosialisasi_standart_layanan_pada_website.jpeg'),
(115,7,'1_1','Standart_Pelayanan_Kesehatan_Gigi_dan_Mulut.jpeg'),
(116,7,'1_1','Standart_Pelayanan_Manajemen_Terpadu_Balita_Sakit.jpeg'),
(117,7,'1_1','sosialisasi_standart_pelayanan_pada_media_sosial.jpeg'),
(118,7,'1_1','SK_STANDART_LAYANAN_PKM_TRAJENG.pdf'),
(119,7,'1_2','WhatsApp_Image_2022-12-06_at_09_12_341.jpeg'),
(120,7,'1_2','WhatsApp_Image_2022-12-06_at_12_01_58_(1).jpeg'),
(121,7,'1_2','3__Paket_pertemuan_Forum_Masyarakat_Perduli_Puskesmas_(_FMPP_)3.pdf'),
(122,7,'1_3','WhatsApp_Image_2024-04-26_at_07_56_56_(1)3.jpeg'),
(123,7,'1_3','WhatsApp_Image_2024-04-26_at_07_56_572.jpeg'),
(124,7,'1_3','WhatsApp_Image_2024-04-26_at_08_11_013.jpeg'),
(125,7,'1_3','WhatsApp_Image_2024-04-26_at_08_11_01_(1)1.jpeg'),
(126,7,'1_3','WhatsApp_Image_2024-04-26_at_08_13_483.jpeg'),
(127,7,'1_4','SURVEY_EVALUASI_JENIS_PELAYANAN_UPT_PUSKESMAS_TRAJENG_KELURAHAN_TRAJENG3.pdf'),
(128,7,'1_5','05_MAKLUMAT_PELAYANAN_2022.pdf'),
(129,7,'1_5','WhatsApp_Image_2024-04-26_at_08_17_00_(1)1.jpeg'),
(130,7,'1_5','WhatsApp_Image_2024-04-26_at_08_17_001.jpeg'),
(131,7,'1_5','WhatsApp_Image_2024-04-26_at_08_18_05_(1).jpeg'),
(132,7,'1_5','WhatsApp_Image_2024-04-26_at_08_19_05.jpeg'),
(133,7,'1_6','Laporan_SKM_semester_2_2023.pdf'),
(134,7,'1_6','Laporan_SKM_semester_1_2023.pdf'),
(135,7,'1_6','WhatsApp_Image_2024-04-26_at_08_12_222.jpeg'),
(136,7,'1_6','WhatsApp_Image_2024-04-26_at_08_24_422.jpeg'),
(137,7,'1_6','WhatsApp_Image_2024-04-27_at_10_28_13.jpeg'),
(138,7,'1_7','Laporan_SKM_semester_1_20231.pdf'),
(139,7,'1_7','WhatsApp_Image_2024-04-26_at_08_12_223.jpeg'),
(140,7,'1_7','WhatsApp_Image_2024-04-26_at_08_24_423.jpeg'),
(141,7,'1_7','Laporan_SKM_semester_2_20231.pdf'),
(142,7,'1_7','WhatsApp_Image_2024-04-27_at_10_28_131.jpeg'),
(143,7,'1_8','Laporan_SKM_semester_1_20232.pdf'),
(144,7,'1_8','Laporan_SKM_semester_2_20232.pdf'),
(145,7,'1_9','Laporan_SKM_semester_1_20233.pdf'),
(146,7,'1_9','Laporan_SKM_semester_2_20233.pdf'),
(147,7,'1_1','sosialisasi_standart_layanan_pada_website1.jpeg'),
(148,7,'1_1','sosialisasi_standart_pelayanan_pada_media_sosial_(2).jpeg'),
(149,7,'1_1','sosialisasi_standart_pelayanan_pada_media_sosial1.jpeg'),
(150,7,'1_1','Standart_Pelayanan_Kesehatan_Gigi_dan_Mulut1.jpeg'),
(151,7,'1_1','SK_STANDART_LAYANAN_PKM_TRAJENG1.pdf'),
(152,7,'1_2','WhatsApp_Image_2022-12-06_at_09_12_342.jpeg'),
(153,7,'1_2','WhatsApp_Image_2022-12-06_at_09_12_35.jpeg'),
(154,7,'1_2','WhatsApp_Image_2022-12-06_at_09_12_37.jpeg'),
(155,7,'1_2','WhatsApp_Image_2022-12-06_at_12_01_58_(1)1.jpeg'),
(156,7,'1_2','3__Paket_pertemuan_Forum_Masyarakat_Perduli_Puskesmas_(_FMPP_)4.pdf'),
(157,7,'1_3','WhatsApp_Image_2024-04-26_at_07_56_573.jpeg'),
(158,7,'1_3','WhatsApp_Image_2024-04-26_at_07_56_56_(1)4.jpeg'),
(159,7,'1_3','WhatsApp_Image_2024-04-26_at_08_11_014.jpeg'),
(160,7,'1_3','WhatsApp_Image_2024-04-26_at_08_11_01_(1)2.jpeg'),
(161,7,'1_3','WhatsApp_Image_2024-04-26_at_08_13_484.jpeg'),
(162,7,'1_4','SURVEY_EVALUASI_JENIS_PELAYANAN_UPT_PUSKESMAS_TRAJENG_KELURAHAN_TRAJENG4.pdf'),
(163,7,'1_5','WhatsApp_Image_2024-04-26_at_08_17_00_(1)2.jpeg'),
(164,7,'1_5','05_MAKLUMAT_PELAYANAN_20221.pdf'),
(165,7,'1_5','WhatsApp_Image_2024-04-26_at_08_17_002.jpeg'),
(166,7,'1_5','WhatsApp_Image_2024-04-26_at_08_18_05_(1)1.jpeg'),
(167,7,'1_5','WhatsApp_Image_2024-04-26_at_08_19_051.jpeg'),
(168,7,'1_6','Laporan_SKM_semester_1_20234.pdf'),
(169,7,'1_6','WhatsApp_Image_2024-04-26_at_08_12_224.jpeg'),
(170,7,'1_6','Laporan_SKM_semester_2_20234.pdf'),
(171,7,'1_6','WhatsApp_Image_2024-04-26_at_08_24_424.jpeg'),
(172,7,'1_6','WhatsApp_Image_2024-04-27_at_10_28_132.jpeg'),
(173,7,'1_7','Laporan_SKM_semester_1_20235.pdf'),
(174,7,'1_7','WhatsApp_Image_2024-04-26_at_08_12_225.jpeg'),
(175,7,'1_7','WhatsApp_Image_2024-04-26_at_08_24_425.jpeg'),
(176,7,'1_7','Laporan_SKM_semester_2_20235.pdf'),
(177,7,'1_7','WhatsApp_Image_2024-04-27_at_10_28_133.jpeg'),
(178,7,'1_8','Laporan_SKM_semester_1_20236.pdf'),
(179,7,'1_8','Laporan_SKM_semester_2_20236.pdf'),
(180,7,'1_9','Laporan_SKM_semester_1_20237.pdf'),
(181,7,'1_9','Laporan_SKM_semester_2_20237.pdf'),
(182,9,'1_1','WhatsApp_Image_2024-04-23_at_11_26_53_(1).jpeg'),
(183,9,'1_1','WhatsApp_Image_2024-04-23_at_10_52_08.jpeg'),
(184,9,'1_1','WhatsApp_Image_2024-04-23_at_10_52_09_(3).jpeg'),
(185,11,'1_1','SOP.pdf'),
(186,11,'1_1','SOP1.pdf'),
(187,13,'1_1','1_1_1_b_REVISI_SK_Jenis_-_Jenis_Pelayanan_Dan_Kegiatan_Di_UPT_Puskesmas_Sekargadung_-_TERKENDALI.pdf'),
(188,11,'1_1','SOP2.pdf'),
(189,11,'1_6','PUBLIKASI_IKM_2023.pdf'),
(190,12,'1_3','WEBSITE_PETAHUNAN.jpg'),
(191,12,'1_2','PERTEMUAN_DI_RW_07.jpg'),
(192,12,'1_5','MAKLUMAT_PELAYANAN.jpg'),
(193,12,'1_6','Snapinsta_app_413971430_328341016743494_5727706181996877489_n_1080.jpg'),
(194,12,'1_7','Gambar_WhatsApp_2024-04-29_pukul_09_39_48_9e79ab85.jpg'),
(195,10,'1_1','1__SPP_Dukcapil_20241.pdf'),
(196,10,'1_2','2__Laporan_FKP_2021.pdf'),
(197,10,'1_3','1__Publikasi_SPP.pdf'),
(198,10,'1_4','2__Laporan_FKP_20211.pdf'),
(199,10,'1_5','3__Publikasi_Maklumat_Pelayanan.pdf'),
(200,10,'1_7','7_PUBLIKASI_SKM.pdf'),
(201,10,'1_6','LAPORAN_SKM_UPP_2023_DUKCAPIL.pdf'),
(202,10,'1_8','LAPORAN_SKM_UPP_2023_DUKCAPIL1.pdf'),
(203,10,'1_9','LAPORAN_SKM_UPP_2023_DUKCAPIL2.pdf'),
(204,14,'1_1','5__SK__STANDAR_PELAYANAN.pdf'),
(205,14,'1_1','5__SK__STANDAR_PELAYANAN1.pdf'),
(206,14,'1_2','Laporan_FKP_UPT__Puskesmas_Gadingrejo.pdf'),
(207,1,'1_1','STANDART_PELAYANAN_DPMPTSP.pdf'),
(208,11,'1_5','maklumat.jpg'),
(209,14,'1_5','Foto_Maklumat_Pelayanan.jpg'),
(210,1,'1_3','STANDART_PELAYANAN_WEBSITE.png'),
(211,14,'1_6','Laporan_identifikasi_keb__dan_harapan_UKM_2022_FIK.pdf'),
(212,14,'1_8','KORLINSEK_NOVEMBER_2023_REVISI.pdf'),
(213,1,'1_5','WhatsApp_Image_2024-04-29_at_10_28_20.jpeg'),
(214,1,'1_5','MAKLUMAT_PELAYANAN_(2).png'),
(215,1,'1_5','MAKLUMAT_PELAYANAN.png');

/*Table structure for table `buktidukungkonsul` */

DROP TABLE IF EXISTS `buktidukungkonsul`;

CREATE TABLE `buktidukungkonsul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `konsul_id` int(11) NOT NULL,
  `nomor` char(8) NOT NULL,
  `namafile` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `buktidukungkonsul` */

insert  into `buktidukungkonsul`(`id`,`konsul_id`,`nomor`,`namafile`) values 
(1,2,'5_1','SOP_PELAYANAN_PENGADUAN.pdf'),
(2,7,'5_1','Kotak_Saran.jpg'),
(3,2,'5_1','SK_TIM_PENANGANAN_PENGADUAN_2023.pdf'),
(4,2,'5_1','WhatsApp_Image_2024-04-24_at_10_00_47.jpeg'),
(5,2,'5_1','6_d_LAPORAN_MONITORING_DAN_EVALUASI_PENANGANAN_PENGADUAN_MASYARAKAT_DINKES_2023_SMT_1.pdf'),
(6,2,'5_2','WhatsApp_Image_2024-04-24_at_10_05_29.jpeg'),
(7,2,'5_2','WhatsApp_Image_2024-04-24_at_10_00_471.jpeg'),
(8,2,'5_2','front_office.jpeg'),
(9,2,'5_3','6_d_LAPORAN_MONITORING_DAN_EVALUASI_PENANGANAN_PENGADUAN_MASYARAKAT_DINKES_2023_SMT_11.pdf'),
(10,2,'5_1','imformasi_pengaduan.jpeg'),
(11,2,'5_1','informasi_layanan.jpeg'),
(12,2,'5_1','WhatsApp_Image_2024-04-24_at_11_02_53.jpeg'),
(13,2,'5_2','meja_pengaduan.jpeg'),
(14,2,'5_2','pengaduan_di_website.jpeg'),
(15,2,'5_2','imformasi_pengaduan1.jpeg'),
(16,2,'5_2','SOP_PELAYANAN_PENGADUAN1.pdf'),
(17,2,'5_2','pengaduan_di_website.jpg'),
(18,2,'5_3','DATA_PENGADUAN_SEMESTER_1_2023.pdf'),
(19,2,'5_3','LAPORAN_MONITORING_DAN_EVALUASI_PENANGANAN_PENGADUAN_MASYARAKAT_DINKES_2023_SMT_1.pdf'),
(20,2,'5_4','LAPORAN_MONITORING_DAN_EVALUASI_PENANGANAN_PENGADUAN_MASYARAKAT_DINKES_2023_SMT_11.pdf'),
(21,2,'5_1','MEDIA_SARANA_PENGADUAN.jpeg'),
(22,2,'5_1','SK_TIM_PENANGANAN_PENGADUAN_DINKES_2023.pdf'),
(23,2,'5_1','informasi_layanan1.jpeg'),
(24,2,'5_1','air_minum.png'),
(25,2,'5_1','kompensasi_pelayanan.jpeg'),
(26,2,'5_1','imformasi_pengaduan2.jpeg'),
(27,2,'5_2','imformasi_pengaduan3.jpeg'),
(28,2,'5_2','kompensasi_pelayanan1.jpeg'),
(29,2,'5_2','pengaduan_di_website1.jpeg'),
(30,2,'5_2','SOP_PELAYANAN_PENGADUAN2.pdf'),
(31,2,'5_2','pengaduan_di_website1.jpg'),
(32,2,'5_3','DATA_PENGADUAN_SEMESTER_1_20231.pdf'),
(33,2,'5_3','LAPORAN_MONITORING_DAN_EVALUASI_PENANGANAN_PENGADUAN_MASYARAKAT_DINKES_2023_SMT_12.pdf'),
(34,2,'5_4','DATA_PENGADUAN_SEMESTER_1_20232.pdf'),
(35,2,'5_4','LAPORAN_MONITORING_DAN_EVALUASI_PENANGANAN_PENGADUAN_MASYARAKAT_DINKES_2023_SMT_13.pdf'),
(36,2,'5_4','8_a_E-SAMBAT_PRINTSCREEN_2023.pdf'),
(37,2,'5_1','AIR_MINUM.png'),
(38,2,'5_1','DATA_PENGADUAN_SEMESTER_1_20233.pdf'),
(39,2,'5_1','INFORMASI_PENGADUAN.jpeg'),
(40,2,'5_1','KOTAK_SARAN.jpeg'),
(41,2,'5_1','INFORMASI_PETUGAS.jpeg'),
(42,2,'5_1','LAPORAN_MONITORING_DAN_EVALUASI_PENANGANAN_PENGADUAN_MASYARAKAT_DINKES_2023_SMT_14.pdf'),
(43,2,'5_2','INFORMASI_PENGADUAN1.jpeg'),
(44,2,'5_2','SC_PENGADUAN_DI_WEBSITE.jpeg'),
(45,2,'5_2','MEJA_PENGADUAN_DINKES.jpeg'),
(46,2,'5_2','SK_TIM_PENANGANAN_PENGADUAN_DINKES_20231.pdf'),
(47,2,'5_3','E-SAMBAT_PRINTSCREEN_2023.pdf'),
(48,2,'5_3','DATA_PENGADUAN_SEMESTER_1_20234.pdf'),
(49,2,'5_3','LAPORAN_MONITORING_DAN_EVALUASI_PENANGANAN_PENGADUAN_MASYARAKAT_DINKES_2023_SMT_15.pdf'),
(50,2,'5_4','DATA_PENGADUAN_SEMESTER_1_20235.pdf'),
(51,3,'5_1','WhatsApp_Image_2024-04-26_at_08_13_48_(2).jpeg'),
(52,3,'5_1','WhatsApp_Image_2024-04-26_at_10_48_34.jpeg'),
(53,3,'5_1','WhatsApp_Image_2024-04-26_at_10_34_49.jpeg'),
(54,3,'5_2','Barcode_Telah_diapload_dalam_Website.jpeg'),
(55,3,'5_2','Pengisian_Keluhan_secara_Elektronik_melalui_Barcode.jpeg'),
(56,3,'5_2','WhatsApp_Image_2024-04-26_at_08_13_48_(3).jpeg'),
(57,3,'5_2','WhatsApp_Image_2024-04-26_at_10_51_19.jpeg'),
(58,3,'5_2','7_REKAP_UMPAN_BALIK_DAN_KELUHAN_TH_2023_compressed.pdf'),
(59,3,'5_3','Hasil_dari_Pengaduan_dan_Tanggapan_di_Tempelkan.jpeg'),
(60,3,'5_3','7_REKAP_UMPAN_BALIK_DAN_KELUHAN_TH_2023_compressed1.pdf'),
(61,3,'5_3','Keluhan_dan_Tanggapan.png'),
(62,3,'5_3','Publikasi_Hasil_Tanggapan_Keluhan_Pada_Website.jpeg'),
(63,3,'5_3','BUKU_REKAPAN_UMPAN_BALIK_DAN_PENGADUAN.pdf'),
(64,3,'5_4','7_REKAP_UMPAN_BALIK_DAN_KELUHAN_TH_2023_compressed2.pdf'),
(65,5,'5_1','WhatsApp_Image_2024-04-23_at_11_26_53_(1).jpeg'),
(66,5,'5_2','WhatsApp_Image_2024-04-23_at_11_19_55.jpeg'),
(67,5,'5_1','WhatsApp_Image_2024-04-23_at_11_26_53.jpeg'),
(68,7,'5_1','buku_.jpg'),
(69,7,'5_1','kotak_saran.jpg'),
(70,7,'5_2','konsultasi.jpg'),
(71,8,'5_3','Snapinsta_app_419002609_221230257721244_7908932759927086597_n_1080.jpg'),
(72,6,'5_1','26__Dokumentasi_Konsultasi_Pengaduan.pdf'),
(73,6,'5_2','27__Dokumentasi_Konsultasi_Pengaduan.pdf'),
(74,6,'5_3','REKAP_Pengaduan_2023.pdf'),
(75,6,'5_4','REKAP_Pengaduan_20231.pdf'),
(76,7,'5_1','kotak_saran.jpg'),
(77,10,'5_1','air_minum.jpg'),
(78,10,'5_2','kotak_saran1.jpg'),
(79,10,'5_2','beranda_instagram.jpg'),
(80,10,'5_2','beranda_website.jpg'),
(81,10,'5_3','papan_informasi.jpg'),
(82,10,'5_4','Pengaduan_buku.jpg'),
(83,10,'5_4','isinya_pengaduan.jpg'),
(84,11,'5_1','Pengaduan_tiang_listrik_di_depan_rumah____lokasi_rt_003_rw_003_kel_sega.pdf'),
(85,11,'5_2','Pengaduan_tiang_listrik_di_depan_rumah____lokasi_rt_003_rw_003_kel_sega1.pdf'),
(86,11,'5_3','Pengaduan_tiang_listrik_di_depan_rumah____lokasi_rt_003_rw_003_kel_sega2.pdf');

/*Table structure for table `buktidukungprofsdm` */

DROP TABLE IF EXISTS `buktidukungprofsdm`;

CREATE TABLE `buktidukungprofsdm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profsdm_id` int(11) NOT NULL,
  `nomor` char(8) NOT NULL,
  `namafile` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `buktidukungprofsdm` */

insert  into `buktidukungprofsdm`(`id`,`profsdm_id`,`nomor`,`namafile`) values 
(1,4,'2_1','WhatsApp_Image_2024-03-20_at_10_58_54.jpeg'),
(2,4,'2_2','STANDAR_KOMPENSASI.jpg'),
(3,4,'2_2','SK_KOMPENSASI_.pdf'),
(4,4,'2_1','informasi_jadwal_layanan.jpeg'),
(5,4,'2_1','jadwal_layanan_pada_bulan_ramadhan.jpeg'),
(6,4,'2_1','Jadwal_Pelayanan.jpg'),
(7,4,'2_2','SK_KOMPENSASI_1.pdf'),
(8,4,'2_2','kompensasi_pelayanan.jpeg'),
(9,4,'2_2','STANDAR_KOMPENSASI1.jpg'),
(10,4,'2_5','Merah_Kuning_Modern_Bahaya_Merokok_Infographic.jpg'),
(11,4,'2_1','jadwal_layanan_pada_bulan_ramadhan1.jpeg'),
(12,4,'2_1','Jadwal_Pelayanan1.jpg'),
(13,4,'2_2','kompensasi_pelayanan1.jpeg'),
(14,4,'2_2','SK_KOMPENSASI_2.pdf'),
(15,4,'2_2','STANDAR_KOMPENSASI2.jpg'),
(16,4,'2_3','WhatsApp_Image_2024-04-25_at_18_33_26.jpeg'),
(17,4,'2_4','WhatsApp_Image_2024-04-25_at_18_33_261.jpeg'),
(18,4,'2_5','Merah_Kuning_Modern_Bahaya_Merokok_Infographic1.jpg'),
(19,4,'2_5','Blue_White_and_Gray_Geometric_Project_Proposal_Cover_A4_Document.png'),
(20,4,'2_1','JADWAL_PELAYANAN.jpg'),
(21,4,'2_1','JADWAL_PELAYANAN_PADA_BULAN_RAMADHAN.jpeg'),
(22,5,'2_1','SE__JAM_KERJA_BULAN_RAMADHAN_2024.pdf'),
(23,4,'2_2','SK_KOMPENSASI_3.pdf'),
(24,4,'2_2','BUKIT_KOMPENSASI.jpeg'),
(25,4,'2_2','STANDAR_KOMPENSASI3.jpg'),
(26,4,'2_2','2024042606235320240426031626sk_reward.pdf'),
(27,4,'2_3','SK_PEDOMAN_PEMBERIAN_REWARD_DAN_PUNISMENT.pdf'),
(28,4,'2_4','SK_PEDOMAN_PEMBERIAN_REWARD_DAN_PUNISMENT1.pdf'),
(29,4,'2_5','PELAYANAN_PRIMA.jpg'),
(30,4,'2_5','SERAGAM_PIN_ATRIBUT.jpeg'),
(31,4,'2_5','BUDAYA_5S.png'),
(32,5,'2_1','SE__JAM_KERJA_BULAN_RAMADHAN_2024.pdf'),
(33,5,'2_1','WhatsApp_Image_2024-04-26_at_09_37_03.jpeg'),
(34,5,'2_1','WhatsApp_Image_2024-04-26_at_08_13_55_(1).jpeg'),
(35,5,'2_2','2a__Cheklist_Kode_etik_perilaku_pegawai_-_Salin.pdf'),
(36,5,'2_2','2b__REKAPITULASI_PELAKSANAAN_PENERAPAN_KODE_ETIK_PEGAWAI_-_Salin.pdf'),
(37,5,'2_2','2c__Hasil_Evaluasi_dan_Tindak_Lanjut_pelaksanaan_Kode_etik_perilaku_pegawai.pdf'),
(38,5,'2_2','IMG-20240302-WA0017_-_Salin.jpg'),
(39,5,'2_2','IMG-20240302-WA0138.jpg'),
(40,5,'2_3','2a__Cheklist_Kode_etik_perilaku_pegawai.pdf'),
(41,5,'2_3','2b__REKAPITULASI_PELAKSANAAN_PENERAPAN_KODE_ETIK_PEGAWAI.pdf'),
(42,5,'2_3','IMG-20240302-WA0017.jpg'),
(43,5,'2_3','2c__Hasil_Evaluasi_dan_Tindak_Lanjut_pelaksanaan_Kode_etik_perilaku_pegawai1.pdf'),
(44,5,'2_3','IMG-20240302-WA01381.jpg'),
(45,5,'2_4','2a__Cheklist_Kode_etik_perilaku_pegawai1.pdf'),
(46,5,'2_4','2b__REKAPITULASI_PELAKSANAAN_PENERAPAN_KODE_ETIK_PEGAWAI1.pdf'),
(47,5,'2_4','2c__Hasil_Evaluasi_dan_Tindak_Lanjut_pelaksanaan_Kode_etik_perilaku_pegawai2.pdf'),
(48,5,'2_5','08_PERATURAN_INTERNAL_2022.pdf'),
(49,5,'2_5','WhatsApp_Image_2024-04-26_at_09_59_33.jpeg'),
(50,5,'2_5','WhatsApp_Image_2024-04-26_at_09_59_53.jpeg'),
(51,5,'2_5','WhatsApp_Image_2024-04-26_at_10_00_22.jpeg'),
(52,5,'2_5','WhatsApp_Image_2024-04-26_at_10_00_23.jpeg'),
(53,5,'2_1','SE__JAM_KERJA_BULAN_RAMADHAN_20241.pdf'),
(54,5,'2_1','WhatsApp_Image_2024-04-26_at_08_13_55_(1)1.jpeg'),
(55,5,'2_1','WhatsApp_Image_2024-04-26_at_09_37_031.jpeg'),
(56,5,'2_2','SK_PUNISMENT_REWARD_BG_PELAKSANA_DAN_KOMPENSASI_PENERIMA_LAYANAN.pdf'),
(57,5,'2_2','WhatsApp_Image_2024-04-26_at_09_43_30.jpeg'),
(58,5,'2_2','1__SK_KODE_ETIK_PERILAKU_PEGAWAI.pdf'),
(59,5,'2_3','2a__Cheklist_Kode_etik_perilaku_pegawai2.pdf'),
(60,5,'2_3','2b__REKAPITULASI_PELAKSANAAN_PENERAPAN_KODE_ETIK_PEGAWAI2.pdf'),
(61,5,'2_3','2c__Hasil_Evaluasi_dan_Tindak_Lanjut_pelaksanaan_Kode_etik_perilaku_pegawai_-_Salin.pdf'),
(62,5,'2_3','IMG-20240302-WA0017_-_Salin1.jpg'),
(63,5,'2_3','IMG-20240302-WA01382.jpg'),
(64,5,'2_4','2a__Cheklist_Kode_etik_perilaku_pegawai3.pdf'),
(65,5,'2_4','2b__REKAPITULASI_PELAKSANAAN_PENERAPAN_KODE_ETIK_PEGAWAI3.pdf'),
(66,5,'2_4','2c__Hasil_Evaluasi_dan_Tindak_Lanjut_pelaksanaan_Kode_etik_perilaku_pegawai3.pdf'),
(67,5,'2_5','08_PERATURAN_INTERNAL_20221.pdf'),
(68,5,'2_5','WhatsApp_Image_2024-04-26_at_09_59_331.jpeg'),
(69,5,'2_5','WhatsApp_Image_2024-04-26_at_09_59_531.jpeg'),
(70,5,'2_5','WhatsApp_Image_2024-04-26_at_10_00_221.jpeg'),
(71,5,'2_5','WhatsApp_Image_2024-04-26_at_10_00_231.jpeg'),
(72,7,'2_1','WhatsApp_Image_2024-04-23_at_11_26_53_(1).jpeg'),
(73,9,'2_5','petugas_pelayanan.jpg'),
(74,9,'2_5','petugas_pelayanan1.jpg'),
(75,10,'2_1','White_Blue_Bright_We_Are_Open_Cleaning_Service_Facebook_Post.jpg'),
(76,10,'2_2','Putih_dan_Emas_Modern_Elegan_Sertifikat_Penghargaan_Peserta_Seminar.jpg'),
(77,12,'2_1','flyer_jaga_lebaran_1.jpg'),
(78,12,'2_2','SK_KODE_PRILAKU_PEGAWAI_PUSKESMAS.pdf'),
(79,12,'2_3','SK_KODE_PRILAKU_PEGAWAI_PUSKESMAS1.pdf'),
(80,12,'2_4','SK_KODE_PRILAKU_PEGAWAI_PUSKESMAS2.pdf'),
(81,12,'2_5','SK_KODE_PRILAKU_PEGAWAI_PUSKESMAS3.pdf');

/*Table structure for table `buktidukungsarpras` */

DROP TABLE IF EXISTS `buktidukungsarpras`;

CREATE TABLE `buktidukungsarpras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sarpras_id` int(11) NOT NULL,
  `nomor` char(8) NOT NULL,
  `namafile` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=247 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `buktidukungsarpras` */

insert  into `buktidukungsarpras`(`id`,`sarpras_id`,`nomor`,`namafile`) values 
(1,4,'3_1','Dokumentasi_Tempat_Parkir_Dinas_Kesehatan_Kota_Pasuruan.pdf'),
(2,4,'3_2','Dokumentasi_Sarpras_Kelompok_Rentan_Dinas_Kesehatan_Kota_Pasuruan.pdf'),
(3,4,'3_2','WhatsApp_Image_2024-04-24_at_08_47_41.jpeg'),
(4,4,'3_2','Dokumentasi_Sarpras_Penunjang_Dinas_Kesehatan_Kota_Pasuruan.pdf'),
(5,4,'3_2','Dokumentasi_Fasilitas_Ruang_Tunggu_Dinas_Kesehatan_Kota_Pasuruan.pdf'),
(6,4,'3_2','Dokumentasi_Toilet_Dinas_Kesehatan_Kota_Pasuruan.pdf'),
(7,4,'3_3','Dokumentasi_Toilet_Dinas_Kesehatan_Kota_Pasuruan1.pdf'),
(8,4,'3_4','WhatsApp_Image_2024-04-24_at_08_52_14.jpeg'),
(9,4,'3_4','WhatsApp_Image_2024-04-24_at_08_51_00_(1).jpeg'),
(10,4,'3_4','WhatsApp_Image_2024-04-24_at_08_51_00.jpeg'),
(11,4,'3_4','WhatsApp_Image_2024-04-24_at_08_50_59_(1).jpeg'),
(12,4,'3_4','WhatsApp_Image_2024-04-24_at_08_50_59.jpeg'),
(13,4,'3_4','WhatsApp_Image_2024-04-24_at_08_48_50.jpeg'),
(14,4,'3_4','WhatsApp_Image_2024-04-24_at_08_47_411.jpeg'),
(15,4,'3_4','Screenshot_2024-04-24_085533.png'),
(16,4,'3_4','Screenshot_2024-04-24_085546.png'),
(17,4,'3_3','Screenshot_2024-04-24_085349.png'),
(18,4,'3_3','Screenshot_2024-04-24_085402.png'),
(19,4,'3_3','Screenshot_2024-04-24_085411.png'),
(20,4,'3_3','WhatsApp_Image_2024-04-24_at_08_50_591.jpeg'),
(21,4,'3_3','WhatsApp_Image_2024-04-24_at_08_51_00_(1)1.jpeg'),
(22,4,'3_4','WhatsApp_Image_2024-04-24_at_09_01_17.jpeg'),
(23,4,'3_4','WhatsApp_Image_2024-04-24_at_08_59_35.jpeg'),
(24,4,'3_4','WhatsApp_Image_2024-04-24_at_08_52_141.jpeg'),
(25,4,'3_4','kantin_dan_fotocopy_mpp.png'),
(26,4,'3_4','fotocopy_mpp.png'),
(27,4,'3_4','kotak_p3k_mpp.png'),
(28,4,'3_4','apar.png'),
(29,4,'3_4','kantin_mpp.png'),
(30,4,'3_4','mushola_mpp.jpeg'),
(31,4,'3_4','smoking_area_mpp.jpeg'),
(32,4,'3_4','kids_corner.png'),
(33,4,'3_3','toilet_mpp.jpeg'),
(34,4,'3_3','wastafel.png'),
(35,4,'3_3','sabun,_tisue_toilet.png'),
(36,5,'3_3','air_mengalir_dan_sabun_toilet.png'),
(37,4,'3_2','kursi_prioritas.jpeg'),
(38,4,'3_2','ac.png'),
(39,4,'3_2','air_minum.png'),
(40,4,'3_2','kotak_free_charger_hp.jpeg'),
(41,4,'3_2','mesin_antrian.jpeg'),
(42,4,'3_2','tv_mpp.jpeg'),
(43,4,'3_1','parkir_roda_2.png'),
(44,4,'3_1','parkir_roda_4.png'),
(45,4,'3_1','petugas_parkir.png'),
(46,4,'3_1','cctv.png'),
(47,4,'3_4','kursi_roda_mpp.png'),
(48,4,'3_4','parkir_prioritas.jpeg'),
(49,4,'3_4','pintu_masuk_mpp.png'),
(50,4,'3_4','kids_corner_dan_ruang_lakstasi.jpeg'),
(51,4,'3_4','toliet_prioritas.jpeg'),
(52,4,'3_4','pegangan_toliet_prioritas.jpeg'),
(53,4,'3_4','ruang_prioritas.jpeg'),
(54,4,'3_1','cctv1.png'),
(55,4,'3_1','petugas_parkir1.png'),
(56,4,'3_1','parkir_roda_21.png'),
(57,4,'3_1','parkir_roda_41.png'),
(58,4,'3_2','tersedia_koran.jpeg'),
(59,4,'3_2','kursi_prioritas1.jpeg'),
(60,4,'3_2','kotak_free_charger_hp1.jpeg'),
(61,4,'3_2','kursi_priortias2.jpeg'),
(62,4,'3_2','mesin_antrian1.jpeg'),
(63,4,'3_2','wifi.jpeg'),
(64,4,'3_2','ac1.png'),
(65,4,'3_2','tv_mpp1.jpeg'),
(66,4,'3_2','air_minum1.png'),
(67,4,'3_3','toliet_prioritas1.jpeg'),
(68,4,'3_3','pegangan_toliet_prioritas1.jpeg'),
(69,4,'3_3','toilet_mpp1.jpeg'),
(70,4,'3_3','sabun,_tisue_toilet1.png'),
(71,4,'3_3','wastafel1.png'),
(72,4,'3_3','air_mengalir_dan_sabun_toilet1.png'),
(73,4,'3_3','checlist_kebersihan_toilet.jpeg'),
(74,4,'3_4','parkir_prioritas1.jpeg'),
(75,4,'3_4','pintu_masuk_mpp1.png'),
(76,4,'3_4','kids_corner_dan_ruang_lakstasi1.jpeg'),
(77,4,'3_4','pegangan_toliet_prioritas2.jpeg'),
(78,4,'3_4','ruang_prioritas1.jpeg'),
(79,4,'3_4','kursi_roda_mpp1.png'),
(80,4,'3_4','apar1.png'),
(81,4,'3_4','cctv_dalam_ruang_pelayanan.jpeg'),
(82,4,'3_4','jalur_evakuasi.jpeg'),
(83,4,'3_4','fotocopy_mpp1.png'),
(84,4,'3_4','ruang_prioritas2.jpeg'),
(85,4,'3_4','smoking_area_mpp1.jpeg'),
(86,4,'3_4','kantin_mpp1.png'),
(87,4,'3_4','kotak_p3k_mpp1.png'),
(88,4,'3_4','mushola_mpp1.jpeg'),
(89,4,'3_4','WhatsApp_Image_2024-04-24_at_10_53_34.jpeg'),
(90,4,'3_5','informasi_layanan.jpeg'),
(91,4,'3_5','front_office.jpeg'),
(92,4,'3_5','tv_mpp2.jpeg'),
(93,4,'3_1','parkir_roda_22.png'),
(94,4,'3_1','parkir_roda_42.png'),
(95,4,'3_1','petugas_parkir2.png'),
(96,4,'3_1','cctv2.png'),
(97,4,'3_2','air_minum2.png'),
(98,4,'3_2','ac2.png'),
(99,4,'3_2','cctv_dalam_ruang_pelayanan1.jpeg'),
(100,4,'3_2','cetak_maklumat_pelayanan.jpeg'),
(101,4,'3_2','informasi_layanan1.jpeg'),
(102,4,'3_2','kotak_free_charger_hp2.jpeg'),
(103,4,'3_2','kursi_prioritas2.jpeg'),
(104,4,'3_2','mesin_antrian2.jpeg'),
(105,4,'3_2','tersedia_koran1.jpeg'),
(106,4,'3_2','wifi1.jpeg'),
(107,4,'3_2','tv_mpp3.jpeg'),
(108,4,'3_3','sabun,_tisue_toilet2.png'),
(109,4,'3_3','toilet_mpp2.jpeg'),
(110,4,'3_3','air_mengalir_dan_sabun_toilet2.png'),
(111,4,'3_3','toliet_prioritas2.jpeg'),
(112,4,'3_3','checlist_kebersihan_toilet1.jpeg'),
(113,4,'3_4','cetak_maklumat_pelayanan1.jpeg'),
(114,4,'3_4','kids_corner1.png'),
(115,4,'3_4','kursi_prioritas3.jpeg'),
(116,4,'3_4','kursi_priortias21.jpeg'),
(117,4,'3_4','parkir_prioritas2.jpeg'),
(118,4,'3_4','kursi_roda_mpp2.png'),
(119,4,'3_4','pegangan_toliet_prioritas3.jpeg'),
(120,4,'3_4','ruang_prioritas3.jpeg'),
(121,4,'3_4','parkir_roda_43.png'),
(122,4,'3_4','pintu_masuk_mpp2.png'),
(123,4,'3_4','cctv_dalam_ruang_pelayanan2.jpeg'),
(124,4,'3_4','apar2.png'),
(125,4,'3_4','air_minum3.png'),
(126,4,'3_4','jalur_evakuasi1.jpeg'),
(127,4,'3_4','fotocopy_mpp2.png'),
(128,4,'3_4','kids_corner_dan_ruang_lakstasi2.jpeg'),
(129,4,'3_4','kantin_mpp2.png'),
(130,4,'3_4','mushola_mpp2.jpeg'),
(131,4,'3_4','kids_corner2.png'),
(132,4,'3_4','WhatsApp_Image_2024-04-24_at_10_53_341.jpeg'),
(133,4,'3_4','kotak_p3k_mpp2.png'),
(134,4,'3_4','titik_kumpul.jpeg'),
(135,4,'3_4','smoking_area_mpp2.jpeg'),
(136,4,'3_5','front_office1.jpeg'),
(137,4,'3_5','informasi_layanan2.jpeg'),
(138,4,'3_5','WhatsApp_Image_2023-07-10_at_09_11_01.jpeg'),
(139,4,'3_1','PARKIR_PRIORITAS.jpeg'),
(140,4,'3_1','CCTV.png'),
(141,4,'3_1','PARKIR_RODA_2.png'),
(142,4,'3_1','PARKIR_RODA_4.png'),
(143,4,'3_1','PETUGAS_PARKIR.png'),
(144,4,'3_2','ac3.png'),
(145,4,'3_2','kotak_free_charger_hp3.jpeg'),
(146,4,'3_2','air_minum4.png'),
(147,4,'3_2','kursi_prioritas4.jpeg'),
(148,4,'3_2','kursi_tunggu.png'),
(149,4,'3_2','mesin_antrian3.jpeg'),
(150,4,'3_2','tv_mpp4.jpeg'),
(151,4,'3_2','tersedia_koran2.jpeg'),
(152,4,'3_2','wifi2.jpeg'),
(153,4,'3_3','air_mengalir_dan_sabun_toilet3.png'),
(154,4,'3_3','checlist_kebersihan_toilet2.jpeg'),
(155,4,'3_3','sabun,_tisue_toilet3.png'),
(156,4,'3_3','toilet_mpp3.jpeg'),
(157,4,'3_4','KURSI_PRIORITAS.jpeg'),
(158,4,'3_4','SK_PELAYANAN_PRIORITAS.pdf'),
(159,4,'3_4','KURSI_TUNGGU_PRIIRITAS.jpeg'),
(160,4,'3_4','KURSI_RODA.png'),
(161,4,'3_4','PARKIR_PRIORITAS1.jpeg'),
(162,4,'3_4','PEGANGAN_DI_TOILET_PRIORITAS.jpeg'),
(163,4,'3_4','PELAYANAN_PRIORITAS.jpeg'),
(164,4,'3_4','TOLIET_PRIORITAS.jpeg'),
(165,4,'3_4','cctv_dalam_ruang_pelayanan3.jpeg'),
(166,4,'3_4','fotocopy_mpp3.png'),
(167,4,'3_4','kids_corner_dan_ruang_lakstasi3.jpeg'),
(168,4,'3_4','kantin_mpp3.png'),
(169,4,'3_4','kids_corner3.png'),
(170,4,'3_4','mushola_mpp3.jpeg'),
(171,4,'3_4','smoking_area_mpp3.jpeg'),
(172,4,'3_4','tempat_sampah.jpeg'),
(173,4,'3_4','titik_kumpul1.jpeg'),
(174,4,'3_5','front_office2.jpeg'),
(175,4,'3_5','petugas_front_office.jpeg'),
(176,5,'3_1','WhatsApp_Image_2024-04-26_at_10_09_55_(2).jpeg'),
(177,5,'3_1','WhatsApp_Image_2024-04-26_at_10_16_39.jpeg'),
(178,5,'3_1','WhatsApp_Image_2024-04-26_at_10_16_58.jpeg'),
(179,5,'3_1','WhatsApp_Image_2024-04-26_at_10_18_52_(1).jpeg'),
(180,5,'3_1','WhatsApp_Image_2024-04-26_at_10_17_06.jpeg'),
(181,5,'3_3','WhatsApp_Image_2024-04-26_at_10_21_25.jpeg'),
(182,5,'3_2','WhatsApp_Image_2024-04-26_at_10_21_251.jpeg'),
(183,5,'3_2','WhatsApp_Image_2024-04-26_at_10_21_26_(2).jpeg'),
(184,5,'3_2','WhatsApp_Image_2024-04-26_at_10_21_26.jpeg'),
(185,5,'3_2','WhatsApp_Image_2024-04-26_at_10_22_40.jpeg'),
(186,5,'3_2','WhatsApp_Image_2024-04-26_at_10_48_24.jpeg'),
(187,5,'3_3','air_mengalir_dan_sabun_toilet.png'),
(188,5,'3_3','WhatsApp_Image_2024-04-26_at_10_23_49.jpeg'),
(189,5,'3_3','WhatsApp_Image_2024-04-26_at_10_24_56.jpeg'),
(190,5,'3_4','WhatsApp_Image_2024-04-26_at_10_21_26_(1).jpeg'),
(191,5,'3_4','WhatsApp_Image_2024-04-26_at_10_21_261.jpeg'),
(192,5,'3_4','WhatsApp_Image_2024-04-26_at_10_23_491.jpeg'),
(193,5,'3_4','WhatsApp_Image_2024-04-26_at_10_24_07.jpeg'),
(194,5,'3_4','WhatsApp_Image_2024-04-26_at_10_27_37.jpeg'),
(195,5,'3_4','WhatsApp_Image_2024-04-26_at_10_24_071.jpeg'),
(196,5,'3_4','WhatsApp_Image_2024-04-26_at_10_25_28.jpeg'),
(197,5,'3_4','WhatsApp_Image_2024-04-26_at_10_29_16_(1).jpeg'),
(198,5,'3_4','WhatsApp_Image_2024-04-26_at_10_29_29.jpeg'),
(199,5,'3_4','WhatsApp_Image_2024-04-26_at_10_29_44.jpeg'),
(200,5,'3_5','WhatsApp_Image_2024-04-26_at_10_33_08_(1).jpeg'),
(201,5,'3_5','WhatsApp_Image_2024-04-26_at_10_34_49.jpeg'),
(202,5,'3_5','WhatsApp_Image_2024-04-26_at_10_37_20.jpeg'),
(203,5,'3_5','WhatsApp_Image_2024-04-26_at_10_39_18.jpeg'),
(204,7,'3_1','WhatsApp_Image_2024-04-23_at_10_52_08_(1).jpeg'),
(205,7,'3_1','WhatsApp_Image_2024-04-23_at_10_52_09_(2).jpeg'),
(206,7,'3_2','WhatsApp_Image_2024-04-23_at_10_52_09_(1).jpeg'),
(207,7,'3_2','WhatsApp_Image_2024-04-23_at_10_52_10.jpeg'),
(208,7,'3_3','WhatsApp_Image_2024-04-23_at_10_52_09.jpeg'),
(209,9,'3_1','parkir.jpg'),
(210,12,'3_3','toilet.jpg'),
(211,9,'3_1','parkir1.jpg'),
(212,9,'3_2','TV.jpg'),
(213,9,'3_3','toilet1.jpg'),
(214,9,'3_4','ruang.jpg'),
(215,9,'3_4','ruang1.jpg'),
(216,12,'3_4','ruang_tunggu.jpg'),
(217,9,'3_5','ruang2.jpg'),
(218,9,'3_5','buku_.jpg'),
(219,9,'3_5','ruang3.jpg'),
(220,9,'3_5','buku_1.jpg'),
(221,10,'3_1','Gambar_WhatsApp_2024-04-29_pukul_09_59_36_98cde189.jpg'),
(222,10,'3_3','Gambar_WhatsApp_2024-04-29_pukul_10_01_24_11e20a80.jpg'),
(223,10,'3_5','RUANG_PELAYANAN_KELURAHAN.jpg'),
(224,9,'3_5','meja.jpg'),
(225,9,'3_5','buku_2.jpg'),
(226,9,'3_2','TV1.jpg'),
(227,9,'3_2','ruang4.jpg'),
(228,8,'3_1','Dokumentasi_Tempat_Parkir.pdf'),
(229,12,'3_1','parkir.jpeg'),
(230,12,'3_2','ruang_tunggu.jpg'),
(231,12,'3_2','air_minum.jpg'),
(232,12,'3_2','CCTV_dan_TV.jpg'),
(233,12,'3_2','hotspot.jpg'),
(234,12,'3_3','toilet.jpg'),
(235,12,'3_3','tissue_dan_wastafel.jpg'),
(236,12,'3_4','kursi_roda.jpg'),
(237,12,'3_4','akses_pintu.jpg'),
(238,12,'3_4','arena_bermain.jpg'),
(239,12,'3_4','ruang_laktasi.jpg'),
(240,12,'3_4','tempat_duduk_prioritas.jpg'),
(241,12,'3_4','ruang_laktasi1.jpg'),
(242,12,'3_4','CCTV_dan_TV1.jpg'),
(243,12,'3_4','musholla.jpg'),
(244,12,'3_4','titik_kumpul.jpg'),
(245,12,'3_4','APAR.jpg'),
(246,12,'3_5','Front_Office.jpg');

/*Table structure for table `buktidukungsipp` */

DROP TABLE IF EXISTS `buktidukungsipp`;

CREATE TABLE `buktidukungsipp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sipp_id` int(11) NOT NULL,
  `nomor` char(8) NOT NULL,
  `namafile` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `buktidukungsipp` */

insert  into `buktidukungsipp`(`id`,`sipp_id`,`nomor`,`namafile`) values 
(1,2,'4_1','WhatsApp_Image_2024-04-24_at_09_47_25.jpeg'),
(2,2,'4_3','WhatsApp_Image_2024-04-24_at_09_47_251.jpeg'),
(3,2,'4_3','WhatsApp_Image_2024-04-24_at_09_50_34.jpeg'),
(4,2,'4_4','SURAT_MPP_DIGITAL.pdf'),
(5,2,'4_1','mpp_digital.jpeg'),
(6,2,'4_3','sipnakes.jpeg'),
(7,2,'4_3','WhatsApp_Image_2024-04-25_at_15_42_48.jpeg'),
(8,2,'4_1','WhatsApp_Image_2024-04-25_at_18_09_11.jpeg'),
(9,2,'4_2','WhatsApp_Image_2024-04-25_at_18_19_04.jpeg'),
(10,2,'4_3','WhatsApp_Image_2024-04-25_at_18_09_111.jpeg'),
(11,2,'4_3','Screenshot_2024-04-25_154228.png'),
(12,2,'4_4','SURAT_MPP_DIGITAL1.pdf'),
(13,2,'4_4','SURAT_TERKAIT_STR_DAN_SIP_KOTA_PASURUAN.pdf'),
(14,2,'4_1','MPP_DIGITAL.jpeg'),
(15,2,'4_1','MPPD.jpeg'),
(16,2,'4_1','SIPNAKES.png'),
(17,2,'4_2','SKM_DI_MPP_DIGITAL.jpeg'),
(18,2,'4_2','SPAN_LAPOR_DI_MPP_DIGITAL.jpeg'),
(19,2,'4_3','MPP_DIGITAL.png'),
(20,2,'4_3','SIPNAKES1.png'),
(21,2,'4_4','PENGEMBANGAN_SIPNAKES_2023.pdf'),
(22,3,'4_1','Publikasi_Hasil_Tanggapan_Keluhan_Pada_Website.jpeg'),
(23,3,'4_1','WhatsApp_Image_2024-04-26_at_08_13_48_(3).jpeg'),
(24,3,'4_1','WhatsApp_Image_2024-04-26_at_08_13_56_(1).jpeg'),
(25,3,'4_1','WhatsApp_Image_2024-04-26_at_10_35_11.jpeg'),
(26,3,'4_2','WhatsApp_Image_2024-04-27_at_07_32_08.jpeg'),
(27,3,'4_2','WhatsApp_Image_2024-04-26_at_08_11_01.jpeg'),
(28,3,'4_2','WhatsApp_Image_2024-04-26_at_08_12_22.jpeg'),
(29,3,'4_2','Laporan_SKM_semester_2_2023.pdf'),
(30,3,'4_3','WhatsApp_Image_2024-04-26_at_08_11_01_(1).jpeg'),
(31,3,'4_3','WhatsApp_Image_2024-04-26_at_08_19_05.jpeg'),
(32,3,'4_4','Laporan_SKM_Semester_2_2023_compressed.pdf'),
(33,3,'4_3','Publikasi_Hasil_Tanggapan_Keluhan_Pada_Website1.jpeg'),
(34,5,'4_1','WhatsApp_Image_2024-04-23_at_11_19_55.jpeg'),
(35,8,'4_1','Gambar_WhatsApp_2024-04-29_pukul_10_08_00_46c87273.jpg'),
(36,8,'4_2','Gambar_WhatsApp_2024-04-29_pukul_10_08_00_46c872731.jpg'),
(37,8,'4_4','Gambar_WhatsApp_2024-04-29_pukul_10_10_07_4c4feae4.jpg'),
(38,10,'4_1','beranda_website.jpg'),
(39,10,'4_1','beranda_instagram.jpg'),
(40,6,'4_1','Dokumentasi_SIPP_Elektronik.pdf'),
(41,6,'4_2','Dokumentasi_SIPPN.pdf'),
(42,6,'4_3','Screenshot_SIPPN.jpeg'),
(43,10,'4_2','Laporan_identifikasi_keb__dan_harapan_UKM_2022_FIK.pdf'),
(44,10,'4_2','5__SK__STANDAR_PELAYANAN.pdf'),
(45,10,'4_2','SK_KODE_PRILAKU_PEGAWAI_PUSKESMAS.pdf'),
(46,10,'4_3','beranda_instagram1.jpg'),
(47,10,'4_3','beranda_website1.jpg'),
(48,10,'4_4','beranda_instagram2.jpg'),
(49,10,'4_4','beranda_website2.jpg'),
(50,10,'4_1','papan_informasi.jpg');

/*Table structure for table `buktidukungtambahan` */

DROP TABLE IF EXISTS `buktidukungtambahan`;

CREATE TABLE `buktidukungtambahan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tambahan_id` int(11) NOT NULL,
  `nomor` char(8) NOT NULL,
  `namafile` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `buktidukungtambahan` */

insert  into `buktidukungtambahan`(`id`,`tambahan_id`,`nomor`,`namafile`) values 
(1,2,'6_1','aplikasi_antrian_pengguna_layanan.jpeg'),
(2,2,'6_1','mesin_antrian.jpeg'),
(3,2,'7_1','aplikasi_antrian_pengguna_layanan1.jpeg'),
(4,2,'7_1','aplikasi_e-antrian.jpeg'),
(5,2,'7_1','karcis_antrian.jpeg'),
(6,2,'7_1','mesin_antrian1.jpeg'),
(7,2,'7_1','tampilan_urutan_antrian.jpeg'),
(8,3,'7_1','ANTRIAN_ONLINE_PKM_TRAJENG_I.jpeg'),
(9,3,'7_1','ANTRIAN_ONLINE_PKM_TRAJENG.jpeg'),
(10,3,'7_1','Sticker_Sosialisasi_Antrian_Online_BPJS.jpeg'),
(11,3,'7_1','WhatsApp_Image_2024-04-26_at_11_08_24_(2).jpeg'),
(12,5,'7_1','WhatsApp_Image_2024-04-23_at_11_32_07.jpeg'),
(13,6,'7_1','SISTEM_ANTRIAN.pdf');

/*Table structure for table `formulir3` */

DROP TABLE IF EXISTS `formulir3`;

CREATE TABLE `formulir3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `opd_id` int(11) NOT NULL,
  `tahun` int(4) NOT NULL,
  `layanan1` int(1) NOT NULL,
  `layanan2` int(1) NOT NULL,
  `layanan3` int(1) NOT NULL,
  `layanan4` int(1) NOT NULL,
  `sdm1` int(1) NOT NULL,
  `sdm2` int(1) NOT NULL,
  `sdm3` int(1) NOT NULL,
  `sarpras1` int(1) NOT NULL,
  `sarpras2` int(1) NOT NULL,
  `sarpras3` int(1) NOT NULL,
  `sarpras4` int(1) NOT NULL,
  `si1` int(1) NOT NULL,
  `si2` int(1) NOT NULL,
  `konsul1` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `formulir3` */

insert  into `formulir3`(`id`,`opd_id`,`tahun`,`layanan1`,`layanan2`,`layanan3`,`layanan4`,`sdm1`,`sdm2`,`sdm3`,`sarpras1`,`sarpras2`,`sarpras3`,`sarpras4`,`si1`,`si2`,`konsul1`) values 
(1,32,2024,5,5,5,5,0,0,0,0,0,0,0,0,0,0),
(2,32,2024,5,5,5,5,0,0,0,0,0,0,0,0,0,0),
(3,32,2024,5,5,5,5,0,0,0,0,0,0,0,0,0,0),
(4,32,2024,5,5,5,5,0,0,0,0,0,0,0,0,0,0),
(5,32,2024,4,4,4,4,0,0,0,0,0,0,0,0,0,0),
(6,32,2024,4,4,4,4,0,0,0,0,0,0,0,0,0,0),
(7,32,2024,4,4,4,4,0,0,0,0,0,0,0,0,0,0),
(8,32,2024,4,4,4,4,0,0,0,0,0,0,0,0,0,0),
(9,32,2024,4,4,4,4,0,0,0,0,0,0,0,0,0,0),
(10,32,2024,4,4,4,4,0,0,0,0,0,0,0,0,0,0),
(11,34,2024,1,4,5,4,0,1,2,2,2,1,0,0,4,2),
(12,39,2024,3,0,0,0,0,0,0,0,0,0,0,0,0,0),
(13,36,2024,4,4,4,4,4,4,4,5,5,5,5,5,5,5);

/*Table structure for table `inovasi` */

DROP TABLE IF EXISTS `inovasi`;

CREATE TABLE `inovasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `tahun` int(11) DEFAULT NULL,
  `inovasi_yang_ada` varchar(5) DEFAULT NULL,
  `judul_inovasi` varchar(255) DEFAULT NULL,
  `inisiatif_inovasi` varchar(255) DEFAULT NULL,
  `jangka_waktu_inovasi` varchar(15) DEFAULT NULL,
  `waktu_pelaksanaan_inovasi` varchar(255) DEFAULT NULL,
  `ikut_serta_kompeisi_inovasi` varchar(5) DEFAULT NULL,
  `penghargaan_inovasi` text DEFAULT NULL,
  `tersedia_sdm_inovasi` varchar(5) DEFAULT NULL,
  `sdm_mendukung_inovasi` varchar(5) DEFAULT NULL,
  `bentuk_sumber_daya_pendukung` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `inovasi` */

insert  into `inovasi`(`id`,`user_id`,`tahun`,`inovasi_yang_ada`,`judul_inovasi`,`inisiatif_inovasi`,`jangka_waktu_inovasi`,`waktu_pelaksanaan_inovasi`,`ikut_serta_kompeisi_inovasi`,`penghargaan_inovasi`,`tersedia_sdm_inovasi`,`sdm_mendukung_inovasi`,`bentuk_sumber_daya_pendukung`) values 
(1,56,2024,NULL,'',NULL,NULL,'',NULL,NULL,NULL,NULL,NULL),
(2,6,2024,'Ya','SIPNAKES(SISTEM INFORMASI PERIZINAN TENAGA KESEHATAN); PELANGI (PENGAKTIFAN KARTU KIS BPJS WALAUPUN MEMILIKI TUNGGAKAN PREMI)','Ya, masih proses pembelajaran. Sebutkan bukti dukung proses pembelajaran (hasil studi tiru, referensi, seminar, transfer knowledge, dll)','>= 1 tahun','SIPNAKES (2020); PELANGI (2022)','Ya','Instansi (lokal)','Ya','Ya','Alokasi anggaran terkait keberlanjutan inovasi, Sarana dan prasarana pendukung keberlanjutan inovasi, SDM yang mendukung keberlanjutan inovasi'),
(3,15,2024,'Ya','','Ya, masih proses pembelajaran. Sebutkan bukti dukung proses pembelajaran (hasil studi tiru, referensi, seminar, transfer knowledge, dll)','>= 1 tahun','','Ya','Instansi (lokal)','Ya','Ya','Alokasi anggaran terkait keberlanjutan inovasi, Sarana dan prasarana pendukung keberlanjutan inovasi, SDM yang mendukung keberlanjutan inovasi'),
(5,50,2024,'Tidak','','Ya, masih proses pembelajaran. Sebutkan bukti dukung proses pembelajaran (hasil studi tiru, referensi, seminar, transfer knowledge, dll)',NULL,'',NULL,NULL,NULL,NULL,NULL),
(6,3,2024,'Ya','Peti Kemas (Pelayanan Terintegrasi Akta Kematian dengan RSUD)','Tidak','>= 1 tahun','Peti Kemas (Pelayanan Terintegrasi Akta Kematian dengan RSUD)','Ya','Instansi (lokal)','Ya','Ya','Alokasi anggaran terkait keberlanjutan inovasi, Sarana dan prasarana pendukung keberlanjutan inovasi'),
(7,53,2024,'Tidak','','Tidak',NULL,'','Tidak',NULL,'Tidak','Tidak',NULL),
(8,32,2024,'Tidak','','Ya, masih proses pembelajaran. Sebutkan bukti dukung proses pembelajaran (hasil studi tiru, referensi, seminar, transfer knowledge, dll)','>= 1 tahun','','Tidak',NULL,'Ya','Ya','Alokasi anggaran terkait keberlanjutan inovasi, Sarana dan prasarana pendukung keberlanjutan inovasi, SDM yang mendukung keberlanjutan inovasi'),
(9,14,2024,NULL,'',NULL,NULL,'',NULL,NULL,NULL,NULL,NULL),
(10,8,2024,'Ya','Pelangi Sakina : Peduli dan Sayangi Ibu Stop Angka Kematian Ibu dan Anak, dan Semar Gendut : Senin Selasa Minggu Pertama ','Ya, masih proses pembelajaran. Sebutkan bukti dukung proses pembelajaran (hasil studi tiru, referensi, seminar, transfer knowledge, dll)','>= 1 tahun','Puskesmas Gadingrejo','Ya','Instansi (lokal)','Ya','Ya','Alokasi anggaran terkait keberlanjutan inovasi, Sarana dan prasarana pendukung keberlanjutan inovasi, SDM yang mendukung keberlanjutan inovasi');

/*Table structure for table `kepel` */

DROP TABLE IF EXISTS `kepel`;

CREATE TABLE `kepel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `tahun` int(11) DEFAULT NULL,
  `dibuat_standar_pelayanan` varchar(5) DEFAULT NULL,
  `jumlah_pelayanan_dimiliki` int(2) DEFAULT NULL,
  `jumlah_pelayanan_dibuat` int(2) DEFAULT NULL,
  `pelayanan_memenuhi_14komponen` varchar(5) DEFAULT NULL,
  `pelayanan_melibatkan_masyarakat` varchar(5) DEFAULT NULL,
  `pelayanan_telah_ditetapkan` varchar(5) DEFAULT NULL,
  `pelayanan_monev` varchar(5) DEFAULT NULL,
  `sp_melibatkan_masyarakat` varchar(5) DEFAULT NULL,
  `unsur_masyarakat_dilibatkan` text DEFAULT NULL,
  `sp_dipublikasi` varchar(5) DEFAULT NULL,
  `sp_dipublikasi_6komponen_service_delivery` varchar(5) DEFAULT NULL,
  `media_publikasi` text DEFAULT NULL,
  `pernyataan_peninjauan_ulang` varchar(128) DEFAULT NULL,
  `maklumat_pelayanan_ditetapkan` varchar(5) DEFAULT NULL,
  `maklumat_pelayanan_sesuai_pp` varchar(5) DEFAULT NULL,
  `maklumat_pelayanan_dipublikasi` varchar(5) DEFAULT NULL,
  `media_publikasi_maklumat_pelayanan` varchar(15) DEFAULT NULL,
  `melaksanakan_skm` varchar(5) DEFAULT NULL,
  `berapakali_setahun_skm` int(5) DEFAULT NULL,
  `nilai_rata_rata_skm` varchar(10) DEFAULT NULL,
  `skm_sesuai_permenpanrb` varchar(5) DEFAULT NULL,
  `skm_dipublikasi` varchar(5) DEFAULT NULL,
  `media_publikasi_skm_menggunakan` varchar(15) DEFAULT NULL,
  `hasil_skm_ditindaklanjuti` varchar(5) DEFAULT NULL,
  `jumlah_media_publikasi_skm` text DEFAULT NULL,
  `rencana_tindak_lanjut_skm` varchar(5) DEFAULT NULL,
  `persentase_rencana_tindaklanjut_skm_1tahun` int(3) DEFAULT NULL,
  `laporan_tindaklanjut` varchar(5) DEFAULT NULL,
  `apakah_hasil_skm_ditindaklanjuti` varchar(5) DEFAULT NULL,
  `berapa_lama_tindaklanjut_skm` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `kepel` */

insert  into `kepel`(`id`,`user_id`,`tahun`,`dibuat_standar_pelayanan`,`jumlah_pelayanan_dimiliki`,`jumlah_pelayanan_dibuat`,`pelayanan_memenuhi_14komponen`,`pelayanan_melibatkan_masyarakat`,`pelayanan_telah_ditetapkan`,`pelayanan_monev`,`sp_melibatkan_masyarakat`,`unsur_masyarakat_dilibatkan`,`sp_dipublikasi`,`sp_dipublikasi_6komponen_service_delivery`,`media_publikasi`,`pernyataan_peninjauan_ulang`,`maklumat_pelayanan_ditetapkan`,`maklumat_pelayanan_sesuai_pp`,`maklumat_pelayanan_dipublikasi`,`media_publikasi_maklumat_pelayanan`,`melaksanakan_skm`,`berapakali_setahun_skm`,`nilai_rata_rata_skm`,`skm_sesuai_permenpanrb`,`skm_dipublikasi`,`media_publikasi_skm_menggunakan`,`hasil_skm_ditindaklanjuti`,`jumlah_media_publikasi_skm`,`rencana_tindak_lanjut_skm`,`persentase_rencana_tindaklanjut_skm_1tahun`,`laporan_tindaklanjut`,`apakah_hasil_skm_ditindaklanjuti`,`berapa_lama_tindaklanjut_skm`) values 
(1,2,2024,'Ya',0,0,NULL,NULL,'Ya',NULL,NULL,NULL,'Ya','Ya','Media Cetak / Non Elektronik, Media Elektronik, Media Sosial, Website',NULL,'Ya','Ya','Ya','Elektronik, Non','Ya',2,'91,77 Seme','Ya','Ya','Elektronik, Non','Ya','Media Cetak / Non Elektronik,Media Elektronik,Media Sosial,Website','Ya',0,'Ya','Ya','6 bulan setelah laporan SKM terbit'),
(4,35,2024,'Ya',0,0,'Tidak','Ya','Ya','Tidak',NULL,NULL,'Ya','Tidak','Aplikasi yang bisa diunduh',NULL,'Ya','Ya','Tidak','Elektronik','Tidak',1,'','Tidak','Tidak','Elektronik','Ya','Aplikasi yang bisa diunduh','Tidak',0,'Tidak','Ya','1 bulan setelah laporan SKM terbit'),
(5,56,2024,'Ya',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL),
(6,6,2024,'Ya',2,2,'Ya','Ya','Ya','Ya','Ya','Masyarakat pengguna layanan, Instansi Terkait, Organisasi Masyarakat Sipil','Ya','Ya','Media Cetak / Non Elektronik, Media Elektronik, Website','Dilakukan peninjauan ulang 1 tahun atau lebih cepat terhadap seluruh jenis layanan','Ya','Ya','Ya','Elektronik, Non','Ya',2,'91,18 peri','Ya','Ya','Elektronik, Non','Ya','Media Cetak / Non Elektronik,Media Elektronik,Website','Ya',100,'Ya',NULL,'1 bulan setelah laporan SKM terbit'),
(7,15,2024,'Ya',15,15,'Ya','Ya','Ya','Ya','Ya','Masyarakat pengguna layanan, Instansi Terkait, Media Massa','Ya','Ya','Media Cetak / Non Elektronik, Media Elektronik, Website','Dilakukan peninjauan ulang 1 tahun atau lebih cepat terhadap sebagian jenis layanan','Ya','Ya',NULL,'Elektronik, Non','Ya',2,'TW II 2023','Ya','Ya','Elektronik, Non','Ya','Media Cetak / Non Elektronik,Media Elektronik,Media Sosial,Website','Ya',100,'Ya','Ya','6 bulan setelah laporan SKM terbit'),
(9,50,2024,'Tidak',3,3,'Tidak','Ya','Ya','Tidak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL),
(10,3,2024,'Ya',20,20,'Ya','Ya','Ya','Ya','Ya','Masyarakat pengguna layanan, Ahli/Praktisi/Akademisi, Instansi Terkait, Organisasi Masyarakat Sipil, Media Massa',NULL,'Ya','Media Cetak / Non Elektronik, Media Elektronik, Media Sosial, Website, SIPP Nasional','Dilakukan peninjauan ulang 1 tahun atau lebih cepat terhadap sebagian jenis layanan','Ya','Ya','Ya','Elektronik, Non','Ya',1,'Nilai IKM ','Ya','Ya','Elektronik, Non','Ya','Media Cetak / Non Elektronik,Media Elektronik,Media Sosial,Website','Ya',100,'Ya','Ya','1 bulan setelah laporan SKM terbit'),
(11,53,2024,'Ya',4,4,'Tidak','Tidak','Ya','Tidak','Tidak',NULL,'Tidak','Tidak',NULL,'Tidak dilaksanakan peninjauan ulang secara berkala terhadap Standar Pelayanan','Ya','Ya','Ya','Elektronik, Non','Ya',1,'83,50','Ya','Ya','Elektronik, Non','Tidak',NULL,'Tidak',0,'Tidak','Tidak',NULL),
(12,32,2024,'Ya',13,31,'Ya','Ya','Ya','Ya','Ya','Masyarakat pengguna layanan','Ya','Ya','Media Sosial, Website','Tidak dilaksanakan peninjauan ulang secara berkala terhadap Standar Pelayanan','Ya','Ya','Ya','Elektronik','Ya',12,'94.45%','Ya','Ya','Elektronik','Ya','Media Sosial','Tidak',0,'Tidak','Tidak',NULL),
(13,14,2024,NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL),
(14,8,2024,'Ya',14,14,'Ya','Ya','Ya','Ya','Ya','Masyarakat pengguna layanan, Ahli/Praktisi/Akademisi, Instansi Terkait, Organisasi Masyarakat Sipil','Ya','Tidak','Media Cetak / Non Elektronik, Media Elektronik, Media Sosial, Website, Aplikasi yang bisa diunduh','Dilakukan pininjauan ulang 3 tahun atau lebih terhadap seluruh jenis layanan','Ya','Ya','Ya','Elektronik, Non','Ya',1,'90','Ya','Ya','Elektronik, Non','Tidak',NULL,'Ya',75,'Ya','Ya','1 bulan setelah laporan SKM terbit');

/*Table structure for table `konsul` */

DROP TABLE IF EXISTS `konsul`;

CREATE TABLE `konsul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `tahun` int(11) DEFAULT NULL,
  `fasilitas_sarpras_konsul` text DEFAULT NULL,
  `tersedia_sarana_konsultasi_pengaduan` varchar(5) DEFAULT NULL,
  `sarana_konsultasi_yang_dimiliki` text DEFAULT NULL,
  `dokumentasi_hasil_konsultasi` varchar(5) DEFAULT NULL,
  `hasil_konsultasi_pengaduan_diarsipkan` varchar(5) DEFAULT NULL,
  `hasil_konsul_jadi_laporan` varchar(5) DEFAULT NULL,
  `monev_hasil_konsul` varchar(5) DEFAULT NULL,
  `tindaklanjut_hasil_konsul` varchar(5) DEFAULT NULL,
  `publikasi_hasil_konsul` varchar(5) DEFAULT NULL,
  `jumlah_konsul_pengaduan_masuk` varchar(255) DEFAULT NULL,
  `jumlah_konsul_pengaduan_ditindaklanjuti` varchar(255) DEFAULT NULL,
  `jumlah_konsul_pengaduan_masuk_sp4nlapor` varchar(255) DEFAULT NULL,
  `jumlah_konsul_pengaduan_ditindaklanjuti_sp4nlapor` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `konsul` */

insert  into `konsul`(`id`,`user_id`,`tahun`,`fasilitas_sarpras_konsul`,`tersedia_sarana_konsultasi_pengaduan`,`sarana_konsultasi_yang_dimiliki`,`dokumentasi_hasil_konsultasi`,`hasil_konsultasi_pengaduan_diarsipkan`,`hasil_konsul_jadi_laporan`,`monev_hasil_konsul`,`tindaklanjut_hasil_konsul`,`publikasi_hasil_konsul`,`jumlah_konsul_pengaduan_masuk`,`jumlah_konsul_pengaduan_ditindaklanjuti`,`jumlah_konsul_pengaduan_masuk_sp4nlapor`,`jumlah_konsul_pengaduan_ditindaklanjuti_sp4nlapor`) values 
(1,56,2024,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','',''),
(2,6,2024,'Kotak saran/pengaduan, Petugas khusus, Air minum/makanan ringan, Register konsultasi dan pengaduan, Publikasi informasi terkait mekanisme konsultasi dan pengaduan (poster/spanduk/leaflet/buku/dokumen/bahan cetak lain)','Ya','(Tatap muka) Terpisah dengan front office, Email, SMS/telepon/Aplikasi Percakapan, Media sosial (Instagram, Facebook, dan Twitter), Website pengaduan mandiri, SP4N LAPOR!','Ya','Ya','Ya','Ya','Ya','Ya','3','3','0','0'),
(3,15,2024,'Kotak saran/pengaduan, Petugas khusus, Publikasi informasi terkait mekanisme konsultasi dan pengaduan (poster/spanduk/leaflet/buku/dokumen/bahan cetak lain)','Ya','(Tatap muka) Menyatu dengan front office, Email, SMS/telepon/Aplikasi Percakapan, Media sosial (Instagram, Facebook, dan Twitter)','Ya','Ya','Ya','Ya','Ya','Ya','15','15','',''),
(5,50,2024,'Kotak saran/pengaduan, Register konsultasi dan pengaduan','Ya','(Tatap muka) Menyatu dengan front office, Website pengaduan mandiri',NULL,NULL,NULL,NULL,NULL,NULL,'','','',''),
(6,3,2024,'Kotak saran/pengaduan, Petugas khusus, Air minum/makanan ringan','Ya','(Tatap muka) Terpisah dengan front office, Email, SMS/telepon/Aplikasi Percakapan, Media sosial (Instagram, Facebook, dan Twitter), Website pengaduan mandiri, SP4N LAPOR!','Ya','Ya','Ya','Ya','Ya','Tidak','15','15','0','0'),
(7,53,2024,'Kotak saran/pengaduan','Ya','(Tatap muka) Menyatu dengan front office','Tidak','Tidak','Tidak',NULL,'Tidak','Tidak','','','',''),
(8,32,2024,'Kotak saran/pengaduan, Air minum/makanan ringan','Ya','(Tatap muka) Menyatu dengan front office','Ya','Ya','Ya','Ya','Ya','Ya','12','12','0','0'),
(9,14,2024,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','',''),
(10,8,2024,'Kotak saran/pengaduan, Air minum/makanan ringan, Publikasi informasi terkait mekanisme konsultasi dan pengaduan (poster/spanduk/leaflet/buku/dokumen/bahan cetak lain)','Ya','(Tatap muka) Menyatu dengan front office, (Tatap muka) Terpisah dengan front office, Email, SMS/telepon/Aplikasi Percakapan, Media sosial (Instagram, Facebook, dan Twitter), Website pengaduan mandiri','Ya','Ya','Ya','Ya','Ya','Ya','10','10','','');

/*Table structure for table `migration` */

DROP TABLE IF EXISTS `migration`;

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `migration` */

/*Table structure for table `opd` */

DROP TABLE IF EXISTS `opd`;

CREATE TABLE `opd` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `opd` varchar(255) NOT NULL,
  `singkatan` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `opd` */

insert  into `opd`(`id`,`opd`,`singkatan`) values 
(1,'Dinas Pendidikan dan Kebudayaan','Dispendikbud'),
(2,'Dinas Kesehatan','Dinkes'),
(3,'Dinas Pekerjaan Umum dan Penataan Ruang','PUPR'),
(4,'Dinas Perumahan Rakyat dan Kawasan Permukiman','Perkim'),
(5,'Dinas Sosial','Dinsos'),
(6,'Dinas Tenaga Kerja','Disnaker'),
(7,'Dinas Pemberdayaan Perempuan, Perlindungan Anak dan Keluarga Berencana','P3AKB'),
(8,'Dinas Lingkungan Hidup, Kebersihan, dan Pertamanan','DLHP'),
(9,'Dinas Kependudukan dan Pencatatan Sipil','Dispenduk'),
(10,'Dinas Perhubungan','Dishub'),
(11,'Dinas Komunikasi, Informatika, dan Statistik','Diskominfotik'),
(12,'Dinas Perindustrian dan Perdagangan','Disperindag'),
(13,'Dinas Koperasi dan Usaha Mikro','Diskop'),
(14,'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu','DPMPTSP'),
(15,'Dinas Pariwisata, Pemuda, dan Olahraga','Disparpora'),
(16,'Dinas Perpustakaan dan Kearsipan','Disperpus'),
(17,'Dinas Perikanan','Perikanan'),
(18,'Dinas Pertanian dan Ketahanan Pangan','Pertanian'),
(19,'Satuan Polisi Pamong Praja','Satpol PP'),
(20,'Badan Perencanaan Pembangunan, Penelitian, dan Pengembangan Daerah','BP4D'),
(21,'Badan Kepegawaian Daerah','BKD'),
(22,'Badan Pengelolaan Keuangan dan Aset','BPKA'),
(23,'Badan Pendapatan Daerah','Bapenda'),
(24,'Badan Kesatuan Bangsa dan Politik','Bakesbangpol'),
(25,'Badan Penanggulangan Bencana Daerah','BPBD'),
(26,'Inspektorat','Inspektorat'),
(27,'Sekretariat Daerah','Setda'),
(28,'Sekretariat DPRD','DPRD'),
(29,'Kecamatan Gadingrejo','Gadingrejo'),
(30,'Kecamatan Panggungrejo','Panggungrejo'),
(31,'Kecamatan Bugul Kidul','Bugul Kidul'),
(32,'Kecamatan Purworejo','Purworejo'),
(33,'RSUD dr R Soedarsono','RSUD'),
(34,'Sekretariat Daerah (Bagian Organisasi)',NULL),
(36,'Puskesmas Gadingrejo','Pkmgadingrejo'),
(37,'Puskesmas Kebonagung','Pkmkebonagung'),
(38,'Puskesmas Karangketug','Pkmkarangketug'),
(39,'Puskesmas Kebonsari','Pkmkebonsari'),
(40,'Puskesmas Kandangsapi','Pkmkandangsapi'),
(41,'Puskesmas Bugul Kidul','Pkmbugulkidul'),
(42,'Puskesmas Sekargadung','Pkmsekargadung'),
(43,'Puskesmas Trajeng','Pkmtrajeng'),
(44,'Kelurahan Blandongan','Kelblandongan'),
(45,'Kelurahan Kepel','Kelkepel'),
(46,'Kelurahan Tapa\'an','Keltapaan'),
(47,'Kelurahan Bakalan','Kelbakalan'),
(48,'Kelurahan Krampyangan','Kelkrampyangan'),
(49,'Kelurahan Bugul Kidul','Kelbugulkidul'),
(50,'Kelurahan Pohjentrek','Kelpohjentrek'),
(51,'Kelurahan Wiroguna','Kelwiroguna'),
(52,'Kelurahan Tembokrejo','Keltembokrejo'),
(53,'Kelurahan Purutrejo','Kelpurutrejo'),
(54,'Kelurahan Kebonagung','Kelkebonagung'),
(55,'Kelurahan Purworejo','Kelpurworejo'),
(56,'Kelurahan Sekargadung','Kelsekargadung'),
(57,'Kelurahan Karangketug','Kelkarangketug'),
(58,'Kelurahan Gentong','Kelgentong'),
(59,'Kelurahan Sebani','Kelsebani'),
(60,'Kelurahan Petahunan','Kelpetahunan'),
(61,'Kelurahan Bukir','Kelbukir'),
(62,'Kelurahan Randusari','Kelrandusari'),
(63,'Kelurahan Krapyakrejo','Kelrapyakrejo'),
(64,'Kelurahan Gadingrejo','Kelgadingrejo'),
(65,'Kelurahan Karanganyar','Kelkaranganyar'),
(66,'Kelurahan Tamba\'an','Keltambaan'),
(67,'Kelurahan Trajeng','Keltrajeng'),
(68,'Kelurahan Bangilan','Kelbangilan'),
(69,'Kelurahan Kebonsari','Kelkebonsari'),
(70,'Kelurahan Mayangan','Kelmayangan'),
(71,'Kelurahan Ngeplakrejo','Kelngeplakrejo'),
(72,'Kelurahan Petamanan','Kelpetamanan'),
(73,'Kelurahan Pekuncen','Kelpekuncen'),
(74,'Kelurahan Bugul Lor','Kelbugullor'),
(75,'Kelurahan Kandangsapi','Kelkandangsapi'),
(76,'Kelurahan Panggungrejo','Kelpanggungrejo'),
(77,'Kelurahan Mandaranrejo','Kelmandaranrejo'),
(78,'Demo','demo');

/*Table structure for table `prof_sdm` */

DROP TABLE IF EXISTS `prof_sdm`;

CREATE TABLE `prof_sdm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `tahun` int(11) DEFAULT NULL,
  `waktu_pelayanan` char(5) DEFAULT NULL,
  `pelaksanaan_waktu_pelayanan` text DEFAULT NULL,
  `aturan_perilaku_kode_etik` char(5) DEFAULT NULL,
  `aper_kotik_pp` text DEFAULT NULL,
  `kriteria_penghargaan` text DEFAULT NULL,
  `pemberian_penghargaan` text DEFAULT NULL,
  `budaya_pelayanan` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `prof_sdm` */

insert  into `prof_sdm`(`id`,`user_id`,`tahun`,`waktu_pelayanan`,`pelaksanaan_waktu_pelayanan`,`aturan_perilaku_kode_etik`,`aper_kotik_pp`,`kriteria_penghargaan`,`pemberian_penghargaan`,`budaya_pelayanan`) values 
(3,56,2024,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(4,6,2024,'Ya','Memiliki kebijakan jam pelayanan / kerja','Ya','Nilai dasar hak dan kewajiban, Larangan KKN, Sanksi, Penghargaan','Kehadiran, Kinerja, Kerja Sama, Inovasi/kreatif, Penampilan, Tidak pernah menerima komplain dari pengguna layanan','Kehadiran, Kinerja, Kerja sama, Inovatif/kreatif, Penampilan, Tidak pernah menerima komplain dari pengguna layanan','Mengenakan pakaian seragam, Mengenakan identitas nama, PIN/atribut/logo unit pelayanan, Aturan penerapan 5S (Senyum, salam, sapa, sopan dan santun), Nilai-nilai budaya layanan'),
(5,15,2024,'Ya','Memiliki kebijakan jam pelayanan / kerja, Penambahan waktu layanan di luar jam pelayanan yang sudah ditentukan (masih di hari kerja)','Ya','Nilai dasar hak dan kewajiban, Larangan KKN, Larangan diskriminasi, Sanksi, Penghargaan','Kehadiran, Kinerja, Inovasi/kreatif, Penampilan, Tidak pernah menerima komplain dari pengguna layanan','Kehadiran, Kinerja, Kerja sama, Penampilan, Tidak pernah menerima komplain dari pengguna layanan',NULL),
(7,50,2024,'Ya','Memiliki kebijakan jam pelayanan / kerja',NULL,NULL,NULL,NULL,NULL),
(8,3,2024,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(9,53,2024,'Ya','Memiliki kebijakan jam pelayanan / kerja','Tidak',NULL,NULL,NULL,'Mengenakan pakaian seragam, Mengenakan identitas nama'),
(10,32,2024,'Ya','Memiliki kebijakan jam pelayanan / kerja, Tidak ada jeda pelayanan yang berarti istirahat pegawai dilakukan secara bergilir (shift) yang dapat dibuktikan dari publikasi jam layanan kepada masyarakat, Penambahan waktu layanan di luar jam pelayanan yang sudah ditentukan (masih di hari kerja), Penambahan waktu layanan di luar hari kerja namun dalam kondisi tertentu (Misal: Pembukaan CPNS, LAPOR SPT Tahunan)','Ya','Nilai dasar hak dan kewajiban, Larangan KKN, Larangan diskriminasi, Sanksi','Kinerja','Kinerja','Mengenakan pakaian seragam, Mengenakan identitas nama, Aturan penerapan 5S (Senyum, salam, sapa, sopan dan santun), Nilai-nilai budaya layanan'),
(11,14,2024,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(12,8,2024,'Ya','Memiliki kebijakan jam pelayanan / kerja, Penambahan waktu layanan di luar hari kerja namun dalam kondisi tertentu (Misal: Pembukaan CPNS, LAPOR SPT Tahunan)','Ya','Nilai dasar hak dan kewajiban, Larangan KKN, Larangan diskriminasi, Sanksi, Penghargaan','Kehadiran, Kinerja, Kerja Sama, Inovasi/kreatif, Penampilan','Kehadiran, Kinerja, Kerja sama, Inovatif/kreatif, Penampilan','Mengenakan pakaian seragam, Mengenakan identitas nama, PIN/atribut/logo unit pelayanan, Aturan penerapan 5S (Senyum, salam, sapa, sopan dan santun), Nilai-nilai budaya layanan');

/*Table structure for table `role` */

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `role` */

insert  into `role`(`id`,`role`) values 
(1,'Super Admin'),
(2,'Evaluator'),
(3,'UPP');

/*Table structure for table `sarpras` */

DROP TABLE IF EXISTS `sarpras`;

CREATE TABLE `sarpras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `tahun` int(11) DEFAULT NULL,
  `tersedia_tempat_parkir` char(5) DEFAULT NULL,
  `fasilitas_parkir` text DEFAULT NULL,
  `fasilitas_ruang_tunggu` text DEFAULT NULL,
  `tersedia_toilet` char(5) DEFAULT NULL,
  `fasilitas_toilet` text DEFAULT NULL,
  `sarana_disabilitas` text DEFAULT NULL,
  `sarpras_penunjang_pelayanan` text DEFAULT NULL,
  `fasilitas_fo` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `sarpras` */

insert  into `sarpras`(`id`,`user_id`,`tahun`,`tersedia_tempat_parkir`,`fasilitas_parkir`,`fasilitas_ruang_tunggu`,`tersedia_toilet`,`fasilitas_toilet`,`sarana_disabilitas`,`sarpras_penunjang_pelayanan`,`fasilitas_fo`) values 
(3,56,2024,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(4,6,2024,'Ya','Ketersediaan parkir roda dua dan roda empat, Petugas parkir, Pemeriksaan karcis/kartu parkir, CCTV','Kursi Tunggu, Pendingin sirkulasi ruangan, Air minum, Bahan bacaan, Pengisi daya baterai alat komunikasi/charger booth, Mesin antrian dilengkapi monitor, Televisi, Hotspot/WiFi','Ya','Ketersediaan toilet pria dan wanita, Westafel, Toiletries (tissue, sabun, tempat sampah), Air Bersih, Monev intensitas petugas membersihkan toilet','Kursi roda/tongkat/kruk, Pintu masuk yang mudah diakses, Toilet khusus, Ruang tunggu khusus, Parkir khusus yang mudah diakses, Arena bermain anak, Ruang laktasi','Fotocopy/ATK, P3K, APAR, Kantin, Ruang Ibadah, Area merokok diluar ruang pelayan, Jalur evakuasi/titik kumpul, Ruang Laktasi, Tempat Sampah, CCTV, Lainnya','Petugas Khusus, Meja / Kursi, Layar/display informasi, Bahan cetak informasi layanan, Register tamu (manual / elektronik)'),
(5,15,2024,'Ya','Ketersediaan parkir roda dua dan roda empat, Petugas parkir, CCTV','Kursi Tunggu, Pengisi daya baterai alat komunikasi/charger booth, Televisi, Hotspot/WiFi','Ya','Ketersediaan toilet pria dan wanita, Toiletries (tissue, sabun, tempat sampah), Air Bersih','Kursi roda/tongkat/kruk, Pintu masuk yang mudah diakses, Step lobby/ramp/jalan landai dengan pegangan rambat, Ruang tunggu khusus, Parkir khusus yang mudah diakses, Arena bermain anak, Ruang laktasi','APAR, Ruang Ibadah, Ruang Laktasi, CCTV','Petugas Khusus, Meja / Kursi, Bahan cetak informasi layanan, Register tamu (manual / elektronik)'),
(7,50,2024,'Ya','Ketersediaan parkir roda dua dan roda empat, CCTV, Pelindung (Kanopi/atap bahan lain)','Kursi Tunggu, Pendingin sirkulasi ruangan, Pengisi daya baterai alat komunikasi/charger booth, Televisi','Ya','Ketersediaan toilet pria dan wanita, Air Bersih',NULL,NULL,NULL),
(8,3,2024,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(9,53,2024,'Ya','Ketersediaan parkir roda dua dan roda empat, CCTV','Kursi Tunggu, Pendingin sirkulasi ruangan, Televisi','Ya','Ketersediaan toilet pria dan wanita, Air Bersih',NULL,'Ruang Ibadah, Tempat Sampah, CCTV','Meja / Kursi, Register tamu (manual / elektronik)'),
(10,32,2024,'Ya','Ketersediaan parkir roda dua dan roda empat, Pelindung (Kanopi/atap bahan lain)',NULL,'Ya','Ketersediaan toilet pria dan wanita, Air Bersih',NULL,'Tempat Sampah','Meja / Kursi, Bahan cetak informasi layanan'),
(11,14,2024,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(12,8,2024,'Ya','Ketersediaan parkir roda dua dan roda empat, CCTV','Kursi Tunggu, Air minum, Bahan bacaan, Televisi, Hotspot/WiFi','Ya','Ketersediaan toilet pria dan wanita, Toiletries (tissue, sabun, tempat sampah), Air Bersih, Monev intensitas petugas membersihkan toilet','Kursi roda/tongkat/kruk, Pintu masuk yang mudah diakses, Step lobby/ramp/jalan landai dengan pegangan rambat, Toilet khusus, Ruang tunggu khusus, Arena bermain anak, Ruang laktasi','P3K, APAR, Ruang Ibadah, Jalur evakuasi/titik kumpul, Ruang Laktasi, Tempat Sampah, CCTV','Petugas Khusus, Meja / Kursi, Bahan cetak informasi layanan, Register tamu (manual / elektronik)');

/*Table structure for table `sipp` */

DROP TABLE IF EXISTS `sipp`;

CREATE TABLE `sipp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `tahun` int(11) DEFAULT NULL,
  `tersedia_sipp` varchar(5) DEFAULT NULL,
  `sipp_yang_tersedia` text DEFAULT NULL,
  `sipp_non_elektronik` text DEFAULT NULL,
  `sipp_elektronik` text DEFAULT NULL,
  `penggunaan_sippn` varchar(5) DEFAULT NULL,
  `akun_pengguna_sippn` varchar(255) DEFAULT NULL,
  `jumlah_layanan_terinput_sippn` varchar(255) DEFAULT NULL,
  `unsur_pendukung` text DEFAULT NULL,
  `memiliki_sippe` varchar(5) DEFAULT NULL,
  `kemudahan_operasional_sippe_webbase` varchar(5) DEFAULT NULL,
  `kemudahan_akses_sippe_webbase` varchar(5) DEFAULT NULL,
  `fungsi_kompatibel_sippe_webbase` varchar(5) DEFAULT NULL,
  `domain_goverment_sippe_webbase` varchar(5) DEFAULT NULL,
  `navigasi_sippe_webbase` varchar(5) DEFAULT NULL,
  `pemutakhiran_informasi_pelayanan_publik` varchar(5) DEFAULT NULL,
  `jangka_waktu_pemutakhiran_informasi_pelayanan_publik` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `sipp` */

insert  into `sipp`(`id`,`user_id`,`tahun`,`tersedia_sipp`,`sipp_yang_tersedia`,`sipp_non_elektronik`,`sipp_elektronik`,`penggunaan_sippn`,`akun_pengguna_sippn`,`jumlah_layanan_terinput_sippn`,`unsur_pendukung`,`memiliki_sippe`,`kemudahan_operasional_sippe_webbase`,`kemudahan_akses_sippe_webbase`,`fungsi_kompatibel_sippe_webbase`,`domain_goverment_sippe_webbase`,`navigasi_sippe_webbase`,`pemutakhiran_informasi_pelayanan_publik`,`jangka_waktu_pemutakhiran_informasi_pelayanan_publik`) values 
(1,56,2024,NULL,NULL,NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(2,6,2024,'Ya','SIPP secara elektronik',NULL,'Intranet / Belum Online, Online / Website','Ya','https://mppdigital.go.id/','1','Pengelolaan pengaduan SP4N-LAPOR, Survey kepuasan masyarakat','Ya','Ya','Ya','Ya','Ya','Ya','Ya','Ya'),
(3,15,2024,'Ya','SIPP secara elektronik, SIPP secara non elektronik','Lisan (pusat informasi), Papan pengumuman, Media Cetak','Intranet / Belum Online, Online / Website','Tidak','','','Data pendukung pelayanan (standar pelayanan), Survey kepuasan masyarakat, Penilaian kinerja pemberi pelayanan, Pengelolaan keuangan pelayanan publik','Ya','Ya','Ya','Ya','Ya','Ya','Ya','Ya'),
(5,50,2024,'Ya','SIPP secara elektronik','Lisan (pusat informasi)','Online / Website','Tidak','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(6,3,2024,'Ya','SIPP secara elektronik, SIPP secara non elektronik','Papan pengumuman, Media Cetak','Online / Website','Ya','Dispendukcapil Kota Pasuruan','20','Data pendukung pelayanan (standar pelayanan), Pengelolaan pengaduan SP4N-LAPOR, Survey kepuasan masyarakat, Penilaian kinerja pemberi pelayanan','Ya','Ya','Ya','Ya','Ya','Ya','Ya','Ya'),
(7,53,2024,'Tidak',NULL,NULL,NULL,'Tidak','','',NULL,'Tidak','Tidak','Tidak','Tidak','Tidak','Tidak','Tidak','Tidak'),
(8,32,2024,'Ya','SIPP secara non elektronik','Papan pengumuman','Intranet / Belum Online','Tidak','https://sukma.jatimprov.go.id/fe/survey?IdUser=1673','','Survey kepuasan masyarakat','Tidak','Tidak','Tidak',NULL,'Tidak','Tidak','Ya','Ya'),
(9,14,2024,NULL,NULL,NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(10,8,2024,'Ya','SIPP secara elektronik, SIPP secara non elektronik','Lisan (pusat informasi), Papan pengumuman','Intranet / Belum Online, Online / Website','Tidak','','14','Data pendukung pelayanan (standar pelayanan), Survey kepuasan masyarakat, Penilaian kinerja pemberi pelayanan','Ya','Ya','Ya','Ya','Ya','Ya','Ya','Ya');

/*Table structure for table `tambahan` */

DROP TABLE IF EXISTS `tambahan`;

CREATE TABLE `tambahan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `tahun` int(11) DEFAULT NULL,
  `terdapat_sistem_antrian` varchar(5) DEFAULT NULL,
  `fasilitas_sistem_antrian` text DEFAULT NULL,
  `url_video_youtube` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tambahan` */

insert  into `tambahan`(`id`,`user_id`,`tahun`,`terdapat_sistem_antrian`,`fasilitas_sistem_antrian`,`url_video_youtube`) values 
(1,56,2024,NULL,NULL,''),
(2,6,2024,'Ya','Sistem pendaftaran online, Nomor Antrian, Monitor Antrian','https://www.youtube.com/watch?v=9b6u9ndKJc4 ; https://www.youtube.com/watch?v=6yx2U4nIyhw&t=16s'),
(3,15,2024,'Ya','Sistem pendaftaran online, Nomor Antrian, Monitor Antrian','https://youtu.be/5DKLWe-bLsE?si=_zbJu2HG_esfSGti'),
(5,50,2024,'Tidak',NULL,''),
(6,3,2024,'Ya','Nomor Antrian, Monitor Antrian, Lainnya','https://youtu.be/uSMzB1f7GbM?si=aWc-0Me4YRtc-XO3'),
(7,53,2024,'Tidak',NULL,''),
(8,32,2024,'Tidak','Lainnya',''),
(9,14,2024,'Ya','Sistem pendaftaran online',''),
(10,8,2024,'Ya','Nomor Antrian','');

/*Table structure for table `telah_input` */

DROP TABLE IF EXISTS `telah_input`;

CREATE TABLE `telah_input` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(11) DEFAULT 0 COMMENT '0 = pending, 1 = sudah dicheck',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `telah_input` */

insert  into `telah_input`(`id`,`user_id`,`tanggal`,`status`) values 
(1,2,'2024-04-24',0),
(2,56,'2024-04-26',0),
(3,6,'2024-04-26',0),
(4,15,'2024-04-28',0),
(6,50,'2024-04-29',0),
(7,3,'2024-04-29',0),
(8,53,'2024-04-29',0),
(9,32,'2024-04-29',0),
(10,14,'2024-04-29',0),
(11,8,'2024-04-29',0);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `opd_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `is_active` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`fullname`,`username`,`password`,`role_id`,`opd_id`,`created_at`,`is_active`) values 
(1,'Miftahul Huda','hudil','$2y$10$58jhkXje5uS6EqfACO6v8.lNYt8ob/y.SyT.h7bNr5DTSDZ7VWldW',1,34,'2024-03-26 08:15:13',1),
(2,'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu','dpmptsp','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,14,'2024-03-26 08:16:43',1),
(3,'Dinas Kependudukan dan Pencatatan Sipil','dispendukpencapil','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,9,'2024-03-26 08:18:18',1),
(4,'Dinas Sosial','dinsos','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,5,'2024-03-26 08:18:47',1),
(5,'Dinas Pendidikan dan Kebudayaan','dispendikbud','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,1,'2024-03-26 08:19:24',1),
(6,'Dinas Kesehatan','dinkes','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,2,'2024-03-26 08:19:51',1),
(7,'Kecamatan Bugul Kidul','kecbugulkidul','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,31,'2024-03-26 08:30:38',1),
(8,'Puskesmas Gadingrejo','pkmgadingrejo','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,36,'2024-03-26 10:40:30',1),
(9,'Puskesmas Kebonagung','pkmkebonagung','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,37,'2024-03-26 10:41:37',1),
(10,'Puskesmas Karangketug','pkmkarangketug','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,38,'2024-03-26 10:41:59',1),
(11,'Puskesmas Kebonsari','pkmkebonsari','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,39,'2024-03-26 10:42:38',1),
(12,'Puskesmas Kandangsapi','pkmkandangsapi','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,40,'2024-03-26 10:47:30',1),
(13,'Puskesmas Bugul Kidul','pkmbugulkidul','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,41,'2024-03-26 10:48:22',1),
(14,'Puskesmas Sekargadung','pkmsekargadung','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,42,'2024-03-26 10:48:51',1),
(15,'Puskesmas Trajeng','pkmtrajeng','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,43,'2024-03-26 10:49:11',1),
(16,'Kelurahan Blandongan','kelblandongan','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,44,'2024-03-26 10:52:01',1),
(17,'Kelurahan Kepel','kelkepel','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,45,'2024-03-26 10:52:33',1),
(18,'Kelurahan Tapa\'an','keltapaan','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,46,'2024-03-26 10:52:57',1),
(19,'Kelurahan Bakalan','kelbakalan','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,47,'2024-03-26 10:54:33',1),
(20,'Kelurahan Krampyangan','kelkrampyangan','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,48,'2024-03-26 10:54:59',1),
(21,'Kelurahan Bugul Kidul','kelbugulkidul','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,49,'2024-03-26 10:55:21',1),
(22,'Kelurahan Pohjentrek','kelpohjentrek','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,50,'2024-03-26 10:56:46',1),
(23,'Kelurahan Wirogunan','kelwirogunan','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,51,'2024-03-26 10:57:19',1),
(24,'Kelurahan Tembokrejo','keltembokrejo','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,52,'2024-03-26 10:58:01',1),
(25,'Kelurahan Purutrejo','kelpurutrejo','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,53,'2024-03-26 10:58:24',1),
(26,'Kelurahan Kebonagung','kelkebonagung','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,54,'2024-03-26 10:58:57',1),
(27,'Kelurahan Purworejo','kelpurworejo','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,55,'2024-03-26 10:59:20',1),
(28,'Kelurahan Sekargadung','kelsekargadung','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,56,'2024-03-26 10:59:51',1),
(29,'Kelurahan Karangketug','kelkarangketug','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,57,'2024-03-26 11:01:43',1),
(30,'Kelurahan Gentong','kelgentong','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,58,'2024-03-26 11:02:03',1),
(31,'Kelurahan Sebani','kelsebani','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,59,'2024-03-26 11:02:45',1),
(32,'Kelurahan Petahunan','kelpetahunan','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,60,'2024-03-26 11:03:08',1),
(33,'Kelurahan Bukir','kelbukir','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,61,'2024-03-26 11:04:41',1),
(34,'Kelurahan Randusari','kelrandusari','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,62,'2024-03-26 11:05:50',1),
(35,'Kelurahan Krapyakrejo','kelkrapyakrejo','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,63,'2024-03-26 11:06:31',1),
(36,'Kelurahan Gadingrejo','kelgadingrejo','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,64,'2024-03-26 11:06:53',1),
(37,'Kelurahan Karanganyar','kelkaranganyar','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,65,'2024-03-26 11:10:03',1),
(38,'Kelurahan Tamba\'an','keltambaan','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,66,'2024-03-26 11:10:23',1),
(39,'Kelurahan Trajeng','keltrajeng','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,67,'2024-03-26 11:10:47',1),
(40,'Kelurahan Bangilan','kelbangilan','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,68,'2024-03-26 11:11:05',1),
(41,'Kelurahan Kebonsari','kelkebonsari','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,69,'2024-03-26 11:11:30',1),
(42,'Kelurahan Mayangan','kelmayangan','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,70,'2024-03-26 11:11:52',1),
(43,'Kelurahan Ngeplakrejo','kelngeplakrejo','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,71,'2024-03-26 11:12:12',1),
(44,'Kelurahan Petamanan','kelpetamanan','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,72,'2024-03-26 11:12:43',1),
(45,'Kelurahan Pekuncen','kelpekuncen','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,73,'2024-03-26 11:13:08',1),
(46,'Kelurahan Bugul Lor','kelbugullor','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,74,'2024-03-26 11:13:26',1),
(47,'Kelurahan Kandangsapi','kelkandangsapi','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,75,'2024-03-26 11:13:43',1),
(48,'Kelurahan Panggungrejo','kelpanggungrejo','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,76,'2024-03-26 11:14:03',1),
(49,'Kelurahan Mandaranrejo','kelmandaranrejo','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,77,'2024-03-26 11:14:27',1),
(50,'Kecamatan Purworejo','kecpurworejo','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,32,'2024-03-26 11:49:17',1),
(51,'Kecamatan Panggungrejo','kecpanggungrejo','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,30,'2024-03-26 11:50:22',1),
(52,'RSUD dr.R. Soedarsono','rssoedarsono','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,33,'2024-03-26 11:51:14',1),
(53,'Kecamatan Gadingrejo','kecgadingrejo','$2y$10$Heyxw0FDLbmJbl8UEZrRse7jYMeHOOZNr5RsjCG2NlbB75RAdVLLG',3,29,'2024-03-26 12:03:13',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
