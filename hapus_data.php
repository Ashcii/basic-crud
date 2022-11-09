<?php
include "koneksi.php";

$id_karyawan = $_GET['id_karyawan'];

$sql = "DELETE FROM tb_karyawan WHERE id_karyawan = '$id_karyawan'";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    header ("location:show.php?hapus=sukses");
} else {
    header ("location:show.php?hapus=gagal");
}
?>