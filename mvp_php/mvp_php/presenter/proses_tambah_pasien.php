<?php
// proses_tambah_pasien.php
$db_host = "localhost"; // host 
			$db_user = "root"; // user
			$db_password = ""; // password
			$db_name = "mvp_php"; // nama basis data


// Membuat koneksi database
$conn = mysqli_connect($host, $username, $password, $database);

// Cek koneksi database
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Include kelas Pasien untuk memanipulasi data pasien
include("Model/Pasien.class.php");

// Ambil data dari form
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tl = $_POST['tl'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$telp = $_POST['telp'];

// Lakukan proses tambah data pasien ke database
$query = "INSERT INTO pasien (nik, nama, tempat, tl, gender, email, telp) VALUES ('$nik', '$nama', '$tempat', '$tl', '$gender', '$email', '$telp')";

// Eksekusi query
$result = mysqli_query($conn, $query);

// Cek hasil eksekusi query
if ($result) {
    echo "Data pasien berhasil ditambahkan.";
} else {
    echo "Gagal menambahkan data pasien: " . mysqli_error($conn);
}

// Tutup koneksi database setelah selesai
mysqli_close($conn);
?>
