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
$name = 'Lưu Khoa Học';
echo $name;
?>

<br>
<?php
$name = 'Hoc Luu';
echo $name;
?>
<br>
<?php
$class  = "Lập trình PHP";
$school = "Sum ACADEMY";

echo "Tôi là Học và tôi đang học ".$class." tại ".$school."<br>";
echo "Tôi là Học và tôi đang học ", $class, " tại ", $school, "<br>";
?>
<br>
<?php
$hoten = 'Lưu Khoa Học';
echo "Xin chào $hoten <br/>";
echo 'Xin chào '.$hoten.' <br>';
?>
<br>
<?php
const CONNECT = "mysql";
echo "Kết nối với cơ sở dữ liệu là ".CONNECT;
?>
<br>
<?php
$phone = '0333';
echo $phone."<br>";
echo gettype($phone)."<br>";
var_dump($phone);

echo "<hr/>";
settype($phone, 'int');
var_dump($phone);

?>

</body>
</html>