<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h2>Tambah Mahasiswa</h2>
    <form action="proses_tambah.php" method="POST">
        <label>NIM:</label><br>
        <input type="text" name="nim" required><br><br>

        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Umur:</label><br>
        <input type="number" name="umur" required><br><br>

        <input type="submit" value="Simpan">
    </form>
    <br>
    <a href="display_view_detail.php">Kembali ke Daftar</a>
</body>
</html>
