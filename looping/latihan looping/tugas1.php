<?php
$siswa = [
    "Andi"  => 80,
    "Budi"  => 70,
    "Citra" => 90,
    "Dedi"  => 60,
    "Eka"   => 75,
];

echo "Hasil Kelulusan Siswa:";

foreach ($siswa as $nama => $nilai) {
    if ($nilai >= 75) {
        echo "<br>";

        echo "- $nama: Lulus (Nilai: $nilai)";
    } else {
        echo "<br>";

        echo "- $nama: Tidak Lulus (Nilai: $nilai)";
    }
}
