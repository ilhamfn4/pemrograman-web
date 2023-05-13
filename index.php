<?php

    $NIP = "121103004";
    $Nama = "Muhamad Ilham Fauzan";
    $GajiPokok = 2000000;
    $Bonus = 500000;

    $Tunjangan = $GajiPokok * 5 / 100;
    $Pajak = $GajiPokok * 10 / 100;

    echo "==================================<br>";
    echo "NIP : " . $NIP . "<br>";
    echo "Nama pegawai : " . $Nama . "<br>";
    echo "==================================<br>";

    echo "Gaji Pokok : Rp. " . $GajiPokok . "<br>";
    echo "Bonus : Rp. " . $Bonus . "<br>";
    echo "Tunjangan : Rp. " . $Tunjangan . "<br>";
    echo "Pajak : Rp. " . $Pajak . "<br>";

    echo "==================================<br>";
    echo "Gaji yang harus dibayarkan : Rp. " . ($GajiPokok + $Bonus + $Tunjangan) - $Pajak;

?>
