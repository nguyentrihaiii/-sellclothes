<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }else{
        $id = '';
    }

    $sql_chitiet = mysqli_query($con,"SELECT * FROM sanpham WHERE sanpham_id = '$id'");
?>

<!-- page -->
<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Trang chủ</a>
						<i>|</i>
					</li>
					<li>Sản phẩm</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
        <?php
            while($row_chitiet = mysqli_fetch_array($sql_chitiet)){
        ?>
    <!-- Single Page -->
	<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="images/<?php echo $row_chitiet['sanpham_image']?>">
									<div class="thumb-image">
										<img src="images/<?php echo $row_chitiet['sanpham_image']?>" style="width:250px; height:300px;" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
								
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3"><?php echo $row_chitiet['sanpham_name']?></h3>
					<p class="mb-3">
						<span class="item_price"><?php echo number_format($row_chitiet['sanpham_giakhuyenmai']).'VNĐ'?></span>
						<del class="mx-2 font-weight-light"><?php echo number_format($row_chitiet['sanpham_gia']).'VNĐ'?></del>
						<label>Miễn phí vận chuyển</label>
					</p>
					
					<div class="product-single-w3l">
						<p>
                        <?php echo $row_chitiet['sanpham_chitiet']?><br><br>
                        <?php echo $row_chitiet['sanpham_mota']?>
                        </p>
					</div>
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							<form action="?quanly=giohang" method="post">
								<fieldset>
									<input type="hidden" name="tensanpham" value="<?php echo $row_chitiet['sanpham_name']?>" />
                                    <input type="hidden" name="sanpham_id" value="<?php echo $row_chitiet['sanpham_id']?>" />
                                    <input type="hidden" name="giasanpham" value="<?php echo $row_chitiet['sanpham_gia']?>" />
                                    <input type="hidden" name="hinhanh" value="<?php echo $row_chitiet['sanpham_image']?>" />
                                    <input type="hidden" name="soluong" value="1" />
									<input type="submit" name="themgiohang" value="Thêm giỏ hàng" class="button" />
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php

?>
<?php

function validateInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


function getComments($productId, $con)
{
    $sql = "SELECT * FROM binhluan WHERE product_id AUTO_INCREMENT = '$productId' ORDER BY comment_time DESC";
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

            <!-- Form to add a new comment -->
            <form action="" method="POST">
                <input type="hidden" name="product_id" value="<?php echo $id; ?>">
                <label for="customer_name">Tên khách hàng</label>
                <input type="text" class="form-control" name="customer_name" required><br>
                <label for="comment_content">Nội dung bình luận</label>
                <textarea class="form-control" rows="4" name="comment_content" required></textarea><br>
                <input type="submit" name="binhluan" value="Bình luận" class="btn btn-primary">
            </form>

        
        </div>
    </div>


    <?php
        }
    ?>