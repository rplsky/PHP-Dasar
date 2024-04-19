<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Tambah Akun</h2>
    <form action="Routes/R_Login.php" method="POST">
        <label>Username:</label>
        <input type="text" name="username" required><br>

        <label>Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" name="tambah_akun" value="Simpan Akun">
    </form>
</body>
</html>