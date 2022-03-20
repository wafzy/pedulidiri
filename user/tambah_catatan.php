
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
            <form method="post" action="tambah_proses.php">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="tanggal" value="<?php echo date("d-M-Y"); ?>">
                    <input type="hidden" class="form-control" name="waktu" value="<?php echo date("H:i"); ?>">
                </div>
                <div class="form-group">
                    <label>Lokasi</label>
                    <input type="text" class="form-control" name="lokasi" required>
                </div>
                <div class="form-group">
                    <label>Suhu Tubuh</label>
                    <input type="text" class="form-control" name="suhu" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan &nbsp <i class="fa fa-save"></i></button>
                    <button type="reset" class="btn btn-secondary">Reset &nbsp <i class="fa fa-trash"></i></button>
                </div>

            </form>

    </div>
</div>