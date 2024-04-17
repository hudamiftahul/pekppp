$( document ).ready(function() {
    Dropzone.autoDiscover = false;

    // bukti dukung 1_1
    var dropzone_waktu_pel = new Dropzone("#kt_dropzone_waktu_pel", {
        url: base_url + 'penilaian/do_upload_kepel',
        maxFilesize: 5,
        method: "post",
        acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
        paramName: "buktikepel",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
    });

    dropzone_waktu_pel.on("sending", function(a, b, c) {
        a.nomor = "1_1";
        c.append("nomor", a.nomor)
    });

    // bukti dukung 1_2
    var dropzone_waktu_pel = new Dropzone("#kt_dropzone_keterlibatan_masyarakat", {
        url: base_url + 'penilaian/do_upload_kepel',
        maxFilesize: 5,
        method: "post",
        acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
        paramName: "buktikepel",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
    });

    dropzone_waktu_pel.on("sending", function(a, b, c) {
        a.nomor = "1_2";
        c.append("nomor", a.nomor)
    });

    // bukti dukung 1_3 
    var dropzone_waktu_pel = new Dropzone("#kt_dropzone_media_publikasi_serv_delivery", {
        url: base_url + 'penilaian/do_upload_kepel',
        maxFilesize: 5,
        method: "post",
        acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
        paramName: "buktikepel",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
    });

    dropzone_waktu_pel.on("sending", function(a, b, c) {
        a.nomor = "1_3";
        c.append("nomor", a.nomor)
    });

    // bukti dukung 1_4
    var dropzone_waktu_pel = new Dropzone("#kt_dropzone_peninjauan_ulang_sp", {
        url: base_url + 'penilaian/do_upload_kepel',
        maxFilesize: 5,
        method: "post",
        acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
        paramName: "buktikepel",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
    });

    dropzone_waktu_pel.on("sending", function(a, b, c) {
        a.nomor = "1_4";
        c.append("nomor", a.nomor)
    });

    // bukti dukung 1_5
    var dropzone_waktu_pel = new Dropzone("#kt_dropzone_siklus_maklumat_pelayanan", {
        url: base_url + 'penilaian/do_upload_kepel',
        maxFilesize: 5,
        method: "post",
        acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
        paramName: "buktikepel",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
    });

    dropzone_waktu_pel.on("sending", function(a, b, c) {
        a.nomor = "1_5";
        c.append("nomor", a.nomor)
    });

    // bukti dukung 1_6
    var dropzone_waktu_pel = new Dropzone("#kt_dropzone_skm_permenpanrb", {
        url: base_url + 'penilaian/do_upload_kepel',
        maxFilesize: 5,
        method: "post",
        acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
        paramName: "buktikepel",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
    });

    dropzone_waktu_pel.on("sending", function(a, b, c) {
        a.nomor = "1_6";
        c.append("nomor", a.nomor)
    });

    // bukti dukung 1_7
    var dropzone_waktu_pel = new Dropzone("#kt_dropzone_publikasi_hasil_skm", {
        url: base_url + 'penilaian/do_upload_kepel',
        maxFilesize: 5,
        method: "post",
        acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
        paramName: "buktikepel",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
    });

    dropzone_waktu_pel.on("sending", function(a, b, c) {
        a.nomor = "1_7";
        c.append("nomor", a.nomor)
    });

    // bukti dukung 1_8
    var dropzone_waktu_pel = new Dropzone("#kt_dropzone_tindak_lanjut_skm", {
        url: base_url + 'penilaian/do_upload_kepel',
        maxFilesize: 5,
        method: "post",
        acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
        paramName: "buktikepel",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
    });

    dropzone_waktu_pel.on("sending", function(a, b, c) {
        a.nomor = "1_8";
        c.append("nomor", a.nomor)
    });

    // bukti dukung 1_9 
    var dropzone_waktu_pel = new Dropzone("#kt_dropzone_kecepatan_tindak_lanjut_skm", {
        url: base_url + 'penilaian/do_upload_kepel',
        maxFilesize: 5,
        method: "post",
        acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
        paramName: "buktikepel",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
    });

    dropzone_waktu_pel.on("sending", function(a, b, c) {
        a.nomor = "1_9";
        c.append("nomor", a.nomor)
    });
});

