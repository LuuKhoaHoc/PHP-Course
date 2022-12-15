<?php

if ( ! isset($_GET["id"])) {
    header("location: index.php?module=product&action=index");
    exit();
} else {
    $errors          = array();
    $id              = $_GET["id"];
    $parent_category = get_all_category($conn, true, $id);

    if (!check_product_id($conn, $id)) {
        header("location: index.php?module=product&action=index");
        exit();
    }

    $product = get_product($conn, $id);


    if (isset($_POST["edit"])) {
        if (empty($_POST["name"])) {
            $errors[] = "Vui lòng nhập tên sản phẩm";
        }
        if (empty($_POST["price"])) {
            $errors[] = "Vui lòng nhập giá sản phẩm";
        }
        if ( ! is_numeric($_POST["price"])) {
            $errors[] = "Giá sản phẩm phải là số";
        }
        if (empty($_POST["intro"])) {
            $errors[] = "Vui lòng nhập tóm tắt sản phẩm";
        }


        if (empty($errors)) {
            $data = array(
                'name'        => $_POST["name"],
                'price'       => $_POST["price"],
                'intro'       => $_POST["intro"],
                'content'     => $_POST["content"],
                'status'      => $_POST["status"],
                'featured'    => $_POST["featured"],
                'category_id' => $_POST["category_id"],
                'id'          => $id,
            );

            if (check_product_exist($conn, $data,true)) {

                if (!empty($_FILES["image"]["name"])) {
                    if ( ! checkExt($_FILES["image"]["name"])) {
                        $errors[] = "Không phải file hình";
                    } else {
                        $file = changeNameFile($_FILES["image"]["name"]);
                        $data["image"] = $file;
                        move_uploaded_file($_FILES["image"]["tmp_name"],
                            '../public/upload/'.$file);
                    }
                } else {
                    $data["image"] = $product["image"];
                }

                edit_product($conn, $data);

                header("location: index.php?module=product");
                exit();
            } else {
                $errors[] = "Tên sản phẩm này đã tồn tại rồi";
            }
        }

    }
    ?>


    <!--Thông báo lỗi -->
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

    <!-- HTML form -->
    <form action="" method="post" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sửa sản phẩm</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Thể loại</label>
                    <select class="form-control" name="category_id">
                        <?php
                        if (isset($_POST["category_id"])) {
                            recursiveOption($parent_category, $_POST["category_id"],3);
                        } else {
                            recursiveOption($parent_category, $product["category_id"],3);
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" class="form-control" name="name"
                           placeholder="Vui lòng nhập tên sản phẩm"
                        <?php
                        if (isset($_POST["name"])) {
                            echo 'value="'.$_POST["name"].'"';
                        } else {
                            echo 'value="'.$product["name"].'"';
                        }

                        ?>
                    >
                </div>
                <div class="form-group">
                    <label>Giá</label>
                    <input type="text" class="form-control" name="price"
                           placeholder="Vui lòng nhập giá sản phẩm"

                        <?php
                        if (isset($_POST["price"])) {
                            echo 'value="'.$_POST["price"].'"';
                        } else {
                            echo 'value="'.$product["price"].'"';
                        }

                        ?>

                    >
                </div>
                <div class="form-group">
                    <label>Tóm tắt</label>
                    <textarea class="form-control" id="intro" name="intro"><?php
                        if (isset($_POST["intro"])) {
                            echo $_POST["intro"];
                        } else {
                            echo $product["intro"];
                        }

                        ?></textarea>
                    <script>
                        var editor = CKEDITOR.replace( 'intro' );
                        CKFinder.setupCKEditor( editor );
                    </script>
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea name="content" id="content" class="form-control"><?php
                        if (isset($_POST["content"])) {
                            echo $_POST["content"];
                        } else {
                            echo $product["content"];
                        }

                        ?></textarea>
                    <script>
                        var editor = CKEDITOR.replace( 'content' );
                        CKFinder.setupCKEditor( editor );
                    </script>
                </div>

                <div class="form-group">
                    <label>Hình ảnh hiện tại</label>
                    <img src="../public/upload/<?= $product["image"] ?>"
                         onError="this.onerror=null;this.src='../public/images/no-image.jpg';"
                         width="100px" class="d-block" alt="No-image">
                </div>

                <div class="form-group">
                    <label>Hình ảnh sản phẩm</label>
                    <div class="custom-file">
                        <input type="file" name="image"
                               class="custom-file-input"
                               id="customFile">
                        <label class="custom-file-label" for="customFile">Choose
                            file</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>Trạng thái</label>
                    <select class="form-control" name="status">
                        <option value="1"<?php
                        if ($product["status"] == 1) {
                            echo "selected";
                        }
                        ?>>Hiển thị
                        </option>
                        <option value="0"<?php
                        if ($product["status"] == 0) {
                            echo "selected";
                        }
                        ?>>Ẩn
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nổi bật</label>
                    <select class="form-control" name="featured">
                        <option value="0"<?php
                        if ($product["featured"] == 0) {
                            echo "selected";
                        }
                        ?>>Ẩn
                        </option>
                        <option value="1"<?php
                        if ($product["featured"] == 1) {
                            echo "selected";
                        }
                        ?>>Hiển thị
                        </option>
                    </select>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" name="edit" class="btn btn-info">Sửa
                </button>
                <button type="reset" class="btn btn-default float-right">Xóa
                </button>
            </div>
        </div>
    </form>
    <?php
} ?>