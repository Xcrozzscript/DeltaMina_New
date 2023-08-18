<!DOCTYPE html>
<?php
include 'koneksi.php';
$Tanggal = '';
$Waktu = '';
$Suhu = '';
$Ph = '';
$TDS = '';
$DO = '';
$Catatan = '';

if (isset($_GET['ubah'])) {
  $ID = $_GET['ubah'];

  $query = "SELECT * FROM db_history WHERE ID = '$ID';";
  $sql  = mysqli_query($conn, $query);

  $result = mysqli_fetch_assoc($sql);
  //var_dump($result);
  //die();
  $Tanggal = $result['Tanggal'];
  $Waktu = $result['Waktu'];
  $Suhu = $result['Suhu'];
  $Ph = $result['Ph'];
  $TDS = $result['TDS'];
  $DO = $result['DO'];
  $Catatan = $result['Catatan'];
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <script src="js/bootstrap.bundle.min.js"></script>

  <!-- Font Awesome-->
  <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

  <title>Menambahkan Data Baru</title>
</head>

<body>
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        KKN-Delta Mina
      </a>
    </div>
  </nav>
  <div class="container">
    <form method="POST" action="proses.php" enctype="multipart/form-data">
      <p style="margin-top : 13%;"></p>
      <div class="mb-3 row">
        <label for="Tanggal" class="col-sm">Tanggal</label>
        <div class="col-sm-10">
          <input required type="date" name="tanggal" class="form-control" id="tanggal">
        </div>
      </div>
  </div>
  <div class="container">
    <div class="mb-3 row">
      <label for="Waktu" class="col-sm-2 col-form-label">
        Waktu
      </label>
      <div class="col-sm-10">
        <select id="waktu" name="waktu" class="form-select">
          <option selected>Waktu</option>
          <option value="06:00-10:00">Pagi : 06:00-10:00</option>
          <option value="10:00-14:00">Siang : 10:00-14:00</option>
          <option value="14:00-18:00">Sore : 14:00-18:00</option>
          <option value="18:00-22:00">Malam : 18:00-22:00 </option>
        </select>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="mb-3 row">
      <label for="Suhu" class="col-sm">Suhu</label>
      <div class="col-sm-10">
        <input required type="number" name="suhu" class="form-control" id="suhu">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="mb-3 row">
      <label for="Ph" class="col-sm">Ph</label>
      <div class="col-sm-10">
        <input required type="number" name="ph" class="form-control" id="ph">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="mb-3 row">
      <label for="TDS" class="col-sm">TDS</label>
      <div class="col-sm-10">
        <input required type="number" name="salinitas" class="form-control" id="salinitas">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="mb-3 row">
      <label for="DO" class="col-sm">DO</label>
      <div class="col-sm-10">
        <input required type="number" name="do" class="form-control" id="do">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="mb-3 row">
      <label for="Catatan" class="col-sm">Catatan</label>
      <div class="col-sm-10">
        <textarea required class="form-control" name="catatan" id="catatan"></textarea>
      </div>
    </div>
    <div class="mb-3 row mt-4">
      <div class="col">
        <?php
        if (isset($_GET['ubah'])) {
        ?>
          <button type="submit" name="aksi" value="edit" class="btn btn-primary">
            <i class="fa fa-floppy-o" aria-hidden="true"></i>
            Simpan Perubahan
          </button>
        <?php
        } else {
        ?>
          <button type="submit" name="aksi" value="add" class="btn btn-primary">
            <i class="fa fa-floppy-o" aria-hidden="true"></i>
            Tambahkan
          </button>
        <?php
        }
        ?>
        <a href="index.php" type="button" class="btn btn-danger">
          <i class="fa fa-reply" aria-hidden="true"></i>
          Cancel
        </a>
      </div>
      </form>

    </div>
</body>

</html>