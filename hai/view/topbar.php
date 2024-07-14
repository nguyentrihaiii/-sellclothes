<?php
//session_destroy();
//unset('dangnhap');
if (isset($_POST['dangnhap_home'])) {
	$username = $_POST['email_login'];
	$password = md5($_POST['password_login']);
	if ($username == '' || $password == '') {
		echo "<script> alert('Bạn đang để trống xin mời nhập vào')</script>";
	} else {
		$sql_select_login = mysqli_query($con, "SELECT * FROM khachhang WHERE email = '$username' AND password = '$password' LIMIT 1");
		$count = mysqli_num_rows($sql_select_login);
		$row_dangnhap = mysqli_fetch_array($sql_select_login);
		if ($count > 0) {
			$_SESSION['dangnhap_home'] = $row_dangnhap['name'];
			$_SESSION['khachhang_id'] = $row_dangnhap['khachhang_id'];
			header('location: index.php?quanly=giohang');
		} else {
			echo "<script> alert('Tài khoản hoặc mật khẩu bị sai')</script>";
		}
	}
} else if (isset($_POST['dangky_home'])) {
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$giaohang = $_POST['giaohang'];


	$sql_khachhang = mysqli_query($con, "INSERT INTO khachhang(name,phone,address,email,giaohang,note,password)
			VALUES ('$name','$phone','$address','$email','$giaohang','$note','$password')");
	$sql_select_khachhang = mysqli_query($con, "SELECT * FROM khachhang ORDER BY khachhang_id DESC LIMIT 1");
	$row_khachhang = mysqli_fetch_array($sql_select_khachhang);
	$_SESSION['dangnhap_home'] = $name;
	$_SESSION['khachhang_id'] = $row_khachhang['khachhang_id'];
	header("location: index.php?quanly=giohang");
}

if (isset($_GET['dangxuat'])) {
    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the home page or login page
    header('location: index.php'); // Change 'index.php' to the appropriate URL
    exit();
}
?>

<!-- Add this HTML/PHP code where you want the logout link/button to appear -->
<?php
if (isset($_SESSION['dangnhap_home'])) {
    echo '<a href="?dangxuat" style="color: red;"></a>';
}
?>
<!-- top-header -->
<div class="agile-main-top">
	<div class="container-fluid">
		<div class="row main-top-w3l py-2">
			<div class="col-lg-4 header-most-top">
				<p class="text-white text-lg-left text-center">PHONG CÁCH MỚI, ĐẲNG CẤP MỚI
					<i class="fas fa-shopping-cart ml-1"></i>
				</p>
			</div>
			<div class="col-lg-8 header-right mt-lg-0 mt-2">
				<!-- header lists -->
<ul>
    <?php if (isset($_SESSION['dangnhap_home'])) { ?>
        <li 
        
class="text-center border-right text-white">
            <a href="index.php?quanly=xemdonhang&khachhang=<?php echo $_SESSION['khachhang_id']; ?>" class="text-white">
                <i class="fas fa-truck mr-2"></i>Xem đơn hàng: <?php echo $_SESSION['dangnhap_home']; ?></a>
        </li>
        <li class="text-center border-right text-white">
            <a href="?dangxuat" style="color: white;">Đăng xuất</a>
        </li>
    <?php } else { ?>
        <li 
    
class="text-center border-right text-white">
            <i class="fas fa-phone mr-2"></i> 0826807777
        </li>
        <li class="text-center border-right text-white">
            <a href="#" data-toggle="modal" data-target="#dangnhap" class="text-white">
                <i class="fas fa-sign-in-alt mr-2"></i> Đăng nhập </a>
        </li>
        <li class="text-center text-white">
            <a href="#" data-toggle="modal" data-target="#dangky" class="text-white">
                <i class="fas fa-sign-out-alt mr-2"></i> Đăng ký </a>
        </li>
    <?php } ?>
</ul>
<!-- //header lists -->
			</div>
		</div>
	</div>
</div>

<!-- modals -->
<!-- log in -->
<div class="modal fade" id="dangnhap" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-center">Đăng nhập</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="#" method="post">
					<div class="form-group">
						<label class="col-form-label">Email</label>
						<input type="text" class="form-control" placeholder=" " name="email_login">
					</div>
					<div class="form-group">
						<label class="col-form-label">Mật khẩu</label>
						<input type="password" class="form-control" placeholder=" " name="password_login">
						<input type="hidden" class="form-control" placeholder=" " name="giaohang" value="0">
					</div>
					<div class="right-w3l">
						<input type="submit" class="form-control" name="dangnhap_home" value="Đăng nhập">
					</div>
					<p class="text-center dont-do mt-3">Chưa có tài khoản
						<a href="#" data-toggle="modal" data-target="#dangky">
							Đăng ký</a>
					</p>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- register -->
<div class="modal fade" id="dangky" tabindex="-1" role="dialog" aria-hidden="true">
	<!-- Add this script at the end of your HTML body or in the head section -->
<!-- Add this script at the end of your HTML body or in the head section -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get the form element
        var registrationForm = document.querySelector('#dangky form');

        // Add an event listener to the form submission
        registrationForm.addEventListener('submit', function (event) {
            // Validate the phone number to allow only numeric input and exactly 9 digits
            var phoneInput = document.querySelector('input[name="phone"]');
            var phoneValue = phoneInput.value;

            // Regular expression to match exactly 9 digits
            var numericPattern = /^[0-9]{9}$/;

            if (!numericPattern.test(phoneValue)) {
                alert('vui lòng nhập số điện thoại hợp lệ và ít nhất 9 số.');
                event.preventDefault(); // Prevent form submission
            }
        });
    });
