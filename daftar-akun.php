<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Pendaftaran Akun</title>
</head>
<body>
    <center><h1>Pendaftaran Akun</h1><hr></center>

    <form action="proses-daftar-akun.php" method="POST">
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama">
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Masukkan username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Masukkan password">
        </div>
        <center>
        <button class="btn btn-danger">Batal</button>
        <button class="btn btn-success">Simpan</button>
        </center>
    </form>

</body>
</html>