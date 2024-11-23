<h2>Daftar Motor</h2>
<a href="index.php?action=add">Tambah Motor</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($motors)): ?>
            <?php foreach ($motors as $motor): ?>
                <tr>
                    <td><?= $motor['id'] ?></td>
                    <td><?= $motor['nama_motor'] ?></td>
                    <td><?= $motor['jenis_motor'] ?></td>
                    <td><?= $motor['harga'] ?></td>
                    <td>
                        <a href="index.php?action=edit&id=<?= $motor['id'] ?>">Edit</a>
                        <a href="index.php?action=delete&id=<?= $motor['id'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">Tidak ada data.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
