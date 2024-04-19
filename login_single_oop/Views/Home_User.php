<?Php
    SESSION_START();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda User</title>
</head>
<body>
    <h1>Selamat Datang di Beranda User<br>User Anda : <?php echo $_SESSION['username']; ?></h1>
    <p><a href="../Routes/R_Login.php?aksi=logout">logout</a></p>
</body>
</html>