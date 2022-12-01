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
$monan = array("Cơm", "Bún", "Phở", "Cháo");

echo '<pre>';
print_r($monan);
echo '</pre>';
echo '<br>';

echo "Tổng phần tử trong mảng: ".count($monan)."<br>";

for ($i = 0; $i < count($monan); $i++) {
    echo "Lấy giá trị phần tử thứ $i trong mảng: $monan[$i] <br>";

}
foreach ($monan as $k => $v) {
    echo "Lấy giá trị phần tử thứ $k trong mảng: $v <br>";

}


?>
<hr>

<?php
$xe = ["hd01" => "Wave RSX", "tt" => "Toyota 898", "ymh" => "Serious"];
echo "<pre>";
print_r($xe);
echo "</pre>";

echo "Tổng phần tử trong mảng: ".count($xe)."<br>";

foreach ($xe as $khoa => $giatri) {
    echo "Lấy giá trị phần tử có khóa là $khoa: ".$giatri."<br>";
}

foreach ($xe as $giatri) {
    echo $giatri."<br>";
}
?>
<hr>
<?php
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

echo "<pre>";
print_r($truonghoc);
echo "</pre>";

echo "Tên học sinh lớp 2 có mã 04 : ".$truonghoc["lop2"]["hs04"]["ten"]."<br>";

foreach ($truonghoc as $key_class => $value_class) {
    echo $key_class;
    echo "<br>";

    foreach ($value_class as $key_student => $value_student) {
        echo "<li>";
        echo "Tên: ".$value_student["ten"]."<br>";
        echo "Điện thoại: ".$value_student["phone"]."<br>";
        echo "Email: ".$value_student["email"]."<br>";
        echo "</li>";

    }
    echo "<br>";
}

echo "Họ của học sinh lớp 4 mã số 01: "
    .$truonghoc["lop4"]["hs01"]["hovaten"]["ho"]."<br>";
?>
<hr>
<?php
$sieuthi[0]['c1'] = "Canh";
$sieuthi[0]['c5'] = "Cháo";
$sieuthi[0]['p1'] = "Bún";
$sieuthi[0]['t2'] = "Phở";

$sieuthi[1]['c1'] = "Cá";
$sieuthi[1]['c5'] = "Cua";
$sieuthi[1]['p1'] = "Bò";
$sieuthi[1]['t2'] = "Tôm";

$sieuthi[2]['c1'] = "Cải";
$sieuthi[2]['c5'] = "Bắp";
$sieuthi[2]['p1'] = "Đậu";
$sieuthi[2]['t2'] = "Hành";

echo "<pre>";
print_r($sieuthi);
echo "</pre>";
?>

<hr>

<?php
$data_sieuthi = array(
    0 => array
    (
        "c1" => "Canh",
        "c5" => "Cháo",
        "p1" => "Bún",
        "t2" => "Phở",
    ),

    1 => array
    (
        "c1" => "Cá",
        "c5" => "Cua",
        "p1" => "Bò",
        "t2" => "Tôm",
    ),

    2 => array
    (
        "c1" => "Cải",
        "c5" => "Bắp",
        "p1" => "Đậu",
        "t2" => "Hành",
    ),
);
echo "<pre>";
print_r($data_sieuthi);
echo "</pre>";


?>


</body>
</html>