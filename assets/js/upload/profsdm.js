$( document ).ready(function() {
    Dropzone.autoDiscover = false;

    // bukti dukung 2_1
    var dropzone_waktu_pel = new Dropzone("#kt_dropzone_waktu_pelayanan", {
        url: base_url + 'penilaian/do_upload_profsdm',
        maxFilesize: 5,
        method: "post",
        acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
        paramName: "buktiprofsdm",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
    });

    dropzone_waktu_pel.on("sending", function(a, b, c) {
        a.nomor = "2_1";
        c.append("nomor", a.nomor)
    });

    // bukti dukung 2_2
    var dropzone_waktu_pel = new Dropzone("#kt_dropzone_kode_etik", {
        url: base_url + 'penilaian/do_upload_profsdm',
        maxFilesize: 5,
        method: "post",
        acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
        paramName: "buktiprofsdm",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
    });

    dropzone_waktu_pel.on("sending", function(a, b, c) {
        a.nomor = "2_2";
        c.append("nomor", a.nomor)
    });

    // bukti dukung 2_3
    var dropzone_waktu_pel = new Dropzone("#kt_dropzone_kriteria_penghargaan", {
        url: base_url + 'penilaian/do_upload_profsdm',
        maxFilesize: 5,
        method: "post",
        acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
        paramName: "buktiprofsdm",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
    });

    dropzone_waktu_pel.on("sending", function(a, b, c) {
        a.nomor = "2_3";
        c.append("nomor", a.nomor)
    });
    
    // bukti dukung 2_4
    var dropzone_waktu_pel = new Dropzone("#kt_dropzone_pemberian_penghargaan", {
        url: base_url + 'penilaian/do_upload_profsdm',
        maxFilesize: 5,
        method: "post",
        acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
        paramName: "buktiprofsdm",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
    });
    
    dropzone_waktu_pel.on("sending", function(a, b, c) {
        a.nomor = "2_4";
        c.append("nomor", a.nomor)
    });

    // bukti dukung 2_5
    var dropzone_waktu_pel = new Dropzone("#kt_dropzone_budaya_pelayanan", {
        url: base_url + 'penilaian/do_upload_profsdm',
        maxFilesize: 5,
        method: "post",
        acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
        paramName: "buktiprofsdm",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
    });
    
    dropzone_waktu_pel.on("sending", function(a, b, c) {
        a.nomor = "2_5";
        c.append("nomor", a.nomor)
    });
});