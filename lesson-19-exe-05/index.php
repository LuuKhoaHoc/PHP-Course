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
$hientai    = strtotime('now');
$dangbai    = mktime(8, 30, 0, 12, 1, 2022);
$khoangcach = $hientai - $dangbai;

if ($khoangcach > 0) {
    echo "Thời gian hiện tại: ".date('h:i:s - d/m/Y', $hientai);
    echo "<br>";
    echo "Thời gian đăng bài: ".date('h:i:s - d/m/Y', $dangbai);
    echo "<br>";
    echo "Khoảng thời gian từ lúc đăng bài đến hiện tại: ".$khoangcach;

    echo "<hr>";
    $giay = 1;
    $phut = 60 * $giay;
    $gio  = 60 * $phut;
    $ngay = $gio * 24;

    $xhtml = null;
    if ($khoangcach < $phut) {
        $xhtml = $khoangcach." giây trước";
    } elseif ($khoangcach >= $phut && $khoangcach <= $gio) {
        $xhtml = round($khoangcach / $phut)." phút trước";
    } elseif ($khoangcach >= $gio && $khoangcach < $ngay) {
        $xhtml = round($khoangcach / $gio)." giờ trước";
    } elseif ($khoangcach >= $ngay && $khoangcach <= (7 * $ngay)) {
        $xhtml = round($khoangcach / $ngay)." ngày trước";
    } else {
        $xhtml = date('d', $dangbai)." tháng ".date('m', $dangbai).", "
            .date('Y', $dangbai);
    }
    echo "Khoảng cách nhận được : ".$xhtml;

} else {
    echo "Thời gian đăng bài phải nhỏ hơn thời gian hiện tại";
}


?>
</body>
</html>
