
<?php
include 'header.php';
if (!empty($_SESSION['current_user'])) {
    ?>
    <div class="main-content">
        <h1>Xóa tin tức</h1>
        <div id="content-box">
            <?php
            $error = false;
            if (isset($_GET['id']) && !empty($_GET['id'])) {
                include '../connect_db.php';
                $result = mysqli_query($con, "DELETE FROM `news` WHERE `id` = " . $_GET['id']);
                if (!$result) {
                    $error = "Không thể xóa tin tức.";
                }
                mysqli_close($con);
                if ($error !== false) {
                    ?>
                    <div id="error-notify" class="box-content">
                        <h2>Thông báo</h2>
                        <h4><?= $error ?></h4>
                        <a href="./news_listing.php">Danh sách tin tức</a>
                    </div>
        <?php } else { ?>
                    <div id="success-notify" class="box-content">
                        <h2>Xóa tin tức thành công</h2>
                        <a href="./news_listing.php">Danh sách tin tức</a>
                    </div>
                <?php } ?>
    <?php } ?>
        </div>
    </div>
    <?php
}

?>