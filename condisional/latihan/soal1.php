    <?php
function hitungTotalBayar($totalBelanja)
{
    if ($totalBelanja >= 500000) {
        $diskon = 0.20;
    } elseif ($totalBelanja >= 250000) {
        $diskon = 0.10;
    } else {
        $diskon = 0;
    }
    $totalBayar = $totalBelanja - ($totalBelanja * $diskon);
    return $totalBayar;
}
$totalBelanja = 600000;
?>