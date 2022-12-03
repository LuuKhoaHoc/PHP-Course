<?php
include 'config.php';
include 'connect.php'
?>


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
if (isset($_GET["p"])) {
   $p = $_GET["p"];
   switch ($p) {
       case "danh-sach":
           include "modules/hocsinh/index.php";
           break;
       case "them":
           include "modules/hocsinh/create.php";
           break;
       case "xoa":
           include "modules/hocsinh/delete.php";
           break;
       case "sua":
           include "modules/hocsinh/edit.php";
           break;
       default:
           echo "Trang chủ";
   }

}


?>

</body>
</html>
