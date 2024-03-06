<?php 
 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
 $data = mysqli_fetch_assoc($login);
 
 if($data['level']=="admin"){
 
 $_SESSION['username'] = $username;
 $_SESSION['level'] = "admin";
 header("location:./admin/adminhome.php");
 
 }else if($data['level']=="guru"){
 $_SESSION['username'] = $username;
 $_SESSION['level'] = "guru";
 header("location:guruhome.php");
 
 }else if($data['level']=="staff"){
 $_SESSION['username'] = $username;
 $_SESSION['level'] = "staff";
 header("location:staffhome.php");

}else if($data['level']=="siswa"){
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "siswa";
    header("location:siswahome.php");

}else if($data['level']=="orangtua"){
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "orangtua";
    header("location:orangtuahome.php");
 
 }else{
 
 } 
}else{

}
 
?>