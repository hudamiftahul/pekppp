$(document).ready(function () {
	Dropzone.autoDiscover = false;

	// bukti dukung formulir 3
	var dropzone_formulir_tiga = new Dropzone("#kt_dropzone_formulirtiga", {
		url: base_url + "formulir/do_upload_formulirtiga",
		maxFilesize: 10,
		method: "post",
		acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
		paramName: "buktiformulirtiga",
		dictInvalidFileType: "Type file ini tidak dizinkan",
		addRemoveLinks: true,
	});

	dropzone_formulir_tiga.on("sending", function (a, b, c) {
		// a.nomor = "6_1";
		// c.append("nomor", a.nomor);
	});
});
