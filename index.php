<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Jurusan</title>
    <link rel="stylesheet" href="src/css/index.css">
</head>

<body>
    <header>
        <h1>Website Jurusan RPL</h1>
        <div class="auth-links">
            <a href="#login" onclick="openLoginOverlay()">Login</a>
        </div>
    </header>
    <nav>
        <a href="#home">Home</a>
        <a href="#nilai">Nilai Siswa</a>
        <a href="#mapel">Jadwal Mapel</a>
        <a href="#guru">Data Guru</a>
        <a href="#siswa">Data Siswa</a>
    </nav>
    
    <footer>
        &copy; 2024 SMK Negeri 5 Kota Bekasi
    </footer>

    <form action="login.php" method="post" class="overlay" id="loginOverlay">
        <div class="login-form">
            <h2>Login</h2>
            <label for="loginUsername">Username :</label>
            <input type="text" name="username" required>
            <label for="loginPassword">Password :</label>
            <input type="password" name="password" required>
            <label for="loginUsername">Login Sebagai :</label>
            <input type="text" id="loginLevel" name="level" required>
            <button type="submit">Login</button>
            <button onclick="closeLoginOverlay()">Kembali</button>
        </div>
    </form>
    <script src="./src/js/index.js"></script>
</body>
</html>