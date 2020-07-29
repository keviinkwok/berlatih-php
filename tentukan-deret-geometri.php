<?php
function tentukan_deret_geometri($arr)
{   
    
    $pola = $arr[1] / $arr[0];
    $banding = [];
    $banding[0] = $arr[0];
    for ($i = 1; $i <= sizeof($arr) - 1; $i++) {
        $banding[] = $arr[$i-1] * $pola;
    }

    if (array_diff($banding, $arr)) {
        print_r($arr); echo " <b>False</b><br>"; 

    } else {
        print_r($arr); echo " <b>True</b><br>"; 
    }

    // print_r($arr);
    // echo "<br>";
    // print_r($banding);
    // echo "<br>";
}

// TEST CASES
echo "DERET GEOMETRI <br><br>";
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>