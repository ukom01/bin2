<?php



include 'koneksi.php';


$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$ayah = $_POST['ayah'];
$ibu = $_POST['ibu'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$alamat = $_POST['alamat'];


$query = "UPDATE siswa 
          SET nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', 
          agama='$agama', ayah='$ayah', ibu='$ibu', pekerjaan_ayah='$pekerjaan_ayah', pekerjaan_ibu='$pekerjaan_ibu', alamat='$alamat' 
          WHERE NIS='$nis'";


if(mysqli_query($koneksi, $query)) {
    
    header("Location: adminsiswa.php");
} else {
    
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}


mysqli_close($koneksi);
?>