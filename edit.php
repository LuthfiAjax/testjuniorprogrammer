<?php 
    include "koneksi.php";
    $kategori = mysqli_query($koneksi, "SELECT kategori FROM produk GROUP BY kategori");
    $status = mysqli_query($koneksi, "SELECT status FROM produk GROUP BY status");
?>

<!-- Fungsi Menampilkan Data dari Database -->
    <?php
    $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$_GET[kd]'");
    $d  = mysqli_fetch_array($query);
    ?>
<!-- End -->	

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tes Programmer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 align="center">Edit Data Produk</h1><br>
        <form action="proses/update.php" method="POST">
            <div class="mb-3">
                <input type="hidden" class="form-control" id="exampleInputEmail1" value="<?= $d['id_produk']; ?>"  placeholder="Id Produk" id="id_produk" require name="id_produk">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $d['nama_produk']; ?>"  placeholder="nama produk" id="nama" require name="nama">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kategori Produk</label>
                <select class="form-select" aria-label="Default select example" name="kategori" id="kategori" required>
                  <option value="<?=$d['kategori']?>"><?= $d['kategori']; ?></option>
                  <?php while($row = mysqli_fetch_array($kategori)) { ?>
                  <option value="<?=$row['kategori']?>"><?=$row['kategori']?></option>
                  <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Harga Produk</label>
                <input type="number" class="form-control" require id="harga" value="<?= $d['harga']; ?>" name="harga">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status Produk</label>
                <select class="form-select" aria-label="Default select example" name="status" id="status" required>
                  <option value="<?=$d['status']?>"><?= $d['status']; ?></option>
                  <?php while($row = mysqli_fetch_array($status)) { ?>
                  <option value="<?=$row['status']?>"><?=$row['status']?></option>
                  <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>

