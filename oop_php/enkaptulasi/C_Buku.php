<?php
    class C_Buku {
        public $nobuku;
        private $namabuku;
        private $jmlhalbuku;

        public function SetBuku($idbuku, $nmbuku, $jml) {
            $this->nobuku = $idbuku;
            $this->namabuku = $nmbuku;
            $this->jmlhalbuku = $jml;
        }

        public function GetBukuNobuku(){
            return $this->nobuku;
        }

        public function GetBukuNmbuku(){
            return $this->namabuku;
        }

        public function GetBukuHalbuku(){
            return $this->jmlhalbuku;
        }
    }
?>