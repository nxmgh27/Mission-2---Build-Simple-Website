<h3 style="text-align:center;">Detail Mahasiswa</h3>

<div style="width: 300px; margin: 20px auto; font-size: 16px;">
    <p><strong>NIM:</strong> <?= esc($mhs['nim']) ?></p>
    <p><strong>Nama:</strong> <?= esc($mhs['nama']) ?></p>
    <p><strong>Umur:</strong> <?= esc($mhs['umur']) ?></p>
</div>

<div style="text-align:center; margin-top:20px;">
    <a href="<?= site_url('/mahasiswa/display_mahasiswa') ?>" > Kembali
    </a>
</div>
