<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Jurusan</title>
    <link rel="stylesheet" href="adminhome.css">
</head>

<body>
    <header>
        <h1>Website Jurusan RPL</h1>
        <a href="../index.php">Logout</a>
    </header>
    <nav>
        <a href="adminhome.php">Data Pengunjung</a>
        <a href="../nilai/adminnilai.php">Nilai Siswa</a>
        <a href="../mapel/adminmapel.php">Jadwal Mapel</a>
        <a href="../guru/adminguru.php">Data Guru</a>
        <a href="../siswa/adminsiswa.php">Data Siswa</a>
    </nav>
    <h2>Data User</h2>
    <form method="GET">
        <input type="text" name="keyword" placeholder="Cari NIS atau Nama..." value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>">
        <button type="submit">cari</button>
        <a href="#" class="button" onclick="openTambahUserOverlay()">+ TAMBAH</a>
        <a href="#" class="button" onclick="openEditUserOverlay()">+ EDIT</a>
        <a href="#" class="button" onclick="openDeleteUserOverlay()">+ HAPUS</a>
    </form>
    <br />
    <table border="1">
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
        </tr>
        <?php
        include 'koneksi.php';
        $query = "SELECT * FROM user";
        if (isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
            $query .= " WHERE username LIKE '%$keyword%' OR level LIKE '%$keyword%'";
        }

        $no = 1;
        $data = mysqli_query($koneksi, $query);

        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $d['username']; ?></td>
                <td><?php echo $d['password']; ?></td>
                <td><?php echo $d['level']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <div id="TambahUser-overlay" class="overlay">
        <div class="overlay-content">
            <span class="tutup-overlay" onclick="closeTambahUserOverlay()">&times;</span>
            <h2>Form Tambah Akun</h2>
            <form id="form-tambah" class="form-tambah" action="../regis/tambah-user.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">password:</label>
                <input type="password" id="password" name="password" required>

                <label for="level">level:</label>
                <input type="text" id="level" name="level" required>

                <button type="submit">Tambah</button>
                <button type="button" onclick="closeTambahUserOverlay()">Kembali</button>
            </form>
        </div>
    </div>

    <div id="EditUser-overlay" class="overlay">
        <div class="overlay-content">
            <span class="tutup-overlay" onclick="closeEditUserOverlay()">&times;</span>
            <h2>Form Edit Akun</h2>
            <form id="form-tambah" class="form-tambah" action="../regis/edit-user.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">password:</label>
                <input type="password" id="password" name="password" required>

                <label for="level">level:</label>
                <input type="text" id="level" name="level" required>

                <button type="submit">Edit</button>
                <button type="button" onclick="closeEditUserOverlay()">Kembali</button>
            </form>
        </div>
    </div>

    <div id="DeleteUser-overlay" class="overlay">
        <div class="overlay-content">
            <span class="tutup-overlay" onclick="closeDeleteUserOverlay()">&times;</span>
            <h2>Form Hapus Akun</h2>
            <form id="form-tambah" class="form-tambah" action="../regis/hapus-user.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <button type="submit">Delete</button>
                <button type="button" onclick="closeDeleteUserOverlay()">Kembali</button>
            </form>
        </div>
    </div>

    <footer>
        &copy; 2024 SMK Negeri 5 Kota Bekasi
    </footer>
    <script src="adminhome.js"> </script>
</body>

</html>