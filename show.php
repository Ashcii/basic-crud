<?php
session_start();
if(!isset($_SESSION['login'])) {
  header("location:index.php");
}
include 'koneksi.php';

$sql = 'SELECT * FROM tb_karyawan';
$query = mysqli_query($koneksi, $sql);
$no = 1;
?>

<!DOCTYPE html>
<html lang="en">
</head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <title>Data Karyawan</title>
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
    <ul class="navbar-nav pull-right">
      <li class="nav-item">
        <button type="button" class="btn btn-danger" data-toggle='modal' data-target="#logout">Log Out</button>
        <div id='logout' class="modal fade" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Peringatan</h4>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin ingin logout?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <a href="logout.php"><button class="btn btn-success">Yakin</button></a>
          </form>
        </div>
      </li>
    </ul>
  </div>
</nav>
  <center>
  <h1>Data Karyawan</h1><hr>
  <table class='table table-hoover datatab' style='text-align:center;'>
    <thead style='background-color: #00BB6F;'>
      <tr>
        <td><b>No</b></td>
        <td><b>Nama</b></td>
        <td><b>Alamat</b></td>
        <td><b>No. Telp</b></td>
        <td><b>Jabatan</b></td>
        <td><b>Aksi</b></td>
      </tr>
    </thead>

  <?php
  while ($data = mysqli_fetch_assoc($query)) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$data['nama_karyawan']."</td>";
    echo "<td>".$data['alamat_karyawan']."</td>";
    echo "<td>".$data['no_telp_karyawan']."</td>";
    echo "<td>".$data['jabatan_karyawan']."</td>";
    echo "<td><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#tes".$no."'>Hapus</button>";?>
    <div id='tes<?php echo $no;?>' class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Peringatan</h4>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin ingin menghapus data <?php echo $data['nama_karyawan'];?>?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <?php echo "<a href='hapus_data.php?id_karyawan=".$data['id_karyawan']."'><button type='button' class='btn btn-primary'>Hapus</button></a>";?>
        </div>
      </div>
    </div>
  </div>
  <?php echo " | <button type='button' class='btn btn-success' data-toggle='modal' data-target='#edit".$no."'>Edit</button></td>";?>
  <div id='edit<?php echo $no;?>' class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Data Karyawan</h4>
        </div>
        <div class="modal-body">
          <form action='proses_edit_data.php' method='POST'>
          <input type='hidden' name='id_karyawan' value='<?php echo $data['id_karyawan'];?>'>
          <div class="form-group">
            <label for="nama"><b>Nama Karyawan</b></label>
            <input type="text" name="nama_karyawan" class="form-control" placeholder="masukkan nama karyawan" value='<?php echo $data['nama_karyawan'];?>'>
          </div>
          <div class="form-group">
            <label for="alamat_karyawan"><b>Alamat Karyawan</b></label>
            <textarea class="form-control" name="alamat_karyawan" placeholder="masukkan alamat karyawan"><?php echo $data['alamat_karyawan'];?></textarea>
          </div>
          <div class="form-group">
           <label for="no_telp_karyawan"><b>No. Telp Karyawan</b></label>
           <input type="number" name="no_telp_karyawan" class="form-control" placeholder="masukkan nomor telepon karyawan" value='<?php echo $data['no_telp_karyawan'];?>'>
          </div>
          <div class="form-group">
           <label for="jabatan_karyawan"><b>Jabatan Karyawan</b></label>
           <input type="text" name="jabatan_karyawan" class="form-control" placeholder="masukkan jabatan karyawan" value='<?php echo $data['jabatan_karyawan'];?>'>
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button class="btn btn-success">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php echo "</tr>";
  }
  ?>
  </table> 
  <a href='input_data.php'><button class="btn btn-info btn-lg">Tambah Data</button></a>
  </center>

  <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready(function() {
    $('.datatab').DataTable();
  } );
  </script>
</body>
</html>
