<?php
    class View {

        public function views($link, $dt = null) {
            include "Views/".$link.".php";
        }
    }
?>