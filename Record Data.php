<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();


$Cetak=file_get_contents("cetak.php");

$mpdf->WriteHTML($Cetak);
$mpdf->Output('Record Data Bulanan');
?>


//ngepush bagai quda