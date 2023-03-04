<?php
    $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY tbl_sanpham.id_sanpham ASC";
    $query_pro = mysqli_query($mysqli, $sql_pro);
    // Get tên danh mục
    $sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
    $query_cate = mysqli_query($mysqli, $sql_cate);
    $row_title = mysqli_fetch_array($query_cate);
?>

<div class="grid">
                <div class="content-section">
                    <h2 class="section-heading"><?php echo $row_title['tendanhmuc'] ?></h2>

                    
                    <div class="product-list">
                        <div class="grid__row">
                        <?php
                        while($row_pro = mysqli_fetch_array($query_pro)) {
                        ?>
                            <div class="grid__column-3">
                                <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_danhmuc'] ?>" class="product">
                                    <img src="admin/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" alt="" class="product-img">
                                    <h2 class="product-heading"><?php echo $row_pro['tensanpham'] ?></h2>

                                    <div class="product-price">
                                        <span class="product-price__old"><?php echo number_format($row_pro['giaspold'],0,',','.') ?></span>
                                        <span class="product-price__current"><?php echo number_format($row_pro['giaspnew'],0,',','.').' đ' ?></span>
                                    </div>
                                </a>
                            </div>
                        <?php
                            }
                        ?>
                        </div> 
                    </div>      
                    
                </div>
            </div>