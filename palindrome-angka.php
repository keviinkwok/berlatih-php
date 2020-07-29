<?php

function palindrome_angka($angka)
{
  $increment = 1;
  $check = "";
  if ($angka < 10) {
    echo "Angka ".$angka." : ".($angka + 1)."<br>";
  } else {
    $i = 0;
    while ($i < $angka) {
      $check = $angka + $increment;
      if (strrev($check) != $check) {
        $increment++;
      } else {
        break;
      }
      $i++;
    }
    echo "Angka ".$angka." : ".$check."<br>";
  }
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>