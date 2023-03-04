<?php
    $sql_chitiet = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc 
    AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1 ";
    $query_chitiet = mysqli_query($mysqli, $sql_chitiet);
    while($row_chitiet = mysqli_fetch_array($query_chitiet)) {
?>

    <div class="grid">
        <div class="grid__full-width">
            <div class="details-pro">
                <div class="details-pro_img">
                    <img src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" alt="" class="details-img">
                </div>
                
                <div class="details-pro_desc">
                    <form action="pages/content/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>" method="POST">
                        <h3 class="pro_desc-heading"><?php echo $row_chitiet['tensanpham'] ?></h3>
                        <p>Mã sản phẩm: <?php echo $row_chitiet['masp'] ?></p>
                        <p>Giá cũ sản phẩm: <?php echo number_format($row_chitiet['giaspold'],0,',','.') ?></p>
                        <p>Giá mới sản phẩm: <?php echo number_format($row_chitiet['giaspnew'],0,',','.'). ' đ' ?></p>
                        <p>Số lượng: <?php echo $row_chitiet['soluong'] ?></p>
                        <p>Danh mục: <?php echo $row_chitiet['tendanhmuc'] ?></p>
                        <input type="submit" name="themgiohang" value="Thêm giỏ hàng" class="pro_decs-btn">
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
    }
?>