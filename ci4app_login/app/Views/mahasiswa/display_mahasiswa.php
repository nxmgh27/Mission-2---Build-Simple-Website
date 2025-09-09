<h3 style="text-align:center;">Daftar Mahasiswa</h3>

<table border="1" cellpadding="8" cellspacing="0" style="margin:auto; border-collapse: collapse;">
    <thead style="background:#f2f2f2;">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($mahasiswa)): ?>
            <?php foreach ($mahasiswa as $m): ?>
                <tr>
                    <td><?= esc($m['nim']) ?></td>
                    <td><?= esc($m['nama']) ?></td>
                    <td><?= esc($m['umur']) ?></td>
                    <td><a href="<?= site_url('/mahasiswa/detail_mahasiswa/'.$m['nim']) ?>">Detail</a></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4" style="text-align:center;">Tidak ada data mahasiswa</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
