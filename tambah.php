<?php 
    include "koneksi.php";
    $kategori = mysqli_query($koneksi, "SELECT kategori FROM produk GROUP BY kategori");
    $status = mysqli_query($koneksi, "SELECT status FROM produk GROUP BY status");
?>

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
        <h1 align="center">Tambah Data Produk</h1><br>
        <form action="proses/add.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="nama produk" id="nama" require name="nama">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kategori Produk</label>
                <select class="form-select" aria-label="Default select example" name="kategori" id="kategori" required>
                  <option disabled selected> pilih kategori Produk </option>
                  <?php while($row = mysqli_fetch_array($kategori)) { ?>
                  <option value="<?=$row['kategori']?>"><?=$row['kategori']?></option>
                  <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Harga Produk</label>
                <input type="number" class="form-control" require id="harga" name="harga">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status Produk</label>
                <select class="form-select" aria-label="Default select example" name="status" id="status" required>
                  <option disabled selected> pilih Status Produk </option>
                  <?php while($row = mysqli_fetch_array($status)) { ?>
                  <option value="<?=$row['status']?>"><?=$row['status']?></option>
                  <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>

