<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tahun = $_POST["tahun"];
    $kelas = $_POST["kelas"];
    $nis = $_POST["nis"];
    $semester = $_POST["semester"];
    $nilai_b_indo = $_POST["nilai_b_indo"];
    $nilai_matematika = $_POST["nilai_matematika"];
    $nilai_agama = $_POST["nilai_agama"];
    $nilai_ipa = $_POST["nilai_ipa"];
    $nilai_pkn = $_POST["nilai_pkn"];
    $nilai_ips = $_POST["nilai_ips"];
    $nilai_sbk = $_POST["nilai_sbk"];
    $nilai_penjas = $_POST["nilai_penjas"];
    $nilai_b_ing = $_POST["nilai_b_ing"];
    $nilai_mulok = $_POST["nilai_mulok"];

    $insertQuery = "INSERT INTO nilai (Tahun, Kelas, Nis, Semester, Nil_b_indo, Nil_matematika, Nil_agama, Nil_ipa, Nil_pkn, Nil_ips, Nil_sbk, Nil_penjas, Nil_b_ing, Nil_mulok)
    VALUES ('$tahun', '$kelas', '$nis', '$semester', '$nilai_b_indo', '$nilai_matematika', '$nilai_agama', '$nilai_ipa', '$nilai_pkn', '$nilai_ips', '$nilai_sbk', '$nilai_penjas', '$nilai_b_ing', '$nilai_mulok')";

    if (mysqli_query($koneksi, $insertQuery)) {
        header("Location: pengunjung.php");
        exit();
    } else {
        echo "Gagal menambahkan data siswa. Error: " . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>