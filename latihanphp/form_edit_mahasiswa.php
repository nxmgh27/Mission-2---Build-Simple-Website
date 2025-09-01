<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "akademik_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$nim = $_GET['nim'];
$sql = "SELECT * FROM mahasiswa WHERE nim = '$nim' LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    die("Data tidak ditemukan");
}

$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h2>Edit Mahasiswa</h2>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="nim" value="<?= $data['nim'] ?>">

        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?= $data['nama'] ?>" required><br><br>

        <label>Umur:</label><br>
        <input type="number" name="umur" value="<?= $data['umur'] ?>" required><br><br>

        <input type="submit" value="Update">
    </form>
    <br>
    <a href="display_view_detail.php"><button>Kembali</button></a>
</body>
</html>
