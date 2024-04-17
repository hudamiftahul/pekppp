<!DOCTYPE html>
<html>

<head>
    <title>Access Denied</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body {
            background-color: black;
            color: white;
        }

        h1 {
            color: red;
        }

        h6 {
            color: red;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="w3-display-middle">
        <h1 class="w3-jumbo w3-animate-top w3-center"><code>Akses Ditolak!!</code></h1>
        <hr class="w3-border-white w3-animate-left" style="margin:auto;width:50%">
        <?php if ($this->session->userdata('is_login') == 1) : ?>
            <h3 class="w3-center w3-animate-right">Anda telah melebihi batas maksimal pengisian.</h3>
            <h3 class="w3-center w3-animate-zoom">🚫🚫🚫🚫</h3>
            <h6 class="w3-center w3-animate-zoom"><a href="<?= base_url('dashboard') ?>">Kembali ke Dashboard</a></h6>
        <?php else : ?>
            <h3 class="w3-center w3-animate-right">Anda tidak memiliki akses pada halaman tersebut.</h3>
            <h3 class="w3-center w3-animate-zoom">🚫🚫🚫🚫</h3>
            <h6 class="w3-center w3-animate-zoom"><a href="<?= base_url('auth') ?>">Kembali ke Login</a></h6>
        <?php endif; ?>
    </div>
</body>

</html>