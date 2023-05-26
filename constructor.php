<?php
class Karyawan{
    //constructor
    function __construct(?string $nama,?int $umur){
        $this->nama = $nama;
        $this->umur = $umur;
    }
    function detail(){
        if (is_null($this->nama) or is_null($this->umur)) {
            echo "maaf data kurang".PHP_EOL;
        }else{
            echo "nama = $this->nama umur $this->umur".PHP_EOL;
        }
        
    }
    function __destruct(){
        echo "destructor trigger $this->nama".PHP_EOL;
    }
}

$fe = new Karyawan(null,23);
$fe->detail();
//var_dump($joko)

?>