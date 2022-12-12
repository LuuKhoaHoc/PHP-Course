<div class="card">
    <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Thể loại</th>
                <th>Giá</th>
                <th>Trạng thái</th>
                <th>Nổi bật</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $products = get_all_product($conn);
            foreach ($products as $product) {
                ?>
                <tr>
                    <td>
                        <img width="80px" src="../public/upload/<?=$product["image"]?>"  onError="this.onerror=null;this.src='../public/images/no-image.jpg';" />
                    </td>
                    <td><?= $product["name"] ?></td>
                    <td><?= $product["cname"] ?></td>
                    <td><?= number_format($product["price"], 0, "", ".") ?></td>
                    <td><?php
                        if ($product["status"] == 1) {
                            echo "<div class='badge badge-primary'>Hiển thị</div>";
                        } else {
                            echo "<div class='badge badge-secondary'>Không hiện</div>";
                        } ?></td>
                    <td><?php
                        if ($product["featured"] == 1) {
                            echo "<div class='badge badge-primary'>Nổi bật</div>";
                        } else {
                            echo "<div class='badge badge-secondary'>Không nổi bật</div>";
                        } ?></td>
                    <td><a onclick="return checkDelete('Bạn có chắc chắn muốn xóa sản phẩm này không?')" href="index.php?module=product&action=delete&id=<?=$product["id"]?>">Xóa</a></td>
                    <td><a href="index.php?module=product&action=edit&id=<?=$product["id"]?>">Sửa</a></td>
                </tr>
                <?php
            } ?>
            </tbody>
            <tfoot>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Thể loại</th>
                <th>Giá</th>
                <th>Trạng thái</th>
                <th>Nổi bật</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->