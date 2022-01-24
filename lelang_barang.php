<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lelang Barang</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <?php
        include "navbar.php";
        include "koneksi.php";
        $query_detail_barang = mysqli_query($koneksi, "SELECT * FROM barang where id_barang = '".$_GET['id_barang']."'");
        $data_barang = mysqli_fetch_array($query_detail_barang);
    ?>
    <main class="container">
    <section class="py-5 text-center container">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Lelang Barang</h1>
        </div>
    </section>

    <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="../admin/foto/<?=$data_barang['foto']?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
            <form action="insert_cart.php?" method="POST">
                <input type="hidden" name="id_barang" value="<?=$data_barang['id_barang']?>">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <td>Nama Barang</td>
                            <td><?=$data_barang['nama_barang']?></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><?=$data_barang['Harga']?></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td><?=$data_barang['deskripsi']?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Harga</td>
                            <td><input type="number" name="jumlah_harga" value="1"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" class="btn btn-success" value="LELANG"</td>
                        </tr>
                    </thead>
                </table>
            </form>
            </div>
            </div>
        </div>
    </div>

    </main>
    <?php
        include "footer.php";
    ?>
</body>
</html>