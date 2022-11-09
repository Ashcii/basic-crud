<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "db_karyawan";

$koneksi = mysqli_connect($server, $username, $password, $database);
if ($koneksi) {
    //echo "berhasil terkoneksi ke database";
} else {
    echo "gagal terkoneksi ke databse";
}
?>