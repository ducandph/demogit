
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Danh sách nhân viên | Quản trị Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
 
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <link rel="stylesheet" href="../doc/css/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

</head>

<body onload="time()" class="app sidebar-mini rtl">
   <!-- Navbar-->
   <header class="app-header">
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
      aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">


      <!-- User Menu-->
      <li><a class="app-nav__item" href="/index.html"><i class='bx bx-log-out bx-rotate-180'></i> </a>

      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="./images/logo_coffee.png" width="50px"
        alt="User Image">
      <div>
        <p class="app-sidebar__user-name"><b>THE COFFEE HOUSE</b></p>
        <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
      </div>
    </div>
    <hr>
    <ul class="app-menu">
      <li><a class="app-menu__item haha" href="../banhang.php"><i class='app-menu__icon bx bx-cart-alt'></i>
          <span class="app-menu__label">POS Bán Hàng</span></a></li>
      <li><a class="app-menu__item active" href="../main.php"><i class='app-menu__icon bx bx-tachometer'></i><span
            class="app-menu__label">Bảng điều khiển</span></a></li>
      <li><a class="app-menu__item " href="../khachhang/table-data-table.php"><i class='app-menu__icon bx bx-id-card'></i> <span
            class="app-menu__label">Quản lý nhân viên</span></a></li>
      <li><a class="app-menu__item" href="../khachhang/table-data-table.php"><i class='app-menu__icon bx bx-user-voice'></i><span
            class="app-menu__label">Quản lý khách hàng</span></a></li>
      <li><a class="app-menu__item" href="index.php?act=listsp"><i
            class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý sản phẩm</span></a>
      </li>
      <li><a class="app-menu__item" href="index.php?act=listdm"><i class='app-menu__icon bx bx-run'></i><span
            class="app-menu__label">Quản lý danh mục</span></a></li>
      <li><a class="app-menu__item" href="../donhang/table-data-oder.php"><i class='app-menu__icon bx bx-task'></i><span
            class="app-menu__label">Quản lý đơn hàng</span></a></li>
      <li><a class="app-menu__item" href="./binhluan"><i class='app-menu__icon bx bx-run'></i><span
            class="app-menu__label">Quản lý bình luận</span></a></li>
    </ul>
  </aside>
    <main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-2">
              
                              <a class="btn btn-add btn-sm" href="index.php?act=addsp" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới sản phẩm</a>
                            </div>
                           
                            <div class="col-sm-2">
                              <a class="btn btn-delete btn-sm nhap-tu-file" href="./view/sanpham/chitietsanpham.php" type="button" title="Nhập" onclick="myFunction(this)"><i
                                  class="fas fa-file-upload"></i> chi tiết san phẩm</a>
                            </div>
                           
                           
<table class="table table-hover table-bordered" id="sampleTable">
   <form class="row" method="POST" action="index.php?act=listsp" >
    <thead>
        <tr>
            <th width="10"><input type="checkbox" id="all"></th>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá tiền</th>
            <th>Mô tả</th>
            <th>Danh mục</th>
            <th>Ngày tạo</th>
            <th>Trạng thái</th>
            <th>Ngày cập nhật</th>
            <th>Chức năng</th>
        </tr>
    </thead>

    <tbody>
    <?php
                         
                         foreach($listsanpham as $sanpham){
                             extract($sanpham);
                             $hinh = $img_path_admin.$img;
                             $suasp="index.php?act=suasp&ma_sp=".$ma_sp;
                             $xoasp="index.php?act=xoasp&ma_sp=".$ma_sp;
                            
                         ?>
             
             
                                 <tr>
                                   <td><input type="checkbox" name="" id=""></td>
                                   <td>
                                     <?php echo $ma_sp ?>
                                   </td>
                                   <td>
                                     <?php echo $ten_sp ?>
                                   </td>
                                   <td><img src="  <?php echo $hinh ?>" alt="" width="100px;"></td>

                                   <td>
                                     <?php echo $gia ?>
                                   </td>
                                   <td>
                                     <?php echo $mota ?>
                                   </td>
                                  
                                   <td>
                                   <?php echo isset($ma_dm) ? get_ten_danhmuc($ma_dm) : ''; ?>
</td>
                                   
                                   <td>
                                     <?php echo $ngay_tao ?>
                                   </td>
                                   <td>
                                     <?php echo $trang_thai ?>
                                   </td>
                                   <td>
                                     <?php echo $ngay_cap_nhat ?>
                                   </td>
                                   
                                   <td> <a href="<?php echo $xoasp ?>"><button id="myTable" class="btn btn-primary btn-sm trash"
                                         type="button" title="Xóa" onclick="myFunction(this)"><i
                                           class="fas fa-trash-alt"></i></button></a>
                                     <a href="<?php echo $suasp ?>"><button class="btn btn-primary btn-sm edit" type="button"
                                         title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i
                                           class="fas fa-edit"></i></button></a>
             
                                   </td>
                                 </tr>
                                 <?php
                  
                         };
                       
                          ?>
        
    </tbody>
    
</table>
            </form>           
                    </div>
                </div>
            </div>
        </div>
    </main>

<!--
  MODAL
-->
<div class="modal fade" id="ModalUP" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
data-keyboard="false">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">

    <div class="modal-body">
      <div class="row">
        <div class="form-group  col-md-12">
          <span class="thong-tin-thanh-toan">
            <h5>Chỉnh sửa thông tin sản phẩm cơ bản</h5>
          </span>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
            <label class="control-label">Mã sản phẩm </label>
            <input class="form-control" type="number" value="71309005">
          </div>
        <div class="form-group col-md-6">
            <label class="control-label">Tên sản phẩm</label>
          <input class="form-control" type="text" required value="Bàn ăn gỗ Theresa">
        </div>
        <div class="form-group  col-md-6">
            <label class="control-label">Số lượng</label>
          <input class="form-control" type="number" required value="20">
        </div>
        <div class="form-group col-md-6 ">
            <label for="exampleSelect1" class="control-label">Tình trạng sản phẩm</label>
            <select class="form-control" id="exampleSelect1">
              <option>Còn hàng</option>
              <option>Hết hàng</option>
              <option>Đang nhập hàng</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label">Giá bán</label>
            <input class="form-control" type="text" value="5.600.000">
          </div>
          <div class="form-group col-md-6">
            <label for="exampleSelect1" class="control-label">Danh mục</label>
            <select class="form-control" id="exampleSelect1">
              <option>Bàn ăn</option>
              <option>Bàn thông minh</option>
              <option>Tủ</option>
              <option>Ghế gỗ</option>
              <option>Ghế sắt</option>
              <option>Giường người lớn</option>
              <option>Giường trẻ em</option>
              <option>Bàn trang điểm</option>
              <option>Giá đỡ</option>
            </select>
          </div>
      </div>
      <BR>
      <a href="#" style="    float: right;
    font-weight: 600;
    color: #ea0000;">Chỉnh sửa sản phẩm nâng cao</a>
      <BR>
      <BR>
      <button class="btn btn-save" type="button">Lưu lại</button>
      <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
      <BR>
    </div>
    <div class="modal-footer">
    </div>
  </div>
</div>
</div>
<!--
MODAL
-->

    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="src/jquery.table2excel.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $('#sampleTable').DataTable();
        //Thời Gian
   