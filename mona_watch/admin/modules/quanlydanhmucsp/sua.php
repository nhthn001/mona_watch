<?php
  $sql_sua_sp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
  $query_sua_sp = mysqli_query ($mysqli, $sql_sua_sp);
?>

<p>Sửa danh mục phụ kiện</p>
<table border ="1" width ="50%" style="border-collapse: collapse;" >
    <form action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>" method="POST">
        <?php
            while($dong = mysqli_fetch_array($query_sua_sp)) {
        ?>

        <tr>
            <td>Tên phụ kiện</td>
            <td><input type="text" name="tendanhmuc" value="<?php echo $dong['tendanhmuc'] ?>"></td>
        </tr>
            <td>Thứ tự</td>
            <td><input type="text" name="thutu" value="<?php echo $dong['thutu'] ?>"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="themdanhmuc" value="Sửa danh mục sản phẩm" ></td>
        </tr>     
        
        <?php
            }
        ?>
    </form>
</table>