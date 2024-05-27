<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="image/naruto 1.jpg" alt="" width="30" height="24">
            </a>
            <a class="navbar-brand" href="#">JWSM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="data.php">Data</a>
                    <a class="nav-link" href="tambah_data.php">Tambah</a>
                </div>
            </div>
        </div>
    </nav>
    
    <form method="POST" action="proses.php">
        <div class="container">
            <figure>
                <blockquote class="blockquote">
                    <h1>TAMBAH DATA</h1>
                </blockquote>
                <figcaption class="blockquote-footer">
                    Catatan <cite title="Source Title">Kematian</cite>
                </figcaption>
            </figure>
        </div>
        <div class="container">
        <div class="row mb-3">
                <label class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-3">
                    <input type="namber" class="form-control" name="nik" id="nik" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="nama" id="nama" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-3">
                    <select class="form-select" aria-label="Default select example" name="jenis_kelamin" id="jenis_kelamin" required>
                        <option selected>-- Pilih --</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Usia</label>
                <div class="col-sm-3">
                    <select class="form-select" aria-label="Default select example" name="usia" id="usia" required>
                        <option selected>-- Pilih --</option>
                        <option value="dewasa">Tua (41 - 70 Tahun)</option>
                        <option value="dewasa">Dewasa (18 - 40 Tahun)</option>
                        <option value="anak">Anak - Anak (5 - 17 Tahun)</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Tanggal Meninggal</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" name="tanggal" id="tanggal_kematian" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="alamat" id="alamat" required>
                </div>
            </div>
            <div>
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Simpan</button>
                <a href="index.php" type="reset" class="btn btn-light">Cancel</button>
            </div>
        </div>
    </form>
</body>

</html>
