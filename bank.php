<?php

class Bank{
    //Atribut
    protected $norek;
    public $nama;
    private $saldo;

    static $jml = 0;
    const BANK = 'Bank Syariah Nurul Fikri';

    //Contructor
    public function __construct($no, $nasabah, $saldo){
        $this->norek = $no;
        $this->nama = $nasabah;
        $this->saldo = $saldo;
        self::$jml++;
    }

    public function Setor($uang){
        $this->saldo += $uang;
    }

    public function ambil($uang){
        $this->saldo -= $uang;
    }

    public function cetak(){
        echo "<b><u>".self::BANK."</u></b>";
        echo "<br>No. Rekening : ".$this->norek.'</u><b>';
        echo "<br>Nama Nasabah : ".$this->nama.'</u><b>';
        echo "<br>Saldo : Rp. ".number_format($this->saldo, 0, ',', '.')."</u><b>";
        echo "<hr>";
    }

};

