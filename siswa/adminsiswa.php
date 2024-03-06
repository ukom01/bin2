<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Jurusan</title>
    <link rel="stylesheet" href="adminsiswa.css">
</head>

<body>
    <header>
        <h1>Website Jurusan RPL</h1>
        <br/>
        <a href="../index.php">Logout</a>
    </header> 
    <nav>
        <a href="../admin/adminhome.php">Data Pengunjung</a>
        <a href="../nilai/adminnilai.php">Nilai Siswa</a>
        <a href="../mapel/adminmapel.php">Jadwal Mapel</a>
        <a href="../guru/adminguru.php">Data Guru</a>
        <a href="adminsiswa.php">Data Siswa</a>
    </nav>
    <h2>Data Siswa</h2>
    <form method="GET">
        <input type="text" name="keyword" placeholder="Cari NIS atau Nama..." value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>">
        <button type="submit">cari</button>
        <a href="#" class="button" onclick="openTambahSiswaOverlay()">+ TAMBAH</a>
        <a href="#" class="button" onclick="openEditSiswaOverlay()">+ EDIT</a>
        <a href="#" class="button" onclick="openDeleteSiswaOverlay()">+ HAPUS</a>
    </form>
    <br />
    <table border="1">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tgl Lahir</th>
            <th>JK</th>
            <th>Agama</th>
            <th>Ayah</th>
            <th>Ibu</th>
            <th>Pekerjaan Ayah</th>
            <th>Pekerjaan Ibu</th>
            <th>Alamat</th>
        </tr>
        <?php
        include 'koneksi.php';
        $query = "SELECT * FROM siswa";
        if (isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
            $query .= " WHERE NIS LIKE '%$keyword%' OR nama LIKE '%$keyword%'";
        }

        $no = 1;
        $data = mysqli_query($koneksi, $query);

        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $d['NIS']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['tempat_lahir']; ?></td>
                <td><?php echo $d['tanggal_lahir']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
                <td><?php echo $d['agama']; ?></td>
                <td><?php echo $d['ayah']; ?></td>
                <td><?php echo $d['ibu']; ?></td>
                <td><?php echo $d['pekerjaan_ayah']; ?></td>
                <td><?php echo $d['pekerjaan_ibu']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <div id="TambahSiswa-overlay" class="overlay">
        <div class="overlay-content">
            <span class="tutup-overlay" onclick="closeTambahSiswaOverlay()">&times;</span>
            <h2>Form Tambah Siswa</h2>
            <form id="form-tambah" class="form-tambah" action="tambah-siswa.php" method="POST">
                <label for="nis">NIS:</label>
                <input type="text" id="nis" name="nis" required>

                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>

                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" required>

                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>

                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>

                <label for="agama">Agama:</label>
                <input type="text" id="agama" name="agama" required>

                <label for="ayah">Nama Ayah:</label>
                <input type="text" id="ayah" name="ayah" required>

                <label for="ibu">Nama Ibu:</label>
                <input type="text" id="ibu" name="ibu" required>

                <label for="pekerjaan_ayah">Pekerjaan Ayah:</label>
                <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" required>

                <label for="pekerjaan_ibu">Pekerjaan Ibu:</label>
                <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" required>

                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>

                <button type="submit">Tambah</button>
                <button type="button" onclick="closeTambahSiswaOverlay()">Kembali</button>
            </form>
        </div>
    </div>

    <div id="EditSiswa-overlay" class="overlay">
        <div class="overlay-content">
            <span class="tutup-overlay" onclick="closeEditSiswaOverlay()">&times;</span>
            <h2>Form Edit Siswa</h2>
            <form id="form-tambah" class="form-tambah" action="edit-siswa.php" method="POST">
                <label for="nis">NIS:</label>
                <input type="text" id="nis" name="nis" required>

                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>

                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" required>

                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>

                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>

                <label for="agama">Agama:</label>
                <input type="text" id="agama" name="agama" required>

                <label for="ayah">Nama Ayah:</label>
                <input type="text" id="ayah" name="ayah" required>

                <label for="ibu">Nama Ibu:</label>
                <input type="text" id="ibu" name="ibu" required>

                <label for="pekerjaan_ayah">Pekerjaan Ayah:</label>
                <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" required>

                <label for="pekerjaan_ibu">Pekerjaan Ibu:</label>
                <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" required>

                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>

                <button type="submit">Update</button>
                <button type="button" onclick="closeEditSiswaOverlay()">Kembali</button>
            </form>
        </div>
    </div>

    <div id="DeleteSiswa-overlay" class="overlay">
        <div class="overlay-content">
            <span class="tutup-overlay" onclick="closeDeleteSiswaOverlay()">&times;</span>
            <h2>Form Hapus Siswa</h2>
            <form id="form-tambah" class="form-tambah" action="hapus-siswa.php" method="POST">
                <label for="nis">NIS:</label>
                <input type="text" id="nis" name="nis" required>

                <button type="submit">Delete</button>
                <button type="button" onclick="closeDeleteSiswaOverlay()">Kembali</button>
            </form>
        </div>
    </div>

    <footer>
        &copy; 2024 SMK Negeri 5 Kota Bekasi
    </footer>
    <script src="adminsiswa.js"> </script>
</body>

</html>