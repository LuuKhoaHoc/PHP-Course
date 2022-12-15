<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách thành viên</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>STT</th>
                <th>Email</th>
                <th>Quyền hạn</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $users = get_all_user($conn);
            $stt   = 0;
            foreach ($users as $user) {
                $stt++;
                ?>
                <tr>
                    <td><?= $stt ?></td>
                    <td><?= $user["email"] ?></td>
                    <td>
                        <?php
                        if($user["id"] == 1) {
                            echo "<strong><span class='text-red'>SuperAdmin</span></strong>";
                        } else if ($user["level"] == 1) {
                        echo "<span class='text-red'>Admin</span>";
                        } else {
                            echo "<span>Member</span>";
                        } ?>
                    </td>
                    <td>
                        <a onclick="return checkDelete('Bạn có chắc chắn muốn xóa thành viên này không?')"
                           href="index.php?module=user&action=delete&id=<?= $user["id"] ?>">Xóa</a>
                    </td>
                    <td>
                        <a href="index.php?module=user&action=edit&id=<?= $user["id"] ?>">Sửa</a>
                    </td>
                </tr>
                <?php
            } ?>
            </tbody>
            <tfoot>
            <tr>
                <th>STT</th>
                <th>Email</th>
                <th>Quyền hạn</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->