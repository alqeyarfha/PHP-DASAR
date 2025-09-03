<?php
class mobil {
public $warna = "silver";
public $jumlah_roda = 4;

public function berjalan()
{
    return "maju";
}

public function belok()
{
    return "belok kanan";
}
}

$mobil = new mobil();
echo "warna mobil :" . $mobil->warna . "<br>";
echo "jumlah roda mobil : " . $mobil->jumlah_roda . "<br>";
echo "mobil jalan :" . $mobil->berjalan() . "<br>";
echo "mobil belok :" . $mobil->belok() . "<br>";