<div class="row">
            <div class="row formtitle"><a href="#">Thêm mới loại hàng hoá</a></div>
            <div class="row formcontent">
                <form action="index.php?act=adddm" method="post">
                    <label for="">Mã loại</label><br>
                    <input type="text" name="maloai" disabled><br>
                    <label for="">Tên loại</label><br>
                    <input type="text" name="tenloai"><br>
                    <input type="submit" name="themmoi" value="Thêm mới">
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