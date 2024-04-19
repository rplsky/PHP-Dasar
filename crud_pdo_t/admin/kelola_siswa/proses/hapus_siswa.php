<?php
	//require_once("../../../config/koneksi.php");

	$id = $_GET['id'];

	$query = "DELETE FROM tbl_siswa WHERE nis = '$id'";
	$sql = $pdo->prepare($query);
	$sql->execute();
	
	if($sql){
		?>
		<script type="text/javascript">
			alert('Data telah terhapus');
			setTimeout("location.href='?modul=siswa&fitur=tampil_siswa'", 1000);
		</script>
		<?php
	}else{
		echo $query;
		?>
		<script type="text/javascript">
			alert('Data gagal terhapus');
			setTimeout("location.href='?modul=siswa&fitur=tampil_siswa'", 1000);
		</script>
		<?php
	}	
?>