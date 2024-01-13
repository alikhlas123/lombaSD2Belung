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
            <h1>Tabel Hasil</h1>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Hasil Lomba Kebersihan Kelas</h5>

                        <!-- Table with hoverable rows -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Penilai</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Nilai</th>
                                </tr>
                            </thead>
                            <?php
                            include "database.php";
                            $query = "SELECT * FROM kelas";
                            $result = $koneksi->query($query);
                            $no = 1;
                            while ($data = $result->fetch_array()) {
                            ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['nm_penilai']; ?></td>
                                        <td><?php echo $data['kelas']; ?></td>
                                        <td><?php echo $data['lantai']; ?></td>
                                        <td><?php echo $data['lemari']; ?></td>
                                        <td><?php echo $data['mejakursi']; ?></td>
                                        <td><?php echo $data['papan']; ?></td>
                                        <td><?php echo $data['pintu']; ?></td>
                                        <td><?php echo $data['gambar']; ?></td>
                                        <td><?php echo $data['jam']; ?></td>
                                        <td><?php echo $data['mapel']; ?></td>
                                        <td><?php echo $data['struktur']; ?></td>
                                        <td><?php echo $data['piket']; ?></td>
                                        <td><?php echo $data['atk']; ?></td>
                                        <td><?php echo $data['taplak']; ?></td>
                                        <td><?php echo $data['alat']; ?></td>
                                        <td><?php echo $data['slogan']; ?></td>
                                        <td><?php echo $data['mejaguru']; ?></td>
                                        <td><?php echo $data['mejasiswa']; ?></td>
                                        <td><?php echo $data['alatbersih']; ?></td>
                                        <td><?php echo $data['dinding']; ?></td>
                                    </tr>
                                </tbody>
                            <?php
                            }
                            ?>
                            <a href="update-kelas.php">
                                <button type="submit" class="btn btn-warning">
                                    Update
                                </button>
                            </a>
                        </table>
                        <!-- End Table with hoverable rows -->
                    </div>
                    <br>
                    <div class="card-body">
                        <h5 class="card-title">Hasil Lomba Mading</h5>
                        <!-- Table with hoverable rows -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Penilai</th>
                                    <th scope="col">Peserta</th>
                                    <th scope="col">Isi</th>
                                    <th scope="col">Bahasa</th>
                                    <th scope="col">Kreativitas</th>
                                    <th scope="col">Kerapian</th>
                                </tr>
                            </thead>
                            <?php
                            include "database.php";
                            $query = "SELECT * FROM mading";
                            $result = $koneksi->query($query);
                            $no = 1;
                            while ($data = $result->fetch_array()) {
                            ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['nm_penilai']; ?></td>
                                        <td><?php echo $data['peserta']; ?></td>
                                        <td><?php echo $data['isi']; ?></td>
                                        <td><?php echo $data['bahasa']; ?></td>
                                        <td><?php echo $data['kreativitas']; ?></td>
                                        <td><?php echo $data['kerapian']; ?></td>
                                    </tr>
                                </tbody>
                            <?php
                            }
                            ?>
                            <a href="update-mading.php">
                                <button type="submit" class="btn btn-warning">
                                    Update
                                </button>
                            </a>
                        </table>
                        <!-- End Table with hoverable rows -->
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Nilai Lomba Kebersihan Kelas</h5>
                        <!-- Table with hoverable rows -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Penilai</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Nilai</th>
                                </tr>
                            </thead>
                            <?php
                            include "database.php";
                            $query = "SELECT * FROM kelas";
                            $result = $koneksi->query($query);
                            $no = 1;
                            while ($data = $result->fetch_array()) {
                                $nilai1 = ($data['lantai'] + $data['lemari'] + $data['mejakursi'] + $data['papan'] + $data['pintu']) * 0.4;
                                $nilai2 = ($data['gambar'] + $data['jam'] + $data['mapel'] + $data['struktur'] + $data['piket'] + $data['atk'] + $data['taplak'] + $data['alat'] + $data['slogan']) * 0.3;
                                $nilai3 = ($data['mejaguru'] + $data['mejasiswa'] + $data['alatbersih'] + $data['dinding']) * 0.3;
                                $total = $nilai1 + $nilai2 + $nilai3;
                            ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['nm_penilai']; ?></td>
                                        <td><?php echo $data['kelas']; ?></td>
                                        <td><?php echo $total; ?></td>
                                    </tr>
                                </tbody>
                            <?php
                            }
                            ?>
                        </table>
                        <!-- End Table with hoverable rows -->
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Nilai Lomba Mading</h5>
                        <!-- Table with hoverable rows -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Penilai</th>
                                    <th scope="col">Peserta</th>
                                    <th scope="col">Nilai</th>
                                </tr>
                            </thead>
                            <?php
                            include "database.php";
                            $query = "SELECT * FROM mading";
                            $result = $koneksi->query($query);
                            $no = 1;
                            while ($data = $result->fetch_array()) {
                                $total = $data['isi'] + $data['bahasa'] + $data['kreativitas'] + $data['kerapian'];
                            ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['nm_penilai']; ?></td>
                                        <td><?php echo $data['peserta']; ?></td>
                                        <td><?php echo $total; ?></td>
                                    </tr>
                                </tbody>
                            <?php
                            }
                            ?>
                        </table>
                        <!-- End Table with hoverable rows -->
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Nilai Akhir Lomba Kebersihan Kelas</h5>
                        <!-- Table with hoverable rows -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Total Nilai</th>
                                </tr>
                            </thead>
                            <?php
                            include "database.php";
                            $query = "SELECT kelas, SUM((lantai + lemari + mejakursi + papan + pintu) * 0.4 
                    + (gambar + jam + mapel + struktur + piket + atk + taplak + alat + slogan) * 0.3 
                    + (mejaguru + mejasiswa + alatbersih + dinding) * 0.3)/3 AS total_nilai
                    FROM kelas GROUP BY kelas ORDER BY total_nilai DESC";

                            $result = $koneksi->query($query);
                            $no = 1;
                            while ($data = $result->fetch_array()) {
                            ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['kelas']; ?></td>
                                        <td><?php echo $data['total_nilai']; ?></td>
                                    </tr>
                                </tbody>
                            <?php
                            }
                            ?>
                        </table>
                        <!-- End Table with hoverable rows -->
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Nilai Akhir Lomba Mading</h5>
                        <!-- Table with hoverable rows -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Peserta</th>
                                    <th scope="col">Total Nilai</th>
                                </tr>
                            </thead>
                            <?php
                            include "database.php";

                            // Menggunakan GROUP BY untuk mengelompokkan data berdasarkan peserta
                            // Menjumlahkan nilai-nilai untuk setiap peserta
                            $query = "SELECT MAX(nm_penilai) AS nm_penilai, peserta, SUM(isi + bahasa + kreativitas + kerapian)/3 AS total_nilai
                    FROM mading GROUP BY peserta ORDER BY total_nilai DESC";

                            $result = $koneksi->query($query);
                            $no = 1;
                            while ($data = $result->fetch_array()) {
                            ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['peserta']; ?></td>
                                        <td><?php echo $data['total_nilai']; ?></td>
                                    </tr>
                                </tbody>
                            <?php
                            }
                            ?>
                        </table>
                        <!-- End Table with hoverable rows -->
                    </div>
                </div>
                <!-- End Right side columns -->
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