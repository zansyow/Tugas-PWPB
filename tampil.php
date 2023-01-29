<?php

include 'koneksi1.php';
$data = mysqli_query($koneksi, "SELECT * FROM `siswa`");
?>
<a href="tambah.php">tambah</a><br>
<?php
foreach($data as $data){
    echo $data['Nama'];
    echo $data['NIS'];
    echo $data['Kelas'];
    echo $data['Jurusan'];
    echo $data['Eskul']."<br>";
?>
    <a href="delete.php?id<?php $data['Nama'] ?>">hapus</a><br>

    <?php
}




?>