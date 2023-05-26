<?php
class Mobil{
    public $nama = "mobil";
    
    function detail(){
        echo "mobil = ".$this->nama.PHP_EOL;
    }
}
class Motor extends Mobil{
    //public $nama = "motor";
    function detail(){
        echo "motor = ".$this->nama.PHP_EOL;
    }

}


$bmw = new Mobil();
$ducati = new Motor();
$bmw->detail();
$ducati->detail();
//var_dump($bmw);
//var_dump($ducati);