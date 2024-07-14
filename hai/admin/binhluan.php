<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>BÌNH LUẬN</title>
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
                    <a class="nav-link" href="xulydanhmuctin.php">Tin danh mục bài viết</a>
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
                    <a class="nav-link" href="binhluan.php">Bình luận</a>
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

// Function to get comments for a specific product
function getComments($productId, $con)
{
    $sql = "SELECT * FROM binhluan WHERE product_id = '$productId' ORDER BY comment_time DESC";
    return mysqli_query($con, $sql);
}

// Function to add a new comment
function addComment($productId, $customerName, $commentContent, $con)
{
    $commentContent = validateInput($commentContent);
    $sql = "INSERT INTO binhluan (product_id, customer_name, comment_content) VALUES ('$productId', '$customerName', '$commentContent')";
    mysqli_query($con, $sql);
}

if (isset($_POST['binhluan'])) {
    // Form is submitted
    $productId = validateInput($_POST['product_id']);
    $customerName = validateInput($_POST['customer_name']);
    $commentContent = validateInput($_POST['comment_content']);

    // Add the new comment to the "binhluan" table
    addComment($productId, $customerName, $commentContent, $con);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BÌNH LUẬN</title>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<style>
    
</style>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- ... (existing menu items) ... -->
</nav>

<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h4>Bình luận</h4>

           

        
        </div>
    </div>


            <table>
                <tr>
                    <th>Mã</th>
                    <th>TÊN KHÁCH HÀNG</th>
                    <th>NỘI DUNG</th>
                    <th>THỜI GIAN</th>
                </tr>
                <?php
                // Display existing comments for the product
                $binhluan = getComments($productId, $con);
                while ($comment = mysqli_fetch_assoc($binhluan)) {
                    echo "<tr>";
                    echo "<td>{$comment['product_id']}</td>";
                    echo "<td>{$comment['customer_name']}</td>";
                    echo "<td>{$comment['comment_content']}</td>";
                    echo "<td>{$comment['comment_time']}</td>";
                    echo "</tr>";
                }
                ?>
            </table>

<?php

?>

