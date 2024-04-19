<?php
	require_once("../../../config/koneksi.php");

	$nis = $_POST['nis'];
	$nama_siswa = $_POST['nama_siswa'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$alamat = $_POST['alamat'];
	$no_telp = $_POST['no_telp'];
	$kelas = $_POST['kelas'];

	$query_siswa = "SELECT * FROM tbl_siswa WHERE nis = '$nis'";
    $sql_siswa = $pdo->prepare($query_siswa);
    $sql_siswa->execute();
    $jml_data = $sql_siswa->rowCount();
    if ($jml_data == 0) {
    	$query = "INSERT INTO tbl_siswa (nis, nama_siswa, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat, no_telp, kelas) VALUES ('$nis', '$nama_siswa', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$no_telp', '$kelas')";
		$sql = $pdo->prepare($query);
		$sql->execute();
			
		if($sql){
			?>
			<script type="text/javascript">
				alert('Data telah tersimpan');
				setTimeout("location.href='../tampil_siswa.php'", 1000);
			</script>
			<?php
		}else{
			echo $query;
			?>
			<script type="text/javascript">
				alert('Data gagal tersimpan');
				setTimeout("location.href='../tambah_siswa.php'", 1000);
			</script>
			<?php
		}
    } else {
    	?>
		<script type="text/javascript">
			alert('NIS sudah dipakai oleh akun lain');
			setTimeout("location.href='../tambah_siswa.php'", 1000);
		</script>
	<?php
    }		
?>