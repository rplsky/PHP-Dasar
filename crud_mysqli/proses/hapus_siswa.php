<?php
	require_once("../koneksi.php");

	$id = $_GET['id'];

	$query = "DELETE FROM tbl_siswa WHERE nis = '$id'";
	$sql = mysqli_query($connect, $query);
	
	if($sql){
		?>
		<script type="text/javascript">
			alert('Data telah terhapus');
			setTimeout("location.href='../tampil_siswa.php'", 1000);
		</script>
		<?php
	}else{
		echo $query;
		?>
		<script type="text/javascript">
			alert('Data gagal terhapus');
			setTimeout("location.href='../tampil_siswa.php'", 1000);
		</script>
		<?php
	}	
?>