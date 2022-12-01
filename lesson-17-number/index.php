<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$a = 345;
$b = 5.7;
$c = "asd";
?>
<?php
$numberic = is_numeric($b);
var_dump($numberic);
?>
<hr>
<?php
$integer = is_int($a);
var_dump($integer);
?>
<hr>
<?php
$float = is_float($b);
var_dump($float);
?>
<hr>
<?php
$round = round($b);
echo($round);
?>
<hr>
<?php
$ceil = ceil($b);
echo($ceil);
?>
<hr>
<?php
$floor = floor($b);
echo($floor);
?>
<hr>
<?php
$min = min(3, 5, 1, 4);
echo($min);
?>
<hr>
<?php
$max = max(3, 5, 1, 4);
echo($max);
?>
<hr>
<?php
$rand = rand(10, 20);
echo $rand;
?>
<hr>
<?php
$gia = 96300000;
echo number_format($gia, 2,".");

?>
</body>
</html>
