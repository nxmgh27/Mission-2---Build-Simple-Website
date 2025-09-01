<!DOCTYPE html>
<html>
<head>
    <title>Tabel Looping</title>
</head>
<body>
    <h2>Tabel Mahasiswa (Looping)</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($mahasiswa as $mhs): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['kelas']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
