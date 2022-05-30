<!DOCTYPE html>
<html lang = "id">
<!--
    Nama  : Muhammad Satria Ramadhani
    NIM   : 2005128
    Kelas : Ilmu Komputer - KOM-4C2
-->

<!-- Web preparation. -->
<head>
    <link rel = "icon" href = "img/logo-circle.png" />
    <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel = "stylesheet" href = "../assets/style/additional-style.css" />
    <meta charset = "UTF-8" />
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
    <title>Tugas Praktikum 03 - Desain dan Pemrograman Web</title>
</head>

<!-- Body. -->
<body>
    <nav class = "navbar navbar-expand-md bg-primary">
        <div class = "container-fluid mx-5">
            <button
                class = "navbar-toggler navbar-dark"
                type = "button"
                aria-controls = "navbarSupportedContent"
                aria-expanded = "false"
                data-bs-target  = "#navbarSupportedContent" 
                data-bs-toggle = "collapse">
                <span class = "navbar-toggler-icon"></span>
            </button>
            <div class = "collapse navbar-collapse" id = "navbarSupportedContent">
                <ul class = "navbar-nav me-auto my-1">
                    <li class = "nav-item text-center">
                        <a class = "nav-link text-white" aria-current = "page" href = "<?= base_url('/admin/auth/logout'); ?>">Tentang Kami</a>
                    </li>
                    <li class = "nav-item text-center">
                        <a class = "nav-link text-white" href = "<?= base_url('/admin/dev'); ?>">[Dev Room]</a>
                    </li>
                </ul>
                <div class = "d-flex justify-content-center">
                    <a href = "<?= base_url('/admin/auth/logout'); ?>">
                        <button class = "btn btn-warning">Logout</button>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>