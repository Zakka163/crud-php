<?php
require_once "class.php";

$zaka = new Person();
$zaka->name = "zaka";
$zaka->job = "programmer";
$zaka->umur = 19;
$zaka->say();
$zaka->const();
//var_dump($zaka->name);


//const

echo Person::HUMANS;


