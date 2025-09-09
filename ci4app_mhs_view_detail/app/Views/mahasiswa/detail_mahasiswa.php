<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h2>Detail Mahasiswa</h2>

    <p><strong>NIM:</strong> <?= esc($mhs['nim']); ?></p>
    <p><strong>Nama:</strong> <?= esc($mhs['nama']); ?></p>
    <p><strong>Umur:</strong> <?= esc($mhs['umur']); ?></p>

    <a href="<?= site_url('mahasiswa/display_mahasiswa'); ?>">Kembali</a>
</body>
</html>
