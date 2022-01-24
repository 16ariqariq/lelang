<?php
    if($_POST){
        $id_barang=$_POST["id_barang"];
        $nama_barang=$_POST["nama_barang"];
        $harga_awal=$_POST["harga_awal"];
        $deskripsi=$_POST["deskripsi"];

        if(empty($nama_barang)){
            echo "<script>alert{'nama tidak boleh kosong');location.href='tambah_barang.php';</script>";
        } else {
        include "koneksi.php";
        if(empty($password)){
            $update=mysqli_query($koneksi, "update barang set nama_barang='".$nama_barang."', harga_awal='".$harga_awal."', deskripsi='".$deskripsi."' where id_barang = '".$id_barang."' ") or
            die(mysqli_error($koneksi));
                if($update){
                        echo "<script>alert('Sukses update');location.href='tampil_barang.php';</script>";
                    } else {
                        echo "<script>alert('Gagal update');location.href='ubah_barang.php?id=".$id_barang."';</script>";
                }
            }           
        }
    }
?>