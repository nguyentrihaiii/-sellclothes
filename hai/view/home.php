<!-- top sanpham -->
<div class="ads-grid py-sm-5 py-4">
	<div class="container py-xl-4 py-lg-2">
		<!-- tittle heading -->
		<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
			Danh mục Sản phẩm
		</h3>
		<!-- //tittle heading -->
		<div class="row">
			<!-- product left -->
			<div class="agileinfo-ads-display col-lg-9">
				<div class="wrapper">
					<?php
					$sql_cate_home = mysqli_query($con, "SELECT * FROM danhmuc ORDER BY category_id DESC");
					while ($row_cate_home = mysqli_fetch_array($sql_cate_home)) {
						$id_category = $row_cate_home['category_id'];
					?>

						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic"><?php echo $row_cate_home['category_name']; ?></h3>
							<div class="row">
								<?php
								$sql_product = mysqli_query($con, "SELECT * FROM sanpham ORDER BY sanpham_id DESC");
								while ($row_sanpham = mysqli_fetch_array($sql_product)) {
									if ($row_sanpham['category_id'] == $id_category) {
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
								}
								?>
							</div>
						</div>
						<!-- //first section -->
					<?php

					}
					?>
					<!-- third section -->
					<div class="product-sec1 product-sec2 px-sm-5 px-3">
						<div class="row">
							<h3 class="col-md-4 effect-bg">Mùa đông</h3>
							<p class="w3l-nut-middle">Giảm giá 10%</p>
							<div class="col-md-8 bg-right-nut">
								<img src="images/nik.png" alt="">
							</div>
						</div>
					</div>
					<!-- //third section -->
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
									<input type="checkbox" class="checked">
									<span class="span"><a href="?quanly=danhmuc&id=<?php echo $row_category_sidebar['category_id'] ?>">
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

<!-- middle section -->
<div class="join-w3l1 py-sm-5 py-4">
	<div class="container py-xl-4 py-lg-2">
		<div class="row">
			<div class="col-lg-6">
				<div class="join-agile text-left p-4">
					<div class="row">
						<div class="col-sm-7 offer-name">
							<h6>Sang trọng và lấp lánh</h6>
							<h4 class="mt-2 mb-3">Thương hiệu đồng hồ</h4>
							<p>Giảm giá tới 25% toàn bộ sản phẩm tại cửa hàng</p>
						</div>
						<div class="col-sm-5 offerimg-w3l">
							
							<img src="images/rq.png" alt="" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 mt-lg-0 mt-5">
				<div class="join-agile text-left p-4">
					<div class="row ">
						<div class="col-sm-7 offer-name">
							<h6>1 chiếc mũ</h6>
							<h4 class="mt-2 mb-3">Màu đen</h4>
							<p>Miễn phí vận chuyển đơn hàng trên 150k</p>
						</div>
						<div class="col-sm-5 offerimg-w3l">
					<img src="images/h1.png" alt="" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- middle section -->
