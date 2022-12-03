<?php

$stmt = $conn->prepare("SELECT * FROM hocsinh ORDER BY id DESC");
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>


<table border="1px" align="center">
    <tr>
        <td>Image</td>
        <td>Name</td>
        <td>Phone</td>
        <td>Gender</td>
        <td><a href="">Delete</a></td>
        <td><a href="">Edit</a></td>
    </tr>
    <?php
    foreach ($data as $item) { ?>
        <tr>
            <td><?= $item["image"] ?></td>
            <td><?= $item["name"] ?></td>
            <td><?= $item["phone"] ?></td>
            <td><?= $item["gender"] == 1 ? "Male" : "Female" ?></td>
            <td><a href="index.php?p=xoa&id=<?= $item["id"] ?>">Delete</a></td>
            <td><a href="index.php?p=sua&id=<?= $item["id"] ?>">Edit</a></td>
        </tr>
    <?php
    } ?>
</table>