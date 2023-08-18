<?php
include'koneksi.php';


$query = "SELECT * FROM db_history;";
$sql = mysqli_query($conn, $query);
$no = 0;

require_once __DIR__ . '/vendor/autoload.php';

//$Cetak = file_get_contents("cetak.php");
$html='<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="table-responsive">
        <p style="margin-top : 1%;"></p>
        <style>
            h1 {
                text-align: center;
                font-weight: bold;
                margin-bottom: 20px;
            }

            table {
                border-collapse: collapse;
            }

            th {
                padding: 5px;
                text-align: center;
            }

            td {
                padding-left: 5px;
                padding-right: 5px;
            }
        </style>


        <div class="container-fluid">
            <h1 class="text-center">Data Monitoring
                KKN Delta Mina
            </h1>
            <figure class="text-center">
                <table border="1" width="100%" cellpadding="10" cellspacing="0">
                    <thead>
                        <tr>
                            <th>
                                <center>No.</center>
                            </th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Suhu</th>
                            <th>Ph</th>
                            <th>TDS</th>
                            <th>DO</th>
                            <th>Catatan</th>
                        </tr>
                    </thead>';
                    
                    while($result = mysqli_fetch_assoc($sql)){
                        $html .='<tr>
                            <td>'. ++$no .'</td>
                            <td>'. $result["Tanggal"] .'</td>
                            <td>'. $result["Jam"]  .'</td>
                            <td>'. $result["Suhu"] .'</td>
                            <td>'. $result["Ph"] .'</td>
                            <td>'. $result["TDS"] .'</td>
                            <td>'. $result["DO"] .'</td>
                            <td>'. $result["Catatan"] .'</td>
                        </tr>';
                    }


                    $html .= '</table>
                    </body>
                    </html>';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();
?>


