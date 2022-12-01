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
$content
    = "Các biện pháp xử lý vi phạm đang trong quá trình hoàn thiện, nhưng tốt nhất là các bên liên quan thảo luận và thay đổi thì hơn là phải dùng đến các biện pháp hành chính.";
$content = preg_replace('!\s+!', ' ', $content);
$content = trim($content);
$content = addslashes($content);
$content = strip_tags($content);
$length = mb_strlen($content);


if ($length <= 0) {
    echo "Vui lòng nhập content";
} else {
    $pos = mb_strpos($content,' ', 150);
    $content =  mb_substr($content,0,$pos);
    echo $content . "....";
}
?>

</body>
</html>
