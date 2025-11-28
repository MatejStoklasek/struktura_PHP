<?php

/**
 * bubble sort
 *
 * @param array<int> $arr
 * @return array<int>
 */

$arr = [9, 2, 5, 4, 7, 1,400, -1, 0];

function bubbleSort(array $arr): array
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        for ($j = 0; $j < count($arr) - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}
$temp = bubbleSort($arr);
echo implode(",", $temp);


