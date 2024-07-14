<?php
$sql_category = mysqli_query($con, 'SELECT * FROM danhmuc ORDER BY category_id DESC');
?>
<div class="navbar-inner">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto text-center mr-xl-5">
					<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
						<a class="nav-link" href="index.php">Trang chủ
							<span class="sr-only">(current)</span>
						</a>
					</li>

					<?php
					$sql_category_danhmuc = mysqli_query($con, 'SELECT * FROM danhmuc ORDER BY category_id DESC');
					while ($row_category_danhmuc = mysqli_fetch_array($sql_category_danhmuc)) {
					?>

						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="?quanly=danhmuc&id=<?php echo $row_category_danhmuc['category_id'] ?>" role="button" aria-haspopup="true" aria-expanded="false">
								<?php echo $row_category_danhmuc['category_name'] ?>
							</a>
						</li>
					<?php
					}
					?>
					<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
						<?php
						$sql_danhmuc_tin = mysqli_query($con, "SELECT * FROM danhmuctin ORDER BY danhmuctin_id DESC");

						?>
						<a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Tin tức
						</a>
						<div class="dropdown-menu">
							<?php
							while ($row_danhmuc_tin = mysqli_fetch_array($sql_danhmuc_tin)) {
							?>
								<a class="dropdown-item" href="?quanly=tintuc&id_tin=<?php echo $row_danhmuc_tin['danhmuctin_id']; ?>">
									<?php echo $row_danhmuc_tin['tendanhmuc']; ?></a>
							<?php
							}
							?>
						</div>

					</li>

				</ul>
			</div>
		</nav>
	</div>
</div>
<!-- //navigation -->