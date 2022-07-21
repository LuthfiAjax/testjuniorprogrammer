<?php
    include "../koneksi.php";
    $kategori  = $_POST['kategori'];
    $status  = $_POST['status'];
    $nama  = $_POST['nama'];
    $harga  = $_POST['harga'];

    // tambah data pada tabel TB masuk
    $add="INSERT INTO produk VALUES (NULL,'$nama','$kategori','$harga','$status')";
    $masuk=mysqli_query($koneksi, $add);
    if ($masuk){
        echo "<script>alert('Produk Berhasil Ditambah'); window.location = '../index.php'</script>";
    }else{
        echo "<script>alert('Produk gagal ditambah!'); window.location = '../tambah.php'</script>";	
    }
?>