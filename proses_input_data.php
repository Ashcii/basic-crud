<?php
include 'koneksi.php';

$nama_karyawan = $_POST['nama_karyawan'];
$alamat_karyawan = $_POST['alamat_karyawan'];
$no_telp_karyawan = $_POST['no_telp_karyawan'];
$jabatan_karyawan = $_POST['jabatan_karyawan'];

$sql = "INSERT INTO tb_karyawan (nama_karyawan, alamat_karyawan, no_telp_karyawan, jabatan_karyawan)
VALUES ('$nama_karyawan', '$alamat_karyawan', '$no_telp_karyawan', '$jabatan_karyawan')";
$execution = mysqli_query($koneksi, $sql);

if ($execution) {
    header ("location:show.php?simpan=sukses");
} else {
    header ("location:show.php?simpan=gagal");
}
