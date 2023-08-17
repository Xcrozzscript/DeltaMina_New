<!--Connect Php-->
<?php
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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <script src="js/bootstrap.bundle.min.js"></script>

  <!-- Font Awesome-->
  <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
  <title>Monitoring</title>
</head>

<body>
  <nav class="navbar bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#"> KKN-Delta Mina </a>
    </div>
  </nav>

  <!-- Judul -->
  <div class="container-fluid">
    <h1 class="text-center">Data Monitoring</h1>
    <figure class="text-center">
      <blockquote class="blockquote">
        <p>Tabel Data Yang Sudah Tersimpan</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        <cite title="Source Title">Tambahkan Data Terbaru</cite>
      </figcaption>
    </figure>
    <a href="kelola.php" type="button" class="btn btn-primary btn-lg">
      <i class="fa fa-plus"></i>
      Tambahkan Data
    </a>
    <a href="laporan.php" type="button" class="btn btn-primary btn-lg">
      <i class="fa fa-plus"></i>
      Create PDF
    </a>
    <div class="table-responsive">
      <p style="margin-top : 1%;"></p>
      <table class="table align-middle table-bordered table-hover">
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
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
            while($result = mysqli_fetch_assoc($sql)){
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
            <td>
              <a href="proses.php?hapus=<?php 
                echo $result['ID'];
                ?>
                " type="button" class="btn btn-danger btn-sm" onclick="return confirm ('Apakah Anda Yakin Menghapusnya???')">
                <i class="fa fa-trash"></i>
              </a>
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