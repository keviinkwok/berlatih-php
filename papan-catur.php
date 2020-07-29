<?php

function papan_catur($angka)
{
    $pola = $angka;
    for ($i = 0; $i < $angka; $i++) {
        if ($pola == $angka) {
            for ($u = 0; $u < $pola; $u++) {
                echo "# &nbsp;";
            }
            $pola--;
            echo "<br>";
        } else {
            for ($u = 0; $u < $pola; $u++) {
                echo "&nbsp;# ";
            }
            $pola++;
            echo "<br>";
        }
    }

    echo "<br>";
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/

echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/

?>