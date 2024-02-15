<?php  

// Koneksi ke database
$db_host     = "localhost"; // Ganti dengan host database Anda
$db_user     = "root"; // Ganti dengan username database Anda
$db_password = "root"; // Ganti dengan password database Anda
$db_name     = "php_crud_bootstrap"; // Ganti dengan nama database Anda

$db = mysqli_connect('localhost', 'root', 'root', 'php_crud_bootstrap');

// Memeriksa koneksi
if (!$db) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>