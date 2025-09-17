<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Sebuah form</title>
</head>
<body>
    <center>
     <table>
    <form action="" method="post">
        <label for="">Nama Lengkap</label>
        <input type="text" name="nama"required><br>

        <label for="">tanggal lahir</label>
        <input type="date" name="tgl" required><br>

        <label for="">Jenis Kelamin</label>
        <select name="kelamin" id="">
            <option value="laki-laki" required>laki-laki</option>
            <option value="perempuan" required>perempuan</option>
        </select><br>
        <label for="">Tinggi badan</label>
        <input type="number" name="tinggi" required><br>

        <label for="">berat badan</label>
        <input type="number" name="berat" require> <br>

        <input type="submit" name="simpan" value="Simpan" require>
    </form>
    <?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST ['nama'];
        $tgl = $_POST ['tgl'];
        $kelamin = $_POST ['kelamin'];
        $tinggi = $_POST ['tinggi'];
        $berat = $_POST ['berat'];
    
    ?>
    <tr>
        <td>Nama</td>
        <td>: <?php echo "$nama";?></td>
    </tr>
     <tr>
        <td>Tanggal Lahir</td>
        <td>: <?php echo "$tgl";?></td>
    </tr>
     <tr>
        <td>Kelamin</td>
        <td>: <?php echo "$kelamin";?></td>
    </tr>
     <tr>
        <td>Tinggi Badan</td>
        <td>: <?php echo "$tinggi";?></td>
    </tr>
     <tr>
        <td>Berat Badan</td>
        <td>: <?php echo "$berat KG";?></td>
    </tr>
    <tr>
        <td>
            <?php
            $tinggi_m = $tinggi / 100;
            $bmi = $berat / ($tinggi_m * $tinggi_m);
            echo "bmi:" . number_format($bmi, 2) . "<br>";
            ?>
        </td>
    </tr>
    <tr>
        <td><?php }?></td>
    </tr>
    
    </table>
</body>
</html>