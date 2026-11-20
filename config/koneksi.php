<?php
session_start();

$konfigurasi="mysql:host=localhost;dbname=db_kopi_member;";

try {
    $koneksi = new PDO($konfigurasi, "root", "");
} catch (PDOException $e) {
    $error=  $e -> getMessage();
}


?>