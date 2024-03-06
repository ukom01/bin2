<?php
// Pastikan file ini disimpan dengan nama tambah-mapel.php

// Lakukan koneksi ke database
include 'koneksi.php';

// Tangkap data yang dikirimkan melalui form
$kelas = $_POST['kelas'];
$tahun = $_POST['tahun'];
$mapel = $_POST['mapel'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];

// Buat query untuk menambahkan data mapel ke dalam database
$query = "INSERT INTO mapel (kelas, tahun, mapel, hari, jam) 
          VALUES ('$kelas', '$tahun', '$mapel', '$hari', '$jam')";

// Eksekusi query
if(mysqli_query($koneksi, $query)) {
    // Jika berhasil ditambahkan, redirect ke halaman utama atau ke halaman yang diinginkan
    header("Location: adminmapel.php");
} else {
    // Jika gagal, tampilkan pesan error
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi database
mysqli_close($koneksi);
?>