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
$errors = array();

if (isset($_POST["send"])) {
    if (empty($_POST["username"])) {
        $errors[] = "Please enter username";
    }

    if (empty($_POST["password"])) {
        $errors[] = "Please enter password";
    }
    if (empty($_POST["subject"])) {
        $errors[] = "Please enter subject";
    }
    if ($_POST["city"] == 0) {
        $errors[] = "Please choose city ID";
    }
    if (empty($_FILES["image"]["name"])) {
        $errors[] = "Please choose image";
    }
    if (empty($_POST["note"])) {
        $errors[] = "Please enter note";
    }

    if (empty($errors)) {
        echo "Username: ".$_POST["username"]."<br>";

        echo "Password: ".$_POST["password"]."<br>";

        if ($_POST["gender"] == 0) {
            echo "Gender: "."Female  <br>";
        } else {
            echo "Gender: "."Male  <br>";

        }

        echo "Subjects: ".implode(',', $_POST["subject"])."<br>";

        echo "City ID: ".$_POST["city"]."<br>";

        if ( ! empty($_FILES["image"]["name"])) {
            $pos = strrpos($_FILES["image"]["name"], '.') + 1;
            $ext = substr($_FILES["image"]["name"], $pos);

            if ($ext != "png" && $ext != "jpeg" && $ext != "gif"
                && $ext != "jpg"
            ) {
                echo "Image error!!"."<br>";
            } else {
                echo "Image: ".$_FILES["image"]["name"]."<br>";
            }
        }
        echo "Note: ".$_POST["note"]."<br>";

        move_uploaded_file($_FILES["image"]["tmp_name"],"file/".$_FILES["image"]["name"]);

    }
}
?>

<?php
if ( ! empty($errors)) {
    foreach ($errors as $error) {
        echo "<li>".$error."</li>";
    }
}

?>

<form method="POST" action="" enctype="multipart/form-data">
    <table align="center">
        <tr>
            <td>Username</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="gender" value="0" checked> Female
                <input type="radio" name="gender" value="1"> Male
            </td>
        </tr>
        <tr>
            <td>Subject</td>
            <td>
                <input type="checkbox" name="subject[]" value="php"/>PHP
                <input type="checkbox" name="subject[]" value="ios"/>iOS
                <input type="checkbox" name="subject[]" value="android"/>Android
                <input type="checkbox" name="subject[]" value="python"/>Pyhon
            </td>
        </tr>
        <tr>
            <td>City</td>
            <td>
                <select name="city">
                    <option value="0">Please choose city</option>
                    <option value="hn">Hà Nội</option>
                    <option value="hn">Đà Nẵng</option>
                    <option value="hcm">Hồ Chí Minh</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Image</td>
            <td>
                <input type="file" name="image">
            </td>
        </tr>
        <tr>
            <td>Note</td>
            <td>
                <textarea name="note" cols="30" rows="5"></textarea>
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="send" value="Gửi"></td>
        </tr>
    </table>
</form>


</body>
</html>