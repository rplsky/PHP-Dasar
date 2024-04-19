<?php
    class Database {
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "db_login";

        protected $conn;

        public function __construct() {
            try {
                $this->conn = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Connection Failed : " . $e->getMessage());
            }
        }

        public function view($link, $dt) {
            include "Views/".$link.".php";
        }

        public function Select($tabel) {
            try {
                $query = "SELECT * FROM $tabel";
                $sql = $this->conn->query($query);
                return $sql;

            } catch (PDOException $e) {
                return "Eksekusi Query SQL Failed : " . $e->getMessage();
            }
        }

        public function SelectWhere($tabel, $where) {
            try {
                $query = "SELECT * FROM $tabel WHERE ";
                $params = [];

                foreach ($where as $column => $value) {
                    $query .= "$column = :$column AND ";
                    $params[":$column"] = $value;
                }

                $query = rtrim($query, ' AND '); // Menghapus "AND" terakhir

                $sql = $this->conn->prepare($query);

                foreach ($where as $key => $value) {
                    $sql->bindValue(":$key", $value);
                }

                $sql->execute();
                return $sql;

            } catch (PDOException $e) {
                return "Eksekusi Query SQL Failed : " . $e->getMessage();
            }
        }

        public function Insert($tabel, $data) {
            try {
                $columns = implode(", ", array_keys($data));
                $values = ":" . implode(", :", array_keys($data));

                $query = "INSERT INTO $tabel ($columns) VALUES ($values)";

                $sql = $this->conn->prepare($query);

                foreach ($data as $key => $value) {
                    $sql->bindValue(":$key", $value);
                }

                $sql->execute();

                return $sql;

            } catch (PDOException $e) {
                return "Eksekusi Query SQL Failed : " . $e->getMessage();
            }
        }

        public function Update($tabel, $data, $where) {
            try {
                $params = [];
                $updateFields = '';

                foreach ($data as $key => $value) {
                    $updateFields .= "$key = :$key, ";
                }

                $updateFields = rtrim($updateFields, ' , '); // Menghapus "AND" terakhir
                
                $query = "UPDATE $tabel SET $updateFields WHERE ";

                foreach ($where as $column => $value) {
                    $query .= "$column = :$column";
                    $params[":$column"] = $value;
                }

                $sql = $this->conn->prepare($query);

                foreach ($data as $key => $value) {
                    $sql->bindValue(":$key", $value);
                }

                $sql->execute();

                return $sql;

            } catch (PDOException $e) {
                return "Eksekusi Query SQL Failed : " . $e->getMessage();
            }
        }

        public function Delete($tabel, $where) {
            try {
                $query = "DELETE FROM $tabel WHERE ";
                $params = [];

                foreach ($where as $column => $value) {
                    $query .= "$column = :$column AND ";
                    $params[":$column"] = $value;
                }

                $query = rtrim($query, ' AND '); // Menghapus "AND" terakhir

                $sql = $this->conn->prepare($query);

                foreach ($where as $key => $value) {
                    $sql->bindValue(":$key", $value);
                }

                $sql->execute();
                return $sql;

            } catch (PDOException $e) {
                return "Eksekusi Query SQL Failed : " . $e->getMessage();
            }
        }
    }
?>