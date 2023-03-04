<?php
    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC";
    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
?>

<div class="header__wrapper">
            <header class="header">
                <div class="header__logo">
                    <a href="index.php" class="header__logo-link">
                        <img src="./assets/images/logo.png" alt="" class="header__logo-img">
                    </a>
                </div>

                <div class="header__nav">
                    <ul class="header__nav-list">
                        <li class="header__nav-item">
                            <a href="index.php?quanly=gioithieu" class="header__nav-item-link">
                                giới thiệu
                            </a>
                        </li>
                        <?php
                            while($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                        ?>
                            <li class="header__nav-item">
                                <a href="index.php?quanly=danhmuc&id=<?php echo $row_danhmuc['id_danhmuc'] ?>" class="header__nav-item-link header__nav-item-link--operate">
                                    <?php echo $row_danhmuc['tendanhmuc'] ?>
                                </a>
                            </li>
                        <?php
                            }
                        ?>

                        <li class="header__nav-item header__nav-item-dad">
                            <a href="index.php?quanly=phukien&id=1" class="header__nav-item-link header__nav-item-link--operate">
                                phụ kiện
                            </a>

                            <div class="header__nav-item-acces">
                                <ul class="header__nav-acces-list">
                                    <li class="header__nav-acces-item">
                                        <a href="" class="header__nav-acces-link">Dây da Hirsch</a>
                                    </li>
                                    <li class="header__nav-acces-item">
                                        <a href="" class="header__nav-acces-link">Dây da SRC</a>
                                    </li>
                                    <li class="header__nav-acces-item">
                                        <a href="" class="header__nav-acces-link">Hộp đồng hồ</a>
                                    </li>
                                    <li class="header__nav-acces-item">
                                        <a href="" class="header__nav-acces-link">D.vụ in Logo trên đồng hồ</a>
                                    </li>
                                    <li class="header__nav-acces-item">
                                        <a href="" class="header__nav-acces-link">Khắc Laser lên đồng hồ</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header__nav-item">
                            <a href="index.php?quanly=tintuc" class="header__nav-item-link header__nav-item-link--operate">
                                tin tức
                            </a>
                        </li>
                        <li class="header__nav-item">
                            <a href="index.php?quanly=lienhe" class="header__nav-item-link header__nav-item-link--operate">
                                liên hệ
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="header__func">
                    <div class="header__func-icon header__func-src">
                        <i class="header__func-src-icon fa-solid fa-magnifying-glass"></i>

                        <div class="header__func-src-btn-wrapper">
                            <div class="header__func-src-btn">
                                <input type="text" class="header__func-btn-btn" placeholder="Tìm kiếm sản phẩm ...">
    
                                <i class="header__btn-icon header__func-src-icon fa-solid fa-magnifying-glass"></i>
                            </div>                     
                        </div>
                    </div>
                    <div class="header__func-icon">
                        <i class="header__func-l-oginicon header__func-src-icon--operate fa-solid fa-user"></i>
                    </div>
                    
                    <a href="index.php?quanly=giohang" class="header__func-icon header__func-cart-list">
                        <i class="header__func-cart-icon header__func-src-icon--operate fa-sharp fa-solid fa-bag-shopping"></i>
                    
                        <div class="header__func-no-cart">
                            <img src="./assets/images/no_cart.png" alt="" class="header__no-cart-img">
                            <p class="header__no-cart-text">Chưa có sản phẩm</p>
                        </div>
                    </a>
                    
                    <?php
                        include('content/giohang.php');
                    ?>
                </div>
            </header>
        </div>