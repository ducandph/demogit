<?php
session_start();
include  './model/pdo.php';
include './model/taikhoan.php';
include './model/danhmuc.php';
include './model/sanpham.php';
include './model/donhang.php';
include './model/binhluan.php';
include "./global.php";
if(isset($_SESSION['user'])&&$_SESSION['user']['ma_vaitro']==1){

include "view/header.php";
include "view/aside.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        // THÊM DANH MỤC
        case 'addm':
            if (isset($_POST['themoi']) && ($_POST['themoi'])) {
                $ma_dm = $_POST['ma_dm'];
                $ten_dm = $_POST['ten_dm'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['img']['name'];
                $target_dir = "./upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                     echo "The file " . htmlspecialchars(basename($_FILES["img"]["name"])) . " has been uploaded.";
                } else {
                     echo "Sorry, there was an error uploading your file.";
                }
                insert_dm($ten_dm,$mota,$hinh);
                $thongbao = "them thanh cong";
            }
            include "./view/danhmuc/adddm.php";
            break;
        case 'listdm':
            $listdm = get_ds_dm_all();
            include "./view/danhmuc/list.php";
            break;
             case "suadm":
                    if(isset($_GET['ma_dm']) && ($_GET['ma_dm']>0)){
                    $listdm=get_dm_one($_GET['ma_dm']);
                    }
                    $listdanhmuc=get_ds_dm_all();
                    include "./view/danhmuc/update.php";
                    break;
                // Cập nhật danh mục
             case "updatedm":
                        if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                            $ten_dm = $_POST['ten_dm'];
                            $ma_dm = $_POST['ma_dm'];
                            $mota = $_POST['mota'];
                            $hinh = $_FILES['img']['name'];
                            update_dm($ma_dm,$ten_dm,$mota,$hinh,);
                            $thongBao = "Cập nhật thành công";     
                                 
                        }
                        $listdm=get_ds_dm_all();
                        include "./view/danhmuc/list.php";
                         break;
        case 'delete_dm':
                if (isset($_GET['ma_dm']) && ($_GET['ma_dm'] > 0)) {
                    $ma_dm = $_GET['ma_dm'];
                    delete_dm($ma_dm);
                }
                $listdm = get_ds_dm_all();
                include "./view/danhmuc/list.php";
                break;
                case "addsp":
                    //  Ktra  xem người dùng có click vào nút add hay không
                    if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                       $ma_dm = $_POST['ma_dm'];
                        $ma_sp = $_POST['ma_sp'];
                       $ten_sp = $_POST['ten_sp'];
                       $gia = $_POST['gia'];
                       $mota = $_POST['mota'];
                       $ngay_tao = $_POST['ngay_tao'];
                        $ngay_cap_nhat = $_POST['ngay_cap_nhat'];
                       
                        $trang_thai = $_POST['trang_thai'];
                         $hinh = $_FILES['img']['name'];
                        $target_dir = "./upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                     echo "The file " . htmlspecialchars(basename($_FILES["img"]["name"])) . " has been uploaded.";
                } else {
                     echo "Sorry, there was an error uploading your file.";
                }
                        
                       
                         insert_sanpham($ma_sp,$ten_sp,$hinh ,$gia, $mota, $ma_dm, $ngay_tao, $trang_thai, $ngay_cap_nhat);
                       $tbao = "Thêm thành công";
                   }
                 
                   $listdanhmuc = get_ds_dm_all();
                   
                   include "./view/sanpham/form-add-san-pham.php";
                   break;  
                // Hiển thị sản phẩm
               case "listsp":    
                $listsanpham=loadall_sanpham();    
                include "./view/sanpham/table-data-product.php";
                break;
    
                // Xóa sản phẩm
               case "xoasp":
                if(isset($_GET['ma_sp']) && ($_GET['ma_sp']>0)){
                    delete_sanpham($_GET['ma_sp']);
              }
                $listsanpham=loadall_sanpham();
                include "./view/sanpham/table-data-product.php";
                break;
             // Sửa sản phẩm
            case "suasp":
                if(isset($_GET['ma_sp']) && ($_GET['ma_sp']>0)){
                $sanpham=loadone_sanpham($_GET['ma_sp']);
                }
                $listdanhmuc=get_ds_dm_all();
                include "./view/sanpham/form-update-sanpham.php";
                break;
           
            case "updatesp":
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $ma_dm = $_POST['ma_dm'];
                    $ma_sp = $_POST['ma_sp'];
                   $ten_sp = $_POST['ten_sp'];
                   $gia = $_POST['gia'];
                   $mota = $_POST['mota'];
                   $ngay_tao = $_POST['ngay_tao'];
                    $ngay_cap_nhat = $_POST['ngay_cap_nhat'];
                    $trang_thai = $_POST['trang_thai'];
                   
                     update_sanpham($ma_sp,$ten_sp,$gia, $mota, $ma_dm, $ngay_tao, $trang_thai, $ngay_cap_nhat);
                  
                    $thongbao="cập nhật thành công!";
                }
                $listsanpham=loadall_sanpham(0);
                $listdanhmuc=get_ds_dm_all();
                include "./view/sanpham/table-data-product.php";
                break;

                // quản lý tài khoản
                case 'listtk':
                    $listtk = get_all_tk();
                    include '../admin/view/khachhang/table-data-table.php';
                    break;
                case 'delete_tk':
                    if (isset($_GET['ma_tk']) && ($_GET['ma_tk'] > 0)) {
                        delete_taikhoan($_GET['ma_tk']);
                    }
                    $listtk = get_all_tk();
                    include "khachhang/table-data-table.php";
                    break;
                    case 'logout':
                        dangxuat();
                        if (isset($_SESSION['user'])) {
                            echo '<script> location.replace("index.php"); </script>';
                        }
                        break;
              // quản lý đơn hàng
              case 'listdh':
                // Lấy danh sách đơn hàng từ cơ sở dữ liệu
                $listdh = get_ds_donhang();
                // Hiển thị danh sách đơn hàng
                include "./view/donhang/table-data-oder.php";
                break;

                case "suadh":
                    if(isset($_GET['ma_don']) && ($_GET['ma_don']>0)){
                    $donhang=loadone_donhang($_GET['ma_don']);
                    }
                    $listdh=get_ds_donhang();
                    include "./view/donhang/form-update-don-hang.php";
                    break;
            
            case 'editdh':
                // Xử lý sửa đơn hàng
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    // Lấy dữ liệu từ form và thực hiện việc cập nhật đơn hàng vào cơ sở dữ liệu
                     $ma_don = $_POST['ma_don'];
                     $ngaydathang = $_POST['ngaydathang'];
                    $tongtien = $_POST['tongtien'];
                    $trang_thai = $_POST['trang_thai'];
                    $ma_kh = $_POST['ma_kh'];
                    $diachi= $_POST['diachi'];
                    $pttt= $_POST['pttt'];
                    
                    // Gọi hàm cập nhật đơn hàng từ model
                     update_donhang($ma_don, $ngaydathang, $tongtien, $trang_thai, $ma_kh, $diachi, $pttt);
                    
                    $thongbao = "Cập nhật đơn hàng thành công";
                }
                // Hiển thị form sửa đơn hàng
                include "./view/donhang/form-update-don-hang.php";
                break;
            
            case 'deletedh':
                // Xử lý xóa đơn hàng
                if (isset($_GET['ma_don']) && ($_GET['ma_don'] > 0)) {
                    $ma_don = $_GET['ma_don'];
                     delete_donhang($ma_don); // Gọi hàm xóa đơn hàng từ model
                    $thongbao = "Xóa đơn hàng thành công";
                }
                // Lấy danh sách đơn hàng từ cơ sở dữ liệu sau khi xóa (nếu cần)
                $listdh = get_ds_donhang();
                // Hiển thị danh sách đơn hàng
                include "./view/donhang/table-data-oder.php";
                break;


                // xử lý bình luận
                case 'listbl':
                    // Lấy danh sách bình luận từ cơ sở dữ liệu
                    $listbl = get_comments();
                
                    // Hiển thị danh sách bình luận
                    include "./view/binhluan/list.php";
                    break;
                    case 'xoabl':
                        // Xử lý xóa bình luận
                        if (isset($_GET['ma_binhluan']) && ($_GET['ma_binhluan'] > 0)) {
                            $ma_bl = $_GET['ma_binhluan'];
                            delete_binhluan($ma_bl); // Gọi hàm xóa bình luận từ model
                            $thongbao = "Xóa bình luận thành công";
                        }
                        // Lấy danh sách bình luận từ cơ sở dữ liệu sau khi xóa (nếu cần)
                        $listbl = get_comments();
                        // Hiển thị danh sách bình luận
                        include "./view/binhluan/list.php";
                        break;




    }

} else {
    include "view/main.php";
}

include "view/footer.php";
}else{
header("location: login.php");
}
?>