
<?php
include 'header.php';
if (!empty($_SESSION['current_user'])) {
    ?>
    <div class="main-content">
        <h1><?= !empty($_GET['id']) ? ((!empty($_GET['task']) && $_GET['task'] == "copy") ? "Copy tin tức" : "Sửa tin tức") : "Thêm tin tức" ?></h1>
        <div id="content-box">
            <?php
            if (isset($_GET['action']) && ($_GET['action'] == 'add' || $_GET['action'] == 'edit')) {
                if (isset($_POST['chude']) && !empty($_POST['chude']) && isset($_POST['noidung']) && !empty($_POST['noidung'])) {
                   
                    if (empty($_POST['chude'])) {
                        $error = "Bạn phải nhập tên tin tức";
                    } elseif (empty($_POST['noidung'])) {
                        $error = "Bạn phải nhập nội dung tin tức";
                    } 
                    
                    
                    if (!isset($error)) {
                        if ($_GET['action'] == 'edit' && !empty($_GET['id'])) { //Cập nhật lại tin tức                            
                            $result = mysqli_query($con, "UPDATE `news` SET `chude` = '".$_POST['chude']."', `noidung` = '".$_POST['noidung']."',   WHERE `news`.`id` = ".$_GET['id'].";");
                        } else { //Thêm tin tức
                            $result = mysqli_query($con, "INSERT INTO `news` (`id`, `chude`, `noidung`) VALUES (NULL, '" . $_POST['chude'] . "', '" . $_POST['noidung'] . "');");
                        }
                        if (!$result) { //Nếu có lỗi xảy ra
                            $error = "Có lỗi xảy ra trong quá trình thực hiện.";
                        } 
                    }
                } else {
                    $error = "Bạn chưa nhập nội dung tin tức.";
                }
                ?>
                <div class = "container">
                    <div class = "error"><?= isset($error) ? $error : "Cập nhật thành công" ?></div>
                    <a href = "news_listing.php">Quay lại danh sách tin tức</a>
                </div>
                <?php
            } else {
                $result = mysqli_query($con, "SELECT * FROM `news` ORDER BY `news`.`thoigian` ASC");
                
                
                //Sửa tin tức
                if (!empty($_GET['id'])) {
                    $result = mysqli_query($con, "SELECT * FROM `news` WHERE `id` = " . $_GET['id']);
                    $currentMenu = $result->fetch_assoc();
                }
                ?>
                <form id="editing-form" method="POST" action="<?= (!empty($currentMenu) && !isset($_GET['task'])) ? "?action=edit&id=" . $_GET['id'] : "?action=add" ?>"  enctype="multipart/form-data">
                    <input type="submit" title="Lưu tin tức" value="" />
                    <div class="clear-both"></div>
                    <div class="wrap-field">
                        <label>Chủ đề tin tức: </label>
                        <input type="text" name="chude" value="<?= (!empty($currentMenu) ? $currentMenu['chude'] : "") ?>" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        
                       
                        
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Nội dung: </label>
                        <textarea name="noidung" id="product-content"><?= (!empty($news) ? $news['noidung'] : "") ?></textarea>
                        <div class="clear-both"></div>
                    </div>
                    
                        <div class="clear-both"></div>
                    </div>

                    
                </form>
                <div class="clear-both"></div>
            <?php } ?>
        </div>
    </div>

    <?php
}

?>