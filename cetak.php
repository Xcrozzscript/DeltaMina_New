<?php

use Spipu\Html2Pdf\Html2Pdf;

include 'koneksi.php';

$query = "SELECT * FROM db_history;";
$sql = mysqli_query($conn, $query);
$no = 0;

//while($result = mysqli_fetch_assoc($sql)){
//echo $result ['Catatan']."<br>";

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

                <table class="table align-middle table-bordered table-hover" border="1" align="center">
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

</html>
</body>

</html>

<?php
$html2html = ob_get_contents();
ob_end_clean();

// require_once('../assets/html2pdf/html2pdf.class.php'); iki seng masalah
$html2pdf = new Html2Pdf('P', 'A4', 'en');
$html2pdf->writeHTML($html);
$html2pdf->Output('record_user.pdf', 'D');
?>