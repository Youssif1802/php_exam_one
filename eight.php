<?php
$c_month = date('m');
for ($i = 1; $i < $c_month; $i++) {
    $month_name = mktime(0, 0, 0, $i, 1, date('Y'));
    echo "$i\t".date('F',  $month_name)."<br>";
}
