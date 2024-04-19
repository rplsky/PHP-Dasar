<?php
    $models = isset($_GET['c']) ? "M_".$_GET['c'] : "M_Siswa";
    $controllers = isset($_GET['c']) ? "C_".$_GET['c'] : "C_Siswa";
    $views = "View";
    $action = isset($_GET['action']) ? $_GET['action'] : 'index';

    include "Config/Database.php";
    include "Config/".$views.".php";
    include "Models/".$models.".php";
    include "Controllers/".$controllers.".php";

    $controllers = new $controllers();

    // Pemanggilan method berdasarkan action yang diinginkan
    if (method_exists($controllers, $action)) {
        $controllers->$action();
    } else {
        echo "Action tidak valid.";
    }
?>