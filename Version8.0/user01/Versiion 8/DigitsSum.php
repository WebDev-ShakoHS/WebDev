<?php
function sum_of_digits($nums) {
    $digits_sum = 0;
      for ($i = 0; $i < strlen($nums); $i++) {
             $digits_sum += $nums[$i];
               }
      return $digits_sum;
}
echo sum_of_digits("12345")."\n";
echo sum_of_digits("9999")."\n";
?>