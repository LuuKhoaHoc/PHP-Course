<?php

if ( ! isset($_GET["id"])) {
    header("location: index.php?module=category&action=index");
    exit();
} else {
    $id = $_GET["id"];

    if (check_category_id($conn, $id) == false) {
        header("location: index.php?module=category&action=index");
        exit();
    }

    if (check_category_child($conn, $id) == false) {
        echo '<script>
                alert("Bạn không được phép xóa thể loại này vì thể loại này tồn tại dữ liệu con");
                window.location.href="index.php?module=category&action=index";
                </script>';
        exit();
    } else {
        delete_category($conn, $id);
        header("location: index.php?module=category&action=index");
        exit();
    }
}