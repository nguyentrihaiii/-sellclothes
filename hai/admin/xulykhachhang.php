<?php
include("../pdo/connect.php");
?>
    <!-- <?php
        if(isset($_POST['capnhatdonhang'])){
            $xuly = $_POST['xuly'];
            $mahang = $_POST['mahang_xuly'];
            $sql_update_donhang = mysqli_query($con,"UPDATE donhang SET trangthai = '$xuly' WHERE mahang = '$mahang'");
        }  
    ?>
    <?php
        if(isset($_GET['xoadonhang'])){
            $mahang = $_GET['xoadonhang'];
            $sql_delete = mysqli_query($con,"DELETE FROM donhang WHERE mahang = '$mahang'");
        }
    ?>     -->
<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset="UTF-8">
    <title>KHÁCH HÀNG</title>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <style>
        .content{
            padding: 10px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="xulydonhang.php">Đơn hàng <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="xulydanhmuc.php">Danh mục</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="xulydanhmuctin.php">Tin danh mục</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="xulybaiviet.php">Bài viết</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="xulysanpham.php">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="xulykhachhang.php">Khách hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="thongke.php">Thống kê</a>
                </li>
            </ul>
        </div>
    </nav>
    <br><br>
        <div class="content">
        <div class="row">

                <div class="col-md-12">
                    <h1>Khách hàng</h1>
                </div>
            

            <div class="col-md-12" >
                <h1>Liệt kê khách hàng</h1>
                <?php
                $sql_select_khachhang = mysqli_query($con, "SELECT * FROM khachhang,giaodich
                WHERE khachhang.khachhang_id = giaodich.khachhang_id 
                GROUP BY giaodich.magiaodich
                ORDER BY khachhang.khachhang_id  DESC");
                ?>
                <table class="table table-bordered">
                    <tr>
                        <td>Thứ tự</td>
                        <td>Tên khách hàng</td>
                        <td>Số điện thoại</td>
                        <td>Địa chỉ</td>
                        <td>Email</td>
                        <td>Ngày mua</td>
                        <td>Quản lý</td>
                    </tr>
                    <?php
                    $i = 0;
                    while ($row_khachhang = mysqli_fetch_array($sql_select_khachhang)) {
                        $i++
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row_khachhang['name']; ?></td>
                            <td><?php echo $row_khachhang['phone']; ?></td>
                            <td><?php echo $row_khachhang['address']; ?></td>
                            <td><?php echo $row_khachhang['email']; ?></td>
                            <td><?php echo $row_khachhang['ngaythang']; ?></td>
                            <td><a href="?quanly=xemgiaodich&khachhang=<?php echo $row_khachhang['magiaodich'] ?>">Xem giao dịch</a></td>

                        </tr>
                        <?php
                            }
                        ?>
                </table>
            </div>

            <div class="col-md-12" >
                <h1>Liệt kê lịch sử đơn hàng</h1>
                <?php
                if(isset($_GET['khachhang'])){
                    $magiaodich = $_GET['khachhang'];
                }else{
                    $magiaodich = '';
                }
                $sql_select = mysqli_query($con, "SELECT * FROM giaodich,khachhang,sanpham 
                        WHERE giaodich.sanpham_id = sanpham.sanpham_id 
                        AND khachhang.khachhang_id = giaodich.khachhang_id
                        AND giaodich.magiaodich = '$magiaodich'
                        ORDER BY giaodich.giaodich_id DESC");
                ?>
                <table class="table table-bordered">
                    <tr>
                        <td>Thứ tự</td>
                        <td>Mã giao dịch</td>
                        <td>Tên Sản phẩm</td>
                        <td>Số lượng</td>
                        <td>Ngày đặt hàng</td>
                    </tr>
                    <?php
                    $i = 0;
                    while ($row_donhang = mysqli_fetch_array($sql_select)) {
                        $i++
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row_donhang['magiaodich']; ?></td>
                            <td><?php echo $row_donhang['sanpham_name']; ?></td>
                            <td><?php echo $row_donhang['soluong']; ?></td>
                            <td><?php echo $row_donhang['ngaythang']; ?></td>
                        </tr>
                        <?php
                            }
                                ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>