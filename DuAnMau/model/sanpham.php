<?php 
function insert_sanpham($tenloai){
    $sql = "insert into sanphamsanpham(name) values('$tenloai')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql = "delete from sanpham where id = ".$id ;
    pdo_query($sql);
}
function loadall_sanpham(){
    $sql = "select * from sanpham order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadone_sanpham($id){
    $sql= "select * from sanpham where id =".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}
function update_sanpham($id,$tenloai){
    $sql = "UPDATE sanpham SET name='" . $tenloai . "' WHERE id=" . $id;
    pdo_execute($sql);
}
?>