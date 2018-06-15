<?php

function sumBigNumbers($num1, $num2)
{
    if (strlen($num1) > strlen($num2)) {
        $tmp = $num1;
        $num1 = $num2;
        $num2 = $tmp;
    }

    $num1 = str_split(strrev($num1));
    $num2 = str_split(strrev($num2));

    $len1 = count($num1);
    $len2 = count($num2);

    $part = 0;

    $result = [];

    foreach (range(0, $len1 - 1) as $index) {
        $sum = (int)$num1[$index] + (int)$num2[$index] + $part;

        $result[] = (int)($sum % 10);
        $part = (int)($sum / 10);
    }

    if ($len1 < $len2) {

        foreach (range($len1, $len2 - 1) as $index) {
            $sum = (int)$num2[$index] + $part;

            $result[] = (int)($sum % 10);
            $part = (int)($sum / 10);
        }
    }

    if ($part > 0) {
        $result[] = $part;
    }

    return strrev(implode('', $result));
}