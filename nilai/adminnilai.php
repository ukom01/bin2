<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Jurusan</title>
    <link rel="stylesheet" href="adminnilai.css">
</head>

<body>
    <header>
        <h1>Website Jurusan RPL</h1>
        <a href="../index.php">Logout</a>
    </header>
    <nav>
        <a href="../admin/adminhome.php">Data Pengunjung</a>
        <a href="adminnilai.php">Nilai Siswa</a>
        <a href="../mapel/adminmapel.php">Jadwal Mapel</a>
        <a href="../guru/adminguru.php">Data Guru</a>
        <a href="../siswa/adminsiswa.php">Data Siswa</a>
    </nav>
    <h2>Nilai Siswa</h2>
    <form method="GET">
        <input type="text" name="keyword" placeholder="Cari NIS..." value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>">
        <button type="submit">cari</button>
        <a href="#" class="button" onclick="openTambahNilaiOverlay()">+ TAMBAH</a>
        <a href="#" class="button" onclick="openEditNilaiOverlay()">+ EDIT</a>
        <a href="#" class="button" onclick="openDeleteNilaiOverlay()">+ HAPUS</a>
    </form>
    <br />
    <table border="1">
        <tr>
            <th>Tahun</th>
            <th>Kelas</th>
            <th>Nis</th>
            <th>Semester</th>
            <th>Bhs.Indonesia</th>
            <th>Matematika</th>
            <th>Agama</th>
            <th>Ipa</th>
            <th>Pkn</th>
            <th>Ips</th>
            <th>Sbk</th>
            <th>Penjas</th>
            <th>Bhs.Inggris</th>
            <th>Mulok</th>
        </tr>
        <?php
        include 'koneksi.php';
        $query = "SELECT * FROM nilai";
        if (isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
            $query .= " WHERE NIS LIKE '%$keyword%'";
        }

        $no = 1;
        $data = mysqli_query($koneksi, $query);

        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $d['Tahun']; ?></td>
                <td><?php echo $d['Kelas']; ?></td>
                <td><?php echo $d['Nis']; ?></td>
                <td><?php echo $d['Semester']; ?></td>
                <td><?php echo $d['Nil_b_indo']; ?></td>
                <td><?php echo $d['Nil_matematika']; ?></td>
                <td><?php echo $d['Nil_agama']; ?></td>
                <td><?php echo $d['Nil_ipa']; ?></td>
                <td><?php echo $d['Nil_pkn']; ?></td>
                <td><?php echo $d['Nil_ips']; ?></td>
                <td><?php echo $d['Nil_sbk']; ?></td>
                <td><?php echo $d['Nil_penjas']; ?></td>
                <td><?php echo $d['Nil_b_ing']; ?></td>
                <td><?php echo $d['Nil_mulok']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <div id="TambahNilai-overlay" class="overlay">
        <div class="overlay-content">
        <span class="tutup-overlay" onclick="closeTambahNilaiOverlay()">&times;</span>
            <h2>Form Tambah Nilai</h2>
            <form id="form-tambah" class="form-tambah" action="tambah-nilai.php" method="POST">
                <label for="tahun">Tahun:</label>
                <input type="text" id="tahun" name="tahun" required>

                <label for="kelas">Kelas:</label>
                <input type="text" id="kelas" name="kelas" required>

                <label for="nis">NIS:</label>
                <input type="text" id="nis" name="nis" required>

                <label for="semester">Semester:</label>
                <input type="text" id="semester" name="semester" required>

                <label for="nilai_b_indo">Nilai Bahasa Indonesia:</label>
                <input type="text" id="nilai_b_indo" name="nilai_b_indo" required>

                <label for="nilai_matematika">Nilai Matematika:</label>
                <input type="text" id="nilai_matematika" name="nilai_matematika" required>

                <label for="nilai_agama">Nilai Agama:</label>
                <input type="text" id="nilai_agama" name="nilai_agama" required>

                <label for="nilai_ipa">Nilai IPA:</label>
                <input type="text" id="nilai_ipa" name="nilai_ipa" required>

                <label for="nilai_pkn">Nilai PKN:</label>
                <input type="text" id="nilai_pkn" name="nilai_pkn" required>

                <label for="nilai_ips">Nilai IPS:</label>
                <input type="text" id="nilai_ips" name="nilai_ips" required>

                <label for="nilai_sbk">Nilai SBK:</label>
                <input type="text" id="nilai_sbk" name="nilai_sbk" required>

                <label for="nilai_penjas">Nilai Penjas:</label>
                <input type="text" id="nilai_penjas" name="nilai_penjas" required>

                <label for="nilai_b_ing">Nilai Bahasa Inggris:</label>
                <input type="text" id="nilai_b_ing" name="nilai_b_ing" required>

                <label for="nilai_mulok">Nilai Muatan Lokal:</label>
                <input type="text" id="nilai_mulok" name="nilai_mulok" required>

                <button type="submit">Tambah</button>
                <button onclick="closeTambahNilaiOverlay()">Kembali</button>
            </form>
        </div>
    </div>

    <div id="EditNilai-overlay" class="overlay">
        <div class="overlay-content">
        <span class="tutup-overlay" onclick="closeEditNilaiOverlay()">&times;</span>
            <h2>Form Edit Nilai</h2>
            <form id="form-tambah" class="form-tambah" action="edit-nilai.php" method="POST">
                <label for="tahun">Tahun:</label>
                <input type="text" id="tahun" name="tahun" required>

                <label for="kelas">Kelas:</label>
                <input type="text" id="kelas" name="kelas" required>

                <label for="nis">NIS:</label>
                <input type="text" id="nis" name="nis" required>

                <label for="semester">Semester:</label>
                <input type="text" id="semester" name="semester" required>

                <label for="nilai_b_indo">Nilai Bahasa Indonesia:</label>
                <input type="text" id="nilai_b_indo" name="nilai_b_indo" required>

                <label for="nilai_matematika">Nilai Matematika:</label>
                <input type="text" id="nilai_matematika" name="nilai_matematika" required>

                <label for="nilai_agama">Nilai Agama:</label>
                <input type="text" id="nilai_agama" name="nilai_agama" required>

                <label for="nilai_ipa">Nilai IPA:</label>
                <input type="text" id="nilai_ipa" name="nilai_ipa" required>

                <label for="nilai_pkn">Nilai PKN:</label>
                <input type="text" id="nilai_pkn" name="nilai_pkn" required>

                <label for="nilai_ips">Nilai IPS:</label>
                <input type="text" id="nilai_ips" name="nilai_ips" required>

                <label for="nilai_sbk">Nilai SBK:</label>
                <input type="text" id="nilai_sbk" name="nilai_sbk" required>

                <label for="nilai_penjas">Nilai Penjas:</label>
                <input type="text" id="nilai_penjas" name="nilai_penjas" required>

                <label for="nilai_b_ing">Nilai Bahasa Inggris:</label>
                <input type="text" id="nilai_b_ing" name="nilai_b_ing" required>

                <label for="nilai_mulok">Nilai Muatan Lokal:</label>
                <input type="text" id="nilai_mulok" name="nilai_mulok" required>

                <button type="submit">Tambah</button>
                <button onclick="closeEditNilaiOverlay()">Kembali</button>
            </form>
        </div>
    </div>

    <div id="DeleteNilai-overlay" class="overlay">
        <div class="overlay-content">
            <span class="tutup-overlay" onclick="closeDeleteNilaiOverlay()">&times;</span>
            <h2>Form Delete Nilai</h2>
            <form id="form-tambah" class="form-tambah" action="hapus-nilai.php" method="POST">
                <label for="nis">NIS:</label>
                <input type="text" id="nis" name="nis" placeholder="berupa angka" required>

                <button type="submit">Delete</button>
                <button type="button" onclick="closeDeleteNilaiOverlay()">Kembali</button>
            </form>
        </div>
    </div>

    <footer>
        &copy; 2024 SMK Negeri 5 Kota Bekasi
    </footer>
    <script src="adminnilai.js"> </script>
</body>

</html>