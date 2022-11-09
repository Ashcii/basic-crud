<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Form Input Karyawan</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="show.php"><img src="https://seeklogo.com/images/C/company-name-logo-C74A7D6F5A-seeklogo.com.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="show.php">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="input_data.php">Tambah Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="biodata.html">Founder Portofolio</a>
        </li>
      </ul>
    </div>
  </nav>
  <center>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>FORM INPUT KARYAWAN</h1>
          <hr>
        </div>
      </div>

      <form action='proses_input_data.php' method='POST'>
        <div class="form-group">
          <label for="nama"><b>Nama Karyawan</b></label>
          <input type="text" name="nama_karyawan" class="form-control" placeholder="masukkan nama karyawan">
        </div>
        <div class="form-group">
          <label for="alamat_karyawan"><b>Alamat Karyawan</b></label>
          <textarea class="form-control" name="alamat_karyawan" placeholder="masukkan alamat karyawan"></textarea>
        </div>
        <div class="form-group">
          <label for="no_telp_karyawan"><b>No. Telp Karyawan</b></label>
          <input type="number" name="no_telp_karyawan" class="form-control" placeholder="masukkan nomor telepon karyawan">
        </div>
        <div class="form-group">
          <label for="jabatan_karyawan"><b>Jabatan Karyawan</b></label>
          <input type="text" name="jabatan_karyawan" class="form-control" placeholder="masukkan jabatan karyawan">
        </div>
        <br><br>
        <a href='show.php'><button class="btn btn-danger btn-lg">Batal</button></a>
        <button class="btn btn-success btn-lg">Simpan</button>
      </form>
  </center>
</body>

</html>