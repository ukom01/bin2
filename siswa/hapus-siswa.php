<?php



include 'koneksi.php';


$nis = $_POST['nis'];


$query = "DELETE FROM siswa WHERE NIS = '$nis'";


if(mysqli_query($koneksi, $query)) {
    
    header("Location: adminsiswa.php");
} else {
    
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}


mysqli_close($koneksi);
?>
