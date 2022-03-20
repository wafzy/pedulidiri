<?php

include '../koneksi/koneksi.php';

session_start();
$nik = $_SESSION['nik'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu'];

$sql = "INSERT INTO catatan(nik,tanggal,waktu,lokasi,suhu) VALUES ('$nik','$tanggal','$waktu','$lokasi','$suhu')";
$query = mysqli_query($koneksi, $sql);

if($query){ ?>
    <script>
        alert("Data Berhasil Ditambahkan");
        window.location.assign("index.php?url=riwayat_catatan");
    </script>
<?php 
}else{ ?>
    <script>
        alert("Penambahan Data Gagal");
        window.location.assign("index.php?url=riwayat_catatan");
    </script>
<?php }

