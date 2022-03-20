<?php

include '../koneksi/koneksi.php';

$id_catatan =$_POST['id_catatan'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu'];

$sql = "UPDATE catatan SET tanggal='$tanggal',waktu='$waktu',lokasi='$lokasi',suhu='$suhu' WHERE id_catatan='$id_catatan'";
$query = mysqli_query($koneksi, $sql);

if($query){ ?>
    <script>
        alert("Data Berhasil Diubah");
        window.location.assign("index.php?url=riwayat_catatan");
    </script>
<?php 
}else{ ?>
    <script>
        alert("Pengubahan Data Gagal");
        window.location.assign("index.php?url=edit_catatan");
    </script>
<?php }

