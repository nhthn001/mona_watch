<p>Thêm sản phẩm</p>
<table border ="1" width ="50%" style="border-collapse: collapse;" >
    <form action="modules/quanlysp/xuly.php" method="POST" enctype="multipart/form-data">
        <tr>                                                                              
            <th colspan="2">Điền tên sản phẩm</th>
        </tr>
        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" name="tensanpham" ></td>
        </tr>
        <tr>
            <td>Mã sản phẩm</td>
            <td><input type="text" name="masp" ></td>
        </tr>
        <tr>
            <td>Giá sản phẩm (old)</td>
            <td><input type="text" name="giaspold" ></td>
        </tr>
        <tr>
            <td>Giá sản phẩm (new)</td>
            <td><input type="text" name="giaspnew" ></td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input type="text" name="soluong" ></td>
        </tr>
        <tr>
            <td>Tóm tắt</td>
            <td><textarea name="tomtat" rows="5" cols="50" style="resize: none"></textarea></td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea name="noidung" rows="5" cols="50" style="resize: none"></textarea></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanh" ></td>
        </tr>
        </tr>
            <td>Danh mục sản phẩm</td>
            <td>
                <select name="danhmuc">
                    <?php
                    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC";
                    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                    while($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                    ?>
                    <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        </tr>
            <td>Tình trạng</td>
            <td>
                <select name="tinhtrang">
                    <option value="1">Kích hoạt</option>
                    <option value="0">Ẩn</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm" ></td>
        </tr>                                             
    </form>
</table>