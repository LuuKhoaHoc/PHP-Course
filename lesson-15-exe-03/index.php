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
$filename = "  khoa HOC lẬP    trinh PHP.xxx.yyy.gif    ";

$filename = trim($filename);
$length   = mb_strlen($filename);
if ($length <= 0) {
    echo "Vui lòng nhập tên file";
} else {
    $filename = mb_strtolower($filename);
    $filename = preg_replace('!\s+!', ' ', $filename);
    $filename = str_replace(' ','-', $filename);
    $pos     = strrpos($filename, ".") +1;
    $ext = substr($filename,$pos);
    if ($ext != "png" && $ext != "jpeg" && $ext != "gif") {
        echo "Không phải file hình";
    } else {
        echo "File hình : " . $filename;
    }
}

?>
</body>
</html>
