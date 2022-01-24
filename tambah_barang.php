<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <br><h3>Tambah Barang</h3>
        <form action="proses_tambah_barang.php" method="post">
            Nama Barang:
            <br><input type="text" name="nama_barang" value="" class="form-control" placeholder="Masukkan Nama Barang"><br>
            Harga Awal:
            <br><input type="text" name="harga_awal" value="" class="form-control" placeholder="Masukkan Harga Awal Barang"><br>
            Tanggal Daftar:
            <br><input type="date" name="tgl_daftar" class="form-control" required></br>
            Deskripsi : 
            <textarea name="deskripsi" class="form-control"
            rows="4"></textarea><br>
            <br><input type="submit" name="simpan" value="Tambah Barang" class="btn btn-primary"></br>
        </form>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>