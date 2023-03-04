<?php
    session_start();
    include('../../admin/config/connect.php');
    // Thêm số lượng sản phẩm
    // Trừ số lượng sản phẩm
    // Xóa sản phâm
    // Thêm sản phẩm vào giỏ hàng
    if(isset($_POST['themgiohang'])) {
        $id = '$_GET[idsanpham]';
        $soluong = 1;
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham='".$id."' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($query);
        if($row) {
            $new_product = array(array('tensanpham'=>$row['tensanpham'], 'id'=>$id, 'masp'=>$row['masp'], 'soluong'=>$soluong, 'giaspold'=>$row
            ['giaspold'], 'giaspnew'=>$row['giaspnew'], 'hinhanh'=>$row['hinhanh']));
            // Kiểm tra session giỏ hàng tồn tại
            if(isset($_SESSION['cart'])) {
                $found = false;
                foreach($_SESSION['cart'] as $cart_item) {
                    if($cart_item['id'] == $id) {
                        $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item, 'masp'=>$row['masp'], 'soluong'=>$cart_item['soluong']+1, 'giaspold'=>$row
                        ['giaspold'], 'giaspnew'=>$cart_item['giaspnew'], 'hinhanh'=>$cart_item['hinhanh']);

                        $found = true;
                    }else{
                        $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item, 'masp'=>$row['masp'], 'soluong'=>$cart_item['soluong'], 'giaspold'=>$row
                        ['giaspold'], 'giaspnew'=>$cart_item['giaspnew'], 'hinhanh'=>$cart_item['hinhanh']);
                    }
                }
            }else{
                $_SESSION['cart'] = $new_product;
            }
        }
        header('Location:index.php?giohang.php');
    }
?>