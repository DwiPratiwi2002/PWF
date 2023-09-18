<?php

class Hewan{

    public $nama;
    public $warna;
    public $kaki;

}
class Gajah extends Hewan{
    public $belalai;
}
class Anjing extends Hewan{
    public $jenis_kuda;
}

$sumatra = new Gajah();
$sumatra ->nama    = 'Hewan Gajah';
$sumatra ->warna   = 'Abu_Abu';
$sumatra ->kaki    = '4';
$sumatra ->belalai = 'Besar';

echo '<br />Ini adalah'. $sumatra->nama. 'berwarna: '.$sumatra->warna. 'kaki: ' .  $sumatra->kaki .' belalai; '. $sumatra->belalai;

$arab = new Kuda();
$arab ->nama    = 'Hewan Kuda';
$arab ->warna   = 'Hitam';
$arab ->kaki    = '4';
$arab ->$jenis_kuda = 'Poni';

echo '<br />Ini adalah'. $arab->nama. 'berwarna: '.$arab->warna. 'hitam: ' .  $arab->kaki .' jenis_kuda; '. $arab->Poni;

$jantan = new Ayam();
$jantan ->nama    = 'Hewan Jantan';
$jantan ->warna   = 'Hitam';
$arab ->kaki      = '4';
$arab ->$jenis_kuda = 'Poni'

?>