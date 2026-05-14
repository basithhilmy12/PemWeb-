<?php
// 1. simpan data di array
$produk = [
    ['Kode' => 'A1', 'nama' => 'Apel', 'harga' => 25000],
    ['Kode' => 'B1', 'nama' => 'Mangga', 'harga' => 20000],
    ['Kode' => 'C1', 'nama' => 'Jeruk', 'harga' => 15000],
];

// 2. Menampilkan data produk pakai foreach
echo "<h3>Daftar Produk</h3>";
foreach ($produk as $p) {
    $p['Kode']. "-".
    $p['nama']. " - Rp. " .
    $p['harga']. "<br/>";
}

// 3. fungsi buat total harga
function totalHarga($harga1, $harga2, $harga3){
    return $harga1 + $harga2 + $harga3;
}

// 4. hitung total belanja
$total = totalHarga(
    $produk[0]['harga'], 
    $produk[1]['harga'], 
    $produk[2]['harga'],
)
echo "<br/>Total Belanja: Rp. ".$total."</br>";
?>