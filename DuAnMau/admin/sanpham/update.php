<?php 
if (isset($dm) && is_array($dm)) { 
    extract($dm);
}
?>
<div class="row">
            <div class="row formtitle"><a href="#">Cập nhật loại hàng hoá</a></div>
            <div class="row formcontent">
                <form action="index.php?act=updatedm" method="post">
                    <label for="">Mã loại</label><br>
                    <input type="text" name="maloai" disabled><br>
                    <label for="">Tên loại</label><br>
                    <input type="text" name="tenloai" value="<?=$name?>"><br>
                    <input type="hidden" name="id" value="<?php if(isset($id) && ($id>0)) echo $id?>">
                    <input type="submit" name="capnhat" value="Cập nhật">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
                </form>
                <?php
                if(isset($thongbao) && ($thongbao!="")){
                    echo $thongbao;
                }
                ?>
            </div>
        </div>
    </div>