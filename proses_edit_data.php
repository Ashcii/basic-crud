<?php
include 'koneksi.php';

$id_karyawan = $_POST['id_karyawan'];
$nama_karyawan = $_POST['nama_karyawan'];
$alamat_karyawan = $_POST['alamat_karyawan'];
$no_telp_karyawan = $_POST['no_telp_karyawan'];
$jabatan_karyawan = $_POST['jabatan_karyawan'];

$sql = "UPDATE tb_karyawan SET nama_karyawan = '$nama_karyawan', 
alamat_karyawan = '$alamat_karyawan', no_telp_karyawan = '$no_telp_karyawan',
jabatan_karyawan = '$jabatan_karyawan' WHERE id_karyawan = '$id_karyawan' ";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    header ("location:show.php?edit=sukses");
} else {
    header ("location:show.php?edit=gagal");
}
?>