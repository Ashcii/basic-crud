<?php
include "koneksi.php";

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "INSERT INTO tb_login (nama, username, password) VALUES ('$nama', '$username', '$password')";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    header("location:index.php?daftar=sukses");
} else {
    header("location:index.php?daftar=gagal");
}
