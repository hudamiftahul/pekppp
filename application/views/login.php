<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../../">
    <meta charset="utf-8" />
    <title>Login PEKPPP</title>
    <meta name="description" content="Singin page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="<?= base_url() ?>assets/css/pages/login/login-4.css" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="<?= base_url() ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="<?= base_url() ?>assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/media/logos/favicon.ico" />
    <style>
        .captcha-wrap {
            position: relative;
        }

        #CaptchaImageCode {
            text-align: center;
            margin-top: 15px;
            padding: 0px 0;
            width: 300px;
            overflow: hidden;
        }

        .capcode {
            font-size: 10px;
            display: block;
            -moz-user-select: none;
            -webkit-user-select: none;
            user-select: none;
            cursor: default;
            letter-spacing: 1px;
            font-family: 'Roboto Slab', serif;
            font-weight: 100;
            font-style: italic;
        }

        .ReloadBtn {
            background: url('<?= base_url() ?>captcha/logo.png') left top no-repeat;
            background-size: 100%;
            width: 32px;
            height: 32px;
            border: 0px;
            outline: none;
            position: absolute;
            bottom: 30px;
            left: 310px;
            cursor: pointer;
        }

        .btnSubmit {
            margin-top: 15px;
            border: 0px;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 18px;
            background-color: #1285c4;
            color: #fff;
            cursor: pointer;
        }

        .success {
            color: green;
            font-size: 18px;
            margin-bottom: 15px;
            display: none;
        }

        .error {
            color: red;
            display: none;
        }
    </style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Content-->
            <div class="login-container order-2 order-lg-1 d-flex flex-center flex-row-fluid px-7 pt-lg-0 pb-lg-0 pt-4 pb-6 bg-white">
                <!--begin::Wrapper-->
                <div class="login-content d-flex flex-column pt-lg-0 pt-12">
                    <!--begin::Signin-->
                    <div class="login-form">
                        <div class="logo_pemkot">
                            <img src="<?= base_url() ?>assets/media/logo/kopas.png" alt="pemkot" width="50" height="50">
                            <img src="<?= base_url() ?>assets/media/logo/kotamadinah.png" alt="madinah" width="150" height="50">
                            <img src="<?= base_url() ?>assets/media/logo/berakhlak.png" alt="berakhlak" width="150" height="50">
                            <img src="<?= base_url() ?>assets/media/logo/banggamelayani.png" alt="banggamelayani" width="80" height="80">
                        </div>
                        <!--begin::Form-->
                        <form class="form" method="POST" action="<?= base_url('auth/store') ?>">
                            <!--begin::Title-->
                            <div class="pb-5 pb-lg-15">
                                <!-- <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg mt-3">Halaman Login</h3> -->
                            </div>

                            <div id="error-msg">

                            </div>

                            <!--begin::Title-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Username</label>
                                <input class="form-control form-control-solid h-auto py-4 px-4 border-0" type="text" id="username" name="username" autocomplete="off" autofocus="on" required />
                                <span id="username-error" class="error"></span>
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                                </div>
                                <input class="form-control form-control-solid h-auto py-4 px-4 border-0" type="password" id="password" name="password" autocomplete="off" required />
                                <span id="password-error" class="error"></span>
                            </div>
                            <div class="form-group">
                                <div class="captcha-wrap">
                                    <div id="CaptchaImageCode">
                                        <canvas id="CapCode" class="capcode" width="200" height="50"></canvas>
                                    </div>
                                    <input type="button" class="ReloadBtn" onclick="CreateCaptcha()">
                                </div>
                                <div class="d-flex justify-content-between mt-5">
                                    <input type="text" id="captcha-code" class="form-control form-control-solid col-6" placeholder="Masukkan Captcha">
                                </div>
                                <span id="captcha-error" class="error"></span>
                            </div>
                            <!--end::Form group-->
                            <!--begin::Action-->
                            <div class="pb-lg-0 pb-5">
                                <button id="submit" class="btn font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3" style="background-color: #cc1706; color: #ffffff"><i class="fas fa-sign-in-alt" style="color: #ffffff"></i> Masuk</button>
                            </div>
                            <!--end::Action-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Signin-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--begin::Content-->
            <!--begin::Aside-->
            <div class="login-aside order-1 order-lg-2 bgi-no-repeat bgi-position-x-right">
                <div class="login-conteiner bgi-no-repeat bgi-position-x-right bgi-position-y-bottom" style="background-image: url(<?= base_url(); ?>assets/media/svg/illustrations/login-visual-4.svg);">
                    <!--begin::Aside title-->
                    <h1 class="pt-lg-40 pl-lg-20 pb-lg-0 pl-10 py-20 m-0 d-flex justify-content-lg-start font-weight-boldest text-white" style="font-size: 60px">Aplikasi
                        <br />PEKPPP
                        <br>
                    </h1>
                    <div class="d-flex justify-content-lg-start ml-5">
                        <img src="<?= base_url() ?>assets/media/emot/ok.png" class="ml-5" width="150" height="150">
                    </div>
                    <!--end::Aside title-->
                </div>
            </div>
            <!--end::Aside-->
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->
    <script>
        var base_url = '<?= base_url(); ?>'
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
                        "dark": "#181C32"
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
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="<?= base_url() ?>assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?= base_url() ?>assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="<?= base_url() ?>assets/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="<?= base_url() ?>assets/js/pages/custom/login/login-4.js"></script>
    <!--end::Page Scripts-->

    <!-- begin::script captcha -->
    <script>
        var cd;
        var IsAllowed = false;
        $(document).ready(function() {
            CreateCaptcha();
        });


        // Create Captcha
        function CreateCaptcha() {
            //$('#InvalidCapthcaError').hide();
            var alpha = new Array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');

            var i;
            for (i = 0; i < 6; i++) {
                var a = alpha[Math.floor(Math.random() * alpha.length)];
                var b = alpha[Math.floor(Math.random() * alpha.length)];
                var c = alpha[Math.floor(Math.random() * alpha.length)];
                var d = alpha[Math.floor(Math.random() * alpha.length)];
                var e = alpha[Math.floor(Math.random() * alpha.length)];
                var f = alpha[Math.floor(Math.random() * alpha.length)];
            }
            cd = a + ' ' + b + ' ' + c + ' ' + d + ' ' + e + ' ' + f;
            $('#CaptchaImageCode').empty().append('<canvas id="CapCode" class="capcode" width="300" height="80"></canvas>')

            var c = document.getElementById("CapCode"),
                ctx = c.getContext("2d"),
                x = c.width / 2,
                img = new Image();

            img.src = base_url + 'captcha/background.jpg';
            img.onload = function() {
                var pattern = ctx.createPattern(img, "repeat");
                ctx.fillStyle = pattern;
                ctx.fillRect(0, 0, c.width, c.height);
                ctx.font = "46px Roboto Slab";
                ctx.fillStyle = '#ccc';
                ctx.textAlign = 'center';
                ctx.setTransform(1, -0.12, 0, 1, 0, 15);
                ctx.fillText(cd, x, 55);
            };


        }

        // Validate Captcha
        function ValidateCaptcha() {
            var string1 = removeSpaces(cd);
            var string2 = removeSpaces($('#captcha-code').val());
            if (string1 == string2) {
                return true;
            } else {
                return false;
            }
        }

        // Remove Spaces
        function removeSpaces(string) {
            return string.split(' ').join('');
        }

        // Check Captcha
        function CheckCaptcha() {
            var result = ValidateCaptcha();
            if ($("#captcha-code").val() == "" || $("#captcha-code").val() == null || $("#captcha-code").val() == "undefined") {
                $('#captcha-error').text('Silakan masukkan kode yang diberikan di atas ini dalam gambar.').show();
                $('#captcha-error').focus();
            } else {
                if (result == false) {
                    IsAllowed = false;
                    $('#captcha-error').text('Captcha tidak valid! Silakan coba lagi.').show();
                    CreateCaptcha();
                } else {
                    IsAllowed = true;
                    $('#captcha-code').val('').attr('place-holder', 'Enter Captcha - Case Sensitive');
                    CreateCaptcha();
                    $('#captcha-error').fadeOut(100);
                    $('#success-message').fadeIn(500).css('display', 'block').delay(5000).fadeOut(250);
                }
                return IsAllowed
            }
        }
        $("body").on('click', 'button#submit', function(e) {

            e.preventDefault(); // avoid to execute the actual submit of the form.

            var form = $(this);
            var actionUrl = form.attr('action');

            var username = $("input[name=username]").val();
            var password = $("input[name=password]").val();

            $.ajax({
                type: 'POST',
                url: base_url + 'auth/store',
                data: {
                    username: username,
                    password: password
                },
                success: function(response) {
                    var resp = JSON.parse(response);
                    var reg = /.+?:\/\/.+?(\/.+?)(?:#|\?|$)/;
                    var pathname = reg.exec(resp.redirect_url)
                    if (resp.status == "success") {
                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-left",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        };

                        toastr.success(resp.message, "Sukses");
                        window.setTimeout(function() {
                            location.href = pathname[0];
                        }, 1250);
                    } else if (resp.status == "error") {
                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-left",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        };

                        toastr.error(resp.errormsg, "Error");
                    }
                }
            })
        });
    </script>
    <!-- end::script captcha -->

</body>
<!--end::Body-->

</html>