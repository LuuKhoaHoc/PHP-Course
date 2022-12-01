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

$vietnamese = "Tôi là Lưu Khoa Học và những người bạn";
$english    = "I am Luu Khoa Hoc";

$chieudai_en = strlen($english);
echo "Chiều dài của chuỗi tiếng anh là: $chieudai_en";
echo "<br>";

$chieudai_vi = mb_strlen($vietnamese);
echo "Chiều dài của chuỗi tiếng việt là: $chieudai_vi";
echo "<br>";

?>
<hr>
<?php
$demtu_en = str_word_count($english);
echo "Dếm tổng số từ tiếng anh là: $demtu_en";
?>
<hr>
<?php
$inhoa_en = strtolower($english);
echo "Chuyển in hoa  thành in thường $inhoa_en";
echo "<br>";
$inhoa_vi = mb_strtolower($vietnamese);
echo "Chuyển in hoa thành in thường $inhoa_vi";
?>
<hr>
<?php
$inhoachucaidautien_en = ucfirst("tôi đang học PHP");
echo "Chuyển in thường thành in hoa chữ cái đầu tiên $inhoachucaidautien_en";
?>

<hr>
<?php
$inhoachucaidautien_en = lcfirst("Tôi đang học PHP");
echo "Chuyển in hoa thành in thường chữ cái đầu tiên $inhoachucaidautien_en";
?>
<hr>
<?php
$vitrilandautien_en = strpos($english, "o", 12);
echo "Vị trì xuất hiện lần đầu tiên trong chuỗi $vitrilandautien_en";

echo "<br>";

$vitrilandautien_vi = mb_strpos($vietnamese, "Khoa");
echo "Vị trì xuất hiện lần đầu tiên trong chuỗi $vitrilandautien_vi";
?>
<hr>

<?php
$vitrilancuoicung_en = strrpos($english, "o");
echo "Vị trì xuất hiện lần cuối cùng trong chuỗi $vitrilancuoicung_en";

echo "<br>";

$vitrilancuoicung_vi = mb_strrpos($vietnamese, "o");
echo "Vị trì xuất hiện lần đầu tiên trong chuỗi $vitrilancuoicung_vi";
?>
<hr>
<?php
$timkiemvathaythe = lcfirst(str_replace("Học", "Hà", $vietnamese));
echo "Tìm kiếm và thay thế từ trong 1 chuỗi: $timkiemvathaythe";
?>
<hr>
<?php
$catchuoi_en = substr($english,5,12);
echo "Cắt chuỗi: $catchuoi_en";
echo "<br>";
$catchuoi_vi = mb_substr($vietnamese,7,12);
echo "Cắt chuỗi: $catchuoi_vi";
?>
<hr>
<?php
$chuoinhap = "---------------------------- Học--------------------";
echo "Chiều dài chuỗi nháp: " .mb_strlen($chuoinhap);
echo "<br>";
$chuoixuly = trim($chuoinhap,"-");
echo "Chiều dài chuỗi nháp: " .mb_strlen($chuoixuly) ;
echo "<br>";
echo $chuoixuly;
?>
<hr>
<?php
$lapchuoi = str_repeat($vietnamese."<br>",5);
echo "Lặp chuỗi : $lapchuoi";
?>

<hr>
<?php
$chuoi = 'abcdefghjklmnoqwty123456789';
$random = str_shuffle($chuoi);
echo $random;
?>

<hr>

<?php
$chuoicat = "Bạn đang học khóa học lập trình PHP";
$demtucatduoc = substr_count($chuoicat,"học");
echo "Đếm từ cắt được trong chuỗi : $demtucatduoc";
?>
<hr>
<?php
$gioithieu = "I'm Luu Khoa Hoc";
echo addslashes($gioithieu);
?>
<hr>
<?php
$dauslashes = "I\'m Luu Khoa Hoc";
echo stripslashes($dauslashes);
?>

<hr>
<?php
$script = "<script>alert('Hacked Your Website')</script>";
echo htmlspecialchars($script);
?>
<hr>
<?php
echo '<pre>';
print_r(get_html_translation_table());
echo '</pre>';
?>
<hr>
<?php
$script_encode = '&lt;script&gt;alert(&#039;Hacked Your Website&#039;)&lt;/script&gt;';
//echo html_entity_decode($script_encode);
?>
<hr>
<?php
$entities = htmlentities($vietnamese);
echo "HTML Entities: " . $entities;
?>
<hr>
<?php
$script = "<script>alert('Hacked Your Website')</script>";
echo strip_tags($script);
?>
<hr>
<?php
$pass= 12345;
$passmd5 = md5($pass);
echo "Pass mã hóa MD5 : " .$passmd5 ."<br>";

$passsha1 = sha1($pass);
echo "Pass mã hóa SHA1 : " .$passsha1;
?>
<hr>
<?php
$notepad = "Chào mừng bạn\nHọc đến với SUM .Academy";
$convert =  nl2br($notepad);
echo $convert;

?>
</body>
</html>