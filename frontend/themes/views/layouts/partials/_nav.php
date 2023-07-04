<?php

/** @var frontend\base\web\View $this */
/** @var ThemeAsset $asset */

use frontend\themes\assets\ThemeAsset;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;

$asset = ArrayHelper::getValue($this->assetBundles, [ThemeAsset::class]);
?>
<!-- Header -->
<header class="header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="/site/index" class="navbar-brand logo">
                    <img src="<?= $asset->baseUrl ?>/img/logo.svg" class="img-fluid" alt="Logo">
                </a>
                <a href="/site/index" class="navbar-brand logo-small">
                    <img src="<?= $asset->baseUrl ?>/img/logo-small.png" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="/site/index" class="menu-logo">
                        <img src="<?= $asset->baseUrl ?>/img/logo.svg" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
                </div>
                <ul class="main-nav">
                    <li class="active"><a href="/site/index">Home</a></li>
                    <li class="has-submenu">
                        <a href="">Listings <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="/listing/listing-grid">Listing Grid</a></li>
                            <li><a href="/listing/listing-list">Listing List</a></li>
                            <li><a href="/listing/listing-details">Listing Details</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="">Pages <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="/pages/about-us">About Us</a></li>
                            <!-- <li class="has-submenu">
                                <a href="javascript:void(0);">Authentication</a>
                                <ul class="submenu">
                                    <li><a href="/site/signup">Signup</a></li>
                                    <li><a href="/site/login">Signin</a></li>
                                    <li><a href="/site/reset-password">Reset Password</a></li>
                                    <li><a href="/site/forgot-password">Forgot Password</a></li>
                                </ul>
                            </li> -->
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Booking</a>
                                <ul class="submenu">
                                    <li><a href="/pages/booking-payment">Booking Checkout</a></li>
                                    <li><a href="/pages/booking">Booking</a></li>
                                    <li><a href="/pages/invoice-details">Invoice Details</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Error Page</a>
                                <ul class="submenu">
                                    <li><a href="/site/error-404">404 Error</a></li>
                                    <li><a href="/site/error-500">500 Error</a></li>
                                </ul>
                            </li>
                            <li><a href="/pages/pricing">Pricing</a></li>
                            <li><a href="/pages/faq">FAQ</a></li>
                            <li><a href="/pages/gallery">Gallery</a></li>
                            <li><a href="/pages/our-team">Our Team</a></li>
                            <li><a href="/pages/testimonial">Testimonials</a></li>
                            <li><a href="/pages/terms-condition">Terms & Conditions</a></li>
                            <li><a href="/pages/privacy-policy">Privacy Policy</a></li>
                            <li><a href="/pages/maintenance">Maintenance</a></li>
                            <li><a href="/pages/coming-soon">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="">Blog <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="/blog/blog-list">Blog List</a></li>
                            <li><a href="/blog/blog-grid">Blog Grid</a></li>
                            <li><a href="/blog/blog-details">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="/contact/contact-us">Contact</a></li>
                    <li class="login-link">
                        <a href="/site/signup" data-method="get">Sign Up</a>
                    </li>
                    <li class="login-link">
                        <?= Html::a('Sign in', ['/site/login'], ['data-method' => 'get']) ?>

                    </li>
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                <?php if (Yii::$app->user->isGuest) : ?>
                    <li class="nav-item">
                        <a href="/site/login" class="nav-link header-login" data-method="get"><i class="fa-regular fa-user"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="/site/signup" class="nav-link header-reg" data-method="get"><i class="fa-solid fa-lock"></i> Signup</a>
                    </li>
                <?php else : ?>

                    <li class="nav-item">
                        <div class="main-menu-wrapper">
                            <ul class="main-nav">
                                <li class="has-submenu">
                                    <a href="javascript:void(0);" class="header-login" style="padding: 12px"><?= '<i class="fa-regular fa-user"></i> ' . Yii::$app->user->identity->username . '   <i class="fas fa-chevron-down"></i>' ?></a>
                                    <ul class="submenu login-submenu">
                                        <li><a href="/site/reset-password">Reset Password</a></li>
                                        <li><a href="/site/forgot-password">Forgot Password</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a href="/site/logout" class="nav-link header-reg" data-method="post"><i class="fa-solid fa-lock"></i> logout</a>
                    </li>
                <?php endif; ?>



                <!-- <li class="nav-item">
                    <= Html::a('<i class="fa-regular fa-user"></i> Login', ['/site/login'], ['class' => 'nav-link header-login', 'data-method' => 'get']) ?>

                </li>
                <li class="nav-item">
                    <= Html::a('<i class="fa-solid fa-lock"></i> Signup', ['/site/signup'], ['class' => 'nav-link header-reg', 'data-method' => 'get']) ?>
                </li> -->
            </ul>
        </nav>
    </div>
</header>
<!-- /Header -->