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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="">
  <meta name="author" content="">

  <title>Monitoring</title>

  <!-- CSS FILES -->
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

</head>

<body id="top">

  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="index.php">
        <img src="logoitsn.png" class="img-fluid logo-image">
        <img src="logovokasi.png" class="img-fluid logo-image">
        <img src="DTEO LOGO.png" class="img-fluid logo-image">

        <div class="d-flex flex-column">
          <strong class="logo-text">KKN</strong>
          <small class="logo-slogan">DTEO</small>
        </div>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav align-items-center ms-lg-5">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Homepage</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>

    <section class="hero-section d-flex justify-content-center align-items-center">
      <div class="section-overlay"></div>

      <div class="container">
        <div class="row">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="G1.JPG" alt="Gambar 1"></div>
              <div class="swiper-slide"><img src="G2.JPG" alt="Gambar 2"></div>
              <div class="swiper-slide"><img src="G3.JPG" alt="Gambar 3"></div>
              <div class="swiper-slide"><img src="G4.jpg" alt="Gambar 4"></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
          <style>
            .slider-container {
              max-width: 800px;
              margin: auto;
              overflow: hidden;
              position: relative;
            }

            .slider {
              display: flex;
              transition: transform 0.3s ease-in-out;
            }

            .slide {
              flex: 0 0 100%;
            }

            img {
              width: 100%;
              height: auto;
            }
          </style>

          <h1 class="hero-title text-white mt-4 mb-4">Delta Mina <br>Smart and Integrated Water Quality
            Management System</h1>

        </div>
      </div>
    </section>

    <!-- Judul -->

    <body>
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

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      const swiper = new Swiper('.swiper-container', {
        loop: true, // Untuk mengaktifkan perputaran tak terbatas
        autoplay: {
          delay: 5000, // Delay antara slide dalam milidetik (misalnya: 5000 = 5 detik)
          disableOnInteraction: false, // Jangan hentikan perputaran otomatis saat interaksi pengguna
        },
        navigation: {
          nextEl: '.swiper-button-next', // Tombol berikutnya
          prevEl: '.swiper-button-prev', // Tombol sebelumnya
        },
      });
    </script>

</body>

</html>