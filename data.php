<?php include 'koneksi.php';
$query = "SELECT * FROM tb_catatan_kematian";
$sql = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
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
    <div class="container">
        <figure>
            <blockquote class="blockquote">
                <h1>DATA TAMPIL</h1>
            </blockquote>
            <figcaption class="blockquote-footer">
                Catatan <cite title="Source Title">Kematian</cite>
            </figcaption>
        </figure>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Usia</th>
                    <th scope="col">Tanggal Kematian</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($sql) > 0) {
                $i = 1;
                while ($result = mysqli_fetch_assoc($sql)) {
            ?>
                    <tr>
                        <th scope="row">
                            <?php echo $i; ?>
                        </th>
                        <td>
                            <?php echo $result['nik']; ?>
                        </td>
                        <td>
                            <?php echo $result['nama']; ?>
                        </td>
                        <td>
                            <?php echo $result['jenis_kelamin']; ?>
                        </td>
                        <td>
                            <?php echo $result['usia']; ?>
                        </td>
                        <td>
                            <?php echo $result['tanggal_kematian']; ?>
                        </td>
                        <td>
                            <?php echo $result['alamat']; ?>
                        </td>
                        <td>
                            <form method="GET" action="">
                            <button type="button" class="btn btn-primary">Primary</button>
                                <button href="edit.php?edit=<?php echo $result['no']; ?>" type="button" class="btn btn-warning">Edit</button>
                                <form method="GET" action="proses.php">
                                    <a href="proses.php?hapus=<?php echo $result['no']; ?>" type="button" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
            <?php
                    $i++;
                }
            }
            ?>
        </tbody>
        </table>
    </div>
</body>

</html>