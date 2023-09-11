<?php
include "function.php"; // Mengimpor script PHP yang berisi definisi class mahasiswa.

$nama = $_POST['nama']; // Mengambil nilai input "nama" dari formulir.
$npm = $_POST['npm'];   // Mengambil nilai input "npm" dari formulir.
$tgl_lahir = $_POST['tgl_lahir']; // Mengambil nilai input "tgl_lahir" dari formulir.
$alamat = $_POST['alamat']; // Mengambil nilai input "alamat" dari formulir.

$dt = new mahasiswa(); // Membuat objek dari class mahasiswa.

$dt->simpan_data($nama, $npm, $tgl_lahir, $alamat); // Memanggil metode "simpan_data" untuk menyimpan data ke database.
header("location:index.php"); // Mengarahkan kembali ke halaman "index.php" setelah data berhasil disimpan.
?>
