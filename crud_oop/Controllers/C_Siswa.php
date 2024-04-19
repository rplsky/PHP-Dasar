<?php

    class C_Siswa extends View {
        //Setel Models
        private $M_Siswa;
        //Atribut
        var $nis;
        var $nama_siswa;
        var $jenis_kelamin;
        var $tempat_lahir;
        var $tanggal_lahir;
        var $alamat;
        var $no_telp;
        var $kelas;

        public function __construct() {
            $this->M_Siswa = new M_Siswa();
        }

        public function index() {
            $dt = $this->M_Siswa->Tampil_Siswa('tbl_siswa');
            $this->views("Siswa/V_Siswa", $dt);
        }

        public function Tambah_Siswa() {
            $this->views("Siswa/V_Tambah_Siswa");
        }

        public function Simpan_Siswa() {
            //Inputan
            $this->nis = $_POST['nis'];
            $this->nama_siswa = $_POST['nama_siswa'];
            $this->jenis_kelamin = $_POST['jenis_kelamin'];
            $this->tempat_lahir = $_POST['tempat_lahir'];
            $this->tanggal_lahir = $_POST['tanggal_lahir'];
            $this->alamat = $_POST['alamat'];
            $this->no_telp = $_POST['no_telp'];
            $this->kelas = $_POST['kelas'];
            
            $data = [
                        'nis' => $this->nis,
                        'nama_siswa' => $this->nama_siswa,
                        'jenis_kelamin' => $this->jenis_kelamin,
                        'tempat_lahir' => $this->tempat_lahir,
                        'tanggal_lahir' => $this->tanggal_lahir,
                        'alamat' => $this->alamat,
                        'no_telp' => $this->no_telp,
                        'kelas' => $this->kelas
                    ];
            $dt = $this->M_Siswa->Simpan_Siswa('tbl_siswa', $data);

            ?>
			<script type="text/javascript">
				alert('Data telah tersimpan');
				setTimeout("location.href='?c=Siswa&action=index'", 1000);
			</script>
			<?php
        }

        public function Edit_Siswa() {
            $id = ['nis' => $_GET['id']];

            $dt = $this->M_Siswa->Edit_Data_Siswa('tbl_siswa', $id);
            $this->views("Siswa/V_Edit_Siswa", $dt);
        }

        public function Update_Siswa() {
            //Inputan
            $this->nis = $_POST['nis'];
            $this->nama_siswa = $_POST['nama_siswa'];
            $this->jenis_kelamin = $_POST['jenis_kelamin'];
            $this->tempat_lahir = $_POST['tempat_lahir'];
            $this->tanggal_lahir = $_POST['tanggal_lahir'];
            $this->alamat = $_POST['alamat'];
            $this->no_telp = $_POST['no_telp'];
            $this->kelas = $_POST['kelas'];
            
            $data = [
                        'nis' => $this->nis,
                        'nama_siswa' => $this->nama_siswa,
                        'jenis_kelamin' => $this->jenis_kelamin,
                        'tempat_lahir' => $this->tempat_lahir,
                        'tanggal_lahir' => $this->tanggal_lahir,
                        'alamat' => $this->alamat,
                        'no_telp' => $this->no_telp,
                        'kelas' => $this->kelas
                    ];
            
            $id = ['nis' => $this->nis];
            
            $dt = $this->M_Siswa->Update_Siswa('tbl_siswa', $data, $id);

            ?>
			<script type="text/javascript">
				alert('Data telah tersimpan');
				setTimeout("location.href='?c=Siswa&action=index'", 1000);
			</script>
			<?php
        }

        public function Hapus_Siswa() {
            $id = ['nis' => $_GET['id']];

            $dt = $this->M_Siswa->Delete_Siswa('tbl_siswa', $id);

            ?>
			<script type="text/javascript">
				alert('Data telah tersimpan');
				setTimeout("location.href='?c=Siswa&action=index'", 1000);
			</script>
			<?php
        }
    }
?>