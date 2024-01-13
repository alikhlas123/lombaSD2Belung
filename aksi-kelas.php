<?php
include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['tambah'])) {
        // Add new data
        $nm_penilai = $_POST['nm_penilai'];
        $kelas = $_POST['kelas'];
        $lantai = $_POST['lantai'];
        $lemari = $_POST['lemari'];
        $mejakursi = $_POST['mejakursi'];
        $papan = $_POST['papan'];
        $pintu = $_POST['pintu'];
        $gambar = $_POST['gambar'];
        $jam = $_POST['jam'];
        $mapel = $_POST['mapel'];
        $struktur = $_POST['struktur'];
        $piket = $_POST['piket'];
        $atk = $_POST['atk'];
        $taplak = $_POST['taplak'];
        $alat = $_POST['alat'];
        $slogan = $_POST['slogan'];
        $mejaguru = $_POST['mejaguru'];
        $mejasiswa = $_POST['mejasiswa'];
        $alatbersih = $_POST['alatbersih'];
        $dinding = $_POST['dinding'];
        $query = mysqli_query($koneksi, "INSERT INTO kelas (nm_penilai,kelas,lantai,lemari,mejakursi,papan,pintu,gambar,jam,mapel,struktur,piket,atk,taplak,alat,slogan,mejaguru,mejasiswa,alatbersih,dinding) VALUES ('$nm_penilai','$kelas','$lantai','$lemari','$mejakursi','$papan','$pintu','$gambar','$jam','$mapel','$struktur','$piket','$atk','$taplak','$alat','$slogan','$mejaguru','$mejasiswa','$alatbersih','$dinding')");
    } elseif (isset($_POST['ubah'])) {
        // Update existing data
        $nm_penilai = $_POST['nm_penilai'];
        $kelas = $_POST['kelas'];
        $lantai = $_POST['lantai'];
        $lemari = $_POST['lemari'];
        $mejakursi = $_POST['mejakursi'];
        $papan = $_POST['papan'];
        $pintu = $_POST['pintu'];
        $gambar = $_POST['gambar'];
        $jam = $_POST['jam'];
        $mapel = $_POST['mapel'];
        $struktur = $_POST['struktur'];
        $piket = $_POST['piket'];
        $atk = $_POST['atk'];
        $taplak = $_POST['taplak'];
        $alat = $_POST['alat'];
        $slogan = $_POST['slogan'];
        $mejaguru = $_POST['mejaguru'];
        $mejasiswa = $_POST['mejasiswa'];
        $alatbersih = $_POST['alatbersih'];
        $dinding = $_POST['dinding'];
        $query = mysqli_query($koneksi, "UPDATE kelas SET nm_penilai = '$nm_penilai', kelas = '$kelas' WHERE id_alternatif = '$id_alternatif'");
    } elseif (isset($_POST['hapus'])) {
        // Delete data
        $id_kelas = $_POST['id_kelas'];
        $query = mysqli_query($koneksi, "DELETE FROM kelas WHERE id_kelas = '$id_kelas'");
    }

    if ($query) {
        echo "<script> alert('Data berhasil disimpan')</script>";
        header("refresh:0;form-kelas.php");
    } else {
        echo "<script> alert('Data tidak berhasil disimpan')</script>";
        header("refresh:0;form-kelas.php");
    }
}
