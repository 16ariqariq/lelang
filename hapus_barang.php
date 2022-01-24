<?php 
    if($_GET['id_barang']){ 
        include "koneksi.php";
        $qry_hapus=mysqli_query($koneksi,"DELETE FROM barang where id_barang='".$_GET['id_barang']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus barang');location.href='tampil_barang.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus barang');location.href='tampil_barang.php';</script>";
        }
    }
    else{
        echo "id_tidak ada";
    }
?>