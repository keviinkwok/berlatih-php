<?php
function pasangan_terbesar($angka)
{
    $banding = strval($angka);
    $loop = strlen($angka) - 1;
    $tampung = $banding[0];
    $hasil = 0;
    for ($i = 0; $i < $loop; $i++) {
        if ($tampung == $banding[($i + 1)]) {
            $tampung = $tampung;
            if ($hasil == 0) {
                $hasil = $tampung . $banding[($i + 1)];
            }
        } else if ($tampung > $banding[($i + 1)]) {
            $tampung = $tampung;
            if ($hasil == 0) {
                $hasil = $tampung . $banding[($i + 1)];
            }
        } else if ($tampung < $banding[($i + 1)]) {
            $tampung = $banding[($i + 1)];
            $hasil = 0;
        } 
    }
    echo "Angka : " . $angka;
    echo "<br> Hasil : " . $hasil . "<br><br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99
