<?php
if (isset($_GET['id_tin'])) {
    $id_baiviet = $_GET['id_tin'];
} else {
    $id_baiviet = '';
}
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
                <?php
                $sql_tenbaiviet = mysqli_query($con, "SELECT * FROM baiviet WHERE baiviet_id = '$id_baiviet'");
                $row_baiviet = mysqli_fetch_array($sql_tenbaiviet);
                ?>
                <li><?php echo $row_baiviet['tenbaiviet']; ?></li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->

<!-- about -->
<div class="welcome py-sm-5 py-4">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        <?php
        $sql_tenbaiviet1 = mysqli_query($con, "SELECT * FROM baiviet WHERE baiviet_id = '$id_baiviet'");
        $row_baiviet1 = mysqli_fetch_array($sql_tenbaiviet1);
        ?>
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
        <?php echo $row_baiviet1['tenbaiviet'];?></h3>
        <!-- //tittle heading -->
        <?php
            $sql_baiviet = mysqli_query($con,"SELECT * FROM baiviet 
            WHERE baiviet_id = '$id_baiviet'");
            while($row_baiviet = mysqli_fetch_array($sql_baiviet)){
        ?>
        <div class="row">
            <div class="col-lg-12 welcome-left">
                <h4 class="my-sm-3 my-2"><strong><?php echo $row_baiviet['tomtat'];?></strong></h4><br>
                <p style="color:black"><?php echo $row_baiviet['noidung'];?></p>
            </div>
        </div>
        <?php 
            }
        ?>
    </div>
</div>
<!-- //about -->