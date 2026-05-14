<?php
$produk = [
    ['kode' => 'A1', 'nama' => 'apel', 'harga' => 250000, 'jumlah' => 5],
    ['kode' => 'A2', 'nama' => 'durian', 'harga' => 550000, 'jumlah' => 2],
    ['kode' => 'A3', 'nama' => 'semangka', 'harga' => 350000, 'jumlah' => 3]
];

// Fungsi untuk menghitung total harga per produk
function hitungTotalHarga($harga, $jumlah) {
    return $harga * $jumlah;
}

// Fungsi untuk menghitung total belanja seluruh produk
function hitungTotalBelanja($produk) {
    $total = 0;
    foreach($produk as $p) {
        $total += hitungTotalHarga($p['harga'], $p['jumlah']);
    }
    return $total;
}

echo "<h3>DAFTAR PRODUK</h3>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Kode</th><th>Nama</th><th>Harga</th><th>Jumlah</th><th>Total</th></tr>";
foreach($produk as $p ) {
    $totalPerProduk = hitungTotalHarga($p['harga'], $p['jumlah']);
    echo "<tr>";
    echo "<td>" . $p['kode'] . "</td>";
    echo "<td>" . $p['nama'] . "</td>";
    echo "<td>Rp " . number_format($p['harga'], 0, ',', '.') . "</td>";
    echo "<td>" . $p['jumlah'] . "</td>";
    echo "<td>Rp " . number_format($totalPerProduk, 0, ',', '.') . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "<h3>TOTAL BELANJA: Rp " . number_format(hitungTotalBelanja($produk), 0, ',', '.') . "</h3>";


?>