<?php
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
$sum = 0;
foreach ($array as $item) {
    $sum += $item;
}
echo "AVG\t=\t" . $sum / count($array);
