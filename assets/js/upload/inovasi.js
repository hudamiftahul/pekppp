$(document).ready(function () {
	Dropzone.autoDiscover = false;

	var id_inovasi = $("#kt_dropzone_inovasi_pelayanan_publik").data(
		"id_inovasi"
	);

	if (
		id_inovasi != "" &&
		id_inovasi != null &&
		typeof id_inovasi !== "undefined"
	) {
		var url_inovasi = base_url + "penilaian/do_upload_inovasi/" + id_inovasi;
	} else {
		var url_inovasi = base_url + "penilaian/do_upload_inovasi";
	}

	// bukti dukung 6_1
	var dropzone_waktu_pel = new Dropzone(
		"#kt_dropzone_inovasi_pelayanan_publik",
		{
			url: url_inovasi,
			maxFilesize: 5,
			method: "post",
			acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
			paramName: "buktiinovasi",
			dictInvalidFileType: "Type file ini tidak dizinkan",
			addRemoveLinks: true,
		}
	);

	dropzone_waktu_pel.on("sending", function (a, b, c) {
		a.nomor = "6_1";
		c.append("nomor", a.nomor);
	});

	// bukti dukung 6_2
	var dropzone_waktu_pel = new Dropzone(
		"#kt_dropzone_sdm_inovasi_pelayanan_publik",
		{
			url: url_inovasi,
			maxFilesize: 5,
			method: "post",
			acceptedFiles: ".jpeg,.png,.jpg,.pdf,.zip,.rar",
			paramName: "buktiinovasi",
			dictInvalidFileType: "Type file ini tidak dizinkan",
			addRemoveLinks: true,
		}
	);

	dropzone_waktu_pel.on("sending", function (a, b, c) {
		a.nomor = "6_2";
		c.append("nomor", a.nomor);
	});
});
