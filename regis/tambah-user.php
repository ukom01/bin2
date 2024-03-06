<?php
// Lakukan koneksi ke database
include 'koneksi.php';

// Tangkap data yang dikirimkan melalui form
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

// Buat query untuk menambahkan data pengguna ke dalam database
$query = "INSERT INTO user (username, password, level) 
          VALUES ('$username', '$password', '$level')";

// Eksekusi query
if(mysqli_query($koneksi, $query)) {
    // Jika berhasil ditambahkan, redirect ke halaman utama
    header("Location: adminhome.php");
} else {
    // Jika gagal, tampilkan pesan error
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
