<?php

function hello($name, $school = "SUM")
{
    echo "Chào $name đến với $school <br>";
}

hello("Học", "SUM Academy");
hello("Phong");
hello("Hồ", 123);

echo "<hr>";

function phepcong($a, $b)
{
    $c = $a + $b;

    return $c;

}

$math = phepcong(5, 8);
echo $math;

echo "<hr>";

$so1 = 10;
$so2 = 25;

function tru()
{
    global $so1, $so2; // Tốn tài nguyên không khuyến khích xài
    $hieu = $so2 - $so1;

    return $hieu;
}
echo tru();

echo "<hr>";

if (!function_exists('is_numeric')) {
    function is_numeric($a)
    {
        echo $a;
    }
}
echo is_numeric(123);

echo "<hr>";

function thamtri ($a) {
    $a += 5;
    return $a;
}

$giatri = 5;
thamtri($giatri);
echo $giatri;

echo "<hr>";

function thamchieu (&$a) {
    $a += 5;
    return $a;
}

$giatri = 5;
thamchieu($giatri);
echo "Tham chiếu: ". $giatri;