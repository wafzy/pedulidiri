<?php

include '../koneksi/koneksi.php';

$id_catatan =$_GET['id_catatan'];

$sql = "DELETE FROM catatan WHERE id_catatan='$id_catatan'";
$query = mysqli_query($koneksi, $sql);

if($query){ ?>
    <script>
        alert("Data Berhasil Dihapus");
        window.location.assign("index.php?url=riwayat_catatan");
    </script>
<?php 
}else{ ?>
    <script>
        alert("Penghapusan Data Gagal");
        window.location.assign("index.php?url=riwayat_catatan");
    </script>
<?php }

