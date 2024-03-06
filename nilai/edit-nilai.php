<?php

include 'koneksi.php';

$tahun = $_POST['tahun'];
$kelas = $_POST['kelas'];
$nis = $_POST['nis'];
$semester = $_POST['semester'];
$nilai_b_indo = $_POST['nilai_b_indo'];
$nilai_matematika = $_POST['nilai_matematika'];
$nilai_agama = $_POST['nilai_agama'];
$nilai_ipa = $_POST['nilai_ipa'];
$nilai_pkn = $_POST['nilai_pkn'];
$nilai_ips = $_POST['nilai_ips'];
$nilai_sbk = $_POST['nilai_sbk'];
$nilai_penjas = $_POST['nilai_penjas'];
$nilai_b_ing = $_POST['nilai_b_ing'];
$nilai_mulok = $_POST['nilai_mulok'];

$query = "UPDATE nilai 
          SET Nil_b_indo='$nilai_b_indo', Nil_matematika='$nilai_matematika', Nil_agama='$nilai_agama', Nil_ipa='$nilai_ipa', 
              Nil_pkn='$nilai_pkn', Nil_ips='$nilai_ips', Nil_sbk='$nilai_sbk', Nil_penjas='$nilai_penjas', Nil_b_ing='$nilai_b_ing', 
              Nil_mulok='$nilai_mulok' 
          WHERE nis='$nis'";

if(mysqli_query($koneksi, $query)) {
    header("Location: adminnilai.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>
