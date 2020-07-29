<?php
function tentukan_deret_aritmatika($arr)
{   
    
    $pola = $arr[1] - $arr[0];
    $banding = [];
    $banding[0] = $arr[0];
    for ($i = 1; $i <= sizeof($arr) - 1; $i++) {
        $banding[] = $arr[$i-1] + $pola;
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
echo "DERET ARTIMATIKA <br><br>";
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false

?>