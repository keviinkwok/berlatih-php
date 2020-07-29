<?php
function skor_terbesar($arr)
{

    $max_laravel = 0;
    $name_laravel ='';
    $max_reactnative = 0;
    $name_reactnative ='';
    $max_reactjs = 0;
    $name_reactjs ='';

    $result =  [];
    for ($i = 0; $i < sizeof($arr); $i++) {
        if ($arr[$i]["kelas"] == "Laravel" && $arr[$i]["nilai"] > $max_laravel){
            $max_laravel = $arr[$i]["nilai"];
            $name_laravel = $arr[$i]["nama"];
        }else if ($arr[$i]["kelas"] == "React Native" && $arr[$i]["nilai"] > $max_reactnative){
            $max_reactnative = $arr[$i]["nilai"];
            $name_reactnative = $arr[$i]["nama"];
        }else if ($arr[$i]["kelas"] == "React JS" && $arr[$i]["nilai"] > $max_reactjs){
            $max_reactjs = $arr[$i]["nilai"];
            $name_reactjs = $arr[$i]["nama"];
        }
    }

    $result[0]["nama"] = $name_laravel;
    $result[1]["nama"] = $name_reactnative;
    $result[2]["nama"] = $name_reactjs;
    $result[0]["kelas"] = "Laravel";
    $result[1]["kelas"] = "React Native";
    $result[2]["kelas"] = "React JS";
    $result[0]["nilai"] = $max_laravel;
    $result[1]["nilai"] = $max_reactnative;
    $result[2]["nilai"] = $max_reactjs;
    
    return $result;
}

// TEST CASES
$skor = [
    [
        "nama" => "Bobby",
        "kelas" => "Laravel",
        "nilai" => 78
    ],
    [
        "nama" => "Regi",
        "kelas" => "React Native",
        "nilai" => 86
    ],
    [
        "nama" => "Aghnat",
        "kelas" => "Laravel",
        "nilai" => 90
    ],
    [
        "nama" => "Indra",
        "kelas" => "React JS",
        "nilai" => 85
    ],
    [
        "nama" => "Yoga",
        "kelas" => "React Native",
        "nilai" => 77
    ],
];

echo "<pre>";
print_r(skor_terbesar($skor));
echo "</pre>";
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
