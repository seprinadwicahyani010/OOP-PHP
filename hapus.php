<?php
include "function.php"; // Mengimpor script PHP yang berisi definisi class mahasiswa.

$id = $_GET['id']; // Mengambil nilai ID mahasiswa yang akan dihapus dari parameter URL.

$dt = new mahasiswa(); // Membuat objek dari class mahasiswa.

$dt->hapus_data($id); // Memanggil metode "hapus_data" pada objek mahasiswa untuk menghapus data berdasarkan ID.
header("location:index.php"); // Mengarahkan kembali ke halaman "index.php" setelah data berhasil dihapus.
?>
