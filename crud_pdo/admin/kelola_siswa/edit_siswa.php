<?php
    require_once("../../config/koneksi.php");
	
    $id = $_GET['id'];
	$query = "SELECT * FROM tbl_siswa WHERE nis = '$id'";
	$sql = $pdo->prepare($query);
	$sql->execute();
	$data = $sql->fetch();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Siswa</title>
    <link rel="icon" type="image/png" href="../../assets/img/smk1.png"/>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>
<body>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3><strong>Edit Siswa</strong></h3>
	</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-6" >
					<form action="proses/update_siswa.php" method="POST">
                        <div class="form-group">
							<label>NIS</label>
							<input type="hidden" class="form-control" name="nis" value="<?php echo $data['nis'];?>" required placeholder="NIS Siswa"/>
							<input class="form-control" name="nama_siswa" value="<?php echo $data['nis'];?>" disabled required placeholder="NIS"/>
						</div>
                        <div class="form-group">
							<label>Nama Siswa</label>
							<input class="form-control" name="nama_siswa"  autofocus="" value="<?php echo $data['nama_siswa'];?>" required placeholder="Nama Siswa"/>
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<div class="form-check">
	                          <input class="form-check-input" type="radio" name="jenis_kelamin" value="L" <?php if($data['jenis_kelamin']=="L"){ echo "checked"; }?>>
	                          <label class="form-check-label">Laki - laki</label>
	                        </div>
	                        <div class="form-check">
	                          <input class="form-check-input" type="radio" name="jenis_kelamin" value="P" <?php if($data['jenis_kelamin']=="P"){ echo "checked"; }?>>
	                          <label class="form-check-label">Perempuan</label>
	                        </div>
						</div>
						<div class="form-group">
                            <label>Tempat Tanggal Lahir</label>
							<div class="input-group mb-2">
							    <input class="form-control" name="tempat_lahir"  value="<?php echo $data['tempat_lahir'];?>"  required placeholder="tempat_lahir"/>
                                <input class="form-control" type="date" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'];?>" required placeholder="tanggal_lahir"/>
                            </div>
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<textarea class="form-control" name="alamat" required placeholder="Alamat"><?php echo $data['alamat'];?></textarea>
						</div>
						<div class="form-group">
							<label>No Telp</label>
							<input class="form-control" name="no_telp" required placeholder="no_telp" value="<?php echo $data['no_telp'];?>"  onkeypress = "return Angkasaja(event)"/>
						</div>
						<div class="form-group">
							<label>Kelas</label>
							<select class="form-control" name="kelas">
                                <option value="">- Pilih Kelas -</option>
                                <option value="X RPL 1" <?php if ($data['kelas']=="X RPL 1") {echo "selected";} ?>>X RPL 1</option>
                                <option value="X RPL 2" <?php if ($data['kelas']=="X RPL 2") {echo "selected";} ?>>X RPL 2</option>
                                <option value="X RPL 3" <?php if ($data['kelas']=="X RPL 3") {echo "selected";} ?>>X RPL 3</option>
                                <option value="X RPL 4" <?php if ($data['kelas']=="X RPL 4") {echo "selected";} ?>>X RPL 4</option>
                                <option value="XI RPL 1" <?php if ($data['kelas']=="XI RPL 1") {echo "selected";} ?>>XI RPL 1</option>
                                <option value="XI RPL 2" <?php if ($data['kelas']=="XI RPL 2") {echo "selected";} ?>>XI RPL 2</option>
                                <option value="XI RPL 3" <?php if ($data['kelas']=="XI RPL 3") {echo "selected";} ?>>XI RPL 3</option>
                                <option value="XI RPL 4" <?php if ($data['kelas']=="XI RPL 4") {echo "selected";} ?>>XI RPL 4</option>
                                <option value="XII RPL 1" <?php if ($data['kelas']=="XII RPL 1") {echo "selected";} ?>>XII RPL 1</option>
                                <option value="XII RPL 2" <?php if ($data['kelas']=="XII RPL 2") {echo "selected";} ?>>XII RPL 2</option>
                                <option value="XII RPL 3" <?php if ($data['kelas']=="XII RPL 3") {echo "selected";} ?>>XII RPL 3</option>
							</select>
						</div>

						<input type="submit" name="update" value="Update" class="btn btn-primary" style="margin-top:15px">
						<a class="btn btn-danger" href="tampil_siswa.php" style="margin-top:15px">Kembali</a>
					</form>
				</div>
			</div>
		</div>
</div>
</body>
</html>

<script src="../../assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
	function Angkasaja(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
			if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
		return true;
	}
</script>