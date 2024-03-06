<?php
// Pastikan file ini disimpan dengan nama edit-mapel.php

// Lakukan koneksi ke database
include 'koneksi.php';

// Tangkap data yang dikirimkan melalui form
$kelas = $_POST['kelas'];
$tahun = $_POST['tahun'];
$mapel = $_POST['mapel'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];

// Buat query untuk mengupdate data mapel berdasarkan kelas dan hari
$query = "UPDATE mapel SET mapel = '$mapel', jam = '$jam' , tahun = '$tahun' WHERE kelas = '$kelas' AND hari = '$hari'";

// Eksekusi query
if(mysqli_query($koneksi, $query)) {
    // Jika berhasil diupdate, redirect ke halaman utama atau ke halaman yang diinginkan
    header("Location: adminmapel.php");
} else {
    // Jika gagal, tampilkan pesan error
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi database
mysqli_close($koneksi);
?>