<?php
include 'koneksi1.php';
echo $Nama = $_POST['Nama'];
echo $NIS = $_POST['NIS'];
echo $Kelas = $_POST['Kelas'];
echo $Jurusan = $_POST['Jurusan'];
echo $Eskul = $_POST['Eskul'];


$data = mysqli_query($koneksi,
"INSERT INTO `Siswa`(`Nama`, `NIS`, `Kelas`, `Jurusan`, `Eskul`) VALUES ('$Nama', '$NIS' , '$Kelas', '$Jurusan', '$Eskul')");

header("location: tampil_barang.php");
?>