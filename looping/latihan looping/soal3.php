<?php

echo "Versi WHILE";
echo "<br>";

$nyawa = 3;

while ($nyawa > 0) {
    echo "<br>";
    echo "Game masih berjalan (Nyawa: $nyawa)";
    $nyawa--;
}
echo "<br>";    

echo "Game over";

echo "<br>";

echo "Versi DO WHILE";

$nyawa = 3;

do {
    echo "<br>";
    echo "Game masih berjalan (Nyawa: $nyawa)";
    $nyawa--;
} while ($nyawa > 0);

echo "<br>";
echo "Game over";
