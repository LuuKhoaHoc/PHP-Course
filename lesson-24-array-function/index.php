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
unset($mang["1"]);
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

<hr>

<?php
echo "Kiểm tra giá trị tồn tại trong mảng: </br>";
$check = in_array("bánh bò",$mang);
var_dump($check);
?>

<hr>

<?php
echo "Gộp mảng: <br>";
$mangmoi = array_merge($mang,$so);
echo "<pre>";
print_r($mangmoi);
echo "</pre>";
?>

<hr>

<?php
echo "Trích mảng: <br>";
$mangtrich = array_slice($mangmoi,2,4);
echo "<pre>";
print_r($mangtrich);
echo "</pre>";
?>

<hr>

<?php
echo "Chuyển mảng thành chuỗi dựa vào ký tự: <br>";
$mangthanhchuoi = implode("|",$mang);
echo $mangthanhchuoi;
?>

<hr>

<?php
echo "Chuyển chuỗi thành mảng: <br>";
$chuoidata = "Khóa học lập trình PHP|Khóa học lập trình Android|Khóa học lập trình IOS";
$chuoithanhmang = explode("|",$chuoidata);
echo "<pre>";
print_r($chuoithanhmang);
echo "</pre>";
?>

<hr>

<?php
echo "Chuyển mảng thành chuỗi (thường dùng trong việc lưu mảng trong database ) <br>";
$truonghoc = [
    "lop1" => [
        "hs01" => [
            "ten"   => "Hoc",
            "phone" => "0123456789",
            "email" => "contact.lkhoc@gmail.com",
        ],
        "hs02" => [
            "ten"   => "Teo",
            "phone" => "0368481562",
            "email" => "teomkasd@gmail.com",
        ],
        "hs03" => [
            "ten"   => "Tu",
            "phone" => "08715548521",
            "email" => "tutimtata@gmail.com",
        ],
    ],
    "lop2" => [
        "hs01" => [
            "ten"   => "Trang",
            "phone" => "0684912453",
            "email" => "trangalal@gmail.com",
        ],
        "hs02" => [
            "ten"   => "Thư",
            "phone" => "0368415405",
            "email" => "thuthuthu@gmail.com",
        ],
        "hs03" => [
            "ten"   => "Trúc",
            "phone" => "0545871524",
            "email" => "truchohe@gmail.com",
        ],
        "hs04" => [
            "ten"   => "Vy",
            "phone" => "0898735051",
            "email" => "vuonglethanhvy@gmail.com",
        ],

    ],
    "lop3" => [
        "hs01" => [
            "ten"   => "Hà",
            "phone" => "0885425548",
            "email" => "huynhthanha@gmail.com",
        ],
        "hs02" => [
            "ten"   => "Hồ",
            "phone" => "0888300779",
            "email" => "Hohungho@gmail.com",
        ],
    ],
    "lop4" => [
        "hs01" => [
            "hovaten" => [
                "ho"     => "Lưu",
                "tendem" => "Khoa",
                "ten"    => "Học",
            ],
            "phone"   => "0885425548",
            "email"   => "huynhthanha@gmail.com",
        ],
        "hs02" => [
            "hovaten" => [
                "ho"     => "Lý",
                "tendem" => "Vĩ",
                "ten"    => "Phong",
            ],
            "phone"   => "0888300779",
            "email"   => "Hohungho@gmail.com",
        ],
    ],
];

$chuoidb = serialize($truonghoc);
echo $chuoidb;

?>

<hr>

<?php
echo "Chuyển trừ chuỗi thành mảng ( thường dùng khi database trả dữ liệu ) <br>" ;
$mangtuserialize = unserialize($chuoidb);
echo "<pre>";
print_r($mangtuserialize);
echo "</pre>";

?>

<hr>

<?php
shuffle($mang);
echo "<pre>";
print_r($mang);
echo "</pre>";
?>

<hr>


<?php
echo  "Tạo mảng dãy số: <br>";
$dayso = range(1,100,5);
echo "<pre>";
print_r($dayso);
echo "</pre>";
?>

<!--<hr>-->
<!---->
<?php
//echo  "Sắp xếp mảng theo value tăng dần: <br>";
//sort($mangmoi);
//echo "<pre>";
//print_r($mangmoi);
//echo "</pre>";
//
//?>
<!---->
<!--<hr>-->
<!---->
<?php
//echo  "Sắp xếp mảng theo value giảm dần: <br>";
//rsort($mangmoi);
//echo "<pre>";
//print_r($mangmoi);
//echo "</pre>";
//
//?>

<hr>

<?php
echo  "Sắp xếp mảng theo key tăng dần: <br>";
ksort($mangmoi);
echo "<pre>";
print_r($mangmoi);
echo "</pre>";

?>

<hr>

<?php
echo  "Sắp xếp mảng theo key giảm dần: <br>";
krsort($mangmoi);
echo "<pre>";
print_r($mangmoi);
echo "</pre>";

?>





</body>
</html>
