<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Validasi</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted">Perangkat Daerah</a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted">Tahun</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Penilaian Mandiri Content-->
            <!--begin::Notice-->
            <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
                <div class="alert-icon">
                    <span class="svg-icon svg-icon-danger svg-icon-xl">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3" />
                                <path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                </div>
                <div class="alert-text">Form Validasi penilaian kepatuhan penyelenggaraan pelayanan publik perangkat daerah.
                    <br />
                    <a href="javascript:void(0)" class="font-weight-bold text-danger" data-toggle="modal" data-target="#data_pendukung">klik disini</a>.
                </div>
            </div>
            <!--end::Notice-->
            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Card header-->
                <div class="card-header card-header-tabs-line nav-tabs-line-3x">
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <ul class="nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-3x">
                            <!--begin::Item-->
                            <?php foreach ($dimensi as $d) : ?>
                                <li class="nav-item mr-6 ml-6">
                                    <a class="nav-link <?= ($d['dimensi'] == 'Input') ? 'active' : '' ?>" data-toggle="tab" href="#<?= $d['slug'] ?>">
                                        <span class="nav-icon">
                                            <span class="svg-icon">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <?= $d['svg'] ?>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <span class="nav-text font-size-lg text-danger"><?= $d['dimensi'] ?></span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                            <!--end::Item-->
                        </ul>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body">
                    <form action="<?= base_url(); ?>validator/store" method="post">
                        <input type="hidden" name="opd_id" value="<?= $opd_id; ?>">
                        <div class="tab-content">
                            <!--begin::Tab-->
                            <div class="tab-pane show active px-7" id="kt_input" role="tabpanel">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <table class="table table-bordered">
                                            <tr class="text-center">
                                                <th width="400">Pertanyaan</th>
                                                <th>Bukti Dukung</th>
                                                <th>Jawaban</th>
                                                <th>Nilai</th>
                                            </tr>
                                            <?php foreach ($input as $index => $inp) : ?>
                                                <tr>
                                                    <td>
                                                        <b><?= $inp['indikator'] ?></b> <br>
                                                        <span class="ml-3"><?= (pertanyaanev($inp['id'])['pertanyaan'] != NULL || pertanyaanev($inp['id'])['pertanyaan'] == '' ? pertanyaanev($inp['id'])['pertanyaan'] : '-') ?></span>
                                                    </td>
                                                    <td style="vertical-align : middle;text-align:center;">
                                                        <?php if (buktidukung($inp['id'], $opd_name)) : ?>
                                                            <?php foreach (buktidukung($inp['id'], $opd_name) as $bk) : ?>
                                                                <?php if ($bk['lokasifile'] == NULL && $bk['extfile'] == '-') : ?>
                                                                    <b class="d-flex justify-content-center">-</b>
                                                                <?php else : ?>
                                                                    <?php if ($bk['extfile'] == "zip") : ?>
                                                                        <a href="<?= $bk['lokasifile'] ?>" target="_blank"><i class="fas fa-download text-warning"></i></a>
                                                                    <?php elseif ($bk['extfile'] == "pdf") : ?>
                                                                        <a href="<?= $bk['lokasifile'] ?>" target="_blank"><i class="fas fa-file-pdf text-danger"></i></a>
                                                                    <?php elseif ($bk['extfile'] == "jpg" || $bk['extfile'] == "jpeg" || $bk['extfile'] == "png") : ?>
                                                                        <a href="<?= $bk['lokasifile'] ?>" target="_blank"><i class="fas fa-file-image text-success"></i></a>
                                                                    <?php endif; ?>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td style="vertical-align : middle;text-align:center;">
                                                        <?php if (in_array(pertanyaanev($inp['id'])['nama_pertanyaan'], check())) : ?>
                                                            <?= jawaban($opd_id, date('Y'))[pertanyaanev($inp['id'])['nama_pertanyaan']] ?>
                                                        <?php else : ?>
                                                            <b class="justify-content-center">-</b>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td style="vertical-align : middle;text-align:center;">
                                                        <div class="form-group">
                                                            <select class="custom-select form-control" id="nilai_<?= $inp['id'] ?>" name="nilai_<?= $inp['id'] ?>">
                                                                <option selected="selected">Pilih</option>
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                            <tr>
                                                <td colspan="3" style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center">Nilai</b>
                                                </td>
                                                <td style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center" id="nilai_input">0</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center"></b>
                                                </td>
                                                <td style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center">X</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center">Bobot</b>
                                                </td>
                                                <td style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center">21,85%</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center">Total Nilai</b>
                                                </td>
                                                <td style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center" id="dimensi_input">0</b>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Tab-->
                            <!--begin::Tab-->
                            <div class="tab-pane px-7" id="kt_proses" role="tabpanel">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <table class="table table-bordered">
                                            <tr class="text-center">
                                                <th width="400">Pertanyaan</th>
                                                <th>Bukti Dukung</th>
                                                <th>Jawaban</th>
                                                <th>Nilai</th>
                                            </tr>
                                            <?php foreach ($proses as $index => $proc) : ?>
                                                <tr>
                                                    <td>
                                                        <b><?= $proc['indikator'] ?></b> <br>
                                                        <span class="ml-3"><?= (pertanyaanev($proc['id'])['pertanyaan'] != NULL || pertanyaanev($proc['id'])['pertanyaan'] == '' ? pertanyaanev($proc['id'])['pertanyaan'] : '-') ?></span>
                                                    </td>
                                                    <td style="vertical-align : middle;text-align:center;">
                                                        <?php if (buktidukung($proc['id'], $opd_name)) : ?>
                                                            <?php foreach (buktidukung($proc['id'], $opd_name) as $bk) : ?>
                                                                <?php if ($bk['lokasifile'] == NULL && $bk['extfile'] == '-') : ?>
                                                                    <b class="d-flex justify-content-center">-</b>
                                                                <?php else : ?>
                                                                    <?php if ($bk['extfile'] == "zip") : ?>
                                                                        <a href="<?= $bk['lokasifile'] ?>" target="_blank"><i class="fas fa-download text-warning"></i></a>
                                                                    <?php elseif ($bk['extfile'] == "pdf") : ?>
                                                                        <a href="<?= $bk['lokasifile'] ?>" target="_blank"><i class="fas fa-file-pdf text-danger"></i></a>
                                                                    <?php elseif ($bk['extfile'] == "jpg" || $bk['extfile'] == "jpeg" || $bk['extfile'] == "png") : ?>
                                                                        <a href="<?= $bk['lokasifile'] ?>" target="_blank"><i class="fas fa-file-image text-success"></i></a>
                                                                    <?php endif; ?>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td style="vertical-align : middle;text-align:center;">
                                                        <?php if (in_array(pertanyaanev($proc['id'])['nama_pertanyaan'], check())) : ?>
                                                            <?= jawaban($opd_id, date('Y'))[pertanyaanev($proc['id'])['nama_pertanyaan']] ?>
                                                        <?php else : ?>
                                                            <b class="justify-content-center">-</b>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td style="vertical-align : middle;text-align:center;">
                                                        <div class="form-group">
                                                            <select class="custom-select form-control" id="nilai_<?= $proc['id'] ?>" name="nilai_<?= $proc['id'] ?>">
                                                                <option selected="selected">Pilih</option>
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                            <tr>
                                                <td colspan="3" style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center">Nilai</b>
                                                </td>
                                                <td style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center" id="nilai_proses">0</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center"></b>
                                                </td>
                                                <td style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center">X</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center">Bobot</b>
                                                </td>
                                                <td style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center">32.37%</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center">Total Nilai</b>
                                                </td>
                                                <td style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center" id="dimensi_proses">0</b>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--end::Tab-->
                            <!--begin::Tab-->
                            <div class="tab-pane px-7" id="kt_output" role="tabpanel">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <table class="table table-bordered">
                                            <tr class="text-center">
                                                <th width="400">Pertanyaan</th>
                                                <th>Bukti Dukung</th>
                                                <th>Jawaban</th>
                                                <th>Nilai</th>
                                            </tr>
                                            <?php foreach ($output as $index => $out) : ?>
                                                <tr>
                                                    <td>
                                                        <b><?= $out['indikator'] ?></b> <br>
                                                        <span class="ml-3"><?= (pertanyaanev($out['id'])['pertanyaan'] != NULL || pertanyaanev($out['id'])['pertanyaan'] == '' ? pertanyaanev($out['id'])['pertanyaan'] : '-') ?></span>
                                                    </td>
                                                    <td style="vertical-align : middle;text-align:center;">
                                                        <?php if (buktidukung($out['id'], $opd_name)) : ?>
                                                            <?php foreach (buktidukung($out['id'], $opd_name) as $bk) : ?>
                                                                <?php if ($bk['lokasifile'] == NULL && $bk['extfile'] == '-') : ?>
                                                                    <b class="d-flex justify-content-center">-</b>
                                                                <?php else : ?>
                                                                    <?php if ($bk['extfile'] == "zip") : ?>
                                                                        <a href="<?= $bk['lokasifile'] ?>" target="_blank"><i class="fas fa-download text-warning"></i></a>
                                                                    <?php elseif ($bk['extfile'] == "pdf") : ?>
                                                                        <a href="<?= $bk['lokasifile'] ?>" target="_blank"><i class="fas fa-file-pdf text-danger"></i></a>
                                                                    <?php elseif ($bk['extfile'] == "jpg" || $bk['extfile'] == "jpeg" || $bk['extfile'] == "png") : ?>
                                                                        <a href="<?= $bk['lokasifile'] ?>" target="_blank"><i class="fas fa-file-image text-success"></i></a>
                                                                    <?php endif; ?>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td style="vertical-align : middle;text-align:center;">
                                                        <?php if (in_array(pertanyaanev($out['id'])['nama_pertanyaan'], check())) : ?>
                                                            <?= jawaban($opd_id, date('Y'))[pertanyaanev($out['id'])['nama_pertanyaan']] ?>
                                                        <?php else : ?>
                                                            <b class="justify-content-center">-</b>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td style="vertical-align : middle;text-align:center;">
                                                        <div class="form-group">
                                                            <select class="custom-select form-control" id="nilai_<?= $out['id'] ?>" name="nilai_<?= $out['id'] ?>">
                                                                <option selected="selected">Pilih</option>
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                            <tr>
                                                <td colspan="3" style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center">Nilai</b>
                                                </td>
                                                <td style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center" id="nilai_output">0</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center"></b>
                                                </td>
                                                <td style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center">X</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center">Bobot</b>
                                                </td>
                                                <td style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center">24.24%</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center">Total Nilai</b>
                                                </td>
                                                <td style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center" id="dimensi_output">0</b>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Tab-->
                            <!--begin::Tab-->
                            <div class="tab-pane px-7" id="kt_pengaduan" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <table class="table table-bordered">
                                            <tr class="text-center">
                                                <th width="400">Pertanyaan</th>
                                                <th>Bukti Dukung</th>
                                                <th>Jawaban</th>
                                                <th>Nilai</th>
                                            </tr>
                                            <?php foreach ($pengaduan as $index => $pgd) : ?>
                                                <tr>
                                                    <td>
                                                        <b><?= $pgd['indikator'] ?></b> <br>
                                                        <span class="ml-3"><?= (pertanyaanev($pgd['id'])['pertanyaan'] != NULL || pertanyaanev($pgd['id'])['pertanyaan'] == '' ? pertanyaanev($pgd['id'])['pertanyaan'] : '-') ?></span>
                                                    </td>
                                                    <td style="vertical-align : middle;text-align:center;">
                                                        <?php if (buktidukung($pgd['id'], $opd_name)) : ?>
                                                            <?php foreach (buktidukung($pgd['id'], $opd_name) as $bk) : ?>
                                                                <?php if ($bk['lokasifile'] == NULL && $bk['extfile'] == '-') : ?>
                                                                    <b class="d-flex justify-content-center">-</b>
                                                                <?php else : ?>
                                                                    <?php if ($bk['extfile'] == "zip") : ?>
                                                                        <a href="<?= $bk['lokasifile'] ?>" target="_blank"><i class="fas fa-download text-warning"></i></a>
                                                                    <?php elseif ($bk['extfile'] == "pdf") : ?>
                                                                        <a href="<?= $bk['lokasifile'] ?>" target="_blank"><i class="fas fa-file-pdf text-danger"></i></a>
                                                                    <?php elseif ($bk['extfile'] == "jpg" || $bk['extfile'] == "jpeg" || $bk['extfile'] == "png") : ?>
                                                                        <a href="<?= $bk['lokasifile'] ?>" target="_blank"><i class="fas fa-file-image text-success"></i></a>
                                                                    <?php endif; ?>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td style="vertical-align : middle;text-align:center;">
                                                        <?php if (in_array(pertanyaanev($pgd['id'])['nama_pertanyaan'], check())) : ?>
                                                            <?= jawaban($opd_id, date('Y'))[pertanyaanev($pgd['id'])['nama_pertanyaan']] ?>
                                                        <?php else : ?>
                                                            <b class="justify-content-center">-</b>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td style="vertical-align : middle;text-align:center;">
                                                        <div class="form-group">
                                                            <select class="custom-select form-control" id="nilai_<?= $pgd['id'] ?>" name="nilai_<?= $pgd['id'] ?>">
                                                                <option selected="selected">Pilih</option>
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                            <tr>
                                                <td colspan="3" style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center">Nilai</b>
                                                </td>
                                                <td style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center" id="nilai_pengaduan">0</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center"></b>
                                                </td>
                                                <td style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center">X</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center">Bobot</b>
                                                </td>
                                                <td style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center">21.54%</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center">Total Nilai</b>
                                                </td>
                                                <td style="vertical-align : middle;text-align:center;">
                                                    <b class="justify-content-center" id="dimensi_pengaduan">0</b>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="row mt-4 ml-1">
                                    <button type="submit" class="btn btn-danger font-weight-bold">Simpan</button>
                                    <button type="reset" class="btn btn-light-danger font-weight-bold ml-2">Batal</button>
                                </div>
                            </div>
                            <!--end::Tab-->
                        </div>
                    </form>
                </div>
                <!--begin::Card body-->
            </div>
            <!--end::Card-->
            <!--end::Penilaian Mandiri Content-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->