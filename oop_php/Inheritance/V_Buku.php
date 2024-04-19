<?php
    include "C_Komik.php";

    $komik = new C_Komik();

    $komik->SetBuku('B001', 'Conan', 100);

    echo "No Seri Buku : ".$komik->GetBukuNobuku()."<BR>";
    echo "Nama Buku : ".$komik->GetBukuNmbuku()."<BR>";
    echo "Jumlah Hal Buku : ".$komik->GetBukuHalbuku();

    echo $komik->CetakKomik();
?>