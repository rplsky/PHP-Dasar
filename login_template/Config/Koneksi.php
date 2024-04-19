<?php
    // File: config.php
    class Koneksi {
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "db_login";

        protected $Conn;

        public function __construct() {
            try {
                $this->Conn = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password);
                $this->Conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Connection Database Failed : " . $e->getMessage());
            }
        }

        public function Query_Tampil($query) {
            try {
                $sql = $this->Conn->prepare($query);
                $sql->execute();
                $data = $sql->fetch();

                return $data;

            } catch (PDOException $e) {
                return "Eksekusi Query SQL Failed : " . $e->getMessage();
            }
        }

        public function Query_Perintah($query) {
            try {
                $sql = $this->Conn->prepare($query);
                $sql->execute();

                return $sql;

            } catch (PDOException $e) {
                return "Eksekusi Query SQL Failed : " . $e->getMessage();
            }
        }
    } 
?>