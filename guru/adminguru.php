<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Jurusan</title>
    <link rel="stylesheet" href="adminguru.css">
</head>

<body>
    <header>
        <h1>Website Jurusan RPL</h1>
    </header>
    <nav>
        <a href="../admin/adminhome.php">Data Pengunjung</a>
        <a href="../nilai/adminnilai.php">Nilai Siswa</a>
        <a href="../mapel/adminmapel.php">Jadwal Mapel</a>
        <a href="adminguru.php">Data Guru</a>
        <a href="../siswa/adminsiswa.php">Data Siswa</a>
    </nav>
    <h2>Data Guru</h2>
    <form method="GET">
        <input type="text" name="keyword" placeholder="Cari NIP atau Nama..." value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>">
        <button type="submit">cari</button>
        <a href="#" class="button" onclick="openTambahGuruOverlay()">+ TAMBAH</a>
        <a href="#" class="button" onclick="openEditGuruOverlay()">+ EDIT</a>
        <a href="#" class="button" onclick="openDeleteGuruOverlay()">+ HAPUS</a>
    </form>
    <br />
    <table border="1">
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tgl Lahir</th>
            <th>Agama</th>
            <th>Status</th>
            <th>Alamat</th>
            <th>Nama PT</th>
            <th>Ijazah</th>
            <th>Lulus</th>
            <th>Golongan</th>
            <th>Ket</th>
            <th>JK</th>
        </tr>

        <?php
        include 'koneksi.php';

        
        $query = "SELECT * FROM guru";

        
        if (isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
            $query .= " WHERE NIP LIKE '%$keyword%' OR nama LIKE '%$keyword%'";
        }

        $no = 1;
        $data = mysqli_query($koneksi, $query);

        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $d['NIP']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['tempat_lahir']; ?></td>
                <td><?php echo $d['tanggal_lahir']; ?></td>
                <td><?php echo $d['agama']; ?></td>
                <td><?php echo $d['marital']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['nama_pt']; ?></td>
                <td><?php echo $d['ijazah']; ?></td>
                <td><?php echo $d['lulus']; ?></td>
                <td><?php echo $d['golongan']; ?></td>
                <td><?php echo $d['ket']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <div id="TambahGuru-overlay" class="overlay">
        <div class="overlay-content">
            <span class="tutup-overlay" onclick="closeTambahGuruOverlay()">&times;</span>
            <h2>Form Tambah Guru</h2>
            <form id="form-tambah" class="form-tambah" action="tambah-guru.php" method="POST">
                <label for="nip">NIP:</label>
                <input type="text" id="nip" name="nip" placeholder="berupa angka" required>

                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" placeholder="berupa huruf" required>

                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="berupa huruf" required>

                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>

                <label for="agama">Agama:</label>
                <input type="text" id="agama" name="agama" placeholder="berupa huruf" required>

                <label for="marital">Marital:</label>
                <input type="text" id="marital" name="marital" placeholder="berupa huruf" required>

                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" placeholder="berupa huruf" required>

                <label for="nama_pt">Nama PT:</label>
                <input type="text" id="nama_pt" name="nama_pt" placeholder="berupa huruf" required>

                <label for="ijazah">Ijazah:</label>
                <input type="text" id="ijazah" name="ijazah" placeholder="berupa angka" required>

                <label for="lulus">Lulus:</label>
                <input type="text" id="lulus" name="lulus" placeholder="berupa angka" required>

                <label for="agama">Golongan:</label>
                <input type="text" id="golongan" name="golongan" placeholder="berupa huruf" required>

                <label for="keterangan">Keterangan:</label>
                <input type="text" id="keterangan" name="keterangan" placeholder="berupa huruf" required>

                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>

                <button type="submit">Tambah</button>
                <button type="button" onclick="closeTambahGuruOverlay()">Kembali</button>
            </form>
        </div>
    </div>

    <div id="EditGuru-overlay" class="overlay">
        <div class="overlay-content">
            <span class="tutup-overlay" onclick="closeEditGuruOverlay()">&times;</span>
            <h2>Form Edit Guru</h2>
            <form id="form-tambah" class="form-tambah" action="edit-guru.php" method="POST">
                <label for="nip">NIP:</label>
                <input type="text" id="nip" name="nip" placeholder="berupa angka" required>

                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" placeholder="berupa huruf" required>

                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="berupa huruf" required>

                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>

                <label for="agama">Agama:</label>
                <input type="text" id="agama" name="agama" placeholder="berupa huruf" required>

                <label for="marital">Marital:</label>
                <input type="text" id="marital" name="marital" placeholder="berupa huruf" required>

                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" placeholder="berupa huruf" required>

                <label for="nama_pt">Nama PT:</label>
                <input type="text" id="nama_pt" name="nama_pt" placeholder="berupa huruf" required>

                <label for="ijazah">Ijazah:</label>
                <input type="text" id="ijazah" name="ijazah" placeholder="berupa angka" required>

                <label for="lulus">Lulus:</label>
                <input type="text" id="lulus" name="lulus" placeholder="berupa angka" required>

                <label for="agama">Golongan:</label>
                <input type="text" id="golongan" name="golongan" placeholder="berupa huruf" required>

                <label for="keterangan">Keterangan:</label>
                <input type="text" id="keterangan" name="keterangan" placeholder="berupa huruf" required>

                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>

                <button type="submit">Tambah</button>
                <button type="button" onclick="closeEditGuruOverlay()">Kembali</button>
            </form>
        </div>
    </div>

    <div id="DeleteGuru-overlay" class="overlay">
        <div class="overlay-content">
            <span class="tutup-overlay" onclick="closeDeleteGuruOverlay()">&times;</span>
            <h2>Form Delete Guru</h2>
            <form id="form-tambah" class="form-tambah" action="hapus-guru.php" method="POST">
                <label for="nis">NIP:</label>
                <input type="text" id="nip" name="nip" placeholder="berupa angka" required>

                <button type="submit">Delete</button>
                <button type="button" onclick="closeDeleteGuruOverlay()">Kembali</button>
            </form>
        </div>
    </div>

    <footer>
        &copy; 2024 SMK Negeri 5 Kota Bekasi
    </footer>
    <script src="adminguru.js"> </script>
</body>

</html>