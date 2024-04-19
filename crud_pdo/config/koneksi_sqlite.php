<?php
    // deklarasi parameter koneksi database
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "C:\Users\RIZKY-PC\Documents\sqlite\db_perpus.db";

    try {
        // buat koneksi database
        $pdo = new PDO("sqlite:$database","","",array(
            PDO::ATTR_PERSISTENT => true
        ));
        // set error mode
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        // tampilkan kesalahan jika koneksi gagal
        echo "Koneksi Database Gagal! : ".$e->getMessage();
    }
?>