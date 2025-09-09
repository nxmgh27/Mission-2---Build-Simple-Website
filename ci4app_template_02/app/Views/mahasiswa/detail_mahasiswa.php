<?= $this->extend('layout/template2') ?>

<?= $this->section('content') ?>
    <h3>Detail Mahasiswa</h3>
    <p><b>NIM:</b> <?= esc($mhs['nim']) ?></p>
    <p><b>Nama:</b> <?= esc($mhs['nama']) ?></p>
    <p><b>Umur:</b> <?= esc($mhs['umur']) ?></p>
    <a href="<?= site_url('mahasiswa/display_mahasiswa') ?>">Kembali</a>
<?= $this->endSection() ?>
