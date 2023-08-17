<?php

require_once __DIR__ . '/vendor/autoload_real.php';

use Mpdf\Mpdf;

$mpdf = new Mpdf();
$mpdf->WriteHTML();
$mpdf->Output

?>