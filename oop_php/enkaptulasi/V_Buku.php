<?php
    include "C_Buku.php";

    $komik = new C_Buku();

    $komik->SetBuku('B001', 'Conan', 100);

    echo "No Seri Buku : ".$komik->GetBukuNobuku()."<BR>";
    echo "Nama Buku : ".$komik->GetBukuNmbuku()."<BR>";
    echo "Jumlah Hal Buku : ".$komik->GetBukuHalbuku();
?>