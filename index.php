<?php 
    include 'koneksi.php'; 

    $query = "SELECT * FROM tb_catatan_kematian";
    $sql = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

    <div class="text-center ">
        <br>
        <img src="image/naruto 2.jpg" class="rounded-circle mx-auto d-block" alt="..." style="width: 20%;">
        </br>
        <div class="text-center">
            <figure>
                <blockquote class="blockquote">
                    <h1>CATATAN KEMATIAN</h1>
                </blockquote>
                <figcaption class="">
                    J - W - S - M <br><cite title="Source Title">Jouhar - Wahyu - Sulis - Mulyadi</cite>
                </figcaption>
            </figure>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php include 'diagram_jenis_kelamin.php'; ?>
            </div>
            <div class="col-md-4">
                <?php include 'diagram_usia.php'; ?>
            </div>
            <div class="col-md-4">
                <?php include 'diagram_angka_kematian.php'; ?>
            </div>
        </div>
    </div>
</body>

</html>