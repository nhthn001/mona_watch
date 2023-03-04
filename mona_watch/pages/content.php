<content class="content">
    <?php
        if(isset($_GET['quanly'])) {
            $tam = $_GET['quanly'];
        } else {
            $tam ="";
        }
        if($tam == ('gioithieu')) {
            include('content/gioithieu.php');
        } elseif ($tam == ('danhmuc')) {
            include('content/danhmuc.php');
        } elseif ($tam == ('phukien')) {
            include('content/phukien.php');
        } elseif ($tam == ('tintuc')) {
            include('content/tintuc.php');
        } elseif ($tam == ('lienhe')) {
            include('content/lienhe.php');
        } elseif ($tam == ('giohang')) {
            include('content/giohang.php');
        } elseif ($tam == ('sanpham')) {
            include('content/sanpham.php');
        }else {
            include('content/index.php');
        }
    ?>
</content>