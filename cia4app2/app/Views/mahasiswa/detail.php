<h2>Detail Mahasiswa</h2>

<p><b>ID:</b> <?= $mahasiswa['id']; ?></p>
<p><b>NIM:</b> <?= $mahasiswa['nim']; ?></p>
<p><b>Nama:</b> <?= $mahasiswa['nama']; ?></p>
<p><b>Kelas:</b> <?= $mahasiswa['kelas']; ?></p>

<br>
<form action="/mahasiswa" method="get">
    <button type="submit">⬅ Kembali</button>
</form>
