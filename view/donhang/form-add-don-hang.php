<!DOCTYPE html>
<html lang="en">

<head>
  <title>Danh sách đơn hàng | Quản trị Admin</title>
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
      <li><a class="app-menu__item" href="../sanpham/table-data-product.php"><i
            class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý sản phẩm</span></a>
      </li>
      <li><a class="app-menu__item" href="../danhmuc/list.php"><i class='app-menu__icon bx bx-run'></i><span
            class="app-menu__label">Quản lý danh mục</span></a></li>
      <li><a class="app-menu__item" href="../donhang/table-data-oder.php"><i class='app-menu__icon bx bx-task'></i><span
            class="app-menu__label">Quản lý đơn hàng</span></a></li>
      <li><a class="app-menu__item" href="../binhluan"><i class='app-menu__icon bx bx-run'></i><span
            class="app-menu__label">Quản lý bình luận</span></a></li>
    </ul>
  </aside>
    <main class="app-content">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item">Danh sách đơn hàng</li>
          <li class="breadcrumb-item"><a href="#">Thêm đơn hàng</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Tạo mới đơn hàng</h3>
            <div class="tile-body">
  <form class="row" method="POST" action="process_donhang.php"> <!-- Thay 'process_donhang.php' bằng tên tập tin xử lý dữ liệu -->
  <div class="form-group col-md-4">
    <label class="control-label">Mã đơn hàng</label>
    <input class="form-control" type="text" name="ma_don">
  </div>
  <div class="form-group col-md-4">
    <label class="control-label">Ngày đặt hàng</label>
    <input class="form-control" type="date" name="ngaydathang">
  </div>
  <div class="form-group col-md-4">
    <label class="control-label">Tổng tiền</label>
    <input class="form-control" type="text" name="tongtien">
  </div>
  <div class="form-group col-md-4">
    <label class="control-label">Trạng thái</label>
    <input class="form-control" type="text" name="trang_thai">
  </div>
  <div class="form-group col-md-4">
    <label class="control-label">Mã khách hàng</label>
    <input class="form-control" type="text" name="ma_kh">
  </div>
  <div class="form-group col-md-4">
    <label class="control-label">Địa chỉ</label>
    <input class="form-control" type="text" name="diachi">
  </div>
  <div class="form-group col-md-4">
    <label class="control-label">Phương thức thanh toán</label>
    <input class="form-control" type="text" name="pttt">
  </div>  
  <button class="btn btn-save" type="submit">Lưu đơn hàng</button>
  <a class="btn btn-cancel" href="/doc/table-data-donhang.html">Hủy bỏ</a>
</form>
        



        </div>
    </main>
   <!-- Essential javascripts for application to work-->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="js/plugins/pace.min.js"></script>
  </body>
</html>