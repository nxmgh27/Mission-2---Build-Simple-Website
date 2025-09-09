<?= $this->extend('layout/template2') ?>

<?= $this->section('content') ?>
    <h3>Data Mahasiswa</h3>
    <table>
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
                <td><?= $no++ ?></td>
                <td><?= esc($mhs['nim']) ?></td>
                <td><?= esc($mhs['nama']) ?></td>
                <td><?= esc($mhs['umur']) ?></td>
                <td><a href="<?= site_url('mahasiswa/detail_mahasiswa/'.$mhs['nim']); ?>">Detail</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?= $this->endSection() ?>
