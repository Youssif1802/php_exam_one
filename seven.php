<?php
$make_date = mktime(0, 0, 0, date('m') + 1, date('d'), date('Y'));
echo date('Y-m-d', $make_date);
