<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <!-- Mengimpor file CSS Bootstrap dari CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 align="center" style="padding:10px;">DATA MAHASISWA</h1>
        <div class="card mt-2">
            <!-- Tabel untuk menampilkan data mahasiswa -->
            <table class="table table-striped">
                <tr style="font-weight:bold">
                    <td>NO</td>
                    <td>NAMA</td>
                    <td>NPM</td>
                    <td>TANGGAL LAHIR</td>
                    <td>ALAMAT</td>
                    <td>AKSI</td>
                </tr>
                <?php 
                    require_once 'function.php'; // Mengimpor script PHP yang berisi definisi class mahasiswa
                    $no = 1;
                    $dt = new mahasiswa(); // Membuat objek dari class mahasiswa
                    foreach($dt->tampil_data() as $d){ // Mengambil data mahasiswa dari database
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['npm']; ?></td>
                    <td><?php echo $d['tgl_lahir']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><a href="hapus.php?id=<?php echo $d['id'];?>">Hapus</a></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
    <div class="col-md-6 offset-md-5" style="padding-top:10px;">
        <!-- Tombol untuk menuju halaman tambah_data.php -->
        <a href="tambah_data.php">
            <button type="button" class="btn btn-secondary">Tambah Data</button>
        </a>
    </div>
</body>
</html>
