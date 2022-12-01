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
$x = 1;
$y = 10;
if ($x > $y) {
    echo "X không được lớn hơn Y";
} elseif ($y - $x > 20) {
    echo "X và Y không dược phép lớn hơn 20 đơn vị";
} else {
    ?>
    <table border="1px">
        <?php
        for ($i = 1; $i <= 10; $i++) { ?>
            <tr>
                <?php
                for ($j = $x; $j <= $y; $j++) { ?>
                    <td><?= $j ?> x <?= $i ?> = <?= $j * $i ?></td>
                    <?php
                } ?>
            </tr>
            <?php
        } ?>
    </table>
<?php
} ?>
</body>
</html>