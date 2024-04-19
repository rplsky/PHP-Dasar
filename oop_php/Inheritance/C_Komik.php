<?php
    include 'C_Buku.php';

    class C_Komik extends C_Buku {
        public function CetakKomik() {
            return "Ini tampilkan Komik Broo";
        }
    }
?>