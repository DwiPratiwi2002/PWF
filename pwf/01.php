<?php

class Buah{

    public $nama;
    public $warna;
    public $berat;

}

$nanas = new Buah();
$nanas->nama = 'Buah Nanas';
$nanas->warna = 'Kuning';
$nanas->berat = 2.5;

echo '<br />Ini adalah '. $nanas->nama. 'berwarna: '. $nanas->warna . 'berat: ' . $nanas->berat .'kg';

$semangka = new Buah();
$semangka->nama = 'Buah Semangka';
$semangka->warna = 'Merah';
$semangka->berat = 1;

echo '<br />Ini adalah'. $semangka->nama. 'berwarna: '.$semangka->warna. 'berat: ' . $semangka->berat .'kg';

$pisang = new Buah();
$pisang->nama = 'Buah Pisang';
$pisang->warna = 'Kuning';
$pisang->berat = 1;

echo '<br />Ini adalah'. $pisang->nama. 'berwarna: '.$pisang->warna. 'berat: ' .  $pisang->berat .'kg';

?>