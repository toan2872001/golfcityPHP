<head>
<!-- <link rel="stylesheet"  href="../css/admin_style.css" > -->
<script src="../resources/ckeditor/ckeditor.js"></script>
</head>
<?php
include 'header.php';
$config_name = "product";
$config_title = "sản phẩm";
if (!empty($_SESSION['current_user'])) {
    if(!empty($_GET['action']) && $_GET['action'] == 'search' && !empty($_POST)){
        $_SESSION[$config_name.'_filter'] = $_POST;
        header('Location: '.$config_name.'_listing.php');exit;
    }
    if(!empty($_SESSION[$config_name.'filter'])){
        $where = "";
        foreach ($_SESSION[$config_name.'filter'] as $field => $value) {
            if(!empty($value)){
                switch ($field) {
                    case 'name':
                    $where .= (!empty($where))? " AND "."`".$field."` LIKE '%".$value."%'" : "`".$field."` LIKE '%".$value."%'";
                    break;
                    default:
                    $where .= (!empty($where))? " AND "."`".$field."` = ".$value."": "`".$field."` = ".$value."";
                    break;
                }
            }
        }
        extract($_SESSION[$config_name.'filter']);
    }
    $item_per_page = (!empty($_GET['per_page'])) ? $_GET['per_page'] : 10;
    $current_page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
    $offset = ($current_page - 1) * $item_per_page;
    if(!empty($where)){
        $totalRecords = mysqli_query($con, "SELECT * FROM `product` where (".$where.")");
    }else{
        $totalRecords = mysqli_query($con, "SELECT * FROM `product`");
    }
    $totalRecords = $totalRecords->num_rows;
    $totalPages = ceil($totalRecords / $item_per_page);
    if(!empty($where)){
        $products = mysqli_query($con, "SELECT * FROM `product` where (".$where.") ORDER BY `id` DESC LIMIT " . $item_per_page . " OFFSET " . $offset);
    }else{
        $products = mysqli_query($con, "SELECT * FROM `product` ORDER BY `id` DESC LIMIT " . $item_per_page . " OFFSET " . $offset);
    }
    mysqli_close($con);
    ?>

<div class="main-content">
        <h1>Danh sách <?=$config_title?></h1>
        <div class="listing-items">
            <?php if (checkPrivilege($config_name.'_editing.php')) { ?>
            <div class="buttons">
                <a href="./<?=$config_name?>_editing.php">Thêm <?=$config_title?></a>
            </div>
            <?php } ?>
            
            <div class="total-items">
                <span>Có tất cả <strong><?=$totalRecords?></strong> <?=$config_title?> trên <strong><?=$totalPages?></strong> trang</span>
            </div>
            <ul>
                <li class="listing-item-heading">
                    <div class="listing-prop listing-img">Ảnh</div>
                    <div class="listing-prop listing-nameproduct" style="width:427px">Tên <?=$config_title?></div>
                    <?php if (checkPrivilege($config_name.'_delete.php?id=0')) { ?>
                    <div class="listing-prop listing-button">
                        Xóa
                    </div>
                    <?php } ?>
                    <?php if (checkPrivilege($config_name.'_editing.php?id=0')) { ?>
                    <div class="listing-prop listing-button">
                        Sửa
                    </div>
                    <?php } ?>
                    <?php if (checkPrivilege($config_name.'_editing.php?id=0&task=copy')) { ?>
                    <div class="listing-prop listing-button">
                        Copy
                    </div>
                    <?php } ?>
                    <div class="listing-prop listing-time">Ngày tạo</div>
                    
                    <div class="clear-both"></div>
                </li>
                <?php
                while ($row = mysqli_fetch_array($products)) {
                    ?>
                    <li>
                        <div class="listing-prop listing-img"><img src="../<?= $row['image'] ?>" alt="<?= $row['name'] ?>" title="<?= $row['name'] ?>" /></div>
                        <div class="listing-prop listing-name"><?= $row['name'] ?></div>
                        <?php if (checkPrivilege($config_name.'_delete.php?id='.$row['id'])) { ?>
                        <div class="listing-prop listing-button">
                            <a href="./<?=$config_name?>_delete.php?id=<?= $row['id'] ?>">Xóa</a>
                        </div>
                        <?php } ?>
                        <?php if (checkPrivilege($config_name.'_editing.php?id='.$row['id'])) { ?>
                        <div class="listing-prop listing-button">
                            <a href="./<?=$config_name?>_editing.php?id=<?= $row['id'] ?>">Sửa</a>
                        </div>
                        <?php } ?>
                        <?php if (checkPrivilege($config_name.'_editing.php?id='.$row['id'].'&task=copy')) { ?>
                        <div class="listing-prop listing-button">
                            <a href="./<?=$config_name?>_editing.php?id=<?= $row['id'] ?>&task=copy">Copy</a>
                        </div>
                        <?php } ?>
                        <div class="listing-prop listing-time"><?= date('d/m/Y H:i', $row['created_time']) ?></div>
                        
                        <div class="clear-both"></div>
                    </li>
                <?php } ?>
            </ul>
            <?php
            include './pagination.php';
            ?>
            <div class="clear-both"></div>
        </div>
    </div>
</div>
    <?php
}
?>