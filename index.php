<!--Connect Php-->
<?php
include 'koneksi.php';

$query = "SELECT * FROM history;";
$sql = mysqli_query($conn, $query);




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
    <a href="" type="button" class="btn btn-primary btn-lg">
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
          <tr>
            <th>
              <center>1.</center>
            </th>
            <th>08-08-2023</th>
            <th>14:42</th>
            <th>32</th>
            <th>12</th>
            <th>42</th>
            <th>4</th>
            <th>Tambak 1</th>
            <th>
              <a href="kelola.php?ubah=1" type="button" class="btn btn-success btn-sm">
                <i class="fa fa-pencil"></i>
              </a>
              <a href="proses.php?hapus=1" type="button" class="btn btn-danger btn-sm">
                <i class="fa fa-trash"></i>
              </a>
            </th>
          </tr>
          <tr>
            <th>
              <center>2.</center>
            </th>
            <th>08-08-2023</th>
            <th>15:19</th>
            <th>37</th>
            <th>12</th>
            <th>33</th>
            <th>2</th>
            <th>Tambak 2</th>
            <th>
              <a href="kelola.php?=2" type="button" class="btn btn-success btn-sm">
                <i class="fa fa-pencil"></i>
              </a>
              <a href="proses.php?hapus=2" type="button" class="btn btn-danger btn-sm">
                <i class="fa fa-trash"></i>
              </a>
            </th>
          </tr>
        </tbody>
      </table>
    </div>
</body>

</html>