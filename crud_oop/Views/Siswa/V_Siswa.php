<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>
    <link rel="icon" type="image/png" href="Assets/img/smk1.png"/>
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
</head>
<body>
<div class="panel panel-default" style="margin: 20px;">
	<div class="panel-heading">
				<h3>
					<strong>Data Siswa</strong>
					<a class="btn btn-primary" href="?c=Siswa&action=Tambah_Siswa">Tambah Data</a>
				</h3>
			</div>
				<div class="panel-body">
					<div class="data">
						<div class="col-md-12" >
							<div class="table-responsive">
							<table id="cari" class="table table-striped">
						<thead>
							<tr>
								<th>NIS</th>
								<th>Nama Siswa</th>
								<th>Jenis Kelamin</th>
                                <th>Tempat Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Nomor Telepon</th>
                                <th>Kelas</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<?php
							foreach ($dt as $data) {
								?>
								<tbody>
									<tr>
										<td><?php echo $data['nis'];?></td>
										<td><?php echo $data['nama_siswa'];?></td>
										<td><?php echo $data['jenis_kelamin'];?></td>
                                        <td><?php echo $data['tempat_lahir'].", ".$data['tanggal_lahir'];?></td>
                                        <td><?php echo $data['alamat'];?></td>
                                        <td><?php echo $data['no_telp'];?></td>
                                        <td><?php echo $data['kelas'];?></td>
										<td>
                                            <a class="btn btn-warning" href="?c=Siswa&action=Edit_Siswa&id=<?php echo $data['nis'];?>">Edit</a> | 
                                            <a onclick="return confirm('Anda akan menghapus data ini?')" class="btn btn-danger" href="?c=Siswa&action=Hapus_Siswa&id=<?php echo $data['nis'];?>">Hapus</a>
                                        </td>
									</tr>
								</tbody>
                                
							<?php } ?>

						</table>	
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>

<script src="Assets/js/bootstrap.min.js"></script>