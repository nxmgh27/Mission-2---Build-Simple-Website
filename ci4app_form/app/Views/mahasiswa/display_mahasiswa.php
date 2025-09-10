<h3 style="text-align:center;">Daftar Mahasiswa</h3>

<p style="text-align:center;">
    <a href="<?= site_url('mahasiswa/create') ?>">Tambah Mahasiswa</a>
</p>

<table border="1" style="margin:auto; border-collapse:collapse;">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($mahasiswa as $m): ?>
    <tr>
        <td><?= $m['nim'] ?></td>
        <td><?= $m['nama'] ?></td>
        <td><?= $m['umur'] ?></td>
        <td><a href="<?= site_url('mahasiswa/detail/'.$m['nim']) ?>">Detail</a></td>
    </tr>
    <?php endforeach; ?>
</table>
