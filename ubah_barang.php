<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Ubah Barang</title>
</head>
<body>
    <?php
    include "navbar.php";
    include "koneksi.php";
    $qry_get_barang=mysqli_query($koneksi,"select * from barang where id_barang = '".$_GET['id_barang']."'");
    $dt_barang=mysqli_fetch_array($qry_get_barang);
    ?>
    <div class="container">
        <h3>Ubah Barang</h3>
        <form action="proses_ubah_barang.php" method="post">
            <input type="hidden" name="id_barang" value="<?=$dt_barang['id_barang']?>">
            Nama:
            <input type="text" name="nama_barang" value="<?=$dt_barang['nama_barang']?>" class="form-control" required>
            Harga:
            <input type="text" name="harga_awal" value="<?=$dt_barang['harga_awal']?>" class="form-control">
            Deskripsi :
            <textarea class="form-control" name="deskripsi" row="4"><?=$dt_barang['deskripsi']?></textarea>
            <br>
            <input type="submit" name="simpan" value="Ubah" class="btn btn-primary">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>