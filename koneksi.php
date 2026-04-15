<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_kampus";

// Membuat koneksi
$conn = new mysqli($host, $user, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

echo "Koneksi berhasil!";
?>