<h2>Daftar Mahasiswa</h2>

<form method="get" action="/mahasiswa" style="margin-bottom:15px;">
    <label for="keyword">Cari Nama:</label>
    <input type="text" id="keyword" name="keyword" placeholder="Cari...">
    <button type="submit">Cari</button>
    <a href="/mahasiswa">
        <button type="button">Kembali</button>
    </a>
</form>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </tr>
    <?php foreach($mahasiswa as $m): ?>
    <tr>
        <td><?= $m['id']; ?></td>
        <td><?= $m['nim']; ?></td>
        <td><?= $m['nama']; ?></td>
        <td><?= $m['kelas']; ?></td>
        <td>
            <a href="/mahasiswa/detail/<?= $m['id']; ?>">Detail</a> |
            <a href="/mahasiswa/edit/<?= $m['id']; ?>">Edit</a> |
            <a href="/mahasiswa/delete/<?= $m['id']; ?>" onclick="return confirm('Hapus data?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<br>
<form action="/mahasiswa/create" method="get">
    <button type="submit">+ Tambah Data</button>
</form>
