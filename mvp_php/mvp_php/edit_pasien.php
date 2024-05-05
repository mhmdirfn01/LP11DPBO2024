<!-- edit_pasien.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pasien</title>
</head>
<body>
    <h2>Form Edit Pasien</h2>
    <form action="proses_edit_pasien.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $pasien['id']; ?>"> <!-- ID Pasien sebagai input hidden -->
        <label for="nik">NIK:</label><br>
        <input type="text" id="nik" name="nik" value="<?php echo $pasien['nik']; ?>" required><br>
        
        <!-- Sisipkan input lainnya sesuai dengan kebutuhan untuk mengedit data pasien -->
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
