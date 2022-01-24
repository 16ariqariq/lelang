<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Ubah Petugas</title>
</head>
<body>
    <?php
    include "navbar.php";
    include "koneksi.php";
    $qry_get_petugas=mysqli_query($koneksi,"select * from petugas where id_petugas = '".$_GET['id_petugas']."'");
    $dt_petugas=mysqli_fetch_array($qry_get_petugas);
    ?>
    <div class="container">
        <h3>Ubah Petugas</h3>
        <form action="proses_ubah_petugas.php" method="post">
            <input type="hidden" name="id_petugas" value="<?=$dt_petugas['id_petugas']?>">
            Nama:
            <input type="text" name="nama_petugas" value="<?=$dt_petugas['nama_petugas']?>" class="form-control">
            Username :
            <input type="text" name="username" value="<?=$dt_petugas['username']?>" class="form-control">
            Password :
            <input type="password" name="password" value="" class="form-control">
            <br>
            <input type="submit" name="simpan" value="Ubah" class="btn btn-primary">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>