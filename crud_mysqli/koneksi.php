<?php
    // deklarasi parameter koneksi database
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "db_perpus";

    try {
        // buat koneksi database
        $connect = mysqli_connect($hostname, $username, $password, $database);
        // set error mode
        $error = mysqli_connect_errno();
        if ($error) {
            throw new Exception($error);
        }
    } catch (Exception $e) {
        // tampilkan kesalahan jika koneksi gagal
        echo "Koneksi Database Gagal! : ".$e->getMessage();
    }
?>