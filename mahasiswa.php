<?php
require_once 'person.php';
class Mahasiswa extends Person{
    public $semester;
    public $jurusan;

    public function __construct($name, $gender, $semester, $jurusan)
    {
        parent::__construct($name, $gender);
        $this->semester = $semester;
        $this->jurusan = $jurusan;
    }

    public function cetak(){
        parent::cetak();
        echo '<br>Semester : '.$this->semester;
        echo "<br>Gelar : {$this->jurusan}";
        echo "<hr>";
    }
}
?>