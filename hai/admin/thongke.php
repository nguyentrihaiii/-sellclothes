<?php
    include("../pdo/connect.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>THỐNG KÊ DANH MỤC</title>
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />   
    </head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    <body>
        
        <style> </style>
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
                </li>
                <!-- ... Other menu items ... -->
            </ul>
        </div>
    </nav>
    <br><br>
    <div class="container">
        <div class="row">
       
    <!-- ... (Previous code) ... -->
     
    <div class="col-md-8">
                <h4>Thống kê danh mục</h4>

            </div>
<table>
    <tr>
        <th>Mã DANH MỤC</th>
        <th>TÊN DANH MỤC</th>
        <th>SỐ LƯỢNG</th>
        <th>GIÁ CAO NHẤT</th>
        <th>GIÁ THẤP NHẤT</th>
        <th>GIÁ TRUNG BÌNH</th>
    </tr>

<?php
$sql_category_stats = mysqli_query($con, "SELECT category_id, category_name FROM danhmuc");
while ($row_category_stats = mysqli_fetch_assoc($sql_category_stats)) {
    $category_id = $row_category_stats['category_id'];
    $category_name = $row_category_stats['category_name'];

    // Get the number of products in each category
    $sql_product_count = mysqli_query($con, "SELECT COUNT(*) AS product_count FROM sanpham WHERE category_id = '$category_id'");
    $row_product_count = mysqli_fetch_assoc($sql_product_count);
    $product_count = $row_product_count['product_count'];

    // Get additional statistics for each category
    $sql_sanpham_gia_stats = mysqli_query($con, "SELECT
        MIN(sanpham_gia) AS min_sanpham_gia,
        MAX(sanpham_gia) AS max_sanpham_gia,
        AVG(sanpham_gia) AS avg_sanpham_gia
        FROM sanpham
        WHERE category_id = '$category_id'
    ");
    $row_sanpham_gia_stats = mysqli_fetch_assoc($sql_sanpham_gia_stats);
    $min_sanpham_gia = $row_sanpham_gia_stats['min_sanpham_gia'];
    $max_sanpham_gia = $row_sanpham_gia_stats['max_sanpham_gia'];
    $avg_sanpham_gia = $row_sanpham_gia_stats['avg_sanpham_gia'];

    echo "<tr>
            <td>$category_id</td>
            <td>$category_name</td>
            <td>$product_count</td>
            <td>$max_sanpham_gia</td>
            <td>$min_sanpham_gia</td>
            <td>$avg_sanpham_gia</td>
        </tr>";
}
?>
   <div class="row m10">
                <a href="bieudo.php"><input type="button" value="Xem biểu đồ"></a>
            </div>
</table>

<!-- ... (Remaining code) ... -->

            
        </div>
    </div>
</body>
</html>
