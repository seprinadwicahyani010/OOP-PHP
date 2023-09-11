<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Mengimpor file CSS Bootstrap dari CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 style="padding:10px;">Masukkan Data</h2>
        <div class="card mt-2">
            <!-- Form untuk menambahkan data mahasiswa -->
            <form action="tambah.php" method="POST"> 
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">NAMA</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" placeholder="Nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="npm" class="col-sm-2 col-form-label">NPM</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="npm" placeholder="NPM">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_lahir" class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
                    <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">ALAMAT</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                    </div>
                </div>
                <div class="col-md-6 offset-md-5" style="padding-top:10px;">
                    <button type="submit" type="button" class="btn btn-secondary">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>