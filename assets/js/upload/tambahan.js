$(document).ready(function () {
  Dropzone.autoDiscover = false;

  // bukti dukung 6_1
  var dropzone_waktu_pel = new Dropzone(
    "#kt_dropzone_tambahan",
    {
      url: base_url + "penilaian/do_upload_tambahan",
      maxFilesize: 5,
      method: "post",
      acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
      paramName: "buktitambahan",
      dictInvalidFileType: "Type file ini tidak dizinkan",
      addRemoveLinks: true,
    }
  );

  dropzone_waktu_pel.on("sending", function (a, b, c) {
    a.nomor = "6_1";
    c.append("nomor", a.nomor);
  });

});
