<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="btm_border">
    <div class="h_bg">
        <div class="wrap">
            <div class="header">
                <div class="logo">
                    <h1><a href="index.html"><img src="/web/images/logo.png" alt=""></a></h1>
                </div>
                <div class="social-icons">
                    <ul>
                        <li><a class="facebook" href="#" target="_blank"> </a></li>
                        <li><a class="twitter" href="#" target="_blank"></a></li>
                        <li><a class="googleplus" href="#" target="_blank"></a></li>
                        <li><a class="pinterest" href="#" target="_blank"></a></li>
                        <li><a class="dribbble" href="#" target="_blank"></a></li>
                        <li><a class="vimeo" href="#" target="_blank"></a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class='h_btm'>
                <div class='cssmenu'>
                    <ul>
                        <li class='active'><a href='/'><span>Home</span></a></li>
                        <li><a href='about.html'><span>About</span></a></li>
                        <li><a href='staff.html'><span>Staff</span></a></li>
                        <li class='has-sub'><a href='service.html'><span>Services</span></a></li>
                        <li class='last'><a href='contact.html'><span>Contact</span></a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="search">
                    <form>
                        <input type="text" value="">
                        <input type="submit" value="">
                    </form>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<!------ Slider_bg ------------>
<div class="slider_bg">
    <div class="wrap">
        <!------ Slider------------>
        <div class="slider">
            <div class="slider-wrapper theme-default">
                <div id="slider" class="nivoSlider">
                    <img src="/web/images/banner1.jpg" data-thumb="images/1.jpg" alt="" />
                    <img src="/web/images/banner2.jpg" data-thumb="images/2.jpg" alt="" />
                    <img src="/web/images/banner3.jpg" data-thumb="images/3.jpg" alt="" />
                </div>
            </div>
        </div>
        <!------End Slider ------------>
        <div class="grids_1_of_3">
            <div class="grid_1_of_3 images_1_of_3">
                <img src="/web/images/icon1.jpg">
                <h3>Lorem Ipsum is simply</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore pariatur.</p>
            </div>
            <div class="grid_1_of_3 images_1_of_3">
                <img src="/web/images/icon2.jpg">
                <h3>Lorem Ipsum is simply</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore pariatur.</p>
            </div>
            <div class="grid_1_of_3 images_1_of_3">
                <img src="/web/images/icon3.jpg">
                <h3>Lorem Ipsum is simply</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore pariatur.</p>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!--main-->
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <div class="content">
                <h2>what our customer says</h2>
                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing</h3>
                <p><a href="details.html"><img src="/web/images/pic1.jpg"></a> Cadipisicing elit,Nam ornare vulputate risus,id volutpat elit porttitor non.In consequat nisi vel lectus dapibus sodales.Nam ornare vulputate risus, id volutpat elit porttitor non. In consequat nisi vel lectus dapibus sodales.Nam ornare vulputate risus, id volutpat elit porttitor non. In consequat nisi vel lectus dapibus sodales.Nam ornare vulputate risus, id volutpat elit porttitor non. In consequat nisi vel lectus dapibus sodales. Pellentesque habitant morbi tristique senectus Nam ornare vulputate risus, id volutpat elit porttitor non. In consequat nisi vel lectus dapibus sodales. PellentesqueNam ornare vulputate risus, id volutpat elit porttitor non. In consequat nisi vel lectus dapibus sodales. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas Pellentesque habitant morbi tristique senectus et netus et malesuada fames. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Nam ornare vulputate risus,id volutpat elit porttitor non. In consequat nisi vel lectus dapibus sodales.Nam ornare vulputate risus, id volutpat elit porttitor non.</p>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="main_btm">
        <div class="wrap">
            <div class="main">
                <div class="gallery">
                    <h3>Our latest projects</h3>
                    <ul>
                        <li><a href="/web/images/gallery1.jpg"><img src="/web/images/gallery1.jpg" alt=""></a><a href="#"></a></li>
                        <li><a href="/web/images/gallery2.jpg"><img src="/web/images/gallery2.jpg" alt=""></a><a href="#"></a></li>
                        <li><a href="/web/images/gallery3.jpg"><img src="/web/images/gallery3.jpg" alt=""></a><a href="#"></a></li>
                        <li><a href="/web/images/gallery4.jpg"><img src="/web/images/gallery4.jpg" alt=""></a><a href="#"></a></li>
                        <li><a href="/web/images/gallery4.jpg"><img src="/web/images/gallery4.jpg" alt=""></a><a href="#"></a></li>
                        <li><a href="/web/images/gallery3.jpg"><img src="/web/images/gallery3.jpg" alt=""></a><a href="#"></a></li>
                        <li><a href="/web/images/gallery5.jpg"><img src="/web/images/gallery5.jpg" alt=""></a><a href="#"></a></li>
                        <li><a href="/web/images/gallery6.jpg"><img src="/web/images/gallery6.jpg" alt=""></a><a href="#"></a></li>
                    </ul>
                </div>
                <div class="terminals">
                    <h3>Testimonials</h3>
                    <p>sed tempor ipsum dolor sit amet,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt aliqua. Ut enim ad minim veniam,consectetur adipisicing elit,sed do eiusmod tempor incididunt magna aliqua. </p>
                    <p>sed tempor Ipsum dolor sit amet,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt aliqua. Ut enim ad minim veniam,consectetur adipisicing elit,sed do eiusmod tempor incididunt magna aliqua. </p>
                    <span><a href="#">- Lorem ipsum</a> USA.</span>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
    </div>
    <!--footer-->
    <div class="footer-bg">
        <div class="wrap">
            <div class="footer">
                <div class="box1">
                    <h4 class="btm">What We Do</h4>
                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. ions from the 1914 below for those  by H. Rackham</p>
                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those The standard chunk of Lorem Ipsum used since the 1500s is reproduced reproduced</p>
                </div>
                <div class="box1">
                    <h4 class="btm">Categories</h4>
                    <nav>
                        <ul>
                            <li><a href="">The standard chunk of Lorem Ipsum used since </a></li>
                            <li><a href="">Duis a augue ac libero euismod viverra sitth</a></li>
                            <li><a href="">Duis a augue ac libero euismod viverra sit </a></li>
                            <li><a href="">The standard chunk of Lorem Ipsum used since </a></li>
                            <li><a href="">Duis a augue ac libero euismod viverra sit </a></li>
                            <li><a href="">The standard chunk of Lorem Ipsum used since </a></li>
                            <li><a href="">Duis a augue ac libero euismod viverra sit </a></li>
                        </ul>
                    </nav>
                </div>
                <div class="box1">
                    <h4 class="btm">Get in touch</h4>
                    <div class="box1_address">
                        <p>500 Lorem Ipsum Dolor Sit,</p>
                        <p>22-56-2-9 Sit Amet, Lorem,</p>
                        <p>USA</p>
                        <p>Phone:(00) 222 666 444</p>
                        <p>Fax: (000) 000 00 00 0</p>
                        <p>Email: <span>info(at)mycompany.com</span></p>
                        <p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!--footer1-->
    <div class="ftr-bg">
        <div class="wrap">
            <div class="footer">
                <div class="copy">
                    <p class="w3-link">© All Rights Reserved | Design by&nbsp; <a href="http://w3layouts.com/"> W3Layouts</a></p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
