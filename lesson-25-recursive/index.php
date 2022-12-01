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
include 'data_dequy.php';

/*
foreach ($data as $key01 => $value01) {
    if ($value01["parent"] == 0) {
        echo "<div>".$value01["name"]."</div>";
        unset($data[$key01]);

        foreach ($data as $key02 => $value02) {
            if ($value02["parent"] == $value01["id"]) {
                echo "<div>---|".$value02["name"]."</div>";
                unset($data[$key02]);

                foreach ($data as $key03 => $value03) {
                    if ($value03["parent"] == $value02["id"]) {
                        echo "<div>---|---| ".$value03["name"]."</div>";
                        unset($data[$key03]);
                    }
                }
            }
        }
    }
} */

function dequy($data, $parent = 0,$str = "")
{
    foreach ($data as $key => $value) {
        if ($value["parent"] == $parent) {
            echo "<div>".$str.$value["name"]."</div>";
            unset($data[$key]);

            dequy($data, $value["id"],$str."---| ");
        }
    }
}
dequy($data);

?>


</body>
</html>