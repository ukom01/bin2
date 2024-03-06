<?php
// Pastikan file ini disimpan dengan nama hapus-mapel.php

// Lakukan koneksi ke database
include 'koneksi.php';

// Tangkap data yang dikirimkan melalui form
$tahun = $_POST['tahun'];
$kelas = $_POST['kelas'];
$hari = $_POST['hari'];

// Buat query untuk menghapus data mapel berdasarkan kelas, tahun, dan hari
$query = "DELETE FROM mapel WHERE tahun = '$tahun' AND kelas = '$kelas' AND hari = '$hari'";

// Eksekusi query
if(mysqli_query($koneksi, $query)) {
    // Jika berhasil dihapus, redirect ke halaman utama atau ke halaman yang diinginkan
    header("Location: adminmapel.php");
} else {
    // Jika gagal, tampilkan pesan error
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
