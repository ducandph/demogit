<?php 

function ktra_tk($tai_khoan,$matkhau){
    $sql = "SELECT * FROM `db_taikhoan` WHERE ten_tk = '".$tai_khoan."' AND matkhau = '".$matkhau."'";  
    $taikhoan = pdo_query_one($sql); 
    return $taikhoan;
}
function dangxuat(){
    if (isset($_SESSION['user'])) {
        session_destroy();
        session_unset();
    }
}
function get_all_tk(){
    $sql = "SELECT * from db_taikhoan order by ma_tk desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
function delete_taikhoan($id)
{
    $sql = "DELETE from db_taikhoan where ma_tk=" . $id;
    pdo_execute($sql);
}

?>