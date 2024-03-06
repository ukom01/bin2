<?php
// Lakukan koneksi ke database
include 'koneksi.php';

// Tangkap data yang dikirimkan melalui form
$username = $_POST['username'];

// Buat query untuk menghapus data pengguna dari database
$query = "DELETE FROM user WHERE username = '$username'";

// Eksekusi query
if(mysqli_query($koneksi, $query)) {
    // Jika berhasil dihapus, redirect ke halaman utama
    header("Location: adminhome.php");
} else {
    // Jika gagal, tampilkan pesan error
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
