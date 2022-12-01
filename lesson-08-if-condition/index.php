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
$diem = 7;
if ($diem > 5) {
    echo "Điểm lớn hơn 5";
}
echo "<hr>";
if ($diem > 5) {
    echo "Điểm lớn hơn 5";
} else {
    echo "Điểm bé hơn 5";
}
echo "<hr>";
if ($diem > 5) {
    echo "Điểm lớn hơn 5";
} elseif ($diem < 5) {
    echo "Điểm bé hơn 5";
} else {
    echo "Điểm bằng 5";
}
echo "<hr>";
if ($diem > 8) { // 8 trở lên
    echo "Ba mua cho xe SH";
} elseif ($diem <=8 && $diem >=6) { //6,7,8
    echo "Ba mua cho xe AB";
} elseif ($diem <=5 && $diem >= 3) { // 3,4,5
    echo "Ba mua cho xe Wave";
} else {// bé hơn 3
    echo "Đi bán vé số";
}
?>
</body>
</html>
