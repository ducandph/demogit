<!DOCTYPE html>
<html lang="en">

<head>
  <title>Quản lý bình luận | Quản trị Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
  <!-- ... -->
</head>

<body onload="time()" class="app sidebar-mini rtl">
  <!-- Navbar -->
  <!-- ... -->

  <!-- Sidebar menu -->
  <!-- ... -->

  <!-- Main content -->
  <main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Quản lý bình luận</b></a></li>
      </ul>
      <div id="clock"></div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <!-- Nút chức năng -->
            <div class="row element-button">
              <!-- ... -->
            </div>
            <!-- Bảng dữ liệu -->
            <form action="index.php?act=listdm" method="POST">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <!-- Tiêu đề cột -->
                    <th width="10"><input type="checkbox" id="all"></th>
                    <th>Mã bình luận</th>
                    <th>Mã sản phẩm</th>
                    <th>Nội dung</th>
                    <th>Thời gian</th>
                    <th>Chức năng</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    // Vòng lặp để hiển thị dữ liệu bình luận
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
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Modal -->
  <div class="modal fade" id="ModalUP" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
    data-keyboard="false">
    <!-- Nội dung của Modal -->
    <!-- ... -->
  </div>
<!-- Essential javascripts for application to work-->

  

</body>

</html>
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
 