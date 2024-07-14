<?php
include("../pdo/connect.php");
?>
<?php
// Function to sanitize and validate input
function validateInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if (isset($_POST['themsanpham'])) {
    // Validate input
    $tensanpham = validateInput($_POST['tensanpham']);
    $soluong = validateInput($_POST['soluong']);
    $gia = validateInput($_POST['giasanpham']);
    $giakhuyenmai = validateInput($_POST['giakhuyenmai']);
    $danhmuc = validateInput($_POST['danhmuc']);
    $chitiet = validateInput($_POST['chitiet']);
    $mota = validateInput($_POST['mota']);

    $hinhanh = $_FILES['hinhanh']['name'];
    if (empty($hinhanh)) {
        $error_hinhanh = "Vui lòng chọn hình ảnh.";
    } else {
        $path = "../uploads/";
        $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
        move_uploaded_file($hinhanh_tmp, $path . $hinhanh);
    }

    $sql_insert_product = mysqli_query($con, "INSERT INTO sanpham(sanpham_name,sanpham_chitiet,sanpham_mota,
        sanpham_gia,sanpham_giakhuyenmai,sanpham_soluong,sanpham_image,category_id)
        VALUES ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");
} else if (isset($_POST['suasanpham'])) {
    $id_update = $_POST['id_update'];
    $tensanpham = $_POST['tensanpham'];
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $soluong = $_POST['soluong'];
    $gia = $_POST['giasanpham'];
    $giakhuyenmai = $_POST['giakhuyenmai'];
    $danhmuc = $_POST['danhmuc'];
    $chitiet = $_POST['chitiet'];
    $mota = $_POST['mota'];
    $path = "../uploads/";

    if ($hinhanh == '') {
        $sql_update_img = "UPDATE sanpham SET sanpham_name = '$tensanpham', sanpham_chitiet = '$chitiet', sanpham_mota = '$mota',
            sanpham_gia = '$gia', sanpham_giakhuyenmai = '$giakhuyenmai', sanpham_soluong = '$soluong', category_id = '$danhmuc' 
            WHERE sanpham_id = '$id_update'";
    } else {
        move_uploaded_file($hinhanh_tmp, $path . $hinhanh);
        $sql_update_img = "UPDATE sanpham SET sanpham_name = '$tensanpham', sanpham_chitiet = '$chitiet', sanpham_mota = '$mota',
            sanpham_gia = '$gia', sanpham_giakhuyenmai = '$giakhuyenmai', sanpham_soluong = '$soluong', sanpham_image = '$hinhanh', category_id = '$danhmuc'
            WHERE sanpham_id = '$id_update'";
    }

    mysqli_query($con, $sql_update_img);
}
?>
<?php
if (isset($_GET['xoa'])) {
    $id = $_GET['xoa'];
    $sql_xoa_sp = mysqli_query($con, "DELETE FROM sanpham WHERE sanpham_id = '$id'");
    $path_delete = "../uploads/";
}
?>
<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset="UTF-8">
    <title>SẢN PHẨM</title>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
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
    <div class="container">
     
        <script>
            function validateForm() {
                var tensanpham = document.forms["suaForm"]["tensanpham"].value;
                var giasanpham = document.forms["suaForm"]["giasanpham"].value;
                var giakhuyenmai = document.forms["suaForm"]["giakhuyenmai"].value;
                var soluong = document.forms["suaForm"]["soluong"].value;

                if (tensanpham == "") {
                    alert("Vui lòng nhập tên sản phẩm");
                    return false;
                }
                if (giasanpham == "") {
                    alert("Vui lòng nhập giá sản phẩm");
                    return false;
                }
                if (giakhuyenmai == "") {
                    alert("Vui lòng nhập giá khuyến mãi");
                    return false;
                }
                if (soluong == "") {
                    alert("Vui lòng nhập số lượng");
                    return false;
                }
            }
        </script>
        <div class="row">
            <?php
            if (isset($_GET['quanly']) == 'sua') {
                $id_sua = $_GET['sua_id'];
                $sql_sua = mysqli_query($con, "SELECT * FROM sanpham WHERE sanpham_id = '$id_sua'");
                $row_sua = mysqli_fetch_array($sql_sua);
                $id_category_sua = $row_sua['category_id'];
            ?>
                <div class="col-md-4">
                    <h4>Sửa sản phẩm</h4>
                    <form action="" method="POST" enctype="multipart/form-data" name="suaForm" onsubmit="return validateForm()">
                        <label>Tên sản phẩm</label>
                        <input type="text" class="form-control" name="tensanpham" value="<?php echo $row_sua['sanpham_name'] ?>"></br>
                        <input type="hidden" class="form-control" name="id_update" value="<?php echo $row_sua['sanpham_id'] ?>"></br>
                        <label>Hình ảnh</label>
                        <input type="file" class="form-control" name="hinhanh" /></br>
                        <img src="../uploads/<?php echo $row_sua['sanpham_image']; ?>" width="80" height="100" /></br>
                        <label>Giá sản phẩm</label>
                        <input type="text" class="form-control" name="giasanpham" value="<?php echo $row_sua['sanpham_gia']; ?>" /></br>
                        <label>Giá khuyến mãi</label>
                        <input type="text" class="form-control" name="giakhuyenmai" value="<?php echo $row_sua['sanpham_giakhuyenmai']; ?>" /></br>
                        <label>Số lượng</label>
                        <input type="text" class="form-control" name="soluong" value="<?php echo $row_sua['sanpham_soluong'] ?>" /></br>
                        <label>Mô tả</label>
                        <textarea class="form-control" rows="10" name="mota"><?php echo $row_sua['sanpham_mota']; ?></textarea></br>
                        <label>Chi tiết</label>
                        <textarea class="form-control" rows="10" name="chitiet"><?php echo $row_sua['sanpham_chitiet']; ?></textarea></br>
                        <label>Danh mục</label>
                        <?php
                        $sql_danhmuc = mysqli_query($con, "SELECT * FROM danhmuc ORDER BY category_id DESC");
                        ?>
                        <select name="danhmuc">
                            <option value="0">------Chọn danh mục------</option>
                            <?php
                            while ($row_danhmuc = mysqli_fetch_array($sql_danhmuc)) {
                                if ($id_category_sua == $row_danhmuc['category_id']) {
                            ?>
                                    <option selected value="<?php echo $row_danhmuc['category_id']; ?>">
                                        <?php echo $row_danhmuc['category_name']; ?></option>
                                <?php
                                } else {
                                ?>
                                    <option selected value="<?php echo $row_danhmuc['category_id']; ?>">
                                        <?php echo $row_danhmuc['category_name']; ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                        <input type="submit" name="suasanpham" value="Sửa sản phẩm" class="btn btn-default">
                    </form>

                </div>
            <?php
            } else {
            ?>
                <div class="col-md-4">
                    <h4>Thêm sản phẩm</h4>

                    <form action="" method="POST" enctype="multipart/form-data" onsubmit="return validateForm();">
                        <label>Tên sản phẩm</label>
                        <input type="text" class="form-control" name="tensanpham" placeholder="tên sản phẩm"></br>
                        <label>Hình ảnh</label>
                        <input type="file" class="form-control" name="hinhanh" /></br>
                        <label>Giá sản phẩm</label>
                        <input type="text" class="form-control" name="giasanpham" placeholder="giá sản phẩm" /></br>
                        <label>Giá khuyến mãi</label>
                        <input type="text" class="form-control" name="giakhuyenmai" placeholder="giá khuyến mãi" /></br>
                        <label>Số lượng</label>
                        <input type="text" class="form-control" name="soluong" placeholder="Số lượng" /></br>
                        <label>Mô tả</label>
                        <textarea class="form-control" name="mota"></textarea></br>
                        <label>Chi tiết</label>
                        <textarea class="form-control" name="chitiet"></textarea></br>
                        <label>Danh mục</label>
                        <?php
                        $sql_danhmuc = mysqli_query($con, "SELECT * FROM danhmuc ORDER BY category_id DESC");
                        ?>
                        <select name="danhmuc">
                            <option value="0">------Chọn danh mục------</option>
                            <?php
                            while ($row_danhmuc = mysqli_fetch_array($sql_danhmuc)) {
                            ?>
                                <option value="<?php echo $row_danhmuc['category_id']; ?>"><?php echo $row_danhmuc['category_name']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <input type="submit" name="themsanpham" value="Thêm sản phẩm" class="btn btn-primary" />
                    </form>
                </div>

                <script>
                    function validateForm() {
                        var missingFields = [];

                        var tensanpham = document.forms[0]["tensanpham"].value;
                        var hinhanh = document.forms[0]["hinhanh"].value;
                        var giasanpham = document.forms[0]["giasanpham"].value;
                        var giakhuyenmai = document.forms[0]["giakhuyenmai"].value;
                        var soluong = document.forms[0]["soluong"].value;
                        var mota = document.forms[0]["mota"].value;
                        var chitiet = document.forms[0]["chitiet"].value;
                        var danhmuc = document.forms[0]["danhmuc"].value;

                        if (tensanpham == "") {
                            missingFields.push("Tên sản phẩm");
                        }
                        if (hinhanh == "") {
                            missingFields.push("Hình ảnh");
                        }
                        if (giasanpham == "") {
                            missingFields.push("Giá sản phẩm");
                        }
                        if (giakhuyenmai == "") {
                            missingFields.push("Giá khuyến mãi");
                        }
                        if (soluong == "") {
                            missingFields.push("Số lượng");
                        }
                        if (mota == "") {
                            missingFields.push("Mô tả");
                        }
                        if (chitiet == "") {
                            missingFields.push("Chi tiết");
                        }
                        if (danhmuc == "0") {
                            missingFields.push("Danh mục");
                        }

                        if (missingFields.length > 0) {
                            alert("Vui lòng điền đầy đủ thông tin:\n" + missingFields.join(", "));
                            return false;
                        }
                        return true;
                    }
                </script>

            <?php
            }
            ?>

            <div class="col-md-8">
                <script>
                    function confirmDelete() {
                        return confirm("Bạn có chắc chắn muốn xóa sản phẩm không?");
                    }
                </script>
                <h4>Liệt kê sản phẩm</h4>
                <?php
                $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 4;
                $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
                $offset = ($current_page - 1) * $item_per_page;
                $sql_select_sp = mysqli_query($con, "SELECT * FROM sanpham,danhmuc 
                        WHERE sanpham.category_id = danhmuc.category_id ORDER BY sanpham.sanpham_id DESC LIMIT " . $item_per_page . " OFFSET " . $offset . " ");
                $total_record = mysqli_query($con, "SELECT * FROM sanpham");
                $total_record = mysqli_num_rows($total_record);
                $total_pages = ceil($total_record / $item_per_page);
                ?>
                <table class="table table-bordered">
                    <tr>
                        <td>Thứ tự</td>
                        <td>Tên Sản phẩm</td>
                        <td>Hình ảnh</td>
                        <td>Số lượng</td>
                        <td>Danh mục</td>
                        <td>Giá sản phẩm</td>
                        <td>Giá khuyến mãi</td>
                        <td>Quản lý</td>
                    </tr>
                    <?php
                    $i = 0;
                    while ($row_sp = mysqli_fetch_array($sql_select_sp)) {
                        $i++;
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row_sp['sanpham_name']; ?></td>
                            <td><img src="../uploads/<?php echo $row_sp['sanpham_image']; ?>" height="80" width="80" /></td>
                            <td><?php echo $row_sp['sanpham_soluong']; ?></td>
                            <td><?php echo $row_sp['category_name']; ?></td>
                            <td><?php echo number_format($row_sp['sanpham_gia']) . 'VNĐ'; ?></td>
                            <td><?php echo number_format($row_sp['sanpham_giakhuyenmai']) . 'VNĐ'; ?></td>
                            <td><a href="xulysanpham.php?quanly=sua&sua_id=<?php echo $row_sp['sanpham_id']; ?>">Sửa</a>
                                 <a href="?xoa=<?php echo $row_sp['sanpham_id']; ?>" onclick="return confirmDelete();">Xóa</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <?php
                include 'phantrang.php';
                ?>
            </div>
        </div>
    </div>
</body>

</html>