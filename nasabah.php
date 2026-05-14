<?php

require 'bank.php';

//Ciptakan Object
$n1 = new Bank("001", "Ahmad", 1000000);
$n2 = new Bank("002", "Imam", 5000000);
$n3 = new Bank("003", "Hamdi", 4000000);
$n4 = new Bank("004", "Juned", 10000000);


echo '<h3 align="center">'.Bank::BANK.'</h3>';
$n1->cetak();
$n1->setor(2000000);
$n1->cetak();


$n2->cetak();
$n2->ambil(000000);
$n2->cetak();


$n3->cetak();
echo 'Jumlah Nasabah :'.Bank::$jml.' orang';

?>