<?php
 
// Konfigurasi Database
$host       = 'localhost'; 
$username   = 'root'; 
$password   = ''; 
$dbname     = 'juniorprogrammer'; 
 
$koneksi = mysqli_connect($host, $username, $password, $dbname);
 
if ($koneksi) {
    //  echo "Database Terhubung";
} else {
    echo "Database Error";
}
?>