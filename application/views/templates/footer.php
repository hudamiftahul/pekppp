<!--begin::Footer-->
<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
    <!--begin::Container-->
    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
        <!--begin::Copyright-->
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted font-weight-bold mr-2">2024©</span>
            <a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">BAGOR KOPAS</a>
        </div>
        <!--end::Copyright-->
    </div>
    <!--end::Container-->
</div>
<!--end::Footer-->
</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<!--end::Main-->
<!-- begin::User Panel-->
<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
        <h3 class="font-weight-bold m-0">User Profile
        </h3>
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-danger" id="kt_quick_user_close">
            <i class="ki ki-close icon-xs text-muted"></i>
        </a>
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="offcanvas-content pr-5 mr-n5">
        <!--begin::Header-->
        <div class="d-flex align-items-center mt-5">
            <div class="symbol symbol-100 mr-5">
                <div class="symbol-label" style="background-image:url('assets/media/<?= $this->session->userdata('photo') ?>')"></div>
                <i class="symbol-badge bg-success"></i>
            </div>
            <div class="d-flex flex-column">
                <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-danger"><?= $this->session->userdata('name') ?></a>
                <div class="text-muted mt-1">
                    <?php if ($this->session->userdata('role_id') == 1) : ?>
                        Superadmin
                    <?php elseif ($this->session->userdata('role_id') == 2) : ?>
                        Evaluator
                    <?php elseif ($this->session->userdata('role_id') == 3) : ?>
                        User
                    <?php endif; ?>
                </div>
                <div class="navi mt-2">
                    <a href="#" class="navi-item">
                        <span class="navi-link p-0 pb-2">
                            <span class="navi-icon mr-1">
                                <span class="svg-icon svg-icon-lg svg-icon-danger">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                                            <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                            <span class="navi-text text-muted text-hover-danger">-</span>
                        </span>
                    </a>
                    <a href="<?= base_url() ?>auth/logout" class="btn btn-sm btn-light-danger font-weight-bolder py-2 px-5">Keluar</a>
                </div>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Separator-->
        <div class="separator separator-dashed mt-8 mb-5"></div>
        <!--end::Separator-->
    </div>
    <!--end::Content-->
</div>
<!-- end::User Panel-->
<script>
    var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>
    var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1400
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#3699FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#E4E6EF",
                    "dark": "red"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1F0FF",
                    "secondary": "#EBEDF3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#3F4254",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#EBEDF3",
                "gray-300": "#E4E6EF",
                "gray-400": "#D1D3E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#7E8299",
                "gray-700": "#5E6278",
                "gray-800": "#3F4254",
                "gray-900": "#181C32"
            },
            "red": {
                "red-100": "#FB8C8C",
                "red-200": "#FA6A6A",
                "red-300": "#FA4747",
                "red-400": "#F92424",
                "red-500": "#F30606",
                "red-600": "#D00505",
                "red-700": "#AD0404",
                "red-800": "#8B0303",
                "red-900": "#680202",
            }
        },
        "font-family": "Poppins"
    };
</script>
<script>
    var base_url = '<?= base_url() ?>';
</script>

<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="<?= base_url() ?>assets/plugins/global/plugins.bundle.js"></script>
<script src="<?= base_url() ?>assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="<?= base_url() ?>assets/js/scripts.bundle.js"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Vendors(used by this page)-->
<script src="<?= base_url() ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="<?= base_url() ?>assets/js/pages/widgets.js"></script>
<!--end::Page Scripts-->
<!--begin::Page Scripts(used by this page)-->
<script src="<?= base_url() ?>assets/js/pages/crud/ktdatatable/base/html-table.js"></script>
<!--end::Page Scripts-->
<!--begin::Page Scripts(used by this page)-->
<script src="<?= base_url() ?>assets/js/pages/features/miscellaneous/sweetalert2.js"></script>
<!--end::Page Scripts-->
<script src="<?= base_url(); ?>assets/js/pages/custom/contacts/edit-contact.js"></script>
<!--begin::Page Vendors(used by this page)-->
<!-- <script src="<?= base_url() ?>assets/plugins/custom/jstree/jstree.bundle.js"></script> -->
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<!-- <script src="<?= base_url() ?>assets/js/pages/features/miscellaneous/treeview.js"></script> -->
<!--end::Page Scripts-->

<!-- custom js -->
<script src="<?= base_url() ?>assets/js/upload/kepel.js"></script>
<script src="<?= base_url() ?>assets/js/upload/profsdm.js"></script>
<script src="<?= base_url() ?>assets/js/upload/sarpras.js"></script>
<script src="<?= base_url() ?>assets/js/upload/sipp.js"></script>
<script src="<?= base_url() ?>assets/js/upload/konsul.js"></script>
<script src="<?= base_url() ?>assets/js/upload/inovasi.js"></script>
<script src="<?= base_url() ?>assets/js/upload/tambahan.js"></script>
<script src="<?= base_url() ?>assets/js/upload/formulir3.js"></script>

<?php if ($this->session->flashdata('success')) : ?>
    <script>
        $("#kt_sweetalert_demo_3_3").click(function(e) {
            Swal.fire("Sukses!", $this->session->flashdata('success'), "success");
        });
    </script>
<?php endif; ?>
</body>
<!--end::Body-->

</html>