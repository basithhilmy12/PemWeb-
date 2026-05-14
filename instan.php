<?php
require_once 'dosen.php';
require_once 'mahasiswa.php';

//buat object
$d1 = new Dosen('Ahmad', 'L', '111', 'S.Kom', 'M.Kom');
$d2 = new Dosen('Latif', 'L', '112', 'S.Kom');
$m1 = new Mahasiswa('Rian', 'L', '4', 'Teknik Informatika');
$m2 = new Mahasiswa('Cika', 'P', '2', 'Sistem Informasi');

$data = [$d1, $d2, $m1, $m2];

echo "<h3>Data Civitas Kampus</h3>";
echo "<p>";
foreach($data as $d){
    echo $d->cetak();
}
?>