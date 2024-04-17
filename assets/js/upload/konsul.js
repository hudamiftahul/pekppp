$( document ).ready(function() {
    Dropzone.autoDiscover = false;

    // bukti dukung 5_1
    var dropzone_waktu_pel = new Dropzone("#kt_dropzone_fasilitas_sarpras_konsul_pengaduan", {
        url: base_url + 'penilaian/do_upload_konsul',
        maxFilesize: 5,
        method: "post",
        acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
        paramName: "buktikonsul",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
    });

    dropzone_waktu_pel.on("sending", function(a, b, c) {
        a.nomor = "5_1";
        c.append("nomor", a.nomor)
    });

    // bukti dukung 5_2
    var dropzone_waktu_pel = new Dropzone("#kt_dropzone_sarana_konsultasi_pengaduan", {
        url: base_url + 'penilaian/do_upload_konsul',
        maxFilesize: 5,
        method: "post",
        acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
        paramName: "buktikonsul",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
    });

    dropzone_waktu_pel.on("sending", function(a, b, c) {
        a.nomor = "5_2";
        c.append("nomor", a.nomor)
    });

    // bukti dukung 5_3
    var dropzone_waktu_pel = new Dropzone("#kt_dropzone_akuntabilitas_hasil_konsul", {
        url: base_url + 'penilaian/do_upload_konsul',
        maxFilesize: 5,
        method: "post",
        acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
        paramName: "buktikonsul",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
    });

    dropzone_waktu_pel.on("sending", function(a, b, c) {
        a.nomor = "5_3";
        c.append("nomor", a.nomor)
    });

    // bukti dukung 5_4
    var dropzone_waktu_pel = new Dropzone("#kt_dropzone_persentase_pengaduan_masuk", {
        url: base_url + 'penilaian/do_upload_konsul',
        maxFilesize: 5,
        method: "post",
        acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
        paramName: "buktikonsul",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
    });

    dropzone_waktu_pel.on("sending", function(a, b, c) {
        a.nomor = "5_4";
        c.append("nomor", a.nomor)
    });
});