<?php
require_once "constructor.php";
$joko = new Karyawan("joko",23);
$joko->detail();

$budi = new Karyawan("budi",23);
$budi->detail();

$irfan = new Karyawan("irfan",43);
$irfan->detail();

echo "bye".PHP_EOL;
