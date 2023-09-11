<?php
class mahasiswa{
    private $host = 'localhost';   // Nama atau alamat IP server MySQL
    private $user = 'root';        // Nama pengguna MySQL
    private $pass = '';            // Kata sandi pengguna MySQL
    private $database = 'db_mahasiswa'; // Nama database yang digunakan
    private $koneksi;              // Variabel untuk menyimpan koneksi ke database

    function __construct(){
        // Menggunakan constructor untuk membuat koneksi ke database saat objek mahasiswa dibuat
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->database);

        // Memeriksa apakah koneksi berhasil atau tidak
        if(!$this->koneksi) {
            die('Pengkoneksian ke database gagal :' . mysqli_connect_error());
        }
    }

    // Fungsi untuk menampilkan data mahasiswa
    function tampil_data()
    {
        $query = mysqli_query($this->koneksi, 'SELECT * FROM mahasiswa');
        while($row = mysqli_fetch_array($query)){
            $data[]=$row;
        }

        return $data;
    }

    // Fungsi untuk menyimpan data mahasiswa baru
    function simpan_data($nama, $npm, $tgl_lahir, $alamat)
    {
        $query = mysqli_query($this->koneksi, "INSERT INTO mahasiswa VALUES ('','$nama','$npm','$tgl_lahir','$alamat')");
    }

    // Fungsi untuk menghapus data mahasiswa berdasarkan ID
    function hapus_data($id)
    {
        mysqli_query($this->koneksi,"delete from mahasiswa where id='$id'");
    }
}
?>
