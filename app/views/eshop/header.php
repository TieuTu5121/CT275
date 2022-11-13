<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?= $data['page_title'] ?></title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;400;500;700;900&amp;display=swap" />
    <link rel="shortcut icon" type="image/png" href="<?= ASSETS . THEME ?>images/logo-removebg.png" />
    <!--build:css css/styles.min.css-->
    <link rel="stylesheet" href="<?= ASSETS . THEME ?>css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link rel="stylesheet" href="<?= ASSETS . THEME ?>css/slick.min.css" />
    <link rel="stylesheet" href="<?= ASSETS . THEME ?>css/fontawesome.css" />
    <link rel="stylesheet" href="<?= ASSETS . THEME ?>css/jquery.modal.min.css" />
    <link rel="stylesheet" href="<?= ASSETS . THEME ?>css/bootstrap-drawer.min.css" />
    <link rel="stylesheet" href="<?= ASSETS . THEME ?>css/style.css" />
    <!--endbuild-->
</head>

<body>
    <div class="top-nav -style-1">
        <div class="container">
            <div class="top-nav__wrapper">
                <div class="top-nav-social">
                    <div class="social-icons -white">
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

                <div class="top-nav-selections">
                    <?php if (isset($user_data) && is_object($user_data)) { ?>
                    <div class="top-nav-selections__item">
                        <a href="<?= ROOT . 'profile/'.$user_data->url_address ?>"><?= $user_data->name ?>>></a>


                    </div>
                    <?php } else { ?>
                    <div class="top-nav-selections__item"><a href="<?= ROOT . 'login' ?>">Đăng nhập</a></div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
    <div class="menu -style-6">
        <div class=" container">
            <div class="menu__wrapper">
                <div class="menu-functions "><a class="menu-icon -search" href="#"><img
                            src="<?= ASSETS . THEME ?>images/header/search-icon.png" alt="Search icon" /></a>
                    <div class="search-box">
                        <form action="<?= ROOT ?>shop/">
                            <input type="text" placeholder="Tìm kiếm" name="find" />
                            <button type="submit"><img src="<?= ASSETS . THEME ?>images/header/search-icon.png"
                                    alt="Search icon" /></button>
                        </form>
                    </div>
                </div>
                <div class="navigator">
                    <ul class="navigator_part -left">
                        <li><a href="<?= ROOT . 'shop/' ?>">Sản phẩm</a></li>



                    </ul><a class="menu__wrapper__logo" href="<?= ROOT ?>"><img
                            src="<?= ASSETS . THEME ?>images/logo-removebg.png" alt="Logo-logo-removebg" /></a>
                    <ul class="navigator_part -right">

                        <li><a href="<?= ROOT . 'contact_us/' ?>">Liên hệ</a></li>
                        <li><a href="<?= ROOT . 'profile/'.$user_data->url_address ?>">Tài khoản</a></li>
                    </ul>
                </div>
                <div class="menu-functions ">
                    <div class=""><a class="" href="<?= ROOT . 'cart' ?>"><img
                                src="<?= ASSETS . THEME ?>images/header/cart-icon.png" alt="Wishlist icon" /></a>
                        <h5>Giỏ hàng</h5>
                    </div><a class="menu-icon -navbar" href="#">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>