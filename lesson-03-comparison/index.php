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
$a1 = 6;
$b1 = 6;
$c1 = ($a1 == $b1);
var_dump($c1);
?>
<hr>
<?php
$a2 = 6;
$b2 = 7;
$c2 = ($a2 != $b2);
var_dump($c2);
?>
<hr>
<?php
$a3 = 6;
$b3 = 5;
$c3 = ($a3 !== $b3);
var_dump($c3);
?>
<hr>
<?php
$a4 = 6;
$b4 = 6;
$c4 = ($a4 <= $b4);
var_dump($c4);
?>
</body>
</html>
