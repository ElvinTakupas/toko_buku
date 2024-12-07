<form action="<?= site_url('orders/update/' . $pesanan['id']); ?>" method="post">
    <input type="text" name="id_pembeli" value="<?= esc($pesanan['id_pembeli']); ?>">
    <input type="text" name="total_harga" value="<?= esc($pesanan['total_harga']); ?>">
    <input type="text" name="jumlah" value="<?= esc($pesanan['jumlah']); ?>">
    <select name="status">
        <option value="Pending" <?= $pesanan['status'] == 'Pending' ? 'selected' : ''; ?>>Pending</option>
        <option value="Dikirim" <?= $pesanan['status'] == 'Dikirim' ? 'selected' : ''; ?>>Dikirim</option>
        <option value="Selesai" <?= $pesanan['status'] == 'Selesai' ? 'selected' : ''; ?>>Selesai</option>
    </select>
    <button type="submit">Update</button>
</form>
