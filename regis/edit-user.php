<?php
// Lakukan koneksi ke database
include 'koneksi.php';

// Tangkap data yang dikirimkan melalui form
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

// Buat query untuk melakukan update data pengguna di dalam database
$query = "UPDATE user SET password = '$password', level = '$level' WHERE username = '$username'";

// Eksekusi query
if(mysqli_query($koneksi, $query)) {
    // Jika berhasil diupdate, redirect ke halaman utama
    header("Location: adminhome.php");
} else {
    // Jika gagal, tampilkan pesan error
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi database
mysqli_close($koneksi);
?>