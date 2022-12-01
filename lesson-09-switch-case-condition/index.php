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
$diem = 8;

switch ($diem) {
    case "1":
        echo "Bạn có 1 điểm";
        break;
    case 2:
        echo "Bạn có 2 điểm";
        break;
    case 3:
        echo "Bạn có 3 điểm";
        break;
    case 4:
        echo "Bạn có 4 điểm";
        break;
    case 5:
        echo "Bạn có 5 điểm";
        break;
    case 6:
        echo "Bạn có 6 điểm";
        break;
    case 7:
        echo "Bạn có 7 điểm";
        break;
    default:
        echo "Lớn hơn 7 điểm";
}
 echo "<br>";
if ($diem == 1) {
    echo "Bạn có 1 điểm";
} elseif ($diem == 2) {
    echo "Bạn có 2 điểm";
} elseif ($diem == 3) {
    echo "Bạn có 3 điểm";
} elseif ($diem == 4) {
    echo "Bạn có 4 điểm";
} else {
    echo "Bạn có 7 điểm";
}
?>
</body>
</html>