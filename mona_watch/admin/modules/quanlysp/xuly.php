<?php
    include('../../config/connect.php');

    $tensanpham = $_POST['tensanpham'];
    $masp = $_POST['masp'];
    $giaspold = $_POST['giaspold'];
    $giaspnew = $_POST['giaspnew'];
    $soluong = $_POST['soluong'];
    $tomtat = $_POST['tomtat'];
    $noidung = $_POST['noidung'];
    // Xử lý hình ảnh
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $hinhanh = time().'_'.$hinhanh; 
    $tinhtrang = $_POST['tinhtrang'];
    $danhmuc = $_POST['danhmuc'];


    if (isset($_POST['themsanpham'])) {
        // Thêm sản phẩm
        $sql_them = "INSERT INTO tbl_sanpham(tensanpham, masp, giaspold, giaspnew, soluong, tomtat, noidung, hinhanh, tinhtrang, id_danhmuc) 
        VALUE ('".$tensanpham."','".$masp."','".$giaspold."','".$giaspnew."','".$soluong."','".$tomtat."','".$noidung."','".$hinhanh."','".$tinhtrang."','".$danhmuc."')";
        mysqli_query ($mysqli, $sql_them);
        move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }elseif(isset($_POST['suasanpham'])) {
        // Sửa sản phẩm
        if($hinhanh!='') {
            move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);

            $sql_sua = "UPDATE tbl_sanpham SET tensanpham='".$tensanpham."', masp='".$masp."', giaspold='".$giaspold."', giaspnew='".$giaspnew."'
            , soluong='".$soluong."', tomtat='".$tomtat."', noidung='".$noidung."', hinhanh='".$hinhanh."', tinhtrang='".$tinhtrang."'
            , id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'";

            // Xóa hình ảnh cũ
            $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
            $query = mysqli_query($mysqli, $sql);
            while($row = mysqli_fetch_array($query)) {
                unlink('uploads/'.$row['hinhanh']);
            }
        }else{
            $sql_sua = "UPDATE tbl_sanpham SET tensanpham='".$tensanpham."', masp='".$masp."', giaspold='".$giaspold."', giaspnew='".$giaspnew."'
            , soluong='".$soluong."', tomtat='".$tomtat."', noidung='".$noidung."', tinhtrang='".$tinhtrang."', id_danhmuc='".$danhmuc."'
            WHERE id_sanpham='$_GET[idsanpham]'";
        }
        mysqli_query ($mysqli, $sql_sua);
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }else{
        // Xóa sản phẩm
        $id = $_GET['idsanpham'];
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        while($row = mysqli_fetch_array($query)) {
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham='".$id."'";
        mysqli_query ($mysqli, $sql_xoa);
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }
?>