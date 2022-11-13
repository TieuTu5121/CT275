<div class="footer-one">
    <div class="container">
        <div class="footer-one__header">
            <div class="footer-one__header__logo"><a href="<?= ROOT ?>"><img src="<?= ASSETS . THEME ?>images/logo.png"
                        alt="Logo" /></a></div>

            <div class="footer-one__header__social">
                <div class="social-icons -border">
                    <ul>
                        <li><a href="<?php echo Settings::facebook_link(); ?>" style="color: undefined"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a href="<?php echo Settings::twitter_link(); ?>" style="color: undefined"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li><a href="<?php echo Settings::instagram_link(); ?>" style="color: undefined"><i
                                    class="fab fa-instagram"> </i></a></li>
                        <li><a href="<?php echo Settings::youtube_link(); ?>" style="color: undefined"><i
                                    class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-one__body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer__section -info">
                        <h5 class="footer-title">Thông tin liên lạc</h5>
                        <p>Địa chỉ:<span>Đường 3/2, phường Xuân Khánh, Ninh Kiều, Cần Thơ</span></p>
                        <p>Số điện thoại:<span>+84 794 201 716| +84 791 33 011</span></p>
                        <p>Email:<span>Eliah@gmail.com</span></p>
                        <p>Mở cửa:<span>8.00am - 11.00.pm</span></p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer__section -links">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <h5 class="footer-title">Tài khoản</h5>
                                <ul>
                                    <li><a href="#">Tài khoản của tôi</a></li>
                                    <li><a href="wishlist.html">Danh sách yêu thích</a></li>
                                    <li><a href="cart">Giỏ hàng</a></li>
                                    <li><a href="fullwidth-4col">Cửa hàng</a></li>
                                    <li><a href="checkout">Thanh toán</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-6">
                                <h5 class="footer-title">Thông tin</h5>
                                <ul>
                                    <li><a href="about.html">Về chúng tôi</a></li>
                                    <li><a href="contact.html">Nghề nghiệp</a></li>
                                    <li><a href="contact.html">Thông tin giao hàng</a></li>
                                    <li><a href="contact.html">Chính sách bảo mật</a></li>
                                    <li><a href="contact.html">Điều khoản&amp;Điều kiện</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="footer__section -payment">
                        <h5 class="footer-title">Phương thức thanh toán</h5>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit gravida facilisis.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-one__footer">
        <div class=" container">
            <div class="footer-one__footer__wrapper">
                <center>
                    <p> © Copyright 2022 NguyenThanhHao</p>
                </center>

            </div>
        </div>
    </div>
</div>

<div class="drawer drawer-right slide" id="mobile-menu-drawer" tabindex="-1" role="dialog"
    aria-labelledby="drawer-demo-title" aria-hidden="true">
    <div class="drawer-content drawer-content-scrollable" role="document">
        <div class="drawer-body">
            <div class="cart-sidebar">
                <div class="cart-items__wrapper">
                    <div class="navigation-sidebar">
                        <div class="search-box">

                            <form action="<?= ROOT ?>shop/">
                                <input type="text" placeholder="Tìm kiếm" name="find" />
                                <button type="submit"><img src="<?= ASSETS . THEME ?>images/header/search-icon.png"
                                        alt="Search icon" /></button>
                            </form>
                        </div>
                        <div class="navigator-mobile">
                            <ul>
                                <li><a href="<?= ROOT  ?>">Trang chủ</a></li>
                                <li><a href="<?= ROOT . 'shop/' ?>">Sản phẩm</a></li>
                                <li><a href="<?= ROOT . 'blog/' ?>">Blog</a></a></li>
                                <li><a href="<?= ROOT . 'contact/' ?>">Liên hệ</a></li>
                                <li><a href="fullwidth-4col.html">Tài khoản</a></li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--build:js js/main.min.js-->
<script src="<?= ASSETS . THEME ?>js/jquery-3.5.1.min.js"></script>
<script src="<?= ASSETS . THEME ?>js/parallax.min.js"></script>
<script src="<?= ASSETS . THEME ?>js/slick.min.js"></script>
<script src="<?= ASSETS . THEME ?>js/jquery.validate.min.js"></script>
<script src="<?= ASSETS . THEME ?>js/jquery.modal.min.js"></script>
<script src="<?= ASSETS . THEME ?>js/bootstrap-drawer.min.js"></script>
<script src="<?= ASSETS . THEME ?>js/jquery.countdown.min.js"></script>
<script src="<?= ASSETS . THEME ?>js/main.js"></script>
<!--endbuild-->
</body>

</html>