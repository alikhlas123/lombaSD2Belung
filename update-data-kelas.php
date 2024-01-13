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
            <h1>Form Lomba Kebersihan</h1>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <br>
                            <!-- Vertical Form -->
                            <form class="row g-3" action="aksi-kelas.php" method="post">
                                <?php
                                include "database.php";
                                $sql = "SELECT * FROM kelas";
                                $query = mysqli_query($koneksi, $sql);
                                $data = mysqli_fetch_assoc($query)
                                ?>
                                <div class="col-12">
                                    <label for="nm_penilai" class="form-label">Nama Penilai</label>
                                    <input type="text" class="form-control" name="nm_penilai" value="<?php echo $data['nm_penilai']; ?>" />
                                </div>
                                <div class="col-12">
                                    <label for="kelas" class="form-label">Kelas</label>
                                    <input type="text" class="form-control" name="kelas" value="<?php echo $data['kelas']; ?>" />
                                </div>
                                <div class="col-12">
                                    <h3 class="card-title">Kebersihan</h3>
                                    <label for="lantai" class="form-label">Kebersihan Lantai</label>
                                    <select class="form-select" class="form-control" name="lantai">
                                        <?php
                                        // Menampilkan opsi berdasarkan nilai dari database
                                        for ($i = 1; $i <= 10; $i++) {
                                            $selected = ($i == $data['lantai']) ? "selected" : ""; // Menandai opsi yang dipilih
                                            echo "<option value=\"$i\" $selected>$i</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="lemari" class="form-label">Kebersihan Lemari Kelas</label>
                                    <select class="form-select" class="form-control" name="lantai">
                                        <?php
                                        // Menampilkan opsi berdasarkan nilai dari database
                                        for ($i = 1; $i <= 10; $i++) {
                                            $selected = ($i == $data['lemari']) ? "selected" : ""; // Menandai opsi yang dipilih
                                            echo "<option value=\"$i\" $selected>$i</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="mejakursi" class="form-label">Kebersihan Meja dan Kursi</label>
                                    <select class="form-select" class="form-control" name="lantai">
                                        <?php
                                        // Menampilkan opsi berdasarkan nilai dari database
                                        for ($i = 1; $i <= 10; $i++) {
                                            $selected = ($i == $data['mejakursi']) ? "selected" : ""; // Menandai opsi yang dipilih
                                            echo "<option value=\"$i\" $selected>$i</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="papan" class="form-label">Kebersihan Papan Tulis</label>
                                    <select class="form-select" class="form-control" name="lantai">
                                        <?php
                                        // Menampilkan opsi berdasarkan nilai dari database
                                        for ($i = 1; $i <= 10; $i++) {
                                            $selected = ($i == $data['papan']) ? "selected" : ""; // Menandai opsi yang dipilih
                                            echo "<option value=\"$i\" $selected>$i</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="pintu" class="form-label">Kebersihan Pintu dan Jendela</label>
                                    <select class="form-select" class="form-control" name="lantai">
                                        <?php
                                        // Menampilkan opsi berdasarkan nilai dari database
                                        for ($i = 1; $i <= 10; $i++) {
                                            $selected = ($i == $data['pintu']) ? "selected" : ""; // Menandai opsi yang dipilih
                                            echo "<option value=\"$i\" $selected>$i</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <h3 class="card-title">Kelengkapan</h3>
                                    <label for="gambar" class="form-label">Keberadaan gambar presiden, wakil presiden, dan Pancasila</label>
                                    <select class="form-select" class="form-control" name="lantai">
                                        <?php
                                        // Menampilkan opsi berdasarkan nilai dari database
                                        for ($i = 1; $i <= 10; $i++) {
                                            $selected = ($i == $data['gambar']) ? "selected" : ""; // Menandai opsi yang dipilih
                                            echo "<option value=\"$i\" $selected>$i</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="jam" class="form-label">Keberadaan jam</label>
                                    <select class="form-select" class="form-control" name="lantai">
                                        <?php
                                        // Menampilkan opsi berdasarkan nilai dari database
                                        for ($i = 1; $i <= 10; $i++) {
                                            $selected = ($i == $data['jam']) ? "selected" : ""; // Menandai opsi yang dipilih
                                            echo "<option value=\"$i\" $selected>$i</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="mapel" class="form-label">Keberadaan jadwal mata pelajaran</label>
                                    <select class="form-select" class="form-control" name="lantai">
                                        <?php
                                        // Menampilkan opsi berdasarkan nilai dari database
                                        for ($i = 1; $i <= 10; $i++) {
                                            $selected = ($i == $data['mapel']) ? "selected" : ""; // Menandai opsi yang dipilih
                                            echo "<option value=\"$i\" $selected>$i</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="struktur" class="form-label">Keberadaan struktur organisasi kelas</label>
                                    <select class="form-select" class="form-control" name="lantai">
                                        <?php
                                        // Menampilkan opsi berdasarkan nilai dari database
                                        for ($i = 1; $i <= 10; $i++) {
                                            $selected = ($i == $data['struktur']) ? "selected" : ""; // Menandai opsi yang dipilih
                                            echo "<option value=\"$i\" $selected>$i</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="piket" class="form-label">Keberadaan jadwal piket harian</label>
                                    <select class="form-select" class="form-control" name="lantai">
                                        <?php
                                        // Menampilkan opsi berdasarkan nilai dari database
                                        for ($i = 1; $i <= 10; $i++) {
                                            $selected = ($i == $data['piket']) ? "selected" : ""; // Menandai opsi yang dipilih
                                            echo "<option value=\"$i\" $selected>$i</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="atk" class="form-label">Keberadaan alat tulis kelas seperti spidol dan penghapus papan tulis</label>
                                    <select class="form-select" class="form-control" name="lantai">
                                        <?php
                                        // Menampilkan opsi berdasarkan nilai dari database
                                        for ($i = 1; $i <= 10; $i++) {
                                            $selected = ($i == $data['atk']) ? "selected" : ""; // Menandai opsi yang dipilih
                                            echo "<option value=\"$i\" $selected>$i</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="taplak" class="form-label">Keberadaan taplak meja</label>
                                    <select class="form-select" class="form-control" name="lantai">
                                        <?php
                                        // Menampilkan opsi berdasarkan nilai dari database
                                        for ($i = 1; $i <= 10; $i++) {
                                            $selected = ($i == $data['taplak']) ? "selected" : ""; // Menandai opsi yang dipilih
                                            echo "<option value=\"$i\" $selected>$i</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="alat" class="form-label">Keberadaan alat kebersihan kelas</label>
                                    <select class="form-select" class="form-control" name="lantai">
                                        <?php
                                        // Menampilkan opsi berdasarkan nilai dari database
                                        for ($i = 1; $i <= 10; $i++) {
                                            $selected = ($i == $data['alat']) ? "selected" : ""; // Menandai opsi yang dipilih
                                            echo "<option value=\"$i\" $selected>$i</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="slogan" class="form-label">Keberadaan slogan/kata motivasi</label>
                                    <select class="form-select" class="form-control" name="lantai">
                                        <?php
                                        // Menampilkan opsi berdasarkan nilai dari database
                                        for ($i = 1; $i <= 10; $i++) {
                                            $selected = ($i == $data['slogan']) ? "selected" : ""; // Menandai opsi yang dipilih
                                            echo "<option value=\"$i\" $selected>$i</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <h3 class="card-title">Keindahan</h3>
                                    <label for="mejaguru" class="form-label">Penataan meja guru</label>
                                    <select class="form-select" class="form-control" name="lantai">
                                        <?php
                                        // Menampilkan opsi berdasarkan nilai dari database
                                        for ($i = 1; $i <= 10; $i++) {
                                            $selected = ($i == $data['mejaguru']) ? "selected" : ""; // Menandai opsi yang dipilih
                                            echo "<option value=\"$i\" $selected>$i</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="mejasiswa" class="form-label">Penataan meja dan kursi siswa</label>
                                    <select class="form-select" class="form-control" name="lantai">
                                        <?php
                                        // Menampilkan opsi berdasarkan nilai dari database
                                        for ($i = 1; $i <= 10; $i++) {
                                            $selected = ($i == $data['mejakursi']) ? "selected" : ""; // Menandai opsi yang dipilih
                                            echo "<option value=\"$i\" $selected>$i</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="alatbersih" class="form-label">Penataan peralatan kebersihan</label>
                                    <select class="form-select" class="form-control" name="lantai">
                                        <?php
                                        // Menampilkan opsi berdasarkan nilai dari database
                                        for ($i = 1; $i <= 10; $i++) {
                                            $selected = ($i == $data['alatbersih']) ? "selected" : ""; // Menandai opsi yang dipilih
                                            echo "<option value=\"$i\" $selected>$i</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="dinding" class="form-label">Penataan hiasan dinding di kelas</label>
                                    <select class="form-select" class="form-control" name="lantai">
                                        <?php
                                        // Menampilkan opsi berdasarkan nilai dari database
                                        for ($i = 1; $i <= 10; $i++) {
                                            $selected = ($i == $data['dinding']) ? "selected" : ""; // Menandai opsi yang dipilih
                                            echo "<option value=\"$i\" $selected>$i</option>";
                                        }
                                        ?>
                                    </select>
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