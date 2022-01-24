<?php
    if($_POST){
        $nama_petugas=$_POST['nama_petugas'];
        $username=$_POST['username'];
        $password=$_POST['password'];

            include "koneksi.php";
            $insert=mysqli_query($koneksi,"insert into petugas (nama_petugas, username, password)
            value
            ('".$nama_petugas."','".$username."','".md5($password)."')") or die(mysqli_error($koneksi));
            if ($insert) {
                echo "<script>alert('Sukses Menambahkan');location.href='tambah_petugas.php';</script>";
            }

            else {
                echo "<script>alert('Gagal Menambahkan');location.href='tambah_petugas.php';</script>";
            }
        }
    
?>