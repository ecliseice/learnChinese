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

<div class="app">
    <header class="container">
        <nav id="header__menu_nav">
            <div class="menu_nav_logo">
                <a href="/">
                    <span style="color: #a9a9a9">LrnFckgLngg</span>
                </a>
            </div>
            <div id="menu_nav__nav-burger" data-toggle="collapse" data-target="header_nav">
                <span class="nav_icon"></span>
            </div>
            <div class="menu_nav__user_icon">
                <div data-toggle="collapse" data-target="user_menu" data-mouse="true">
                    <span class="user_icon__user_login open_menu" >login</span>
                    <span class="user_icon__list_arrow"></span>
                </div>
                <div class="user_icon__user_menu collapse" id="user_menu">
                    <ul>
                        <li><a href="user/logout">Мой прогресс</a></li>
                        <li><a href="user/logout">Выйти</a></li>
                    </ul>
                </div>
            </div>
            <ul class="menu_nav__nav nav collapse" id="header_nav">
                <li><a href="/learn" itemprop="url">Обучение</a></li>
                <li><a href="/games" itemprop="url">Игры</a></li>
                <li><a href="/some_page" itemprop="url">Что-то еще</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
        <?= $content ?>
    </main>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
