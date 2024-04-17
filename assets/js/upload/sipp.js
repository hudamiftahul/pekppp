$( document ).ready(function() {
    Dropzone.autoDiscover = false;

    // bukti dukung 4_1
    var dropzone_waktu_pel = new Dropzone("#kt_dropzone_sipp", {
        url: base_url + 'penilaian/do_upload_sipp',
        maxFilesize: 5,
        method: "post",
        acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
        paramName: "buktisipp",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
    });

    dropzone_waktu_pel.on("sending", function(a, b, c) {
        a.nomor = "4_1";
        c.append("nomor", a.nomor)
    });

    // bukti dukung 4_2
    var dropzone_waktu_pel = new Dropzone("#kt_dropzone_si_pendukung_op", {
        url: base_url + 'penilaian/do_upload_sipp',
        maxFilesize: 5,
        method: "post",
        acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
        paramName: "buktisipp",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
    });

    dropzone_waktu_pel.on("sending", function(a, b, c) {
        a.nomor = "4_2";
        c.append("nomor", a.nomor)
    });

    // bukti dukung 4_3
    var dropzone_waktu_pel = new Dropzone("#kt_dropzone_kualitas_sippe", {
        url: base_url + 'penilaian/do_upload_sipp',
        maxFilesize: 5,
        method: "post",
        acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
        paramName: "buktisipp",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
    });

    dropzone_waktu_pel.on("sending", function(a, b, c) {
        a.nomor = "4_3";
        c.append("nomor", a.nomor)
    });

    // bukti dukung 4_4
    var dropzone_waktu_pel = new Dropzone("#kt_dropzone_pemutakhiran_data", {
        url: base_url + 'penilaian/do_upload_sipp',
        maxFilesize: 5,
        method: "post",
        acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
        paramName: "buktisipp",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
    });

    dropzone_waktu_pel.on("sending", function(a, b, c) {
        a.nomor = "4_4";
        c.append("nomor", a.nomor)
    });
});