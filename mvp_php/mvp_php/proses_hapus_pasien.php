<?php
// proses_hapus_pasien.php

// Konfigurasi koneksi database
$host = "localhost"; // Ganti sesuai dengan host database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "mvp_php"; // Ganti dengan nama database Anda

// Membuat koneksi database
$conn = mysqli_connect($host, $username, $password, $database);

// Cek koneksi database
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Include kelas TabelPasien untuk memanipulasi data pasien
include("Model/TabelPasien.class.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Lakukan proses hapus data pasien dari database
    $query = "DELETE FROM pasien WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    // Setelah menjalankan query, Anda dapat menentukan apakah proses hapus berhasil atau tidak
    if ($result) {
        echo "Data pasien berhasil dihapus.";
    } else {
        echo "Gagal menghapus data pasien: " . mysqli_error($conn);
    }

    // Tutup koneksi database setelah selesai
    mysqli_close($conn);
} else {
    echo "ID pasien tidak ditemukan.";
}
?>
