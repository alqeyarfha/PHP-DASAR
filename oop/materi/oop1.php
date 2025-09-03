<?php
// properti atau attribut
class Kucing{
    public $warna = "merah";
    public $jumlah_kaki = 4;

    // method atau fungsi
    public function bersuara()
    {
        return "meong meong";
    }

    public function berburu()
    {
        return "Kucing Berburu Tikus";
    }
}

//  inisisai (pembuatan object)
$kucing = new Kucing();
echo "warna kucing 1:" . $kucing -> warna . "<br>";
echo "jumlah kaki kucng 1:" . $kucing->jumlah_kaki . "<br>";
echo "suara kucing 1 :" . $kucing-> bersuara() . "<br>";
echo "kucing berburu tikus 1 :" . $kucing->berburu() . "<br>";
