<!DOCTYPE html>
<html>
<head>
    <title>Display Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach($mahasiswa as $mhs): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= esc($mhs['nim']); ?></td>
                <td><?= esc($mhs['nama']); ?></td>
                <td><?= esc($mhs['umur']); ?></td>
                <td>
                    <a href="<?= site_url('mahasiswa/detail_mahasiswa/'.$mhs['nim']); ?>">View Detail</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
