<?php

require_once __DIR__ . '/vendor/autoload.php';

$Cetak = file_get_contents("cetak.php");


$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($Cetak);
$mpdf->Output();
?>
