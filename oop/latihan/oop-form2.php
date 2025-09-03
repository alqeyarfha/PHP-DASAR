<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <fieldset>
    <legend>
     Biodata Siswa
    </legend>
    <form action="" method="post">
    <label for="">nama</label>
    <input type="text" name="nama" require><br>
    <label for="">kelas</label>
    <input type="text" name="kelas" require><br>
    <label for="">jenis kelamin</label><br>
    <input type="radio" name="jenis kelamin" value="laki-laki" require>laki-laki<br>
    <input type="radio" name="jenis kelamin" value="perempuan" require>perempuan<br>
    <label for="">tanggal lahir</label>
    <input type="date" name="Tanggal lahir"><br>
    <label for="">Agama</label>
    <select name="agama" id="">
    <option value="islam">islam</option>
    <option value="kristen">kristen</option>
    <option value="hindu">Hindhu</option>
    </select><br>
    <input type="submit" value="submit">
    </form>
    </fieldset>

    <?php
    class Biodata
    {
        public $nama,
        $kelas,
        $jenis_kelamin,
        $tanggal_lahir,
        $agama;

        public function __construct($nama, $kelas, $jenis_kelamin, $tanggal_lahir, $agama)
        {
            $this->nama = $nama;
            $this->kelas = $kelas;
            $this->jenis_kelamin = $jenis_kelamin;
            $this->tanggal_lahir = $tanggal_lahir;
            $this->agama = $agama;
        }

        public function tampilkanBiodata()
        {
            return "Nama:" .$this->nama . "<br>";
            "Kelas:" .$this->kelas . "<br>";
            "Jenis kelamin:" .$this->jenis_kelamin . "<br>";
            "Tanggal lahir" .$this->tanggal_lahir . "<br>";
            "Agama:" .$this->agama . "<br>";
        } 
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $a =  $_POST['nama'];
        $b =  $_POST['kelas'];
        $c =  $_POST['jenis_kelamin'];
        $d =  $_POST['Tanggal_lahir'];
        $e =  $_POST['agama'];
    }

    $budi = new Biodata($a, $b, $c, $d, $e);
echo "nama :" . $budi->nama . "<br>";
echo "keals:" . $budi->kelas . "<br>";
echo "jenis kelamin:" . $budi->jenis_kelamin . "<br>";
echo "tanggal lahir:" . $budi->tanggal_lahir . "<br>";
echo "agama:" . $budi->agama . "<br>";


    ?>
</body>
</html>