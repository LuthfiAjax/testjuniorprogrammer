<?php
include "../koneksi.php";
$id_produk = $_GET['kd'];

$query = mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk='$id_produk'");
if ($query){
	echo "<script>alert('Produk Berhasil dihapus!'); window.location = '../index.php'</script>";	
} else {
	echo "<script>alert('Produk Gagal dihapus!'); window.location = '../index.php'</script>";	
}
?>