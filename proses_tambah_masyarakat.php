<?php
    if($_POST){
        $nama=$_POST['nama'];
        $username=$_POST['username'];
        $password=$_POST['password'];

            include "koneksi.php";
            $insert=mysqli_query($koneksi,"insert into masyarakat (nama, username, password)
            value
            ('".$nama."','".$username."','".md5($password)."')") or die(mysqli_error($koneksi));
            if ($insert) {
                echo "<script>alert('Sukses Menambahkan');location.href='tambah_masyarakat.php';</script>";
            }

            else {
                echo "<script>alert('Gagal Menambahkan');location.href='tambah_masyarakat.php';</script>";
            }
        }
    
?>