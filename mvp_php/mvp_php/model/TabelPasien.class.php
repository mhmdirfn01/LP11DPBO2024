<?php
// TabelPasien.class.php

// Sertakan kelas DB untuk koneksi database
require_once("DB.class.php");

class TabelPasien extends DB {
    function getPasien() {
        // Query mysql select data pasien
        $query = "SELECT * FROM pasien";
        // Mengeksekusi query
        return $this->execute($query);
    }
}
?>
