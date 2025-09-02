<?php echo "<center>";?>
<h1>Array 3D</h1>
<?php
$nilai = [
   ["nama"=>"Andi", "mapel" => ["Matematika" => 80, "IPA" => 90, "Bahasa" => 85]],
   ["nama"=>"Budi", "mapel" => ["Matematika" => 75, "IPA" => 88, "Bahasa" => 79]], 
   ["nama"=>"Citra", "mapel"=> ["Matematika" => 92, "IPA" => 81, "Bahasa" => 87]],
];

foreach ($nilai as $data) {
    echo "nilai" . $data["nama"] . "<br>";
    foreach ($data["mapel"]as $pelajaran => $nilai) {
        echo "-$pelajaran: $nilai <br>";
    }
    echo "<br>";
}