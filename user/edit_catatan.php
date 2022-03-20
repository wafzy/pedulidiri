<?php

$id_catatan  =$_GET['id_catatan'];
include '../koneksi/koneksi.php';
$sql = "SELECT*FROM catatan WHERE id_catatan='$id_catatan'";
$query = mysqli_query($koneksi,$sql);
$value = mysqli_fetch_array($query);
?>
<div class="card">
    <div class="card-header">
     <a href="index.php" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
         <i class="fas fa-arrow-left"></i>
        </span>
         <span class="text">Kembali</span>
    </a>
    </div>
    <?php
date_default_timezone_set('Asia/Jakarta');
?>
    <div class="card-body">
            <form method="post" action="edit_proses.php">
                <input type="hidden" name="id_catatan"  value="<?= $id_catatan ?>" >
                <div class="form-group">
                <label>Tanggal</label>
                    <input type="text" class="form-control" name="tanggal" value="<?php echo date("d-M-Y"); ?>">
                </div>
                <div class="form-group">
                    <label>Waktu</label>
                    <input type="text" class="form-control" name="waktu" value="<?php echo date("H:i"); ?>">
                </div>
                <div class="form-group">
                    <label>Lokasi</label>
                    <input  value="<?= $value['lokasi'] ?>" type="text" class="form-control" name="lokasi">
                </div>
                <div class="form-group">
                    <label>Suhu Tubuh</label>
                    <input value="<?= $value['suhu'] ?>" type="text" class="form-control" name="suhu" >
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan &nbsp <i class="fa fa-save"></i></button>
                </div>

            </form>

    </div>
</div>