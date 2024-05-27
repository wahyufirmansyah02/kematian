<?php
 include 'koneksi.php';

    if (isset($_POST['submit'])){
        if($_POST['submit'] == "submit"){
            
            $nik            = $_POST['nik'];
            $nama           = $_POST['nama'];
            $jenis_kelamin  = $_POST['jenis_kelamin'];
            $usia           = $_POST['usia'];
            $tanggal        = $_POST['tanggal_kematian'];
            $alamat         = $_POST['alamat'];

            $query = "INSERT INTO tb_catatan_kematian VALUES(null, '$nik', '$nama','$jenis_kelamin','$usia','$tanggal_kematian','$alamat')";
            $sql = mysqli_query($conn, $query);

            if($sql){
                header("location: data.php");
            }else{
                echo $query;
            }
        }
    }else if(isset($_POST['edit'])){
        if($_POST['edit'] == "edit"){

            $no             = $_POST['no'];
            $nik            = $_POST['nik'];
            $nama           = $_POST['nama'];
            $jenis_kelamin  = $_POST['jenis_kelamin'];
            $usia           = $_POST['usia'];
            $tanggal        = $_POST['tanggal'];
            $alamat         = $_POST['alamat'];

            $query = "UPDATE tb_catatan_kematian SET nik='$nik', nama='$nama', jenis_kelamin='$jenis_kelamin', usia='$usia', tanggal='$tanggal', alamat='$alamat' WHERE no ='$no'";
            $sql = mysqli_query($conn, $query);

            if($sql){
                header("location: data.php");
            }else{
                echo "edit data gagal";
            }
        
    }}
    if(isset($_GET['hapus'])){
        $no = $_GET['hapus'];
        $no = mysqli_real_escape_string($conn, $no);
        $query = "DELETE FROM tb_catatan_kematian WHERE no = '$no'";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: data.php");
        }else{
            echo $query;
        }
    }else {
        echo "hapus data gagal";
    }
?>