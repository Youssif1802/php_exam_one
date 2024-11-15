<?php
for ($i = 1; $i < 6; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "*\t";
    }
    echo '<br>';
}
for ($i = 5; $i > 1; $i--) {
    for ($j = 0; $j < $i; $j++) {
        echo "*\t\t";
    }
    echo '<br>';
}

echo '<hr>';

$row_s = 3;
$i = 1;

while ($i <= $row_s) {
    $stars = 2 * $i - 1;
    for ($j = 1; $j <= $stars; $j++) {
        echo "*\t";
    }
    echo '<br>';
    $i++;
}

$down_rwo = 0;
$x = 2;
while ($x > $down_rwo) {
    $down_star = 2 * $x - 1;
    for ($v = 1; $v <= $down_star; $v++) {
        echo "*\t";
    }
    echo '<br>';
    $x--;
}

echo '<hr>';

$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $rows - $i; $j++) {
        echo ' ';
    }

    for ($k = 1; $k <= $i; $k++) {
        echo '*';
        if ($k != $i) {
            echo ' ';
        }
    }

    echo '<br>';
}

for ($i = $rows - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= $rows - $i; $j++) {
        echo ' ';
    }

    for ($k = 1; $k <= $i; $k++) {
        echo '*';
        if ($k != $i) {
            echo ' ';
        }
    }

    echo '<br>';
}
