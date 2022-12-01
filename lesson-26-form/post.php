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
if (isset($_POST["send"])) {
    echo $_POST["hoten"]."<br>";
    echo $_POST["matkhau"]."<br>";
    echo $_POST["gender"]."<br>";
}
?>

<form action="" method="post">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="hoten" id=""></td>
        </tr>
        <tr>
            <td>Pass</td>
            <td><input type="password" name="matkhau" id=""></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><input type="radio" name="gender" value="0" checked>Nữ</td>
            <td><input type="radio" name="gender" value="1">Nam</td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="send" value="Gửi" id="">
            </td>
        </tr>
    </table>

</form>

</body>
</html>
