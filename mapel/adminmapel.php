<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Jurusan</title>
    <link rel="stylesheet" href="adminmapel.css">
</head>

<body>
    <header>
        <h1>Website Jurusan RPL</h1>
        <a href="../index.php">Logout</a>
    </header>
    <nav>
        <a href="../admin/adminhome.php">Data Pengunjung</a>
        <a href="../nilai/adminnilai.php">Nilai Siswa</a>
        <a href="adminmapel.php">Jadwal Mapel</a>
        <a href="../guru/adminguru.php">Data Guru</a>
        <a href="../siswa/adminsiswa.php">Data Siswa</a>
    </nav>
    <h2>Data Siswa</h2>
    <form method="GET">
        <input type="text" name="keyword" placeholder="Cari Kelas atau Hari..." value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>">
        <button type="submit">cari</button>
        <a href="#" class="button" onclick="openTambahMapelOverlay()">+ TAMBAH</a>
        <a href="#" class="button" onclick="openEditMapelOverlay()">+ EDIT</a>
        <a href="#" class="button" onclick="openDeleteMapelOverlay()">+ HAPUS</a>
    </form>
    <br />
    <table border="1">
        <tr>
            <th>Kelas</th>
            <th>Tahun</th>
            <th>Mapel</th>
            <th>Hari</th>
            <th>Jam</th>
        </tr>
        <?php
        include 'koneksi.php';
        $query = "SELECT * FROM mapel";
        if (isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
            $query .= " WHERE kelas LIKE '%$keyword%' OR hari LIKE '%$keyword%'";
        }

        $no = 1;
        $data = mysqli_query($koneksi, $query);

        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $d['kelas']; ?></td>
                <td><?php echo $d['tahun']; ?></td>
                <td><?php echo $d['mapel']; ?></td>
                <td><?php echo $d['hari']; ?></td>
                <td><?php echo $d['jam']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <div id="TambahMapel-overlay" class="overlay">
        <div class="overlay-content">
            <span class="tutup-overlay" onclick="closeTambahMapelOverlay()">&times;</span>
            <h2>Form Tambah Mapel</h2>
            <form id="form-tambah" class="form-tambah" action="tambah-mapel.php" method="POST">
                <label for="Kelas">Kelas:</label>
                <input type="text" id="kelas" name="kelas" required>

                <label for="tahun">Tahun:</label>
                <input type="text" id="tahun" name="tahun" required>

                <label for="mapel">Mapel:</label>
                <input type="text" id="mapel" name="mapel" required>

                <label for="hari">Hari:</label>
                <input type="text" id="hari" name="hari" required>

                <label for="jam">Jam:</label>
                <input type="text" id="jam" name="jam" require>

                <button type="submit">Tambah</button>
                <button type="button" onclick="closeTambahMapelOverlay()">Kembali</button>
            </form>
        </div>
    </div>

    <div id="EditMapel-overlay" class="overlay">
        <div class="overlay-content">
            <span class="tutup-overlay" onclick="closeEditMapelOverlay()">&times;</span>
            <h2>Form Edit Mapel</h2>
            <form id="form-tambah" class="form-tambah" action="edit-mapel.php" method="POST">
                <label for="Kelas">Kelas:</label>
                <input type="text" id="kelas" name="kelas" required>

                <label for="tahun">Tahun:</label>
                <input type="text" id="tahun" name="tahun" required>

                <label for="mapel">Mapel:</label>
                <input type="text" id="mapel" name="mapel" required>

                <label for="hari">Hari:</label>
                <input type="text" id="hari" name="hari" required>

                <label for="jam">Jam:</label>
                <input type="text" id="jam" name="jam" require>
                <button type="submit">Update</button>
                <button type="button" onclick="closeEditMapelOverlay()">Kembali</button>
            </form>
        </div>
    </div>

    <div id="DeleteMapel-overlay" class="overlay">
        <div class="overlay-content">
            <span class="tutup-overlay" onclick="closeDeleteMapelOverlay()">&times;</span>
            <h2>Form Hapus Mapel</h2>
            <form id="form-tambah" class="form-tambah" action="hapus-mapel.php" method="POST">
                <label for="tahun">Tahun:</label>
                <input type="text" id="tahun" name="tahun" required>
            
                <label for="Kelas">Kelas:</label>
                <input type="text" id="kelas" name="kelas" required>

                <label for="hari">Hari:</label>
                <input type="text" id="hari" name="hari" required>

                <button type="submit">Delete</button>
                <button type="button" onclick="closeDeleteMapelOverlay()">Kembali</button>
            </form>
        </div>
    </div>

    <footer>
        &copy; 2024 SMK Negeri 5 Kota Bekasi
    </footer>
    <script src="adminmapel.js"> </script>
</body>

</html>