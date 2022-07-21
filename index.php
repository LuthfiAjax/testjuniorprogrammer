<?php
    require "koneksi.php";
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
        <h1 align="center">Test Junior Programmer</h1>
        <p align="center">Status Produk Bisa Dijual</p><br>
        <a class="btn btn-primary mb-3" href="tambah.php"><i class="fa fa-plus-square "></i> Tambah Akun</a>
        <table class="table table-striped">
            <thead>
                <tr align="center">
                    <th scope="col" width="10">No. </th>
                    <th scope="col" width="400">Nama Produk</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Harga</th>
                    <th scope="col" width="100">Aksi</th>
                </tr>
            </thead>
            <tbody>
               <?php 
                    $no=0;
                        $data = mysqli_query($koneksi,"SELECT * FROM produk WHERE status ='bisa dijual' ORDER BY id_produk DESC");
                        while($d = mysqli_fetch_array($data)){
                            $no++;
                            ?>
                <tr align="center">
                    <td><?= $no; ?></td>
                    <td><?= $d['nama_produk']; ?></td>
                    <td><?= $d['kategori']; ?></td>
                    <td><?= $d['harga']; ?></td>
                    <td><div id="thanks">
                        <a onclick="return confirm ('Yakin hapus Produk <?php echo $d['nama_produk'];?>.?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus Produk" href="proses/delete.php?hal=hapus&kd=<?php echo $d['id_produk'];?>"><span class="fa fa-lg fa-trash"> </span></a>
                        <a class="btn btn-sm btn-primary tooltips" data-placement="bottom" data-toggle="tooltip" title="Edit Produk" href="edit.php?hal=hapus&kd=<?php echo $d['id_produk'];?>"><span class="far fa-edit"></span></a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>