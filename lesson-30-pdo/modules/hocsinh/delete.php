<?php

if ( ! isset($_GET["id"])) {
    header("location: index.php?p=");
    exit();
} else {
    $id = $_GET["id"];

    $stmt = $conn->prepare("DELETE FROM hocsinh WHERE id=:id");
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    header("location: index.php?p=danh-sach");
    exit();
}