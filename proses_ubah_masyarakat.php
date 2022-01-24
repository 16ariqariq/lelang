<?php
    if($_POST){
        $id=$_POST["id"];
        $nama=$_POST["nama"];
        $username=$_POST["username"];
        $password=$_POST["password"];

        if(empty($nama)){
            echo "<script>alert{'nama tidak boleh kosong');location.href='tambah_masyarakat.php';</script>";
        } elseif(empty($username)){
            echo "<script>alert{'username tidak boleh kosong');location.href='tambah_masyarakat.php';</script>";
        } else {
        include "koneksi.php";
        if(empty($password)){
            $update=mysqli_query($koneksi, "update masyarakat set nama='".$nama."', username='".$username."' where id = '".$id."' ") or
            die(mysqli_error($koneksi));
                if($update){
                        echo "<script>alert('Sukses update');location.href='tampil_masyarakat.php';</script>";
                    } else {
                        echo "<script>alert('Gagal update');location.href='ubah_masyarakat.php?id=".$id."';</script>";
                    }
                } else {
                    $update=mysqli_query($koneksi, "update masyarakat set nama='".$nama."',username='".$username."',password='".md5($password)."' where id = '".$id."' ") or
            die(mysqli_error($koneksi));
                if($update){
                        echo "<script>alert('Sukses update');location.href='tampil_masyarakat.php';</script>";
                    } else{
                        echo "<script>alert('Gagal update');location.href='ubah_masyarakat.php?id=".$id."';</script>";
                }
        }
}
}
?>