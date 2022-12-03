<?php

$errors = array();

if (isset($_POST["send"])) {

    if (empty($_POST["name"])) {
        $errors[] = "Please enter name";
    }
    if (empty($_POST["age"])) {
        $errors[] = "Please enter age";
    }
    if (empty($_POST["address"])) {
        $errors[] = "Please enter address";
    }
    if (empty($_POST["gender"])) {
        $errors[] = "Please choose gender";
    }




    if (empty($errors)) {
        $name = $_POST["name"];
        $age     = $_POST["age"];
        $phone   = $_POST["phone"];
        $address = $_POST["address"];
        $gender  = $_POST["gender"];
        $image   = $_FILES["image"]["name"];
        $stmt
            = $conn->prepare("INSERT INTO hocsinh (name,age,gender,phone,address,image) VALUES (:name,:age,:gender,:phone,:address,:image)");
        $stmt->bindParam(":name", $name, PDO::PARAM_STR);
        $stmt->bindParam(":age", $age, PDO::PARAM_INT);
        $stmt->bindParam(":gender", $gender, PDO::PARAM_INT);
        $stmt->bindParam(":phone", $phone, PDO::PARAM_STR);
        $stmt->bindParam(":address", $address, PDO::PARAM_STR);
        $stmt->bindParam(":image", $image, PDO::PARAM_STR);
        $stmt->execute();
        echo "Thêm thành công";
    }
}
if ( ! empty($errors)) {
    foreach ($errors as $error) {
        echo "<li>".$error."</li>";
    }
}

?>

<form action="" method="post" enctype="multipart/form-data">
    <table align="center">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type="text" name="age" id=""></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="phone" id=""></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" id=""></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="gender" id="" value="1">Male
                <input type="radio" name="gender" id="" value="0" checked>Female
            </td>
        </tr>
        <tr>
            <td>Image</td>
            <td><input type="file" name="image" id=""></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="send" value="Send" id="">
            </td>
        </tr>
    </table>
</form>