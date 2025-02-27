<?php
if (isset($_GET['id'])) {
	$id = $_GET['id'];
} else {
	$id = '';
}

$sql_cate = mysqli_query($con, "SELECT * FROM danhmuc,sanpham 
	WHERE danhmuc.category_id = sanpham.category_id AND danhmuc.category_id = '$id'
	ORDER BY sanpham.sanpham_id DESC");
$sql_category = mysqli_query($con, "SELECT * FROM danhmuc,sanpham 
	WHERE danhmuc.category_id = sanpham.category_id AND danhmuc.category_id = '$id'
	ORDER BY sanpham.sanpham_id DESC");

$row_title = mysqli_fetch_array($sql_category);
$title = $row_title['category_name'];
?>

<!-- top Products -->
<div class="ads-grid py-sm-5 py-4">
	<div class="container py-xl-4 py-lg-2">
		<!-- tittle heading -->
		<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
			<?php echo $title ?>
		</h3>
		<!-- //tittle heading -->
		<div class="row">
			<!-- product left -->
			<div class="agileinfo-ads-display col-lg-9">
				<div class="wrapper">
					<!-- first section -->
					<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
						<div class="row">
							<?php
							while ($row_sanpham = mysqli_fetch_array($sql_cate)) {
							?>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="images/<?php echo $row_sanpham['sanpham_image'] ?>" style="width:200px; height:250px;" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id'] ?>" class="link-product-add-cart">Xem sản phẩm</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id'] ?>"><?php echo $row_sanpham['sanpham_name'] ?></a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price"><?php echo number_format($row_sanpham['sanpham_giakhuyenmai']) . ' VNĐ' ?></span>
												<del><?php echo number_format($row_sanpham['sanpham_gia']) . ' VNĐ' ?></del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="?quanly=giohang" method="post">
													<fieldset>
														<input type="hidden" name="tensanpham" value="<?php echo $row_sanpham['sanpham_name'] ?>" />
														<input type="hidden" name="sanpham_id" value="<?php echo $row_sanpham['sanpham_id'] ?>" />
														<input type="hidden" name="giasanpham" value="<?php echo $row_sanpham['sanpham_gia'] ?>" />
														<input type="hidden" name="hinhanh" value="<?php echo $row_sanpham['sanpham_image'] ?>" />
														<input type="hidden" name="soluong" value="1" />
														<input type="submit" name="themgiohang" value="Thêm giỏ hàng" class="button" />
													</fieldset>
												</form>
											</div>
										</div>
									</div>
								</div>
							<?php
							}
							?>
						</div>
					</div>
					<!-- //first section -->
				</div>
			</div>
			<!-- //product left -->
			<!-- product right -->
			<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
				<div class="side-bar p-sm-4 p-3">
					<div class="search-hotel border-bottom py-2">
						<h3 class="agileits-sear-head mb-3">Tìm kiếm</h3>
						<form action="index.php?quanly=timkiem" method="post">
							<input type="search" placeholder="Sản phẩm..." name="search_product" required="">
							<input type="submit" value=" " name="search_btn">
						</form>
					</div>
					<!-- price -->
					<div class="range border-bottom py-2">
						<h3 class="agileits-sear-head mb-3">Giá</h3>
						<div class="w3l-range">
							<ul>
								<li>
									<a href="#">Dưới 1,000,000</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- //price -->
					<!-- reviews -->
				
					<!-- //reviews -->
					<!-- electronics -->
					<div class="left-side border-bottom py-2">
						<h3 class="agileits-sear-head mb-3">Danh mục sản phẩm</h3>
						<ul>
							<?php
							$sql_category_sidebar = mysqli_query($con, "SELECT * FROM danhmuc ORDER BY category_id DESC");
							while ($row_category_sidebar = mysqli_fetch_array($sql_category_sidebar)) {
							?>
								<li>
									<input type="checkbox" class="checked" name="checked">
									<script>
										function changeCheckbox(objCheckbox) {

											var the_tr = objCheckbox.parentElement.parentElement;
											var kt_true = objCheckbox.checked;
											var txt_number = the_tr.querySelector("input[type=number]");
											txt_number.disabled = !kt_true ? true : false;
										}
									</script>
									<span class="span"><a name="a" href="?quanly=danhmuc&id=<?php echo $row_category_sidebar['category_id'] ?>">
											<?php echo $row_category_sidebar['category_name'] ?></a></span>
								</li>
							<?php
							}
							?>
						</ul>
					</div>
					<!-- //electronics -->

					<!-- best seller -->
					<div class="f-grid py-2">
						<h3 class="agileits-sear-head mb-3">Sản phẩm bán chạy</h3>
						<div class="box-scroll">
							<div class="scroll">
								<?php
								$sql_product_sidebar = mysqli_query($con, "SELECT * FROM sanpham WHERE sanpham_hot = '0' ORDER BY sanpham_id DESC");
								while ($row_sanpham_sidebar = mysqli_fetch_array($sql_product_sidebar)) {
								?>

									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="images/<?php echo $row_sanpham_sidebar['sanpham_image'] ?>" alt="" class="img-fluid" />
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href=""><?php echo $row_sanpham_sidebar['sanpham_name'] ?></a>
											<a href="" class="price-mar mt-2"><?php echo number_format($row_sanpham_sidebar['sanpham_giakhuyenmai']) . 'VNĐ'; ?></a>
											<del><?php echo number_format($row_sanpham_sidebar['sanpham_gia']) . 'VNĐ'; ?></del>
										</div>
									</div>
								<?php
								}
								?>
							</div>
						</div>
					</div>
					<!-- //best seller -->
				</div>
				<!-- //product right -->
			</div>
		</div>
	</div>
</div>
<!-- //top products -->