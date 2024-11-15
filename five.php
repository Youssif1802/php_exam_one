<?php
$arr = [2, 4, 3, 1, 6, 4, 7, 6, 18, 5, 9];

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] % 2 == 0) {
        unset($arr[$i]);
    }
}

$arr = array_values($arr);

foreach ($arr as $item) {
    echo $item . "\t";
}
?>
