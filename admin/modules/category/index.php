<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách thể loại</h3>

    </div>
    <div class="card-body p-0">
        <table class="table">
            <thead>
            <tr>
                <th>Tên thể loại</th>
                <th style="width: 40px">Xóa</th>
                <th style="width: 40px">Sửa</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $data = get_all_category($conn);

            recursiveTable ($data);
            ?>

            </tbody>
        </table>
    </div>
</div>