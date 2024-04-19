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
            $_SESSION['hak_akses'] = $aksi['hak_akses'];
            if ($_SESSION['hak_akses']=='Siswa') {
                ?>
                <script type="text/javascript">
                    alert('Anda Berhasil Login Sebagai Siswa');
                    setTimeout("location.href='../Views/Home_Siswa.php'", 1000);
                </script>
                <?php
            } elseif ($_SESSION['hak_akses']=='Guru') {
                ?>
                <script type="text/javascript">
                    alert('Anda Berhasil Login Sebagai Guru');
                    setTimeout("location.href='../Views/Home_Guru.php'", 1000);
                </script>
                <?php
            }
        } else {
            ?>
            <script type="text/javascript">
                alert('Username dan Password Salah');
                setTimeout("location.href='../login.php'", 1000);
            </script>
            <?php
        }
    }

    if (isset($_GET['aksi'])=='logout') {
        session_destroy();
        ?>
        <script type="text/javascript">
            alert('Anda telah keluar dari system');
            setTimeout("location.href='../login.php'", 1000);
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
                setTimeout("location.href='../login.php'", 1000);
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