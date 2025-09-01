<?php
// Konfigurasi koneksi
$host = "localhost";
$user = "root";
$pass = "";
$db   = "akademik_db";

// Koneksi ke database
$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek apakah ada pencarian
$cari = "";
if (isset($_GET['cari'])) {
    $cari = $conn->real_escape_string($_GET['cari']);
    $sql = "SELECT id, nim, nama, umur FROM mahasiswa WHERE nama LIKE '%$cari%' ORDER BY id ASC";
} else {
    $sql = "SELECT id, nim, nama, umur FROM mahasiswa ORDER BY id ASC";
}

$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>

    <!-- Form Pencarian di ATAS -->
    <form method="GET" action="display_view_detail.php">
        <label>Cari Nama:</label>
        <input type="text" name="cari" value="<?= htmlspecialchars($cari) ?>">
        <button type="submit">Cari</button>
        <a href="display_view_detail.php"><button type="button">Kembali</button></a>
    </form>
    <br>

    <!-- Tabel Data Mahasiswa -->
    <?php if ($result->num_rows > 0): ?>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Aksi</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['nim']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['umur']; ?></td>
                <td>
                    <a href="detail_mahasiswa.php?nim=<?= $row['nim']; ?>">Detail</a> |
                    <a href="form_edit_mahasiswa.php?nim=<?= $row['nim']; ?>">Edit</a> |
                    <a href="hapus_mahasiswa.php?nim=<?= $row['nim']; ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p><i>Tidak ada data mahasiswa<?= $cari ? " dengan nama '$cari'" : "" ?>.</i></p>
    <?php endif; ?>

    <br><br>
    <!-- Tombol Tambah Mahasiswa di Bawah -->
    <a href="form_tambah_mahasiswa.php"><button>+ Tambah Mahasiswa</button></a>

</body>
</html>

<?php
$conn->close();
?>
