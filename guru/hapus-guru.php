<?php

include 'koneksi.php';
$nip = $_POST['nip'];

$query = "DELETE FROM guru WHERE NIP = '$nip'";

if (mysqli_query($koneksi, $query)) {
    header("Location: adminguru.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
