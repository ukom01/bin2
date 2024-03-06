<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Jurusan</title>
    <link rel="stylesheet" href="../src/css/admin.css">
</head>

<body>
    <header>
        <h1>Website Jurusan RPL</h1>
    </header>
    <nav>
        <a href="#home">Home</a>
        <a href="#nilai">Nilai Siswa</a>
        <a href="#mapel">Jadwal Mapel</a>
        <a href="#guru">Data Guru</a>
        <a href="#siswa">Data Siswa</a>
    </nav>
    <section id="home" class="active-section">
        <div class="dashboard-container">
            <div class="dashboard-item" id="home">
                <div class="home-image">
                    <h2>Rekayasa Perangkat Lunak SMK Negeri 5 Kota Bekasi</h2>
                </div>
                <div class="description">
                    <p><strong>Rekayasa Perangkat Lunak</strong></p>
                    <p>Rekayasa Perangkat Lunak atau biasa disingkat dengan RPL adalah salah satu bidang profesi dan
                        juga mata pelajaran yang mempelajari tentang pengembangan perangkat-perangkat lunak termasuk
                        dalam hal pembuatannya, pemeliharaan hingga manajemen organisasi dan manajemen kualitasnya.
                        Salah Satunya dalam pengembangan pembuatan Aplikasi Website, Komputer, Android dan Editing Video
                        maupun Desain Logo.</p>
                </div>
                <div class="contact-info">
                    <p><strong>Alamat:</strong> Jl. Contoh No. 123, Kota Bekasi</p>
                    <p><strong>Email:</strong> info@smkn5bekasi.com</p>
                    <p><strong>Phone:</strong> (021) 123456789</p>
                </div>
            </div>
        </div>
    </section>
    <section id="nilai">
        <h2>Nilai Siswa</h2>
        <a href="#nilai" onclick="openTambahOverlay()">+ TAMBAH</a>
        <br />
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
            include '../koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from nilai");
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
    </section>

    <section id="mapel">

    </section>
    <section id="guru">
        <h2>Data Guru</h2>
        <br />
        <a href="#guru" onclick="openGuruOverlay()">+ TAMBAH</a>
        <br />
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
                <th>Ibu</th>
                <th>JK</th>
            </tr>
            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from guru");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $d['NIP']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['tempat_lahir']; ?></td>
                    <td><?php echo $d['tanggal_lahir']; ?></td>
                    <td><?php echo $d['agama']; ?></td>
                    <td><?php echo $d['Marital']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['Nama_pt']; ?></td>
                    <td><?php echo $d['ijazah']; ?></td>
                    <td><?php echo $d['golongan']; ?></td>
                    <td><?php echo $d['ket']; ?></td>
                    <td><?php echo $d['jenis_kelamin']; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </section>

    <section id="siswa">
        <h2>Data Siswa</h2>
        <br />
        <form method="GET">
            <input type="text" name="keyword" placeholder="Cari NIS atau Nama..." value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>">
            <a href="#guru" onclick="openGuruOverlay()">Cari</a>
            <a href="#guru" onclick="openGuruOverlay()">+ TAMBAH</a>
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
    </section>



    <section id="matapelajaran">

    </section>
    <footer>
        &copy; 2024 SMK Negeri 5 Kota Bekasi
    </footer>

    <div id="tambah-overlay" class="overlay">
        <div class="overlay-content">
            <span class="tutup-overlay">&times;</span>
            <h2>Form Tambah Nilai</h2>
            <form id="form-tambah" class="form-tambah" action="nilai.php" method="POST">
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
                <button onclick="closeTambahOverlay()">Kembali</button>
            </form>
        </div>
    </div>

    <div id="siswa-overlay" class="overlay">
        <div class="overlay-content">
            <span class="tutup-overlay" onclick="closeSiswaOverlay()">&times;</span>
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
                <button type="button" onclick="closeSiswaOverlay()">Kembali</button>
            </form>
        </div>
    </div>

    <div id="guru-overlay" class="overlay">
        <div class="overlay-content">
            <span class="tutup-overlay" onclick="closeGuruOverlay()">&times;</span>
            <h2>Form Tambah Guru</h2>
            <form id="form-tambah" class="form-tambah" action="tambah-guru.php" method="POST">
                <label for="nip">NIP:</label>
                <input type="text" id="nip" name="nip" required>

                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>

                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" required>

                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>

                <label for="agama">Agama:</label>
                <input type="text" id="agama" name="agama" required>

                <label for="agama">Marital:</label>
                <input type="text" id="marital" name="marital" required>

                <label for="agama">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>

                <label for="agama">Nama PT:</label>
                <input type="text" id="alamat" name="alamat" required>

                <label for="agama">Ijazah:</label>
                <input type="text" id="alamat" name="alamat" required>

                <label for="agama">Lulus:</label>
                <input type="text" id="lulus" name="lulus" required>

                <label for="agama">Golongan:</label>
                <input type="text" id="golongan" name="golongan" required>

                <label for="agama">Keterangan:</label>
                <input type="text" id="keterangan" name="keterangan" required>

                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>

                <button type="submit">Tambah</button>
                <button type="button" onclick="closeGuruOverlay()">Kembali</button>
            </form>
        </div>
    </div>

    <script src="../src/js/admin.js"> </script>
</body>

</html>