<h2>Edit Motor</h2>
<form method="POST">
    <label>Nama Motor: <input type="text" name="nama_motor" value="<?= $motor['nama_motor'] ?>" required></label><br>
    <label>Jenis Motor: <input type="text" name="jenis_motor" value="<?= $motor['jenis_motor'] ?>" required></label><br>
    <label>Harga: <input type="number" name="harga" value="<?= $motor['harga'] ?>" required></label><br>
    <button type="submit">Update</button>
</form>
