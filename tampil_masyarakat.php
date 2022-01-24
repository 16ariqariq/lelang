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
        $query_masyarakat = mysqli_query($koneksi, "select * from masyarakat where id like '%$cari%' or nama like '%$cari%'");
    } else {
        //jika tidak ada keyword pencarian
        $query_masyarakat = mysqli_query($koneksi, "select * from masyarakat");
    }
    while ($dt_masyarakat = mysqli_fetch_array($query_masyarakat)){?>
        <tr> 
            <td><?php echo $dt_masyarakat["id"];?></td>
            <td><?php echo $dt_masyarakat["nama"];?></td>
            <td><?php echo $dt_masyarakat["username"];?></td>
            <td><?php echo $dt_masyarakat["password"];?></td>
            <td>
              <a href="ubah_masyarakat.php?id=<?=$dt_masyarakat['id']?>" class="btn btn-primary">Ubah</a>
              <a href="hapus_masyarakat.php?id=<?=$dt_masyarakat['id']?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
  </tbody>
</table>
    <br><a href="tambah_masyarakat.php?id=<?=$dt_masyarakat['id']?>" class="btn btn-success">Tambah</a></br>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>