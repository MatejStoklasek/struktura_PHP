<?php
/*
//Funkce pro vypis Hello World!
function helloWorld()
{
    echo "Hello World!";
}
helloWorld();

echo "<br>";

//Funkce pro sčítání,
function sum2(int $a, float $b)
{
    echo "Součet je: " . ($a + $b);
}
sum2(1,2.5);

echo "<br>";
*/
$array = [0,1,2,3,4,5];

print_r($array);
echo "<br>";
echo "počet prvků: " . count($array);
function sum(array $nums): int
    /**
     * Sum numbers in an array.
     *
     * @param int[] $nums
     * @return int
     */
{
    if (empty($nums)) {
        return 0;
    }

    $sum = $nums[0];

    for ($i = 1; $i < count($nums); $i++) {
        $sum += $nums[$i];
    }
    return $sum;
}

echo "<br>" . sum($array);