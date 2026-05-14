<?php

class Persegi{
    private $sisi;

    public function __construct($sisi){ 
        $this->sisi = $sisi;
    }

    public function luas(){
        return $this->sisi * $this->sisi;
    }

    public function keliling(){
        return 4 * $this->sisi;
    }

    public function getSisi(){
        return $this->sisi;
    }
}



?>