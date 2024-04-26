$(document).ready(function () {
	Dropzone.autoDiscover = false;

	var id_sarpras = $("#kt_dropzone_fasilitas_parkir").data("id_sarpras");

	if (
		id_sarpras != "" &&
		id_sarpras != null &&
		typeof id_sarpras !== "undefined"
	) {
		var url_sarpras = base_url + "penilaian/do_upload_sarpras/" + id_sarpras;
	} else {
		var url_sarpras = base_url + "penilaian/do_upload_sarpras";
	}

	// bukti dukung 3_1
	var dropzone_waktu_pel = new Dropzone("#kt_dropzone_fasilitas_parkir", {
		url: url_sarpras,
		maxFilesize: 5,
		method: "post",
		acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
		paramName: "buktisarpras",
		dictInvalidFileType: "Type file ini tidak dizinkan",
		addRemoveLinks: true,
	});

	dropzone_waktu_pel.on("sending", function (a, b, c) {
		a.nomor = "3_1";
		c.append("nomor", a.nomor);
	});

	// bukti dukung 3_2
	var dropzone_waktu_pel = new Dropzone("#kt_dropzone_fasilitas_ruang_tunggu", {
		url: url_sarpras,
		maxFilesize: 5,
		method: "post",
		acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
		paramName: "buktisarpras",
		dictInvalidFileType: "Type file ini tidak dizinkan",
		addRemoveLinks: true,
	});

	dropzone_waktu_pel.on("sending", function (a, b, c) {
		a.nomor = "3_2";
		c.append("nomor", a.nomor);
	});

	// bukti dukung 3_3
	var dropzone_waktu_pel = new Dropzone("#kt_dropzone_sarana_toilet", {
		url: url_sarpras,
		maxFilesize: 5,
		method: "post",
		acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
		paramName: "buktisarpras",
		dictInvalidFileType: "Type file ini tidak dizinkan",
		addRemoveLinks: true,
	});

	dropzone_waktu_pel.on("sending", function (a, b, c) {
		a.nomor = "3_3";
		c.append("nomor", a.nomor);
	});

	// bukti dukung 3_4
	var dropzone_waktu_pel = new Dropzone("#kt_dropzone_sarana_disabilitas", {
		url: url_sarpras,
		maxFilesize: 5,
		method: "post",
		acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
		paramName: "buktisarpras",
		dictInvalidFileType: "Type file ini tidak dizinkan",
		addRemoveLinks: true,
	});

	dropzone_waktu_pel.on("sending", function (a, b, c) {
		a.nomor = "3_4";
		c.append("nomor", a.nomor);
	});

	// bukti dukung 3_5
	var dropzone_waktu_pel = new Dropzone("#kt_dropzone_sarpras_penunjang", {
		url: url_sarpras,
		maxFilesize: 5,
		method: "post",
		acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
		paramName: "buktisarpras",
		dictInvalidFileType: "Type file ini tidak dizinkan",
		addRemoveLinks: true,
	});

	dropzone_waktu_pel.on("sending", function (a, b, c) {
		a.nomor = "3_4";
		c.append("nomor", a.nomor);
	});

	// bukti dukung 3_6
	var dropzone_waktu_pel = new Dropzone("#kt_dropzone_sarana_fo", {
		url: url_sarpras,
		maxFilesize: 5,
		method: "post",
		acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
		paramName: "buktisarpras",
		dictInvalidFileType: "Type file ini tidak dizinkan",
		addRemoveLinks: true,
	});

	dropzone_waktu_pel.on("sending", function (a, b, c) {
		a.nomor = "3_5";
		c.append("nomor", a.nomor);
	});
});
