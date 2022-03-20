<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Excel Dengan PHP - www.malasngoding.com</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 50px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>

	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data PeduliDiri.xls");
	?>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Lokasi</th>
                                            <th>Suhu</th>
                                        </tr>
                                    <!-- </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Lokasi</th>
                                            <th>Suhu</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                    <?php 
		include '../koneksi/koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from catatan");
		while($d = mysqli_fetch_array($data)){
			?>
                                        <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $d['tanggal']; ?></td>
                                        <td><?php echo $d['waktu']; ?></td>
                                        <td><?php echo $d['lokasi']; ?></td>
                                        <td><?php echo $d['suhu']; ?> &deg</td>
                                        </tr>
                                        <?php } ?>
</tbody>
</table>
</body>
</html>