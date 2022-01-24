<?php
    if($_POST){
        $nama_barang=$_POST['nama_barang'];
        $harga_awal=$_POST['harga_awal'];
        $tgl_daftar = date('Y-m-d');
        $deskripsi=$_POST['deskripsi'];
        
            include "koneksi.php";
            $insert=mysqli_query($koneksi,"insert into barang (nama_barang, harga_awal, tgl_daftar, deskripsi)
            value
            ('".$nama_barang."','".$harga_awal."','".$tgl_daftar."','".$deskripsi."')") or die(mysqli_error($koneksi));
            if ($insert) {
                echo "<script>alert('Sukses Menambahkan');location.href='tampil_barang.php';</script>";
            }

            else {
                echo "<script>alert('Gagal Menambahkan');location.href='tambah_barang.php';</script>";
            }
        }
    
?>