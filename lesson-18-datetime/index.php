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
$timezone = date_default_timezone_get();
echo "Múi giờ Server hiện tại : " . $timezone;
?>
<hr>
<?php
$date = getdate();
echo "<pre>";
print_r($date);
echo "</pre>";

$xhtml = '';
$xhtml .= 'Ngày ' . $date["mday"] . " Tháng " . $date["mon"] . " Năm " . $date["year"];
$xhtml .=  " ". $date['hours'] . ' Giờ '  . $date["minutes"] .  " Phút " . $date['seconds']  . " Giây ";
echo $xhtml;
?>

<hr>

<?php
echo  time();
?>
<hr>
<?php
echo date('h:i:s - D-d/m/Y');
?>
<hr>
<?php
$totime = strtotime("now");
echo date('h:i:s - d/m/Y', $totime);
?>
<hr>
<?php
$mk = mktime(3,5,12, 11,date("d") +4,2022);
echo date('h:i:s - d/m/Y', $mk);


?>

</body>
</html>