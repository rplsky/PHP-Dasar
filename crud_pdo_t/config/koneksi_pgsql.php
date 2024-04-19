<?php
    // deklarasi parameter koneksi database
    $hostname = "localhost";
    $username = "postgres";
    $password = "rplskr1";
    $port     = "5432";
    $database = "db_perpus";

    try {
        // buat koneksi database
        $pdo = new PDO("pgsql:dbname=$database;host=$hostname", $username, $password);
        // set error mode
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        // tampilkan kesalahan jika koneksi gagal
        echo "Koneksi Database Gagal! : ".$e->getMessage();
    }
?>