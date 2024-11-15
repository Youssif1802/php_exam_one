<?php
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
// --------------------------------    sorting using Bubble Sort
for ($j = 1; $j < count($array); $j++) {
    for ($i = 0; $i < count($array) - $j; $i++) {
        if ($array[$i + 1] < $array[$i]) {
            $swap = $array[$i];
            $array[$i] = $array[$i + 1];
            $array[$i + 1] = $swap;
        }
    }
}
echo "ASC\t:\t";
foreach ($array as $item) {
    echo $item . "\t";
}
echo "<br>";
for ($j = 1; $j < count($array); $j++) {
    for ($i = 0; $i < count($array) - $j; $i++) {
        if ($array[$i + 1] > $array[$i]) {
            $swap = $array[$i];
            $array[$i] = $array[$i + 1];
            $array[$i + 1] = $swap;
        }
    }
}
echo "DESC\t:\t";
foreach ($array as $item) {
    echo $item . "\t";
}
