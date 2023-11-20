<?php 
function loadone_donhang($ma_don){
    $sql = "select * from db_donhang where ma_don = ".$ma_don;
    $result = pdo_query_one($sql);
    return $result;
}

// list
function get_ds_donhang(){
    // Thực hiện truy vấn cơ sở dữ liệu để lấy danh sách đơn hàng
    $sql = "SELECT * FROM db_donhang";
    $list_donhang = pdo_query($sql); // Sử dụng pdo_query hoặc phương thức truy vấn cơ sở dữ liệu 

    return $list_donhang;
}
// 

function update_donhang($ma_don, $ngaydathang, $tongtien, $trang_thai, $ma_kh, $diachi, $pttt){
    $sql = "UPDATE `db_donhang` 
            SET `ngaydathang`='$ngaydathang', `tongtien`='$tongtien', `trang_thai`='$trang_thai', 
            `ma_kh`='$ma_kh', `diachi`='$diachi', `pttt`='$pttt' 
            WHERE `ma_don`='$ma_don'";
    pdo_execute($sql);
}
function delete_donhang($ma_don){
    $sql = "DELETE FROM `db_donhang` WHERE `ma_don`='$ma_don'";
    pdo_execute($sql);
}




?>