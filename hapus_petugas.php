<?php
    if ($_GET['id_petugas']) {
        include "koneksi.php";
        $query_hapus = mysqli_query($koneksi, "DELETE FROM petugas where id_petugas ='".$_GET['id_petugas']."'");
    if($query_hapus){
        echo "<script>alert('Sukses hapus');location.href='tampil_petugas.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus');location.href='tampil_petugas.php';</script>";
        }
    } 
?>