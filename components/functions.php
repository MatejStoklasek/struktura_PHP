<?php

/**
 *
 * @return void
 */
function xTest()
{
    print_r("x");
}

/**
 *
 * @return void
 */
function y()
{
    print_r("y");
}

if (!function_exists('xTest')) {
    function xTest()
    {
        print_r("Ahoj");

    }
}

// xTest();

$arr = [];

// $x = 1;

if (isset($arr[0])) {
    xTest();
}

$reg = '/^ahoj$/i';
$content ="ahoj";

if (preg_match($reg, $content)) {
    echo "je ahoj";
} else {
    echo "není ahoj";
}

echo strip_tags($content, ['span']);