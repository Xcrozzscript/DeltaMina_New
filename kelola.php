<!DOCTYPE html>
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
    <form method="POST" action="proses.php">
          <p style="margin-top : 13%;"></p>
          <div class="mb-3 row">
            <label for="Tanggal" class="col-sm">Tanggal</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="tanggal">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="mb-3 row">
            <label for="Time" class="col-sm">Jam</label>
            <div class="col-sm-10">
              <input type="time" class="form-control" id="jam">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="mb-3 row">
            <label for="Suhu" class="col-sm">Suhu</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="suhu">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="mb-3 row">
            <label for="Ph" class="col-sm">Ph</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="ph">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="mb-3 row">
            <label for="TDS" class="col-sm">TDS</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="salinitas">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="mb-3 row">
            <label for="DO" class="col-sm">DO</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="do">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="mb-3 row">
            <label for="Catatan" class="col-sm">Catatan</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="catatan"></textarea>
            </div>
          </div>
          <div class="mb-3 row mt-4">
            <div class="col">
              <?php
                  if (isset($_GET['ubah'])){
              ?>
              <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                <i class="fa fa-floppy-o" aria-hidden="true"></i>
                Simpan Perubahan
              </button>
              <?php
                  } else{
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