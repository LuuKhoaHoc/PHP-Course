<?php

$errors          = array();
$parent_category = get_all_category($conn);

if (isset($_POST["create"])) {
    if (empty($_POST["name"])) {
        $errors[] = "Vui lòng nhập tên thể loại";
    }

    if (empty($errors)) {
        $data = array(
            'name'   => $_POST["name"],
            'parent' => 0,
        );

        if (check_category_exist($conn, $_POST["name"])) {
            create_category($conn, $data);
        } else {
            $errors[] = "Tên thể loại này đã tồn tại rồi";
        }
    }
}
?>
<?php
if ( ! empty($errors)) { ?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">
            ×
        </button>
        <h5><i class="icon fas fa-ban"></i> Thông báo lỗi!</h5>
        <ul>
            <?php
            foreach ($errors as $error) { ?>
                <li><?= $error ?></li>
                <?php
            } ?>
        </ul>
    </div>
    <?php
}
?>
<!--Thông báo thêm thành công-->
<?php
if (empty($errors) && isset($_POST["create"])) { ?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">×
        </button>
        <h5><i class="icon fas fa-check"></i>Thông báo!</h5>
        Thêm thể loại thành công.
    </div>
    <?php
} ?>

<form action="" method="post">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Thêm thể loại</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Thể loại cha</label>
                <select class="form-control">
                    <option value="0">-----ROOT-----</option>
                    <?php
                    foreach ($parent_category as $key => $item) {
                        if ($item["parent"] == 0) {
                            echo "<option value=".$item["id"].">".$item["name"]
                                ."</option>";
                            unset($parent_category[$key]);

                            foreach ($parent_category as $key_lv2 => $item_lv2)
                            {
                                if ($item_lv2["parent"] == $item["id"]) {
                                    echo "<option value=".$item_lv2["id"]
                                        .">---| ".$item_lv2["name"]
                                        ."</option>";
                                    unset($parent_category[$key_lv2]);

                                    foreach (
                                        $parent_category as $key_lv3 =>
                                        $item_lv3
                                    ) {
                                        if ($item_lv3["parent"]
                                            == $item_lv2["id"]
                                        ) {
                                            echo "<option value="
                                                .$item_lv3["id"]
                                                .">---|---| ".$item_lv3["name"]
                                                ."</option>";
                                            unset($parent_category[$key_lv3]);
                                        }

                                    }
                                }

                            }
                        }
                    }

                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tên thể loại</label>
                <input type="text" class="form-control" name="name"
                       placeholder="Vui lòng nhập tên thể loại">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" name="create" class="btn btn-info">Thêm
            </button>
            <button type="reset" class="btn btn-default float-right">Xóa
            </button>
        </div>
    </div>
</form>