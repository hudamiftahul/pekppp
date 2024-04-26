$(document).ready(function () {
	Dropzone.autoDiscover = false;

	var id_tambahan = $("#kt_dropzone_tambahan").data("id_tambahan");

	if (
		id_tambahan != "" &&
		id_tambahan != null &&
		typeof id_tambahan !== "undefined"
	) {
		var url_tambahan = base_url + "penilaian/do_upload_tambahan/" + id_tambahan;
	} else {
		var url_tambahan = base_url + "penilaian/do_upload_tambahan";
	}

	// bukti dukung 6_1
	var dropzone_waktu_pel = new Dropzone("#kt_dropzone_tambahan", {
		url: url_tambahan,
		maxFilesize: 5,
		method: "post",
		acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
		paramName: "buktitambahan",
		dictInvalidFileType: "Type file ini tidak dizinkan",
		addRemoveLinks: true,
	});

	dropzone_waktu_pel.on("sending", function (a, b, c) {
		a.nomor = "7_1";
		c.append("nomor", a.nomor);
	});
});
