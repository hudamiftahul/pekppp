$(document).ready(function () {
	Dropzone.autoDiscover = false;

	var id_kepel = $("#kt_dropzone_waktu_pel").data("id_kepel");

	if (id_kepel != "" && id_kepel != null && typeof id_kepel !== "undefined") {
		var url_kepel = base_url + "penilaian/do_upload_kepel/" + id_kepel;
	} else {
		var url_kepel = base_url + "penilaian/do_upload_kepel";
	}

	// bukti dukung 1_1
	var dropzone_waktu_pel = new Dropzone("#kt_dropzone_waktu_pel", {
		url: url_kepel,
		maxFilesize: 5,
		method: "post",
		acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
		paramName: "buktikepel",
		dictInvalidFileType: "Type file ini tidak dizinkan",
		addRemoveLinks: true,
	});

	dropzone_waktu_pel.on("sending", function (a, b, c) {
		a.nomor = "1_1";
		c.append("nomor", a.nomor);
	});

	// bukti dukung 1_2
	var dropzone_waktu_pel = new Dropzone(
		"#kt_dropzone_keterlibatan_masyarakat",
		{
			url: url_kepel,
			maxFilesize: 5,
			method: "post",
			acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
			paramName: "buktikepel",
			dictInvalidFileType: "Type file ini tidak dizinkan",
			addRemoveLinks: true,
		}
	);

	dropzone_waktu_pel.on("sending", function (a, b, c) {
		a.nomor = "1_2";
		c.append("nomor", a.nomor);
	});

	// bukti dukung 1_3
	var dropzone_waktu_pel = new Dropzone(
		"#kt_dropzone_media_publikasi_serv_delivery",
		{
			url: url_kepel,
			maxFilesize: 5,
			method: "post",
			acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
			paramName: "buktikepel",
			dictInvalidFileType: "Type file ini tidak dizinkan",
			addRemoveLinks: true,
		}
	);

	dropzone_waktu_pel.on("sending", function (a, b, c) {
		a.nomor = "1_3";
		c.append("nomor", a.nomor);
	});

	// bukti dukung 1_4
	var dropzone_waktu_pel = new Dropzone("#kt_dropzone_peninjauan_ulang_sp", {
		url: url_kepel,
		maxFilesize: 5,
		method: "post",
		acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
		paramName: "buktikepel",
		dictInvalidFileType: "Type file ini tidak dizinkan",
		addRemoveLinks: true,
	});

	dropzone_waktu_pel.on("sending", function (a, b, c) {
		a.nomor = "1_4";
		c.append("nomor", a.nomor);
	});

	// bukti dukung 1_5
	var dropzone_waktu_pel = new Dropzone(
		"#kt_dropzone_siklus_maklumat_pelayanan",
		{
			url: url_kepel,
			maxFilesize: 5,
			method: "post",
			acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
			paramName: "buktikepel",
			dictInvalidFileType: "Type file ini tidak dizinkan",
			addRemoveLinks: true,
		}
	);

	dropzone_waktu_pel.on("sending", function (a, b, c) {
		a.nomor = "1_5";
		c.append("nomor", a.nomor);
	});

	// bukti dukung 1_6
	var dropzone_waktu_pel = new Dropzone("#kt_dropzone_skm_permenpanrb", {
		url: url_kepel,
		maxFilesize: 5,
		method: "post",
		acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
		paramName: "buktikepel",
		dictInvalidFileType: "Type file ini tidak dizinkan",
		addRemoveLinks: true,
	});

	dropzone_waktu_pel.on("sending", function (a, b, c) {
		a.nomor = "1_6";
		c.append("nomor", a.nomor);
	});

	// bukti dukung 1_7
	var dropzone_waktu_pel = new Dropzone("#kt_dropzone_publikasi_hasil_skm", {
		url: url_kepel,
		maxFilesize: 5,
		method: "post",
		acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
		paramName: "buktikepel",
		dictInvalidFileType: "Type file ini tidak dizinkan",
		addRemoveLinks: true,
	});

	dropzone_waktu_pel.on("sending", function (a, b, c) {
		a.nomor = "1_7";
		c.append("nomor", a.nomor);
	});

	// bukti dukung 1_8
	var dropzone_waktu_pel = new Dropzone("#kt_dropzone_tindak_lanjut_skm", {
		url: url_kepel,
		maxFilesize: 5,
		method: "post",
		acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
		paramName: "buktikepel",
		dictInvalidFileType: "Type file ini tidak dizinkan",
		addRemoveLinks: true,
	});

	dropzone_waktu_pel.on("sending", function (a, b, c) {
		a.nomor = "1_8";
		c.append("nomor", a.nomor);
	});

	// bukti dukung 1_9
	var dropzone_waktu_pel = new Dropzone(
		"#kt_dropzone_kecepatan_tindak_lanjut_skm",
		{
			url: url_kepel,
			maxFilesize: 5,
			method: "post",
			acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
			paramName: "buktikepel",
			dictInvalidFileType: "Type file ini tidak dizinkan",
			addRemoveLinks: true,
		}
	);

	dropzone_waktu_pel.on("sending", function (a, b, c) {
		a.nomor = "1_9";
		c.append("nomor", a.nomor);
	});
});
