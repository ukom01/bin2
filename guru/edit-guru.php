<?php
include 'koneksi.php';

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$agama = $_POST['agama'];
$marital = $_POST['marital'];
$alamat = $_POST['alamat'];
$nama_pt = $_POST['nama_pt'];
$ijazah = $_POST['ijazah'];
$lulus = $_POST['lulus'];
$golongan = $_POST['golongan'];
$ket = $_POST['keterangan'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$query = "UPDATE guru SET 
            nama = '$nama',
            tempat_lahir = '$tempat_lahir',
            tanggal_lahir = '$tanggal_lahir',
            agama = '$agama',
            Marital = '$marital',
            alamat = '$alamat',
            Nama_pt = '$nama_pt',
            ijazah = '$ijazah',
            lulus = '$lulus',
            golongan = '$golongan',
            ket = '$ket',
            jenis_kelamin = '$jenis_kelamin'
          WHERE NIP = '$nip'";


if(mysqli_query($koneksi, $query)) {
    
    header("Location: adminguru.php");
} else {
    
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
