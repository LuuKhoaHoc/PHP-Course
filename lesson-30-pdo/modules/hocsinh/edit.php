<?php

if ( ! isset($_GET["id"])) {
    header("location: index.php?p=");
    exit();
} else {
    $id       = $_GET["id"];
    $stmt_old = $conn->prepare("SELECT * FROM hocsinh WHERE id = :id");
    $stmt_old->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt_old->execute();
    $user = $stmt_old->fetch(PDO::FETCH_ASSOC);

    if (isset($_POST["send"])) {
        $name    = $_POST["name"];
        $age     = $_POST["age"];
        $phone   = $_POST["phone"];
        $address = $_POST["address"];
        $gender  = $_POST["gender"];
        $image   = $_FILES["image"]["name"];

        $stmt
            = $conn->prepare("UPDATE hocsinh SET name=:name, age=:age, phone=:phone, address=:address, gender=:gender, image=:image WHERE id=:id");
        $stmt->bindParam(":name", $name, PDO::PARAM_STR);
        $stmt->bindParam(":age", $age, PDO::PARAM_INT);
        $stmt->bindParam(":phone", $phone, PDO::PARAM_STR);
        $stmt->bindParam(":address", $address, PDO::PARAM_STR);
        $stmt->bindParam(":gender", $gender, PDO::PARAM_INT);
        $stmt->bindParam(":image", $image, PDO::PARAM_STR);
        $stmt->bindParam("id",$id,PDO::PARAM_INT);
        $stmt->execute();

        header("location:index.php?p=danh-sach");
    }
    ?>


    <form action="" method="post" enctype="multipart/form-data">
        <table align="center">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?= $user["name"] ?>"
                           id=""></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="age" value="<?= $user["age"] ?>"
                           id=""></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone"
                           value="<?= $user["phone"] ?>" id=""></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address"
                           value="<?= $user["address"] ?>" id=""></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" id="" value="1"
                        <?php
                        if ($user["gender"] == 1) {
                            echo "checked";
                        }
                        ?>
                    >Male

                    <input type="radio" name="gender" id="" value="0"
                        <?php
                        if ($user["gender"] == 0) {
                            echo "checked";
                        }
                        ?>
                    >Female
                </td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="file" name="image"
                           value="<?= $user["image"] ?>" id=""></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="send" value="Send" id="">
                </td>
            </tr>
        </table>
    </form>
    <?php
} ?>