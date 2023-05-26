<?php

class Person{
    const HUMANS = "YES";
    //fields declaration
    public $name;
    //default values
    public int $umur = 0;
    //null fields 
    public ?string $job;
    private $dummy;
    public function say(){
        echo "halo saya $this->name umur $this->umur dan pekerjaan saya adalah $this->job".PHP_EOL;
    } 
    public function const(){
        echo "ini const = ".self::HUMANS.PHP_EOL;
    }
    public function test(){
        echo "ini test";
    }
}
   
//echo Person::HUMANS;
?>