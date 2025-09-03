<?php
class motor
{
public $jenis_roda;
public $merk;
public $warna;
public $jenis;

public function __construct($jenis_roda, $merk, $warna ,$jenis)
{
    $this->jenis_roda = $jenis_roda;
    $this->merk = $merk;
    $this->warna = $warna;
    $this->jenis = $jenis;
}


public function kecepatan()
{
    return "moto berjalan maju engan kecepata 160mph";
}
}

$motor1 = new motor("bintang", "jaguar", "metalic", "sport");
echo "jenis roda motor 1:" . $motor1->jenis_roda . "<br>";
echo "warna motor 1:" . $motor1->warna . "<br>";
echo "jenis motor 1:" . $motor1->merk . "<br>";
echo "jenis motor 1:" . $motor1->jenis . "<br>";
echo "kecepatan motor 1:" . $motor1->kecepatan() .  "<br>";
