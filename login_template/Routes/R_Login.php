<?php
    include "../Controller/C_Login.php";

    $User = new C_login();

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
        $aksi = $User->Login($username, $password);

        //echo $aksi;

        if ($aksi) {
            $_SESSION['username'] = $username; 
            ?>
            <script type="text/javascript">
                alert('Anda Berhasil Login');
                setTimeout("location.href='../Views/Home_User.php'", 1000);
            </script>
            <?php
        } else {
            ?>
            <script type="text/javascript">
                alert('Username dan Password Salah');
                setTimeout("location.href='../index.php'", 1000);
            </script>
            <?php
        }
    }

    if (isset($_GET['aksi'])=='logout') {
        session_destroy();
        ?>
        <script type="text/javascript">
            alert('Anda telah keluar dari system');
            setTimeout("location.href='../index.php'", 1000);
        </script>
        <?php
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['tambah_akun'])) {
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
        $aksi = $User->Tambah_Akun($username, $password);

        //echo $aksi;

        if ($aksi) {
            ?>
            <script type="text/javascript">
                alert('Akun berhasil ditambahkan');
                setTimeout("location.href='../index.php'", 1000);
            </script>
            <?php
        } else {
            ?>
            <script type="text/javascript">
                alert('Akun gagal ditambahkan');
                setTimeout("location.href='../tambah_akun.php'", 1000);
            </script>
            <?php
        }
    }
?>