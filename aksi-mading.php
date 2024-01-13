<?php
include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['tambah'])) {
        // Add new data
        $nm_penilai = $_POST['nm_penilai'];
        $peserta = $_POST['peserta'];
        $isi = $_POST['isi'];
        $bahasa = $_POST['bahasa'];
        $kreativitas = $_POST['kreativitas'];
        $kerapian = $_POST['kerapian'];
        $query = mysqli_query($koneksi, "INSERT INTO mading (nm_penilai,peserta,isi,bahasa,kreativitas,kerapian) VALUES ('$nm_penilai','$peserta','$isi','$bahasa','$kreativitas','$kerapian')");
    } elseif (isset($_POST['ubah'])) {
        // Update existing data
        $id_alternatif = $_POST['id_alternatif'];
        $nm_alternatif = $_POST['nm_alternatif'];
        $query = mysqli_query($koneksi, "UPDATE alternatif SET nm_alternatif = '$nm_alternatif' WHERE id_alternatif = '$id_alternatif'");
    } elseif (isset($_POST['hapus'])) {
        // Delete data
        $id_mading = $_POST['id_mading'];
        $query = mysqli_query($koneksi, "DELETE FROM mading WHERE id_mading = '$id_mading'");
    }

    if ($query) {
        echo "<script> alert('Data berhasil disimpan')</script>";
        header("refresh:0;form-mading.php");
    } else {
        echo "<script> alert('Data tidak berhasil disimpan')</script>";
        header("refresh:0;form-mading.php");
    }
}
