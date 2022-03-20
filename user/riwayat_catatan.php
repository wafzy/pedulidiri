
<div class="card">
    <div class="card-header">
     <a href="index.php" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
         <i class="fas fa-arrow-left"></i>
        </span>
         <span class="text">Kembali</span>
    </a>
    <a href="export.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right">Export Laporan 
        <i class="fas fa-download fa-sm text-white-50"></i> </a>
    </div>
    <div class="card-body">
    <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Lokasi</th>
                                            <th>Suhu</th>
                                            <th>Opsi</th>
                                        </tr>
                                    <!-- </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Lokasi</th>
                                            <th>Suhu</th>
                                            <th>Opsi/th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                        <?php 
                                        $no =1;
                                        include '../koneksi/koneksi.php';
                                        $sql = "SELECT*FROM catatan WHERE nik='$_SESSION[nik]'";
                                        $query = mysqli_query ($koneksi, $sql);
                                        foreach($query as $value){
                                        ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value['tanggal']?></td>
                                            <td><?= $value['waktu']?> WIB</td>
                                            <td><?= $value['lokasi']?></td>
                                            <td><?= $value['suhu']?>&deg</td>
                                            <td>
                                                <a href="?url=edit_catatan&id_catatan=<?= $value['id_catatan'];?>" class="btn btn-primary">
                                                Edit <i class="fa fa-pen"></i>
                                                </a>
                                                <a onclick="return confirm('Yakin ingin menghapus data ini ?')" href="?url=hapus_catatan&id_catatan=<?= $value['id_catatan'];?>" class="btn btn-info">
                                                Hapus <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php } ?>
</tbody>
</table>
</div>
    </div>
</div>