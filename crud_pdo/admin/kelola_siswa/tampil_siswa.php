<?php
    require_once("../../config/koneksi.php");
	$hal = (isset($_GET['hal']))? $_GET['hal'] : 1;
					
	$limit = 5; // Jumlah data per halamannya
					
	// Untuk menentukan dari data ke berapa yang akan ditampilkan pada tabel yang ada di database
	$limit_start = ($hal - 1) * $limit;

	$query = "SELECT * FROM tbl_siswa LIMIT ".$limit_start.",".$limit;
	$sql = $pdo->prepare($query);
	$sql->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>
    <link rel="icon" type="image/png" href="../../assets/img/smk1.png"/>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>
<body>
<div class="panel panel-default">
	<div class="panel-heading">
				<h3>
					<strong>Data Siswa</strong>
					<a class="btn btn-primary" href="tambah_siswa.php">Tambah Data</a>
				</h3>
			</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12" >
							<div class="table-responsive">
							<table id="cari" class="table table-striped">
						<thead>
							<tr>
                                <th>Akun</th>
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
							while($data = $sql->fetch()){
								?>
								<tbody>
									<tr>
                                        <td>
                                            <?php
                                                if ($data['jenis_kelamin']=="L") {
                                                    $ft_akun = "user_laki.png";
                                                    ?>
                                                    <img src="../../assets/img/<?php echo $ft_akun;?>" class="img-circle" alt="User Image" witdh = "50px" height = "50px">
                                                    <?php
                                                } else {
                                                    $ft_akun = "user_perempuan.png";
                                                    ?>
                                                    <img src="../../assets/img/<?php echo $ft_akun;?>" class="img-circle" alt="User Image" witdh = "50px" height = "50px">
                                                    <?php
                                                }
                                            ?>
                                        </td>
										<td><?php echo $data['nis'];?></td>
										<td><?php echo $data['nama_siswa'];?></td>
										<td><?php echo $data['jenis_kelamin'];?></td>
                                        <td><?php echo $data['tempat_lahir'].", ".$data['tanggal_lahir'];?></td>
                                        <td><?php echo $data['alamat'];?></td>
                                        <td><?php echo $data['no_telp'];?></td>
                                        <td><?php echo $data['kelas'];?></td>
										<td>
                                            <a class="btn btn-warning" href="edit_siswa.php?id=<?php echo $data['nis'];?>">Edit</a> | 
                                            <a onclick="return confirm('Anda akan menghapus data ini?')" class="btn btn-danger" href="proses/hapus_siswa.php?id=<?php echo $data['nis'];?>">Hapus</a>
                                        </td>
									</tr>
								</tbody>
								<?php
							}
						?>	

						</table>	
				</div>
			</div>
		</div>
		<ul class="pagination pagination-sm m-0 float-right">
				<!-- LINK FIRST AND PREV -->
				<?php
				if($hal == 1){ // Jika hal adalah hal ke 1, maka disable link PREV
				?>
					<li class="page-item" class="disabled"><a class="page-link" href="#">First</a></li>
					<li class="page-item" class="disabled"><a class="page-link" href="#">&laquo;</a></li>
				<?php
				}else{ // Jika hal bukan hal ke 1
					$link_prev = ($hal > 1)? $hal - 1 : 1;
				?>
					<li class="page-item"><a class="page-link" href="tampil_siswa.php?hal=1">First</a></li>
					<li class="page-item"><a class="page-link" href="tampil_siswa.php?hal=<?php echo $link_prev; ?>">&laquo;</a></li>
				<?php
				}
				?>
				
				<!-- LINK NUMBER -->
				<?php
				// Buat query untuk menghitung semua jumlah data
				$sql2 = $pdo->prepare("SELECT COUNT(*) AS jumlah FROM tbl_siswa");
				$sql2->execute(); // Eksekusi querynya
				$get_jumlah = $sql2->fetch();
				
				$jumlah_hal = ceil($get_jumlah['jumlah'] / $limit); // Hitung jumlah halamannya
				$jumlah_number = 3; // Tentukan jumlah link number sebelum dan sesudah hal yang aktif
				$start_number = ($hal > $jumlah_number)? $hal - $jumlah_number : 1; // Untuk awal link number
				$end_number = ($hal < ($jumlah_hal - $jumlah_number))? $hal + $jumlah_number : $jumlah_hal; // Untuk akhir link number
				
				for($i = $start_number; $i <= $end_number; $i++){
					$link_active = ($hal == $i)? ' class="active"' : '';
				?>
					<li class="page-item" <?php echo $link_active; ?>><a  class="page-link" href="tampil_siswa.php?hal=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php
				}
				?>
				
				<!-- LINK NEXT AND LAST -->
				<?php
				// Jika hal sama dengan jumlah hal, maka disable link NEXT nya
				// Artinya hal tersebut adalah hal terakhir 
				if($hal == $jumlah_hal){ // Jika hal terakhir
				?>
					<li class="disabled"><a class="page-link" href="#">&raquo;</a></li>
					<li class="disabled"><a class="page-link" href="#">Last</a></li>
				<?php
				}else{ // Jika Bukan hal terakhir
					$link_next = ($hal < $jumlah_hal)? $hal + 1 : $jumlah_hal;
				?>
					<li class="page-item"><a class="page-link" href="tampil_siswa.php?hal=<?php echo $link_next; ?>">&raquo;</a></li>
					<li class="page-item"><a class="page-link" href="tampil_siswa.php?hal=<?php echo $jumlah_hal; ?>">Last</a></li>
				<?php
				}
				?>
			</ul>
	</div>
</div>
</body>
</html>

<script src="../../assets/js/bootstrap.min.js"></script>