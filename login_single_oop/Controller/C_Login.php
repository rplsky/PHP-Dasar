<?php
    SESSION_START();
    include "../Config/Koneksi.php";

    class C_Login extends Koneksi {

        public function Login($username, $password) {
            $query = "SELECT * FROM tbl_akun WHERE email = '$username' AND password = '$password'";
            $eksekusi = $this->Query_Tampil($query);
            
            return $eksekusi;
            
        }

        public function Tambah_Akun($username, $password) {
            $hak_akses = "Siswa";
            $query = "INSERT INTO tbl_akun (email, password, hak_akses) VALUES ('$username', '$password', '$hak_akses')";
            $eksekusi = $this->Query_Perintah($query);
            
            return $eksekusi;
            
        }
    }
?>