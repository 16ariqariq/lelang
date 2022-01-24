<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
    <style>
      body{
        background-image: url("https://www.kibrispdr.org/data/doodle-wallpaper-for-laptop-6.jpg");
        background-repeat:no-repeat;
        background-size:cover;
      }
    </style>
  <body class="text-center">
<?php
  include "navbar.php";
?>
    <div class="container">
    <h1>Data Masyarakat</h1>
    <form action = "tampil_barang.php" method = "POST">
        <input type = "text" name = "cari" class = "form-control" placeholder = "Apa yang ingin anda cari?"/>
    </form>
    <table class="table table-light table-striped">
  <thead>
    <tr class="table-dark">
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
      <th scope="col">Tanggal Daftar</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "koneksi.php";
    if (isset($_POST["cari"])){
        //jika ada keyword pencarian
        $cari = $_POST['cari'];
        $query_barang = mysqli_query($koneksi, "select * from barang where id_barang like '%$cari%' or nama_barang like '%$cari%'");
    } else {
        //jika tidak ada keyword pencarian
        $query_barang = mysqli_query($koneksi, "select * from barang");
    }
    while ($dt_barang = mysqli_fetch_array($query_barang)){?>
        <tr> 
            <td><?php echo $dt_barang["id_barang"];?></td>
            <td><?php echo $dt_barang["nama_barang"];?></td>
            <td><?php echo $dt_barang["harga_awal"];?></td>
            <td><?php echo $dt_barang["tgl_daftar"];?></td>
            <td><?php echo $dt_barang["deskripsi"];?></td>
            <td>
            <a href="ubah_barang.php?id_barang=<?=$dt_barang['id_barang']?>" class="btn btn-primary">Ubah</a>
            <a href="hapus_barang.php?id_barang=<?=$dt_barang['id_barang']?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
  </tbody>
</table>
    <br><a href="tambah_barang.php" class="btn btn-success">Tambah</a></br>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>