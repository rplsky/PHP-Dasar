<!DOCTYPE html>
<html>
<head>
	<title>Tambah Siswa</title>
    <link rel="icon" type="image/png" href="assets/img/smk1.png"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3><strong>Tambah Siswa</strong></h3>
	</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-6" >
					<form action="proses/simpan_siswa.php" method="POST">
						<div class="form-group">
							<label>NIS</label>
							<input class="form-control" name="nis" autofocus="" required placeholder="NIS" onkeypress = "return Angkasaja(event)"/>
						</div>
						<div class="form-group">
							<label>Nama Siswa</label>
							<input class="form-control" name="nama_siswa" required placeholder="Nama Siswa"  required />
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<div class="form-check">
	                          <input class="form-check-input" type="radio" name="jenis_kelamin" value="L">
	                          <label class="form-check-label">Laki - laki</label>
	                        </div>
	                        <div class="form-check">
	                          <input class="form-check-input" type="radio" name="jenis_kelamin" value="P">
	                          <label class="form-check-label">Perempuan</label>
	                        </div>
						</div>
						<div class="input-group">
							<label>Tempat Tanggal Lahir</label>
							<div class="input-group mb-2">
								<input class="form-control" name="tempat_lahir" required placeholder="Tempat Lahir"/>
                            	<input type="date" class="form-control" name="tanggal_lahir" required placeholder="Tanggal Lahir"/>
							</div>
							</div>
						<div class="form-group">
							<label>Alamat</label>
							<textarea class="form-control" name="alamat" required placeholder="Alamat"></textarea>
						</div>
						<div class="form-group">
							<label>No Telp</label>
							<input class="form-control" name="no_telp" required placeholder="No Telp" onkeypress = "return Angkasaja(event)"/>
						</div>
						<div class="form-group">
							<label>Kelas</label>
							<select class="form-control" name="kelas">
								<option value="">- Pilih Kelas -</option>
								<option value="X RPL 1">X RPL 1</option>
                                <option value="X RPL 2">X RPL 2</option>
                                <option value="X RPL 3">X RPL 3</option>
                                <option value="X RPL 4">X RPL 4</option>
                                <option value="XI RPL 1">XI RPL 1</option>
                                <option value="XI RPL 2">XI RPL 2</option>
                                <option value="XI RPL 3">XI RPL 3</option>
                                <option value="XI RPL 4">XI RPL 4</option>
                                <option value="XII RPL 1">XII RPL 1</option>
                                <option value="XII RPL 2">XII RPL 2</option>
                                <option value="XII RPL 3">XII RPL 3</option>
							</select>
						</div>

						<input type="submit" name="simpan" value="Simpan" class="btn btn-primary" style="margin-top:15px">
						<a class="btn btn-danger" href="tampil_siswa.php" style="margin-top:15px">Kembali</a>
					</form>
				</div>
			</div>
		</div>
</div>
</body>
</html>

<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
	function Angkasaja(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
			if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
		return true;
	}
</script>