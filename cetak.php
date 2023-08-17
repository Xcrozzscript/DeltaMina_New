<?php
include 'koneksi.php';
//include 'mpdf.php';

$query = "SELECT * FROM db_history;";
$sql = mysqli_query($conn, $query);
$no = 0;


// cetak ke pdf //
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$nama_file='Record Data';
ob_start();
?>



<!DOCTYPE html>
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
                    </thead>
                    <tbody>
                        <?php
                        while ($result = mysqli_fetch_assoc($sql)) {
                        ?>
                            <tr>
                                <td>
                                    <center>
                                        <?php
                                        echo ++$no;
                                        ?>
                                    </center>
                                </td>
                                <td>
                                    <?php
                                    echo $result['Tanggal'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $result['Jam'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $result['Suhu'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $result['Ph'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $result['TDS'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $result['DO'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $result['Catatan'];
                                    ?>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
        </div>

</body>
<?php 
    $html=ob_get_contents();
    ob_end_clean();
    $mpdf->WriteHtml(UTF8_endcode($html));
    $mpdf->Output("".$nama_file.".pdf",);
    ?>
</html>
</body>

</html>
