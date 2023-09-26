<?php
// PERHITUNGAN  

function tambah($a,$b)
{
    $c = $a + $b;
    return $c;
}

echo "10 + 7 =" . tambah(10,7);
echo "<br>";

function kurang($a,$b)
{
    $c = $a + $b;
    return $c;
}

echo "10 + 7 =" . kurang(10,7);
echo "<br>";

function kali($a, $b, $e = 1)
{
    $c = $a * $b * $e;
    $d = $a. "*" . $b . " = " . $c . "<br>";
    return $d;
}

echo kali(5, 5, 10);

function bagi($a, $b)
{
    $c = $a / $b;
    $d = $a. "/" . $b . " = " . $c . "<br>";
    return $d;
}

echo bagi(10, 2);