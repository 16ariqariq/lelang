<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Petugas</title>
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
    <h1>Data Petugas</h1>
    <form action = "tampil_petugas.php" method = "POST">
        <input type = "text" name = "cari" class = "form-control" placeholder = "Mau Cari Siapa?"/>
    </form>
    <table class="table table-light table-striped">
  <thead>
    <tr class="table-dark">
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Username</th>
      <th scope="col">PW</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "koneksi.php";
    if (isset($_POST["cari"])){
        //jika ada keyword pencarian
        $cari = $_POST['cari'];
        $query_petugas = mysqli_query($koneksi, "select * from petugas where id like '%$cari%' or nama_petugas like '%$cari%'");
    } else {
        //jika tidak ada keyword pencarian
        $query_petugas = mysqli_query($koneksi, "select * from petugas");
    }
    while ($dt_petugas = mysqli_fetch_array($query_petugas)){?>
        <tr> 
            <td><?php echo $dt_petugas["id_petugas"];?></td>
            <td><?php echo $dt_petugas["nama_petugas"];?></td>
            <td><?php echo $dt_petugas["username"];?></td>
            <td><?php echo $dt_petugas["password"];?></td>
            <td>
              <a href="ubah_petugas.php" class="btn btn-primary">Ubah</a>
              <a href="hapus_petugas.php?id_petugas=<?=$dt_petugas['id_petugas']?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
  </tbody>
</table>
    <br><a href="tambah_petugas.php" class="btn btn-success">Tambah</a></br>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>