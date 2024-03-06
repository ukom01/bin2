<?php

include 'koneksi.php';

$nis = $_POST['nis'];

$query = "DELETE FROM nilai WHERE nis='$nis'";

// Eksekusi query
if(mysqli_query($koneksi, $query)) {
    // Jika berhasil dihapus, redirect ke halaman nilai
    header("Location: nilai.php");
} else {
    // Jika gagal, tampilkan pesan error
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
