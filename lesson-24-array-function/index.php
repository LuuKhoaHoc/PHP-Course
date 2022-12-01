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
$mang = array("c1" =>"Cơm","c2" =>"Cháo","c3" =>"Bún","c4" =>"Phở");
$so = array(5,6,7,3);
?>
<?php
echo "In mảng";
echo "<pre>";
print_r($mang);
echo "</pre>";
?>
<hr>
<?php
echo "Tổng số phần tử trong mảng : " . count($mang);
?>

<hr>

<?php
echo "Trả giá trị mảng dưới dạng tuần tự: <br>";
$array_value = array_values($mang);
echo "<pre>";
print_r($array_value);
echo "</pre>";
?>

<hr>

<?php
echo "Trả khóa mảng dưới dạng tuần tự: <br>";
$array_key = array_keys($mang);
echo "<pre>";
print_r($array_key);
echo "</pre>";
?>

<hr>

<?php
echo "Thêm 1 hoặc nhiều phần tử vào đầu mảng: <br>";
array_unshift($mang,"Khô","Tôm");
echo "<pre>";
print_r($mang);
echo "</pre>";
?>

<hr>

<?php
echo "Thêm 1 hoặc nhiều phần tử vào cuối mảng: <br>";
array_push($mang,"Ổi","Xoài");
echo "<pre>";
print_r($mang);
echo "</pre>";
?>

<hr>

<?php
echo "Thêm 1 phần tử vào cuối mảng: <br>";
$mang["k3"] = "Táo";
echo "<pre>";
print_r($mang);
echo "</pre>";
?>

<hr>

<?php
echo "Xóa 1 phần tử vào đầu mảng: <br>";
array_shift($mang);
echo "<pre>";
print_r($mang);
echo "</pre>";
?>

<hr>

<?php
echo "Xóa 1 phần tử vào cuối mảng: <br>";
array_pop($mang);
echo "<pre>";
print_r($mang);
echo "</pre>";
?>

<hr>

<?php
echo "Xóa 1 phần tử ở vị trí bất kỳ: <br>";
unset($mang["c3"]);
echo "<pre>";
print_r($mang);
echo "</pre>";
?>

<hr>

<?php
echo "Đảo ngược mảng: <br>";
$daomang = array_reverse($mang);
echo "<pre>";
print_r($daomang);
echo "</pre>";
?>

<hr>

<?php
echo "Tổng phần tử trong mảng: <br>" . array_sum($so) . "<br>";
?>

<?php
echo "Phần tử nhỏ nhất: <br>" . min($so) . "<br>";
?>

<?php
echo "Phần tử lớn nhất: <br>" . max($so) . "<br>";
?>


</body>
</html>
