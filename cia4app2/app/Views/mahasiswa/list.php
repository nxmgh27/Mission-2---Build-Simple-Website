<h2>Data Mahasiswa</h2>
<a href="/mahasiswa/create">+ Tambah Mahasiswa</a>
<form method="get" action="/mahasiswa/search">
    <input type="text" name="keyword" placeholder="Cari mahasiswa...">
    <button type="submit">Cari</button>
</form>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th><th>Nama</th><th>NIM</th><th>Kelas</th><th>Aksi</th>
    </tr>
    <?php foreach($mahasiswa as $m): ?>
    <tr>
        <td><?= $m['id'] ?></td>
        <td><a href="/mahasiswa/detail/<?= $m['id'] ?>"><?= $m['nama'] ?></a></td>
        <td><?= $m['nim'] ?></td>
        <td><?= $m['kelas'] ?></td>
        <td>
            <a href="/mahasiswa/edit/<?= $m['id'] ?>">Edit</a> | 
            <a href="/mahasiswa/delete/<?= $m['id'] ?>" onclick="return confirm('Yakin hapus?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
