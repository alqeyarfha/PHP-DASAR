<?php
class pelajar
{
    public $nama;
    public $umur;
    public $alamat;
    public $kelas;

    public function __construct($siswa1, $siswa2, $siswa3, $siswa4)
    {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->alamat = $alamat;
        $this->kelas = $kelas;
    }

    public function belajar()
    {
        return "siswa itu sedang belajar";
    }
}

$budi = new pelajar("budi", 16, "bandung", "XI RPL 3");
echo "nama :" . $budi->nama . "<br>";
echo "umur:" . $budi->umur . "<br>";
echo "alamat:" . $budi->alamat . "<br>";
echo "kelas:" . $budi->kelas . "<br>";
echo "<br>";