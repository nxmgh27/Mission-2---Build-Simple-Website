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
$sql = "DELETE FROM mahasiswa WHERE nim = '$nim'";

if ($conn->query($sql) === TRUE) {
    header("Location: display_view_detail.php");
} else {
    echo "Gagal hapus data: " . $conn->error;
}

$conn->close();
?>
