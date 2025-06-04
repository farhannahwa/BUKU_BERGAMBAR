<?php
// Memulai session
session_start();

// Menghapus semua variabel session
$_SESSION = [];

// Menghancurkan session
session_destroy();

// Arahkan kembali ke halaman login atau halaman utama
header("Location: home.php");
exit;
?>