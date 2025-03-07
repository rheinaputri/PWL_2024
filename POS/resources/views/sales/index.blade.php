<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Penjualan - POS</title>
</head>
<body>
    <h1>Transaksi Penjualan</h1>
    <form>
        <label for="product">Pilih Produk:</label>
        <select id="product" name="product">
            <option value="Teh Botol">Teh Botol</option>
            <option value="Shampo Herbal">Shampo Herbal</option>
            <option value="Popok Bayi">Popok Bayi</option>
        </select>
        <br><br>
        <label for="quantity">Jumlah:</label>
        <input type="number" id="quantity" name="quantity" min="1">
        <br><br>
        <button type="submit">Bayar</button>
    </form>
    <a href="/">Kembali ke Home</a>
</body>
</html>
