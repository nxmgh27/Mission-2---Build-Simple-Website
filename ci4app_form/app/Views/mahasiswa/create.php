<h3 style="text-align:center;">Form Tambah Mahasiswa</h3>

<?php if (session()->getFlashdata('validation')): ?>
    <div style="color:red; text-align:center;">
        <?= session()->getFlashdata('validation')->listErrors() ?>
    </div>
<?php endif; ?>

<form action="<?= site_url('mahasiswa/store') ?>" method="post" style="text-align:center;">
    <p>
        <label for="nim">NIM:</label><br>
        <input type="text" name="nim" value="<?= set_value('nim') ?>">
    </p>

    <p>
        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" value="<?= set_value('nama') ?>">
    </p>

    <p>
        <label for="umur">Umur:</label><br>
        <input type="number" name="umur" value="<?= set_value('umur') ?>">
    </p>

    <button type="submit">Simpan</button>
    <a href="<?= site_url('mahasiswa/display_mahasiswa') ?>">Kembali</a>
</form>
