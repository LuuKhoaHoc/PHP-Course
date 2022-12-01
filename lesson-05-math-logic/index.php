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
$phephoac = (true OR false);
var_dump($phephoac);
?>
<hr>
<?php
$phepva = (true AND false);
var_dump($phepva);
?>
<hr>
<?php
$phudinh = !(true AND false);
var_dump($phudinh);
?>
<hr>
<?php
$xor = (true xor false);
var_dump($xor);
?>
</body>
</html>
