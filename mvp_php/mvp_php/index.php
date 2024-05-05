<?php
// index.php

// Include file yang diperlukan
include("Model/Template.class.php");
include("Model/DB.class.php");
include("Model/Pasien.class.php");
include("Model/TabelPasien.class.php");
include("View/TampilPasien.php");

// Instance objek TampilPasien untuk menampilkan daftar pasien
$tampilPasien = new TampilPasien();

// Tampilkan daftar pasien
$tampilPasien->tampil();
?>

<!-- Tombol untuk membuka form tambah pasien -->
<br>
<form action="add.php" method="post">
    <input type="hidden" name="action" value="add">
    <button type="submit">Tambah Data Pasien</button>
</form>