</script>


	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Đăng ký</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="" method="post">
					<div class="form-group">
						<label class="col-form-label">Tên khách hàng</label>
						<input type="text" class="form-control" placeholder=" " name="name" required="">
					</div>
					<div class="form-group">
						<label class="col-form-label">Email</label>
						<input type="email" class="form-control" placeholder=" " name="email" required="">
					</div>
					<div class="form-group">
						<label class="col-form-label">Mật khẩu</label>
						<input type="password" class="form-control" placeholder=" " name="password" id="password1" required="">
					</div>
					<div class="form-group">
						<label class="col-form-label">Nhập lại mật khẩu</label>
						<input type="password" class="form-control" placeholder=" " name="confirm Password" id="password2" required="">
					</div>
					<div class="form-group">
						<label class="col-form-label">Phone</label>
						<input type="text" class="form-control" placeholder=" " name="phone" id="password1" required="">
					</div>
					<div class="form-group">
						<label class="col-form-label">Address</label>
						<input type="text" class="form-control" placeholder=" " name="address" id="password1" required="">
					</div>
					<div class="right-w3l">
						<input type="submit" class="form-control" name="dangky_home" value="Đăng ký">
					</div>
					<div class="sub-w3l">
						<div class="custom-control custom-checkbox mr-sm-2">
							<input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
							<label class="custom-control-label" for="customControlAutosizing2">Tôi đồng ý tất cả điều khoản</label>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- //modal -->
<!-- //top-header -->

<!-- header-bottom-->
<div class="header-bot">
	<div class="container">
		<div class="row header-bot_inner_wthreeinfo_header_mid">
			<!-- logo -->
			<div class="col-md-3 logo_agile">

				<a href="index.php" class="font-weight-bold font-italic">
					<img src="images/abc.jpg" alt=" " class="img-flude"  width="100px">
				</a>

			</div>
			<!-- //logo -->
			<!-- header-bot -->
			<div class="col-md-9 header mt-4 mb-md-0 mb-4">
				<div class="row">
					<!-- search -->
					<div class="col-10 agileits_search">
						<form class="form-inline" action="index.php?quanly=timkiem" method="POST">
							<input class="form-control mr-sm-2" type="search" name="search_product" placeholder="Tìm kiếm" aria-label="Search" required>
							<button class="btn my-2 my-sm-0" name="search_btn" type="submit">Tìm kiếm</button>
						</form>
					</div>
					<!-- //search -->
					<!-- cart details -->
					<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
						<div class="wthreecartaits wthreecartaits2 cart cart box_1">
							<form action="index.php?quanly=giohang" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button class="btn w3view-cart" type="submit" name="submit" value="">
									<i class="fas fa-cart-arrow-down"></i>
								</button>
							</form>
						</div>
					</div>
					<!-- //cart details -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- shop locator (popup) -->
<!-- //header-bottom -->
<!-- navigation -->