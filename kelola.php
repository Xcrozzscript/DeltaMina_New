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

  <!-- -- CSS Styles -- -->
  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/bootstrap-icons.css" rel="stylesheet">

  <link href="css/owl.carousel.min.css" rel="stylesheet">

  <link href="css/owl.theme.default.min.css" rel="stylesheet">

  <link href="css/tooplate-gotto-job.css" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  <link rel="shortcut icon" href="Favicon wqms.png">

  <!-- Font Awesome-->
  <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

  <title>Menambahkan Data Baru</title>
</head>

<body id="top">

  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="index.html">
        <img src="logoitsn.png" class="img-fluid logo-image">
        <img src="logovokasi.png" class="img-fluid logo-image">
        <img src="DTEO LOGO.png" class="img-fluid logo-image">

        <div class="d-flex flex-column">
          <strong class="logo-text">KKN</strong>
          <small class="logo-slogan">DTEO</small>
        </div>
      </a>

      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->

      <!-- <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav align-items-center ms-lg-5">
          <li class="nav-item">
            <a class="nav-link active" href="index.html">Homepage</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
        </ul>
      </div> -->
    </div>
  </nav>


  <div class="container">
    <div class="mb-3 row">
      <label for="Waktu" class="col-sm-2 col-form-label">
        Waktu
      </label>
      <div class="col-sm-10">
        <select id="waktu" name="waktu" class="form-select">
          <option selected>---</option>
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