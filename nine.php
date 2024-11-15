<?php
function str_match($word, $match)
{
    if (preg_match("/$match/", $word)) {
        return true;
    } else {
        return false;
    }
}

$word = 'PHP C43 Sun&Wed 6:30PM Online';
$math = 'PHP';

if (str_match($word, $math)) {
    echo "The string contains '$math'.";
} else {
    echo "The string does not contain '$math'.";
}