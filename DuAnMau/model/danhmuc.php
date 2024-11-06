<?php 
function insert_danhmuc($tenloai){
    $sql = "insert into danhmucsanpham(name) values('$tenloai')";
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql = "delete from danhmucsanpham where id = ".$id ;
    pdo_query($sql);
}
function loadall_danhmuc(){
    $sql = "select * from danhmucsanpham order by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id){
    $sql= "select * from danhmucsanpham where id =".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id,$tenloai){
    $sql = "UPDATE danhmucsanpham SET name='" . $tenloai . "' WHERE id=" . $id;
    pdo_execute($sql);
}
?>