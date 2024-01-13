<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Dashboard - DSS Penentuan Beasiswa</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="" />
                <span class="d-none d-lg-block">Form Penilaian Lomba</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- End Dashboard Nav -->

            <!-- Form Input Data -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Form</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="form-kelas.php">
                            <i class="bi bi-circle"></i><span>Lomba Kebersihan</span>
                        </a>
                    </li>
                    <li>
                        <a href="form-mading.php">
                            <i class="bi bi-circle"></i><span>Lomba Mading</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Forms Input Data -->

            <!-- Table Data -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="result.php">
                    <i class="bi-bar-chart"></i>
                    <span>Hasil Akhir</span>
                </a>
            </li>
            <!-- End Tabel Data -->
        </ul>
    </aside>
    <!-- End Sidebar-->

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Form Lomba Mading</h1>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <br>
                            <!-- Vertical Form -->
                            <form class="row g-3" action="aksi-mading.php" method="post">
                                <div class="col-12">
                                    <label for="nm_penilai" class="form-label">Nama Penilai</label>
                                    <input type="text" class="form-control" name="nm_penilai" />
                                </div>
                                <div class="col-12">
                                    <label for="peserta" class="form-label">Peserta</label>
                                    <input type="text" class="form-control" name="peserta" />
                                </div>
                                <div class="col-12">
                                    <h3 class="card-title">Isi Poster</h3>
                                    <input type="text" class="form-control" name="isi" placeholder="Diisi Angka 1-100">
                                    <br>
                                    <h3 class="card-title">Bahasa yang ditata/digunakan</h3>
                                    <input type="text" class="form-control" name="bahasa" placeholder="Diisi Angka 1-100">
                                    <br>
                                    <h3 class="card-title">Kreativitas poster</h3>
                                    <input type="text" class="form-control" name="kreativitas" placeholder="Diisi Angka 1-100">
                                    <br>
                                    <h3 class="card-title">Kerapian Poster</h3>
                                    <input type="text" class="form-control" name="kerapian" placeholder="Diisi Angka 1-100">
                                </div>
                                <div class="text-start">
                                    <button type="submit" name="tambah" class="btn btn-primary">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary">
                                        Reset
                                    </button>
                                </div>
                            </form>
                            <!-- Vertical Form -->
                        </div>
                    </div>
                </div>
        </section>
    </main>
    <!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>