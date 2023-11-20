<!DOCTYPE html>
<html lang="en">

<head>
  <title>Danh sách nhân viên | Quản trị Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
<style>
    /* Tùy chỉnh CSS */
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      padding-top: 20px;
    }

    .product-details {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    .comment-list {
      margin-top: 20px;
    }

    .comment {
      border: 1px solid #ddd;
      padding: 10px;
      border-radius: 8px;
      margin-bottom: 10px;
    }

    .comment p {
      margin-bottom: 5px;
    }

    .comment-info {
      font-size: 14px;
      color: #888;
    }

    .comment-actions {
      margin-top: 10px;
    }

    /* CSS cho khung bình luận */
    .comment-frame {
      border: 1px solid #ddd;
      padding: 20px;
      border-radius: 8px;
    }

    .comment-table th {
      text-align: center;
    }
  </style>

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
      <li><a class="app-menu__item" href="./binhluan"><i class='app-menu__icon bx bx-run'></i><span
            class="app-menu__label">Quản lý bình luận</span></a></li>
    </ul>
  </aside>
    <main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Chi Tiết Sản phâm</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
                           
                          </div>
    <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- Phần chi tiết sản phẩm -->
        <div class="product-details">
          <!-- Thông tin chi tiết sản phẩm -->
          <div class="product-image">
            <img src="path/to/your/image.jpg" alt="Sản phẩm">
          </div>
          <h2>Tên Sản phẩm</h2>
          <p class="product-price">$99.99</p>
          <p>Mô tả sản phẩm: Lorem ipsum dolor sit amet...</p>
          <!-- ... -->
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <!-- Phần bình luận -->
        <div class="comment-frame">
          <h3>Bình luận</h3>
          <div class="comment-list">
            <!-- Bảng hiển thị comment -->
            <table class="table comment-table">
              <thead>
                <tr>
                  <th>Mã bình luận</th>
                  <th>mã sản phẩm</th>
                  <th>Nội Dung</th>
                  <th>Thời Gian</th>
                  <th>Chức năng</th>
                </tr>
              </thead>
              <tbody>
                <!-- Dữ liệu comment sẽ được lấy từ PHP -->
                <!-- PHP Code -->
                <?php 
                         foreach($listbl as $binhluan) {
                          extract($binhluan);
                        
                          $xoabl = "index.php?act=xoabl&ma_binhluan=".$ma_binhluan;
                      
    
                          echo '<tr>
                                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                  <td>'.$ma_binhluan.'</td>
                                  <td>'.$ma_sp.'</td>
                                  <td>'.$noi_dung.'</td>
                                  <td>'.$ngay_bl.'</td>
                                  <td>
                                    <a href="'.$xoabl.'">
                                      <button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)">
                                        <i class="fas fa-trash-alt"></i> 
                                      </button>
                                    </a>
                                    
                                    </a>
                                  </td>
                                </tr>';
                        }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

<!--
  MODAL
-->
</div>
<!--
MODAL
-->

    <!-- Essential javascripts for application to work-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
   