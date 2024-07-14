<?php
include("../pdo/connect.php");
?>
<?php
if (isset($_POST['capnhatdonhang'])) {
    $xuly = $_POST['xuly'];
    $mahang = $_POST['mahang_xuly'];
    $sql_update_donhang = mysqli_query($con, "UPDATE donhang SET trangthai = '$xuly' WHERE mahang = '$mahang'");
    $sql_update_giaodich = mysqli_query($con, "UPDATE giaodich SET tinhtrangdon = '$xuly' WHERE magiaodich = '$mahang'");
}
?>
<?php
if (isset($_GET['xoadonhang'])) {
    $mahang = $_GET['xoadonhang'];
    $sql_delete = mysqli_query($con, "DELETE FROM donhang WHERE mahang = '$mahang'");
}
if (isset($_GET['xacnhanhuy']) && isset($_GET['mahang'])) {
    $huydon = $_GET['xacnhanhuy'];
    $magiaodich = $_GET['mahang'];
} else {
    $huydon = '';
    $magiaodich = '';
}
$sql_update_donhang = mysqli_query($con, "UPDATE donhang SET huydon = '$huydon' WHERE mahang = '$magiaodich'");
$sql_update_giaodich = mysqli_query($con, "UPDATE giaodich SET huydon = '$huydon' WHERE magiaodich = '$magiaodich'");
?>
<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset="UTF-8">
    <title>ĐƠN HÀNG</title>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <style>
        .content {
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
            <?php
            if (isset($_GET['quanly']) == 'xemdonhang') {
                $mahang = $_GET['mahang'];
                $sql_chitiet = mysqli_query($con, "SELECT * FROM donhang,sanpham 
                WHERE donhang.sanpham_id = sanpham.sanpham_id AND donhang.mahang = '$mahang'");
            ?>
                <div class="col-md-12">
                    <h1>Xem chi tiết đơn hàng</h1>
                    <form action="" method="POST">
                        <table class="table table-responsive table-bordered table-trippd">
                            <tr>
                                <td>Thứ tự</td>
                                <td>Mã hàng</td>
                                <td>Tên sản phẩm</td>
                                <td>Số lượng</td>
                                <td>Giá</td>
                                <td>Tổng tiền</td>
                                <td>Ngày đặt hàng</td>

                                <!-- <td>Quản lý</td> -->
                            </tr>
                            <?php
                            $i = 0;
                            while ($row_donhang = mysqli_fetch_array($sql_chitiet)) {
                                $i++
                            ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row_donhang['mahang']; ?></td>
                                    <td><?php echo $row_donhang['sanpham_name']; ?></td>
                                    <td><?php echo $row_donhang['soluong']; ?></td>
                                    <td><?php echo number_format($row_donhang['sanpham_giakhuyenmai']) . "VNĐ"; ?></td>
                                    <td><?php echo number_format($row_donhang['soluong'] * $row_donhang['sanpham_giakhuyenmai']) . 'VNĐ'; ?></td>
                                    <td><?php echo $row_donhang['ngaydathang']; ?></td>
                                    <input type="hidden" name="mahang_xuly" value="<?php echo $row_donhang['mahang']; ?>" />

                                    <!-- <td><a href="?quanly=xemdonhang&mahang=<?php echo $row_donhang['mahang'] ?>">Xem đơn hàng</a>
                                || <a href="?xoa=<?php echo $row_donhang['donhang_id'] ?>">Xóa</a></td> -->
                                </tr>
                            <?php
                            }
                            ?>
                        </table>

                        <select class="form-control" name="xuly">
                            <option value="0">Chưa xử lý</option>
                            <option value="1">Đã xử lý</option>
                            <option value="2">Đã Thanh toán</option>
                            <option value="3">Chưa thanh toán</option>
                        </select> </br>
                        <input type="submit" name="capnhatdonhang" value="Cập nhật đơn hàng" class="btn btn-success" />
                    </form>
                </div>
            <?php
            } else {
            ?>

                <div class="col-md-7">
                    <h1>Đơn hàng</h1>
                </div>
            <?php
            }
            ?>

            <div class="col-md-12">
                <h1>Liệt kê đơn hàng</h1>
                <?php
                $sql_select_donhang = mysqli_query($con, "SELECT * FROM donhang,sanpham,khachhang 
                        WHERE donhang.sanpham_id = sanpham.sanpham_id AND khachhang.khachhang_id = donhang.khachhang_id
                        GROUP BY mahang ");
                ?>
                <table class="table table-bordered">
                    <tr>
                        <td>Thứ tự</td>
                        <td>Tên sản phẩm</td>
                        <td>Số lượng</td>
                        <td>Mã hàng</td>
                        <td>Tình trạng đơn hàng</td>
                        <td>Tên khách hàng</td>
                        <td>Ngày đặt hàng</td>
                        <td>Ghi chú</td>
                        <td>Hủy đơn</td>
                        <td>Quản lý</td>
                    </tr>
                    <?php
                    $i = 0;
                    while ($row_donhang = mysqli_fetch_array($sql_select_donhang)) {
                        $i++;
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row_donhang['sanpham_name']; ?></td>
                            <td><?php echo $row_donhang['soluong']; ?></td>
                            <td><?php echo $row_donhang['mahang']; ?></td>
                            <td>
                                <?php
                                if ($row_donhang['trangthai'] == 0) {
                                    echo "Chưa xử lý ";
                                } else if ($row_donhang['trangthai'] == 1) {
                                    echo "Đã xử lý";
                                } else if ($row_donhang['trangthai'] == 2) {
                                    echo "Đã thanh toán";
                                } else if ($row_donhang['trangthai'] == 3){
                                    echo "Chưa thanh toán";
                                }
                                ?>

                            </td>
                            <td><?php echo $row_donhang['name']; ?></td>
                            <td><?php echo $row_donhang['ngaydathang']; ?></td>
                            <td><?php echo $row_donhang['note']; ?></td>
                            <td><?php if ($row_donhang['huydon'] == 0) {
                                } else if ($row_donhang['huydon'] == 1) {
                                    echo '<a href="xulydonhang.php?quanly=xemdonhang&xacnhanhuy=2&mahang=' . $row_donhang['mahang'] . '">Xác nhận hủy đơn</a>';
                                } else {
                                    echo 'Đã hủy đơn';
                                }
                                ?></td>
                            <td><a href="?quanly=xemdonhang&mahang=<?php echo $row_donhang['mahang'] ?>">Xem đơn hàng</a>
                                || <a href="?xoadonhang=<?php echo $row_donhang['mahang'] ?>">Xóa</a></td>

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