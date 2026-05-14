<?php

class Person{
    //Atribut
    public $name;
    public $age;

    
    //Method
    public function __construct($name, $gender){
        $this->name = $name;
        $this->gender = $gender;
    }


    //Mrthod cetak
    public function cetak(){
        echo "Nama : {$this->name}";
        echo "<br>Jenis Kelamin : '.$this->gender";
    }
};