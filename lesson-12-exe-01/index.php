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
$n =100;
for ($i = 1 ; $i <= $n ; $i++) {
    if ($i != 8 && $i != 35 && $i !=74 && $i != 86 ) {
        echo $i;
        if ($i != $n) {
            echo ", ";
        }
    }
}
?>
</body>
</html>