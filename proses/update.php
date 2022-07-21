<?php 
	include "../koneksi.php";

        $id_produk  = $_POST['id_produk'];
        $nama_produk = $_POST['nama'];
		$kategori = $_POST['kategori'];
		$status = $_POST['status'];
		$harga = $_POST['harga'];


        $sql="UPDATE produk SET nama_produk ='$nama_produk', kategori='$kategori', status='$status', harga='$harga'
        WHERE id_produk = '$id_produk'";
        $update=mysqli_query($koneksi, $sql);
        if ($update){
            echo "<script>alert('Produk Berhasil diubah!'); window.location = '../index.php'</script>";	
        }else{
           echo "<script>alert('Produk gagal diubah!'); window.location = '../edit.php'</script>";	
        }

?>