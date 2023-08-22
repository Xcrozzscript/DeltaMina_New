<?php

include 'koneksi.php';

if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "add") {
        $Tanggal = $_POST['tanggal'];
        $Jam = $_POST['waktu'];
        $Suhu = $_POST['suhu'];
        $Ph = $_POST['ph'];
        $TDS = $_POST['salinitas'];
        $DO = $_POST['do'];
        $Catatan = $_POST['catatan'];

        $query = "INSERT INTO db_history VALUES(null, '$Tanggal', '$Jam', '$Suhu', '$Ph', '$TDS', '$DO', '$Catatan')";
        $sql   = mysqli_query($conn, $query);

        if ($sql) {
            header("location: index.php");
            //echo "Data Berhasil<a href='index.php'>[Home]</a>";
        } else {
            echo $query;
        }
        //echo $Tanggal." | ".$Suhu." | ".$Ph." | ".$TDS." | ".$DO." | ".$Catatan;

        echo "<br> Tambah Data <a href='index.php'>[Home]</a>";
    } else if ($_POST['aksi'] == "edit") {
        echo "Edit Data<a href='index.php'>[Home]</a>";

        $ID = $_POST['ID'];
        $Tanggal = $_POST['tanggal'];
        $Jam = $_POST['jam'];
        $Suhu = $_POST['suhu'];
        $Ph = $_POST['ph'];
        $TDS = $_POST['salinitas'];
        $DO = $_POST['do'];
        $Catatan = $_POST['catatan'];

        $query = "UPDATE db_history SET tanggal='$Tanggal',jam='$Jam' suhu='$Suhu', ph='$Ph', salinitas='$TDS', do='$DO', catatan='$Catatan' WHERE ID = '$ID';";
        $sql = mysqli_query($conn, $query);
    }
}
if (isset($_GET['hapus'])) {
    $ID = $_GET['hapus'];
    $query = "DELETE FROM db_history WHERE ID  = '$ID';";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header("location: index.php");
    } else {
        echo $query;
    }
}
