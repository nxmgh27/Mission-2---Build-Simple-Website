<h2>Edit Mahasiswa</h2>
<form method="post" action="/mahasiswa/update/<?= $mahasiswa['id']; ?>">
    <?= csrf_field() ?>
    NIM: <input type="text" name="nim" value="<?= $mahasiswa['nim']; ?>"><br><br>
    Nama: <input type="text" name="nama" value="<?= $mahasiswa['nama']; ?>"><br><br>
    Kelas: <input type="text" name="kelas" value="<?= $mahasiswa['kelas']; ?>"><br><br>
    <button type="submit">Update</button>
</form>

<br>
<form action="/mahasiswa" method="get">
    <button type="submit">Kembali</button>
</form>
