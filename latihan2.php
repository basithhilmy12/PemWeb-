<?php
// data awal
$nama = "Ibot";
$totalBelanja = 150000;
$nilai = 75;

// if else (total belanja)
if ($totalBelanja > 100000) {
    $ketBelanja = "Selamat $nama, Anda mendapatkan hadiah!";
} else {
    $ketBelanja = "Terima Kasih $nama sudah berbelanja";
}

// ternary (kelulusan)
$ketLulus = ($nilai >= 60) ? "Lulus" : "Gagal";

// if multi kondisi (grade)
if ($nilai >= 85 && $nilai <= 100) {
    $grade = "A";
} elseif ($nilai >= 75 && $nilai < 85) {
    $grade = "B";
} elseif ($nilai >= 60 && $nilai < 75) {
    $grade = "C";
} elseif ($nilai >= 30 && $nilai < 60) {
    $grade = "D";
} elseif ($nilai >= 10 && $nilai < 30) {
    $grade = "E";
} else {
    $grade ="-";
}

// swith case (predikat)
switch ($grade) {
    case 'A':
        $predikat = 'Memuaskan';
        break;
    case 'B':
        $predikat = 'Bagus';
        break;
    case 'C':
        $predikat = 'Cukup';
        break;
    case 'D':
        $predikat = 'Kurang';
        break;
    case 'E':
        $predikat = 'Buruk';
        break;
    default:
        $predikat = '-';
    
}

?>


<h3>Data Belanja</h3>
Nama Pelaggan: <?= $nama ?><br>
Total Belanja: RP <?= $totalBelanja ?><br>
Keterangan: <?= $ketBelanja ?>
<hr>

<h3>Data Nilai</h3>
Nama Siswa: <?= $nama ?><br>
Nilai: <?= $nilai ?><br>
Status: <?= $ketLulus ?><br>
Grade: <?= $grade ?><br>
Predikat: <?= $predikat ?>