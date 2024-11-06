<div class="row">
    <div class="row formtitle"><a href="#">Danh sách loại hàng hoá</a></div>
    <div class="row formcontent">
        <div class="row">
            <table>
                <tr>
                    <th></th>
                    <th>Mã loại</th>
                    <th>Tên loại</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $suadm = "index.php?act=suadm&id=" . $id;
                    $xoadm = "index.php?act=xoadm&id=" . $id;

                    echo '<tr>
                     <td><input type="checkbox"></td>
                    <td>' . $id . '</td>
                    <td>' . $name . '</td>
                    <td>
                    <a href="' . $suadm . '"><input type="button" value="Sửa"></a>  
                    <a href="' . $xoadm . '" onclick="return confirm(\'Bạn có chắc chắn muốn xoá không?\')"><input type="button" value="Xoá"></a>
                    </td>
                </tr>';
                }
                ?>
            </table>
        </div>
        <form action="" method="post">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xoá các mục đã chọn">
            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
        </form>
    </div>
</div>