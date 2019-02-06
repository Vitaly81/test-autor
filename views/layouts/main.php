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
                    <h1><a href="<?= \yii\helpers\Url::to(['/site/index'])?>"><img src="/web/images/logo.png" alt=""></a></h1>
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
                        <li class='active'><a href='<?= \yii\helpers\Url::to(['/site/index'])?>'><span>Главная</span></a></li>
                        <li><a href='<?= \yii\helpers\Url::to(['/site/about'])?>'><span>О нас</span></a></li>
                        <li><a href='<?= \yii\helpers\Url::to(['/site/staff'])?>'><span>Штат сотрудников</span></a></li>
                        <li class='has-sub'><a href='<?= \yii\helpers\Url::to(['/site/services'])?>'><span>Услуги</span></a></li>
                        <li class='last'><a href='<?= \yii\helpers\Url::to(['/site/contact'])?>'><span>Контакты</span></a></li>
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

<div class="container">
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>
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
                        <p>Email: <span>info(at)www.altera-dn.ru</span></p>
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
                    <p class="w3-link">© All Rights Reserved&nbsp; <a href="http://www.altera-dn.ru"> Altera-DN</a></p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
