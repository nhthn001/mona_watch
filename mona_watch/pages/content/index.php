<?php
    $sql_pro = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc 
    ORDER BY tbl_sanpham.id_sanpham ASC LIMIT 100";
    $query_pro = mysqli_query($mysqli, $sql_pro);
?>
            
            <!-- Đồng hô nam -->
            <div class="grid">
                <div class="content-section">
                    <h2 class="section-heading">ĐỒNG HỒ NAM</h2>
                    
                    <div class="product-list">
                        <div class="grid__row">
                        <?php
                            while($row = mysqli_fetch_array($query_pro)) {
                        ?>
                            <div class="grid__column-3">
                                <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="product">
                                    <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="" class="product-img">
                                    <h2 class="product-heading"><?php echo $row['tensanpham'] ?></h2>

                                    <div class="product-price">
                                        <span class="product-price__old"><?php echo number_format($row['giaspold'],0,',','.') ?></span>
                                        <span class="product-price__current"><?php echo number_format($row['giaspnew'],0,',','.').' đ' ?></span>
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

            <div class="content-offers">
                <div class="offers-transport">
                    <i class="offers-icon fa-solid fa-car-side"></i>

                    <div class="transport-title">
                        <h4 class="transport-text">Miễn Phí Giao Hàng</h4>
                        <span class="transport-dicr">Lorem ipsum dolor sit amet, consectetuer</span>
                    </div>
                </div>

                <div class="offers-gift">
                    <i class="offers-icon fa-solid fa-gift"></i>

                    <div class="transport-title">
                        <h4 class="transport-text">Quà Tặng Đặc Biệt</h4>
                        <span class="transport-dicr">Lorem ipsum dolor sit amet, consectetuer</span>
                    </div>
                </div>

                <div class="offers-save-money">
                    <i class="offers-icon fa-solid fa-piggy-bank"></i>

                    <div class="transport-title">
                        <h4 class="transport-text">Tiết Kiệm Khi Mua Ở Mona</h4>
                        <span class="transport-dicr">Lorem ipsum dolor sit amet, consectetuer</span>
                    </div>
                </div>
            </div>

            <!-- Đồng hồ nữ -->
            <div class="grid">
                <div class="content-section">
                    <h2 class="section-heading">ĐỒNG HỒ NỮ</h2>
                    
                    <div class="product-list">
                        <div class="grid__row">
                            <div class="grid__column-3">
                                <div class="product">
                                    <img src="./assets/images/pro-women.jpg" alt="" class="product-img">
                                    <h2 class="product-heading">ĐỒNG HỒ TISSOT T41.1.183.34 NỮ TỰ ĐỘNG DÂY INOX</h2>

                                    <div class="product-price">
                                        <span class="product-price__current">17.640.300 đ</span>
                                    </div>
                                </div>
                            </div>

                            <div class="grid__column-3">
                                <div class="product">
                                    <img src="./assets/images/pro-women1.jpg" alt="" class="product-img">
                                    <h2 class="product-heading">ĐỒNG HỒ CITIZEN EX1410-88A NỮ ECO-DRIVE DÂY INOX</h2>

                                    <div class="product-price">
                                        <span class="product-price__old">6.800.000 đ</span>
                                        <span class="product-price__current">6.120.000 đ</span>
                                    </div>
                                    
                                    <div class="product-sale">
                                        <p class="product-sale-text">10%</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid__column-3">
                                <div class="product">
                                    <img src="./assets/images/pro-women2.jpg" alt="" class="product-img">
                                    <h2 class="product-heading">ĐỒNG HỒ OGIVAL OG385-032LW-T NỮ PIN DÂY INOX</h2>

                                    <div class="product-price">
                                        <span class="product-price__current">9.384.000 đ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid__column-3">
                                <div class="product">
                                    <img src="./assets/images/pro-women3.jpg" alt="" class="product-img">
                                    <h2 class="product-heading">ĐỒNG HỒ CANDINO C4433/3 NỮ PIN DÂY INOX</h2>

                                    <div class="product-price">
                                        <span class="product-price__old">4.440.000 đ</span>
                                        <span class="product-price__current">3.996.000 đ</span>
                                    </div>
                                    
                                    <div class="product-sale">
                                        <p class="product-sale-text">10%</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid__column-3">
                                <div class="product">
                                    <img src="./assets/images/pro-women4.jpg" alt="" class="product-img">
                                    <h2 class="product-heading">ĐỒNG HỒ SKAGEN 885SSLB NỮ PIN DÂY DA</h2>

                                    <div class="product-price">
                                        <span class="product-price__current">5.900.000 đ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid__column-3">
                                <div class="product">
                                    <img src="./assets/images/pro-women5.jpg" alt="" class="product-img">
                                    <h2 class="product-heading">ĐỒNG HỒ DANIEL WELLINGTON DW00500001 NỮ PIN DÂY INOX</h2>

                                    <div class="product-price">
                                        <span class="product-price__old">4.700.000 đ</span>
                                        <span class="product-price__current">4.230.000 đ</span>
                                    </div>

                                    <div class="product-sale">
                                        <p class="product-sale-text">15%</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid__column-3">
                                <div class="product">
                                    <img src="./assets/images/pro-women6.jpg" alt="" class="product-img">
                                    <h2 class="product-heading">ĐỒNG HỒ CASIO GA-100DE-2ADR NỮ PIN DÂY NHỰA</h2>

                                    <div class="product-price">
                                        <span class="product-price__old">20.217.000 đ</span>
                                        <span class="product-price__current">14.195.300 đ</span>
                                    </div>

                                    <div class="product-sale">
                                        <p class="product-sale-text">30%</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid__column-3">
                                <div class="product">
                                    <img src="./assets/images/pro-women7.jpg" alt="" class="product-img">
                                    <h2 class="product-heading">ĐỒNG HỒ CASIO LA670WL-1BDF NỮ PIN DÂY DA</h2>

                                    <div class="product-price">
                                        <span class="product-price__old">851.000 đ</span>
                                        <span class="product-price__current">766.300 đ</span>
                                    </div>
                                    
                                    <div class="product-sale">
                                        <p class="product-sale-text">10%</p>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div> 
                </div>
            </div>

            <div class="product-hot">
                <div class="product-romance">
                    <h2 class="product-romance__heading">Romance<br>
                    in the air</h2>

                    <div class="product-romance__details">
                        <span class="product-roamnce__details-text">DETAILS</span>
                    </div>
                </div>

                <div class="product-digital">
                    <h2 class="product-digital__heading">Analog & Digital</h2>
                    <h4 class="product-digital__sub-heading">SMART WATCHES <br>
                    LATEST FASHION STATEMENT</h4>

                    <div class="product-digital__details">
                        <span class="product-digital__details-text">DETAILS</span>
                    </div>
                </div>
            </div>

            <!-- Đồng hồ đôi -->
            <div class="grid">
                <div class="content-section">
                    <h2 class="section-heading">ĐỒNG HỒ ĐÔI</h2>

                    <div class="product-list">
                        <div class="grid__row">
                            <div class="grid__column-3">
                                <div class="product">
                                    <img src="./assets/images/couple.jpg" alt="" class="product-img">
                                    <h2 class="product-heading product-heading__webkit">ĐỒNG HỒ ĐÔI ALEXANDRE CHRISTIE AC8C26-1LK TRẮNG</h2>

                                    <div class="product-price">
                                        <span class="product-price__current">17.640.300 đ</span>
                                    </div>
                                </div>
                            </div>

                            <div class="grid__column-3">
                                <div class="product">
                                    <img src="./assets/images/couple1.jpg" alt="" class="product-img">
                                    <h2 class="product-heading">ĐỒNG HỒ ĐÔI SUNRISE SG – SL1085.1601 PIN DÂY INOX</h2>

                                    <div class="product-price">
                                        <span class="product-price__old">6.800.000 đ</span>
                                        <span class="product-price__current">6.120.000 đ</span>
                                    </div>
                                    
                                    <div class="product-sale">
                                        <p class="product-sale-text">10%</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid__column-3">
                                <div class="product">
                                    <img src="./assets/images/couple2.jpg" alt="" class="product-img">
                                    <h2 class="product-heading">ĐỒNG HỒ ĐÔI OLYMPIA STAR OPA58012-07MSK TRẮNG</h2>

                                    <div class="product-price">
                                        <span class="product-price__current">9.384.000 đ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid__column-3">
                                <div class="product">
                                    <img src="./assets/images/couple3.jpg" alt="" class="product-img">
                                    <h2 class="product-heading">ĐỒNG HỒ ĐÔI CITIZEN BD0030-00A – ER0190-00A PIN DÂY DA</h2>

                                    <div class="product-price">
                                        <span class="product-price__old">4.440.000 đ</span>
                                        <span class="product-price__current">3.996.000 đ</span>
                                    </div>
                                    
                                    <div class="product-sale">
                                        <p class="product-sale-text">10%</p>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div> 
                </div>
            </div>

            <!-- Phụ kiện -->
            <div class="grid">
                <div class="content-section">
                    <h2 class="section-heading">PHỤ KIỆN</h2>

                    <div class="product-list">
                        <div class="grid__row">
                            <div class="grid__column-3">
                                <div class="product">
                                    <img src="./assets/images/acces.jpg" alt="" class="product-img">
                                    <h2 class="product-heading product-heading__webkit">Dịch Vụ Khắc Laser Logo Công Ty Lên Đồng Hồ</h2>
                                </div>
                            </div>

                            <div class="grid__column-3">
                                <div class="product">
                                    <img src="./assets/images/acces1.jpg" alt="" class="product-img">
                                    <h2 class="product-heading">Dịch Vụ In Logo Màu Lên Mặt Số Đồng Hồ</h2>
                                </div>
                            </div>
                            <div class="grid__column-3">
                                <div class="product">
                                    <img src="./assets/images/acces2.jpg" alt="" class="product-img">
                                    <h2 class="product-heading">HỘP LÊN DÂY CÓT TỰ ĐỘNG ZRC DOUBLE-WATCH WINDER EM03201</h2>

                                    <div class="product-price">
                                        <span class="product-price__current">10.500.000 đ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid__column-3">
                                <div class="product">
                                    <img src="./assets/images/acces3.jpg" alt="" class="product-img">
                                    <h2 class="product-heading">DÂY DA ZRC 654 TASMAN OPA58012 - SG 1085</h2>

                                    <div class="product-price">
                                        <span class="product-price__old">710.000 đ</span>
                                        <span class="product-price__current">639.000 đ</span>
                                    </div>
                                    
                                    <div class="product-sale">
                                        <p class="product-sale-text">10%</p>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div> 
                </div>
            </div>

            
            <div class="grid">
                <div class="content-section">
                    <h2 class="section-heading">THÔNG TIN HỮU ÍCH</h2>

                    <div class="content-info">
                        <div class="grid__row">
                            <div class="grid__column-4">
                                <div class="info-img" style="background-image: url('./assets/images/info.jpg');"></div>

                                <div class="info-text">
                                    <h3 class="info-text__heading">Duis luctus elit nisi, et cursus magna...</h3>

                                    <p class="info-text__dicr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus, massa non viverra [...]</p>
                                </div>
                            </div>

                            <div class="grid__column-4">
                                <div class="info-img" style="background-image: url('./assets/images/info1.jpg');"></div>

                                <div class="info-text">
                                    <h3 class="info-text__heading">Mauris tristique pretium tempus...</h3>

                                    <p class="info-text__dicr">Donec tempus eu ligula sed blandit. Vivamus vel enim ac quam iaculis rutrum. [...]</p>
                                </div>
                            </div>

                            <div class="grid__column-4">
                                <div class="info-img" style="background-image: url('./assets/images/info2.jpg');"></div>

                                <div class="info-text">
                                    <h3 class="info-text__heading">Aliquam placerat nisl nec imperdiet...</h3>

                                    <p class="info-text__dicr">n rutrum tempus purus, ut euismod dui facilisis ac. Fusce semper dignissim diam [...]</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>