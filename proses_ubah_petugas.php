<?php
    if($_POST){
        $id_petugas=$_POST["id_petugas"];
        $nama_petugas=$_POST["nama_petugas"];
        $username=$_POST["username"];
        $password=$_POST["password"];

        if(empty($nama_petugas)){
            echo "<script>alert{'nama tidak boleh kosong');location.href='tambah_petugas.php';</script>";
        } elseif(empty($username)){
            echo "<script>alert{'username tidak boleh kosong');location.href='tambah_petugas.php';</script>";
        } else {
        include "koneksi.php";
        if(empty($password)){
            $update=mysqli_query($koneksi, "update petugas set nama_petugas='".$nama_petugas."', username='".$username."' where id_petugas = '".$id_petugas."' ") or
            die(mysqli_error($koneksi));
                if($update){
                        echo "<script>alert('Sukses update');location.href='tampil_petugas.php';</script>";
                    } else {
                        echo "<script>alert('Gagal update');location.href='ubah_petugas.php?id=".$id."';</script>";
                    }
                } else {
                    $update=mysqli_query($koneksi, "update petugas set nama_petugas='".$nama_petugas."',username='".$username."',password='".md5($password)."' where id = '".$id."' ") or
            die(mysqli_error($koneksi));
                if($update){
                        echo "<script>alert('Sukses update');location.href='tampil_petugas.php';</script>";
                    } else{
                        echo "<script>alert('Gagal update');location.href='ubah_petugas.php?id=".$id."';</script>";
                }
        }
}
}
?>