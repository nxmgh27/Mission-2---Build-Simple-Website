<h2>Tambah Mahasiswa</h2>
<form method="post" action="/mahasiswa/store">
    <?= csrf_field() ?>
    NIM: <input type="text" name="nim"><br><br>
    Nama: <input type="text" name="nama"><br><br>
    Kelas: <input type="text" name="kelas"><br><br>
    <button type="submit">Simpan</button>
</form>

<br>
<form action="/mahasiswa" method="get">
    <button type="submit">⬅ Kembali</button>
</form>
