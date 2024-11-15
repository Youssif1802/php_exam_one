<?php
$array = [10, 30, 20];
// -------------------------- using ASC sort
for ($j = 1; $j < count($array); $j++) {
    for ($i = 0; $i < count($array) - $j; $i++) {
        if ($array[$i + 1] < $array[$i]) {
            $swap = $array[$i];
            $array[$i] = $array[$i + 1];
            $array[$i + 1] = $swap;
        }
    }
}

echo 'the max number at the array is ' . $array[count($array) - 1];
