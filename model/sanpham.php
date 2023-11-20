<?php
function get_sp_dm() {
    $sql = "SELECT sp.ma_sp, sp.ten_sp, sp.gia, sp.mota, sp.ngay_tao, sp.trang_thai, sp.ngay_cap_nhat, dm.ten_dm
            FROM db_sanpham AS sp
            JOIN db_danhmuc AS dm ON sp.ma_danhmuc = dm.ma_dm";
    $result = pdo_query($sql);
    return $result;
}
function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by ma_sp desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
// Sản phẩm bán chạy
// function loadall_sanpham_top10(){
//     $sql="select * from sanpham where 1 order by luotxem desc limit 0,10";
//     $listsanpham=pdo_query($sql);
//     return $listsanpham;
// }
function loadall_sanpham($ma_dm=0){
    $sql="SELECT * FROM db_sanpham where trang_thai = 0";
    if($ma_dm>0){
        $sql.=" and ma_danhmuc ='".$ma_dm."'";
    }
    $sql.=" order by ma_danhmuc desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function loadone_sanpham($ma_sp){
    $sql = "select * from db_sanpham where ma_sp = ".$ma_sp;
    $result = pdo_query_one($sql);
    return $result;
}
// Sản phẩm cùng loại
function load_sanpham_cungloai($ma_sp, $ma_dm){
    $sql = "select * from db_sanpham where ma_danhmuc = $ma_dm and ma_sp <> $ma_sp";
    $result = pdo_query($sql);
    return $result;
}
// Thêm sản phẩm
function insert_sanpham($ma_sp,$ten_sp,$gia,$img, $mota, $ma_dm, $ngay_tao, $trang_thai, $ngay_cap_nhat){
    $sql = "insert into `db_sanpham`(`ma_sp`,`ten_sp`, `gia`,`img`, `mota`, `ma_danhmuc`, `ngay_tao`, `trang_thai`, `ngay_cap_nhat`) VALUES ('$ma_sp','$ten_sp', '$gia','$img', '$mota', '$ma_dm', '$ngay_tao', '$trang_thai', '$ngay_cap_nhat');";
    pdo_execute($sql);
}
// Cập nhật sản phẩm

function update_sanpham($ma_sp,$ten_sp,$gia, $mota, $ma_dm, $ngay_tao, $trang_thai, $ngay_cap_nhat){ 
    $sql=  "update `db_sanpham` SET `ten_sp` = '{$ten_sp}', `gia` = '{$gia}', `mota` = '{$mota}',`ngay_tao` = '{$ngay_tao}', `ma_danhmuc` = '{$ma_dm}', `trang_thai` = '{$trang_thai}',`ngay_cap_nhat` = '{$ngay_cap_nhat}' WHERE `db_sanpham`.`ma_sp` = $ma_sp";
    pdo_execute($sql);
}
// Xóa sản phẩm
function delete_sanpham($ma_sp){
    $sql = "delete from db_sanpham WHERE ma_sp=" .$ma_sp;
    pdo_execute($sql);
}
?>