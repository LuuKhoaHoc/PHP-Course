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
for ($i = 1; $i <= 20; $i += 2) {
    echo $i."<br>";

}
echo "<br>";
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 1) {
        echo $i."<br>";
    }
}

?>

</body>
</html>