<?Php
    SESSION_START();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Siswa</title>
</head>
<body>
<h1>Selamat Datang di Beranda Siswa</h1>
    <p>User Anda : <?php echo $_SESSION['username']; ?></p>
    <p>Hak Akses : <?php echo $_SESSION['hak_akses']; ?></p>
    <p><a href="../Routes/R_Login.php?aksi=logout">logout</a></p>
</body>
</html>