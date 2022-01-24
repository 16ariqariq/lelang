

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Aksi Status</title>

</head>

<body>
<?php
  include 'koneksi.php'; 
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <br>
      <h1>Action</h1>
    </div>

        <table class="content-table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">ID Lelang</th>
        <th scope="col">ID Barang</th>
        <th scope="col">ID Masyarakat</th>
        <th scope="col">Harga</th>
        </tr>
    </thead>
    <tbody>
    <?php
      $query = "SELECT `id`, `id_barang`, `id_masyarakat`, `harga_penawaran`as max_price from lelang where `harga_penawaran` = (select max(`harga_penawaran`) from lelang);";
      $result = mysqli_query($koneksi, $query);
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }
      $no = 1;
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['id_barang']; ?></td>
          <td><?php echo $row['id_masyarakat']; ?></td>
          <td><?php echo $row['max_price']; ?></td>
      </tr>
         
      <?php
        $no++;
      }
      ?>
      <?php
        $simpan = $koneksi->query("INSERT INTO history_lelang (id, id_barang, id_masyarakat, harga_akhir) SELECT id, id_barang, id_masyarakat, harga_penawaran FROM lelang WHERE `harga_penawaran` = (select max(`harga_penawaran`) from lelang)");
        $update = $koneksi->query("UPDATE barang SET status = 'selesai' WHERE  id = '".$_GET['id']."'");
        $update = $koneksi->query("UPDATE lelang SET status = 'selesai' WHERE  id_barang = '".$_GET['id_barang']."'");
    ?>

    </tbody>
    </table>

  </main><!-- End #main -->

</body>

</html>