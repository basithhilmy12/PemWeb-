<?php
$buah2an = [
    ["kode"=>"a1","buah"=>"Apel","harga"=>25000],
    ["kode"=>"a2","buah"=>"Anggur","harga"=>45000],
    ["kode"=>"b1","buah"=>"Belimbing","harga"=>15000],
    ["kode"=>"b2","buah"=>"Bangkuang","harga"=>10000],
    ["kode"=>"c1","buah"=>"Cerry","harga"=>35000]
];

$no = 1;
$total = 0;
$harga = [];

foreach($buah2an as $b){
    $total += $b['harga'];
    $harga[] = $b['harga'];
}

$tertinggi = max($harga);
$terendah = min($harga);
$rata = $total / count($buah2an);
$jumlah = count($buah2an);
?>

<center>
<h2>Daftar Buah</h2>

<table border="1" cellpadding="10" cellspacing="0">
<thead bgcolor="tomato">
<tr>
    <th>No</th>
    <th>Kode</th>
    <th>Buah</th>
    <th>Harga</th>
</tr>
</thead>

<tbody>
<?php
foreach($buah2an as $b){
$warna = ($no % 2 == 1) ? "#f3e5ab" : "#e9e1c6";
?>
<tr bgcolor="<?= $warna ?>">
    <td><?= $no ?></td>
    <td><?= $b['kode'] ?></td>
    <td><?= $b['buah'] ?></td>
    <td><?= $b['harga'] ?></td>
</tr>
<?php
$no++;
}
?>
</tbody>

<tfoot bgcolor="gold">
<tr>
<td colspan="3"><b>Harga Total</b></td>
<td><b><?= $total ?></b></td>
</tr>

<tr>
<td colspan="3"><b>Harga Tertinggi</b></td>
<td><b><?= $tertinggi ?></b></td>
</tr>

<tr>
<td colspan="3"><b>Harga Terendah</b></td>
<td><b><?= $terendah ?></b></td>
</tr>

<tr>
<td colspan="3"><b>Harga Rata-Rata</b></td>
<td><b><?= $rata ?></b></td>
</tr>

<tr>
<td colspan="3"><b>Jumlah Buah</b></td>
<td><b><?= $jumlah ?></b></td>
</tr>
</tfoot>

</table>
</center>